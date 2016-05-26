﻿<?php
if(isset($_POST)){

    if($_POST['button'] == 'check'){
        if(preg_match($_POST['pattern'],$_POST['text'])){
            echo 'Текст соответсвует регулярному выражению!';
            //$arr = array('status' => 'Текст соответсвует регулярному выражению');
            //echo json_encode($arr,JSON_UNESCAPED_UNICODE);
        }else{
            echo 'Текст НЕ соответсвует регулярному выражению!';
            //$arr = array('status' => 'Текст НЕ соответсвует регулярному выражению');
            //echo json_encode($arr,JSON_UNESCAPED_UNICODE);
        }

    }elseif ($_POST['button'] == 'apply'){

        preg_match_all($_POST['pattern'], $_POST['text'], $email);
        $arr = array('status'    => '','res'   => $email[0]);
		$emaillist = implode(',',$email[0]);
        echo $emaillist;

    }
}
?>