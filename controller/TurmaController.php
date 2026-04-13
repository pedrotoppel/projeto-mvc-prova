<?php

require_once("./models/Turma.php");
require_once("./config/connection.php");

class TurmaController{

    private $model;
    private $conn;

    public function __construct($conn)
    {
        $this->model = new Turma();
        $this->conn = $conn;
    }

    public function index(){
        $result = $this->model->getAll($this->conn);

        include("./views/turmas/index.php");
    }

    public function ViewPost(){
        include("./views/turmas/create.php");
    }

    public function ModelPost(){
        $nome = $_POST['nome'];
        $curso_id = $_POST['curso_id'];
        $this->model->create($this->conn, $nome, $curso_id);

        header("location: turmas.php");
    }

    public function ViewUpdate(){
        $id = $_GET["id"];
        $turma = $this->model->find($this->conn, $id);

        include("./views/turmas/update.php");
    }

    public function ModelUpdate(){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $curso_id = $_POST["curso_id"];

        $this->model->update($this->conn, $nome, $curso_id, $id);
        header("location: turmas.php");
    }

    public function delete(){
        $id = $_GET["id"];

        $this->model->delete($this->conn, $id);
        header("location: turmas.php");
    }

}