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
            include("./views/professores/index.php");
        }

        public function create(){
            include("./views/professores/create.php");
        }

        public function post(){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

            $this->model->create($this->conn, $nome, $email, $senha);
            header("location: index.php");
        }



    }