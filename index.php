<?php

require_once("config/connection.php");
require_once("controller/ProfessorController.php");

$professor = new ProfessorController($conn);

$action = $_GET["action"] ?? "index";

switch($action){
    case "create":
        $professor->create();
        break;
    case "post":
        $professor->post();
        break;
    default:
        $professor->index();
        break;    
}