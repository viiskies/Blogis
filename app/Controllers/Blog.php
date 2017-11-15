<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
    {

        $adsModel = $this->model("AdsModel");
        $data['ads'] = $adsModel->get3banners();

        $blogModel = $this->model("BlogModel");        
        $data['postList'] = $blogModel->getAll();

        $data['page']['header'] = "Post List";

        $this->view("blog/list", $data);
    }


    public function search()
    {

        $adsModel = $this->model("AdsModel");
        $data['ads'] = $adsModel->get3banners();

        if (empty($_GET['query'])) {
            $this->index();
        } else {

            $blogModel = $this->model("BlogModel");
            $data['postList'] = $blogModel->getSearch(strtolower($_GET['query']));

            $data['page']['header'] = "Search results";

            $this->view("blog/list", $data);

        }
    }
}
