<?php

class PageModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // // Get all posts
    // public function allPosts(): array
    // {
    //     return $this->db->select("SELECT * FROM posts");
    // }    

    // Get page
    public function getPage(string $title): array
    {
        return $this->db->select("SELECT * FROM pages WHERE title = :title" , 
            ["title" => $title])[0];
    }

}
