<?
	if(preg_match($_REQUEST['regExp'], $_REQUEST['regTxt'])){
		echo json_encode("OK");
	}else{
		echo json_encode("Fail");
	}

