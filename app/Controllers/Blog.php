<?php
//template
// clickable post title
// banners
// search


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

    public function show(int $id = 1)    
    {

        $blogModel = $this->model('BlogModel');
        $data['post'] = $blogModel->getPost($id);
        // $data['post']['year'] = substr($data['post']['date'], 0, 4);

        $adsModel = $this->model("AdsModel");
        $data['ads'] = $adsModel->get3banners();

        $this->view("blog/page", $data);
    }


}
