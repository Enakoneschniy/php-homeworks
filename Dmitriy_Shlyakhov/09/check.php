<?php

$regExp = $_REQUEST['regExp'];
$customText = $_REQUEST['customText'];
$arErrors = [];

if(!preg_match($regExp, $customText)){
    $arErrors = 'regEdit';
}

if(count($arErrors) > 0){
    echo json_encode($arErrors);
}else{
    echo json_encode("OK");
}


