<?php

require_once("./config/connection.php");
require_once("./models/Aluno.php");

class AlunoController
{

    private $conn;
    private $model;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->model = new Aluno;
    }

    public function index()
    {
        $result = $this->model->getAll($this->conn);
        include("./views/alunos/index.php");
    }

    public function ViewPost()
    {
        include("./views/alunos/create.php");
    }

    public function ModelPost()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $turma_id = 2; // ALTERAR COM BASE EM TURMAS CRIADAS;

        $this->model->create($this->conn, $turma_id, $nome, $email, $telefone, $senha);
        header("Location: alunos.php");
    }

    public function ViewUpdate()
    {
        $id = $_GET['id'];
        $aluno = $this->model->find($this->conn, $id);

        include("./views/alunos/update.php");
    }

    public function ModelUpdate()
    {
        $id = $_POST["id"];
        $turma_id = $_POST['turma_id'];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        $senhaAntiga = $this->model->senhaUsuario($this->conn, $id);

        if (!empty($_POST['senha'])) {
            $senha = $_POST['senha'];
        } else {
            $senha = $senhaAntiga;
        }

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $this->model->update($this->conn, $id, $turma_id, $nome, $email, $telefone, $senha);
        header("location: alunos.php");
    }

    public function delete(){
        $id = $_GET["id"];
        $this->model->delete($this->conn, $id);

        header("location: alunos.php");
    }

}
