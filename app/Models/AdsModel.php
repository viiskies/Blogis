<?php

class AdsModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get 3 banners
    public function get3banners(): array
    {
        return $this->db->select("SELECT * FROM banners ORDER BY RAND() LIMIT 3");
    }





}
