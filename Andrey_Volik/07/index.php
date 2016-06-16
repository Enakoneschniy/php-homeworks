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
    const HOME_WORK_NUMBER = 7;
    
    
    
    function natural_counter($number) {
        
        if ($number > 1) {
            
            natural_counter ($number - 1);
        }
        
        echo $number , " ";
    }
    
    
    function a_b_counter($a, $b) {
      
        echo $a , " ";
        
        if ($a < $b) {
            
            a_b_counter($a + 1, $b);
        }
        
        if ($a > $b) {
            
            a_b_counter($a - 1, $b);
        }
    }
    
    
    function is_perfect_power($n) {
        
        if ($n < 2) {
            
            return "NO";
        }
        
        if ($n == 2) {
            
            return "YES";
        }
        
        return is_perfect_power($n / 2);
    }
    
    
    function cut_number($n) {
      
        echo $n % 10 , " ";
      
        if ($n > 10) {
            
            cut_number(floor($n / 10));
        }
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
                        
                        <p class="control_element">Enter a number:</p>
                        
                        <input class="control_element" type="number" min="1" max="100" step="1" name="number_task_1" value="<?=(!empty($_REQUEST['number_task_1'])) ? $_REQUEST['number_task_1'] : 5?>">
                        <input class="control_element" type="submit" name="submit" value="Show">
                        
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                natural_counter($_REQUEST['number_task_1']);
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 2   ************* -->
                    <?if ($page == 2):?>
                        
                        <p class="control_element">Enter A:</p>
                        
                        <input class="control_element" type="number" min="-100" max="100" step="1" name="number_a" value="<?=(isset($_REQUEST['number_a'])) ? $_REQUEST['number_a'] : -3?>">
                        
                        <p class="control_element">Enter B:</p>
                        
                        <input class="control_element" type="number" min="-100" max="100" step="1" name="number_b" value="<?=(isset($_REQUEST['number_b'])) ? $_REQUEST['number_b'] : 16?>">
                        <input class="control_element" type="submit" name="submit" value="Show">
                        
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                a_b_counter($_REQUEST['number_a'], $_REQUEST['number_b']);
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 3   ************* -->
                    <?if ($page == 3):?>
                        
                        <p class="control_element">Enter a number:</p>
                        
                        <input class="control_element" type="number" min="1" max="10000" step="1" name="number_task_3" value="<?=(!empty($_REQUEST['number_task_3'])) ? $_REQUEST['number_task_3'] : 1024?>">
                        <input class="control_element" type="submit" name="submit" value="Show">
                        
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                echo is_perfect_power($_REQUEST['number_task_3']);
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 4   ************* -->
                    <?if ($page == 4):?>
                        
                        <p class="control_element">Enter a number:</p>
                        
                        <input class="control_element" type="number" min="1" step="1" name="number_task_4" value="<?=(!empty($_REQUEST['number_task_4'])) ? $_REQUEST['number_task_4'] : 327648?>">
                        <input class="control_element" type="submit" name="submit" value="Show">
                        
                        <p></p>
                        
                        <?php
                            
                            if (!empty($_REQUEST['submit'])) {
                                
                                cut_number($_REQUEST['number_task_4']);
                            }
                            
                        ?>
                        
                    <?endif;?>
                    <!-- ************************************* -->
                </div>
            </div>
        </form>
    </body>
</html>