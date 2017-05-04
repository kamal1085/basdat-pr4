<?php

class Controller
{

    public $db = null;


    public $model = null;


    function __construct()
    {
       // $this->openDatabaseConnection();
        $this->loadModel();
    }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {

        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);

    }

    /**
     * Loads the "model".
     * @return object model
     */
    public function loadModel()
    {
        require APP . 'models/model.php';
        // create new "model" (and pass the database connection)
        $this->model = new Model($this->db);
    }
}
