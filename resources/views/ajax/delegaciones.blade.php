<?php

$text_json = array();
foreach($delegaciones as $delegacion){
    $text_json[] = array("value" => $delegacion->id , "text" => $delegacion->descripcion);
}
echo json_encode($text_json);