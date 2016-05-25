<?php

$text = 'gladerus@gmail.com rsgkesgewgwemomjkmlwewefwefwefm;lmomwefwef dherherg admin@gmail.com ewegtewt 3t wegergerg';

preg_match_all("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i", $text, $email);
print_r($email[0]);


