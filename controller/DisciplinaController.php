<?php

require_once("./models/Disciplina.php");
require_once("./config/connection.php");

class DisciplinaController{

    private $model;
    private $conn;

    public function __construct($conn)
    {
        $this->model = new Disciplina();
        $this->conn = $conn;
    }

    public function index(){
        $result = $this->model->getAll($this->conn);
        include("./views/disciplinas/index.php");
    }

    public function ViewPost(){
        include("./views/disciplinas/create.php");
    }

    public function ModelPost(){
        $nome = $_POST["nome"];
        $professor_id = $_POST["professor_id"];
        $turma_id = $_POST["turma_id"];

        $this->model->create($this->conn, $nome, $professor_id, $turma_id);
        header("location: disciplinas.php");
    }

    public function ViewUpdate(){
        $id = $_GET["id"];
        $disciplina = $this->model->find($this->conn, $id);

        include("./views/disciplinas/update.php");

    }

    public function ModelUpdate(){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $professor_id = $_POST["professor_id"];
        $turma_id = $_POST["turma_id"];

        $this->model->update($this->conn, $nome, $professor_id, $turma_id, $id);
        header("location: disciplinas.php");
    }

    public function delete(){
        $id = $_GET["id"];
        $this->model->delete($this->conn, $id);
        header("location: disciplinas.php");
    }

}