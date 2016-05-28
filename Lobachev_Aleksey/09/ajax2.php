<?php
$arRes = [];
preg_match_all($_REQUEST['regExp'], $_REQUEST['regTxt'], $arRes);
echo json_encode($arRes);
?>