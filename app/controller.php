<?php

class Controller
{
    public $db = null;
    public $model = null;

    function __construct()
    {
        $this->ConnectToDB();
        $this->ModelLoad();
    }

    private function ConnectToDB()
    {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOSTNAME . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USERNAME, DB_PASSWORD, $options);
    }

    public function ModelLoad()
    {
        require APP . 'model.php';

        $this->model = new Model($this->db);
    }
}
