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
        return $this->db->select("SELECT * FROM posts");
    }

    // Get all posts
    public function getPost($id): array
    {
        return $this->db->select("SELECT * FROM posts WHERE id = :id" , 
            ["id" => $id])[0];
    }

}
