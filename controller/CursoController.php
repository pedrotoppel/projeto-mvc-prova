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
        $result = $this->model->getAll($this->conn);
        include("./views/cursos/index.php");
    }

    public function ViewPost(){
        include("./views/cursos/create.php");
    }

    public function ModelPost(){
        $nome = $_POST["nome"];
        $area_id = $_POST["area_id"];

        $this->model->create($this->conn, $nome, $area_id);
        
        header("location: cursos.php");
    }

    public function ViewUpdate(){
        $id = $_GET["id"];
        $curso = $this->model->find($this->conn, $id);
        include("./views/cursos/update.php");
    }

    public function ModelUpdate(){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $area_id = $_POST["area_id"];

        $this->model->update($this->conn, $nome, $area_id, $id);
        header("location: cursos.php");
    }

    public function delete(){
        $id = $_GET["id"];
        $this->model->delete($this->conn, $id);
        header("location: cursos.php");
    }

}