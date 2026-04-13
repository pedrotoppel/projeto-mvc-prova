<?php

require_once("config/connection.php");
require_once("controller/TurmaController.php");

$turma = new TurmaController($conn);

$action = $_GET["turma"] ?? "index";

switch($action){
    // create
    case "viewpost":
        $turma->ViewPost();
        break;
    case "modelpost":
        $turma->ModelPost();
        break;
    // update
    case "viewupdate":
       $turma->ViewUpdate();
       break;
    case "modelupdate":
        $turma->ModelUpdate();
        break;
    // delete
    case "delete":
        $turma->delete();
        break;    
    // read    
    default:
        $turma->index();
        break;    
}