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
    const TASKS = 1;
    const HOME_WORK_NUMBER = 9;
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
            #result_container { margin-top: 20px; margin-left: 20px; }
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
                    
                        <? $default_regular = '/[a-zа-я_]+/i' ?>
                        <? $default_text_value = 'It\'s my homework number8 06758' ?>
                        
                        <p class="control_element">Enter a regular expression:</p>
                        
                        <input id="reg_exp" style="width: 600px;" class="control_element" type="text" name="regular" value="<?=(!empty($_REQUEST['regular'])) ? $_REQUEST['regular'] : $default_regular ?>">
                        
                        <p class="control_element">Enter a text:</p>
                        
                        <input id="txt_val" style="width: 600px;" class="control_element" type="text" name="text_value" value="<?=(!empty($_REQUEST['text_value'])) ? $_REQUEST['text_value'] : $default_text_value ?>">
                        
                        <p></p>
                        
                        <input id="check" style="width: 100px; margin-left: 0px;" class="control_element" type="submit" name="check" value="Check">
                        <input id="accept" style="width: 100px;" class="control_element" type="submit" name="accept" value="Accept">
                        
                        <p></p>
                        
                        <hr>
                        
                        <div id="result_container"></div>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                </div>
            </div>
        </form>
        <script type="text/javascript">
        
            function ajax_request(url, content, callback) {
              
                // Inside callback function you have 'ajax_response' with response text.
                
                var request = new XMLHttpRequest();
                
                request.open('POST', url);
                
                request.setRequestHeader('Content-type', 'application/json; charset=utf-8');
                
                var request_body = JSON.stringify(content);
                
                request.onreadystatechange = function() {
                    
                    if (this.readyState != 4) {
                        return;
                    }
                    
                    if (this.status != 200) {
                        
                        var ajax_response = 'ERROR: ' + this.status;
                        return;
                    }
                    
                    var ajax_response = JSON.parse(this.responseText);
                    
                    callback(ajax_response);
                }
                
                request.send(request_body);
            }
            
            function check_handler(e) {
              
                e.preventDefault();
                
                ajax_request('preg.php', {
                    action: 'check',
                    regular: reg_exp.value,
                    text_value: txt_val.value
                }, function(ajax_response) {
                    alert(ajax_response);
                });
            }
            
            function accept_handler(e) {
                
                e.preventDefault();
                
                ajax_request('preg.php', {
                    action: 'eject',
                    regular: reg_exp.value,
                    text_value: txt_val.value
                }, function (ajax_response) {
                    result_container.innerHTML = ajax_response;
                });
                
            }
            
            accept.addEventListener('click', accept_handler);
            check.addEventListener('click', check_handler);
            
        </script>
    </body>
</html>