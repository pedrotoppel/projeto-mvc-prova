<?php

    require_once("./config/connection.php");
    require_once("./models/Professor.php");

    class ProfessorController{
        
        private $model;
        private $conn;

        public function __construct($conn){
            $this->model = new Professor();
            $this->conn = $conn;
        }

        public function index(){
            $result = $this->model->getAll($this->conn);
            include("./views/professores/index.php");
        }

        public function ViewPost(){
            include("./views/professores/create.php");
        }

        public function ModelPost(){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

            $this->model->create($this->conn, $nome, $email, $senha);
            header("location: professores.php");
        }

         public function ViewUpdate(){
            $id = $_GET["id"];
            $professor = $this->model->find($this->conn, $id);
            include("./views/professores/update.php");
        }

        public function ModelUpdate(){
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            $senhaAntiga = $this->model->senhaUsuario($this->conn, $id);

            if(!empty($_POST['senha'])){
                $senha = $_POST['senha'];
            }else{
                $senha = $senhaAntiga;
            }

            $senha = password_hash($senha, PASSWORD_DEFAULT);
            
            $this->model->update($this->conn, $id, $nome, $email, $senha);
            header("location: professores.php");
        }

        public function delete(){
            $id = $_GET['id'];
            $this->model->delete($this->conn, $id);
            header("location: professores.php");
        }



    }