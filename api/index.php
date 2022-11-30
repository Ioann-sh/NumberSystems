<?php

error_reporting();
require 'application/Application.php';

function router($params){
    if ($params['number']){
        $app = new Application();
        return $app -> converter($params);
    }
    return false;
}

function answer($data){
    if ($data){
        return array(
            'result' => 'ok',
            'data' => $data
        );
    }
    return array(
        'result' => 'error'
    );
}

echo json_encode(answer(router($_GET)));