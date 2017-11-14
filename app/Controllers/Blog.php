<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
    {

        $blogModel = $this->model("BlogModel");
        $data['postList'] = $blogModel->getAll();
        $this->view("blog/list", $data);

    }

    public function show(int $id = 1)    
    {

        $blogModel = $this->model('BlogModel');
        $data['post'] = $blogModel->getPost($id);

        $this->view("blog/page", $data);
    }


}
