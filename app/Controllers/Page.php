<?php

use uFrame\Controller;

class Page extends Controller
{

    public function index()
    {
        $this->show("Home");
    }

    public function show(string $page_name = "Home")
    {
        // echo 'This is PAGE/' . $page_name;

        $pageModel = $this->model('PageModel');
        $data['page'] = $pageModel->getPage($page_name);

        $adsModel = $this->model("AdsModel");
        $data['ads'] = $adsModel->get3banners();

        $data['body'] = "Be nice - say Hi!";
        $data['header'] = "Hello World";

        $this->view("page", $data);

    }

}
