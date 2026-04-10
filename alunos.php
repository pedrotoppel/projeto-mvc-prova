<?php

require_once("config/connection.php");
require_once("controller/AlunoController.php");

$aluno = new AlunoController($conn);

$action = $_GET["aluno"] ?? "index";

switch($action){
    // create
    case "viewpost":
        $aluno->ViewPost();
        break;
    case "modelpost":
       $aluno->ModelPost();
        break;
    // update
    case "viewupdate":
       $aluno->ViewUpdate();
       break;
    case "modelupdate":
        $aluno->ModelUpdate();
        break;
    // delete
    case "delete":
        $aluno->delete();
        break;    
    // read    
    default:
        $aluno->index();
        break;    
}