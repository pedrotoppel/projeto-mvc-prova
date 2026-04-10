<?php

require_once("config/connection.php");
require_once("controller/ProfessorController.php");

$professor = new ProfessorController($conn);

$action = $_GET["action"] ?? "index";

switch($action){
    // create
    case "viewpost":
        $professor->ViewPost();
        break;
    case "modelpost":
        $professor->ModelPost();
        break;
    // update
    case "viewupdate":
        $professor->ViewUpdate();
        break;
    case "modelupdate":
        $professor->ModelUpdate();
        break;
    // delete
    case "delete":
        $professor->delete();
        break;    
    // read    
    default:
        $professor->index();
        break;    
}