<?php
	if ($_POST['regExp'] != '' && $_POST['text'] != '') {

		$pattern = $_POST['regExp'];
		$string = $_POST['text'];

		if ( preg_match($pattern, $string, $matches) ) {
			echo json_encode("Текст соответсвует регулярному выражению");	
		} else {
			echo json_encode("Текст НЕ соответсвует регулярному выражению");
		}
	}

	// /https?:\/\/\w+.[a-z]{2,}/
	// http://google.ru/mail/u/0/#inboxhttp://mail.ru/mail/u/0/#inbox