<?php

$text_json = array();
foreach($empresas as $empresa){
    $text_json[] = array("value" => $empresa->id , "text" => $empresa->descripcion);
}
echo json_encode($text_json);