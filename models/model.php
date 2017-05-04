<?php

class Model
{

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all songs from database
     */
    public function getAllPengguna()
    {
        $sql = "SELECT * FROM pengguna";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}
