<?php
    ini_set('short_open_tag','on');
    
    if (!empty($_REQUEST['task'])) {
        $page = $_REQUEST['task'];
    } else {
        $page = 1;
    }
    
    function is_current($i, $page) {
        if ($i == $page) {
            echo "style=\"width: 29px;
                          height: 22px;
                          background-color: #98FB98;
                          border: 1px solid black; 
                          border-radius: 3px;\"";
        }
    }
    
    // *** Custom user fields *** //
    const TASKS = 4;
    const HOME_WORK_NUMBER = 8;
    
    const FILENAME = 'log.txt';
    
    const NAME_PATTERN = '/^[a-zа-я]+$/i';
    
    
    
    function _log($fname, $lname) {
      
        $fname = trim($fname);
        $lname = trim($lname);
        
        if (preg_match(NAME_PATTERN, $fname) != 1) {
            
            echo "<span style=\"color: red;\">ERROR: Incorrect First Name!</span>";
            
            return;
        }
        
        if (preg_match(NAME_PATTERN, $lname) != 1) {
            
            echo "<span style=\"color: red;\">ERROR: Incorrect Last Name!</span>";
            
            return;
        }
        
        $string = "--- ".date("d:m:Y G:i:s")." --- First name: " . $fname . " | Last name: " . $lname . "\r\n";
        
        $log_file = fopen(FILENAME, 'a+');
        
        fwrite($log_file, $string);
        
        fclose($log_file);
        
        echo "<form id='redirect'></form>";
        echo "<script type=\"text/javascript\">location = \"".$_SERVER['PHP_SELF']."\";</script>";
    }
    
    
    
    function _show_log() {
        
        echo "<hr>";
        
        $log_file = fopen(FILENAME, 'r');
        
        while (!feof($log_file)) {
            
            $string = fgets($log_file);
            
            echo $string , "<br>";
        }
        
        fclose($log_file);
    }
    
    
    
    function user_in_array($needle, $haystack) {
      
        $pattern = '/^' . $needle . '$/i';
        
        foreach ($haystack as $value) {
            
            if (preg_match($pattern, $value) === 1) {
                
                return true;
            }
        }
        
        return false;
    }
    
    
    
    function double_strong($string) {
        
        $pattern = '/[-a-zа-я_]+/i';
        
        preg_match_all($pattern, $string, $words);
        
        $words = $words[0];
        
        $changed = array();
        
        foreach ($words as $word) {
            
            if (!user_in_array($word, $changed)) {
                
                $changed[] = $word;
                
            } else {
                
                $changed[] = "<strong>" . $word . "</strong>";
            }
        }
        
        $result;
        
        foreach ($changed as $word) {
            
            $result = $result . $word . " ";
        }
        
        return $result;
    }
    
    
    
    function mark_down($string) {
        
        $pattern = '/(?<!\*)\*([^*]+)\*(?!\*)/i';
        $replace = '<em>\\1</em>';
        
        $string = preg_replace($pattern, $replace, $string);
        
        return $string;
    }
    
    
    
    function to_tokens($string) {
        
        $pattern = '/((?<=").+(?="))|([a-zа-я\']+(-[a-zа-я\']+)*)/i';
        
        $tokens = array();
        
        preg_match_all($pattern, $string, $tokens);
        
        $tokens = $tokens[0];
        
        $result;
        
        foreach($tokens as $key => $value) {
            
            if ($key == count($tokens) - 1) {
                
                $result = $result . $value;
                
            } else {
              
                $result = $result . $value . ",";
            }
        }
        
        return $result;
    }
?>

<html>
    <head>
        <title>Homework <?=HOME_WORK_NUMBER?></title>
        <meta charset="UTF-8">
        <style>
            .wraper {margin-left: 10px; margin-top: 5px;}
            .button_bar {display: inline-block; margin-left: 5px;}
            .button_bar_name {display: inline-block; margin-left: 20px; margin-right: 10px;}
            .task_body {margin-left: 15px; margin-top: 10px;}
            .control_element { display: inline-block; margin-left: 20px; }
        </style>
    </head>
    <body>
        <form action="?" method="POST">
            <input type="text" name="task" value="<?=$page?>" hidden>
            <div class="wrapper">
                <div class="button_bar_name">
                    Task:
                </div>
                <?for ($i = 1; $i <= TASKS; $i++):?>
                <input <?is_current($i, $page);?> class="button_bar" type="submit" name="task" value="<?=$i?>">
                <?endfor;?>
                <hr>
                <div class="task_body">
                    
                    <!-- ************   TASK 1   ************* -->
                    <?if ($page == 1):?>
                        
                        <h1>Заполните форму</h1>
                        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                        <div class="control_element">Имя:</div><input class="control_element" type="text" name="fname" value="<?=(isset($_REQUEST['fname'])) ? $_REQUEST['fname'] : Mike?>">
                        <p></p>
                        <div class="control_element">Фамилия:</div><input class="control_element" type="text" name="lname" value="<?=(isset($_REQUEST['lname'])) ? $_REQUEST['lname'] : Jagger?>">
                        <p></p>
                        <input class="control_element" name="submit" type="submit" value="Отправить!">
                        </form>
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                _log($_REQUEST['fname'], $_REQUEST['lname']);
                            }
                            
                            if (is_readable(FILENAME)) {
                              
                                _show_log();
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 2   ************* -->
                    <?if ($page == 2):?>
                    
                        <p>Выделение повторяющихся слов через < strong ></p>
                        
                        <p class="control_element">Enter text:</p>
                        
                        <input class="control_element" type="text" name="text_task_1" value="<?=(!empty($_REQUEST['text_task_1'])) ? $_REQUEST['text_task_1'] : 'Lorem lorem ipsum.'?>">
                        <input class="control_element" type="submit" name="submit" value="Handle">
                        
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                echo double_strong($_REQUEST['text_task_1']);
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 3   ************* -->
                    <?if ($page == 3):?>
                        
                        <p>MarkDown</p>
                        
                        <p class="control_element">Enter text:</p>
                        
                        <? $default_string_t2 = "It's *apple*. Apple is **green**." ?>
                        
                        <input style="width: 300px;" class="control_element" type="text" name="text_task_2" value="<?=(!empty($_REQUEST['text_task_2'])) ? $_REQUEST['text_task_2'] : $default_string_t2 ?>">
                        <input class="control_element" type="submit" name="submit" value="Handle">
                        
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                echo mark_down($_REQUEST['text_task_2']);
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 4   ************* -->
                    <?if ($page == 4):?>
                        
                        <p>Tokens</p>
                        
                        <p class="control_element">Enter text:</p>
                        
                        <? $default_string_t3 = "Okay google, let's start-and-end this--shit." ?>
                        
                        <input style="width: 300px;" class="control_element" type="text" name="text_task_3" value="<?=(!empty($_REQUEST['text_task_3'])) ? $_REQUEST['text_task_3'] : $default_string_t3 ?>">
                        <input class="control_element" type="submit" name="submit" value="Handle">
                        
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                echo to_tokens($_REQUEST['text_task_3']);
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                </div>
            </div>
        </form>
    </body>
</html>