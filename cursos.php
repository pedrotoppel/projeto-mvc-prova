<?php

require_once("config/connection.php");
require_once("controller/CursoController.php");

$curso = new CursoController($conn);

$action = $_GET["curso"] ?? "index";

switch($action){
    // create
    // case "viewpost":
    //     $aluno->ViewPost();
    //     break;
    // case "modelpost":
    //    $aluno->ModelPost();
    //     break;
    // // update
    // case "viewupdate":
    //    $aluno->ViewUpdate();
    //    break;
    // case "modelupdate":
    //     $aluno->ModelUpdate();
    //     break;
    // // delete
    // case "delete":
    //     $aluno->delete();
    //     break;    
    // read    
    default:
        $curso->index();
        break;    
}