<?php

require_once("./models/Curso.php");
require_once("./config/connection.php");

class CursoController{

    private $conn;
    private $model;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->model = new Curso();
    }

    public function index(){
        include("./views/cursos/index.php");
    }


}