<?php

require_once("config/connection.php");
require_once("controller/DisciplinaController.php");

$disciplina = new DisciplinaController($conn);

$action = $_GET["disciplina"] ?? "index";

switch($action){
    // create
    case "viewpost":
        $disciplina->ViewPost();
        break;
    case "modelpost":
        $disciplina->ModelPost();
        break;
    // update
    case "viewupdate":
       $disciplina->ViewUpdate();
       break;
    case "modelupdate":
        $disciplina->ModelUpdate();
        break;
    // delete
    case "delete":
        $disciplina->delete();
        break;    
    // read    
    default:
        $disciplina->index();
        break;    
}