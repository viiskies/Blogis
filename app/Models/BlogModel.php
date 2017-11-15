<?php

class BlogModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all posts
    public function getAll(): array
    {
        return $this->db->select("SELECT *, SUBSTRING(body, 1, 200) AS excerpt FROM posts");
    }

    // Get post
    // public function getPost($id): array
    // {
    //     return $this->db->select("SELECT * FROM posts WHERE id = :id" , 
    //         ["id" => $id])[0];
    // }    

    // Get post with limited character length
    public function getPost($id): array
    {
        return $this->db->select("SELECT *, SUBSTRING(body, 1, 50) AS excerpt FROM posts WHERE id = :id", 
            ["id" => $id])[0];
    }

    // Get post with limited character length
    public function getSearch($qsss): array
    {
        return $this->db->select("SELECT * FROM posts WHERE LOWER(body) LIKE ? OR LOWER(title) LIKE ?", 
            ["%$qsss%", "%$qsss%"]);
    }

}
 