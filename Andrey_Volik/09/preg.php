<?php

    function test_connection() {
      
        global $HTTP_RAW_POST_DATA;
      
        echo $HTTP_RAW_POST_DATA;
        
        $log_file = fopen('log.txt', 'a+');
        
        $log_message = "Connected: " . date("d:m:Y G:i:s") . " | Message: " . $HTTP_RAW_POST_DATA;
        
        $log_message .= "\r\n";
        
        fwrite($log_file, $log_message);
        
        fclose($log_file);
    }
    
    function test_object($object) {
        
        ob_start();
        
        var_dump($object);
        
        $result = ob_get_clean();
        
        echo json_encode($result);
    }
    
    function _echo($answer) {
        
        echo json_encode($answer);
    }
    
    
    
    
    $request = json_decode($HTTP_RAW_POST_DATA);
    
    if ($request->action == 'check') {
        
        if (preg_match($request->regular, $request->text_value) === 1) {
            
            _echo('Текст соответствует регулярному выражению');
            
        } else {
            
            _echo('Текст НЕ соответствует регулярному выражению');
        }
    }
    
    if ($request->action == 'eject') {
        
        preg_match_all($request->regular, $request->text_value, $matches);
        
        $matches = $matches[0];
        
        $string;
        
        foreach ($matches as $value) {
            
            $string .= $value . " ";
        }
        
        _echo($string);
    }
?>