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

        $this->view("page", $data);

        // $data['header'] = "Hello World";
        // $data['body'] = "Be nice - say Hi!";
    }

}
