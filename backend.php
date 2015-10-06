<?php

    $cantones = array
    (
        "1" => ["1"=>"Osa", "2"=>"Puntarenas"],
        "2" => ["1"=>"Moravia", "2"=>"Escazu"]

    );
    
    $idProvincia = $_GET["idProvincia"];
    if(isset($idProvincia))
    {
        echo json_encode($cantones[$idProvincia]);
    }
?>