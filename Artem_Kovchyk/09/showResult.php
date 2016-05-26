<?php
	if ($_POST['regExp'] != '' && $_POST['text'] != '') {

		$pattern = $_POST['regExp'];
		$string = $_POST['text'];

		if ( preg_match_all($pattern, $string, $matches) ) {
			echo json_encode($matches);	
		} else {
			exit();
		}
	}

	// /https?:\/\/\w+.[a-z]{2,}/
	// http://google.ru/mail/u/0/#inboxhttp://mail.ru/mail/u/0/#inbox