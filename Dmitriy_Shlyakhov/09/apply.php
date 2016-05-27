<?php

$regExp = $_REQUEST['regExp'];
$customText = $_REQUEST['customText'];
$arRes = [];
preg_match_all($regExp, $customText, $arRes);
echo json_encode($arRes);