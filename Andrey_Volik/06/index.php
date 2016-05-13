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
    const HOME_WORK_NUMBER = 6;
    
    // *** User's custom functions *** //
    
    function factorial($n) {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
    
    function hindu_calendar() {
        $first_day = date('N', mktime(0, 0, 0, date('n'), 1, date('Y')));
        $days_in_month = date('t');
        ?>
        
        <div style="border: 1px solid #696969;
                    border-radius: 5px; 
                    margin: 20px; 
                    padding: 15px; 
                    padding-right: 5px; 
                    padding-bottom: 5px; 
                    display: inline-block; 
                    width: 458;">
                    
            <div style="width: 447px; 
                        margin-bottom: 15px;">
                        
                <div style="display: inline-block; 
                            font-size: 30px; 
                            font-weight: bold; 
                            margin-left: 150px;">
                            
                    <?=date('F')?>
                    
                </div>
                
                <div style="display: inline-block; 
                            font-size: 30px; 
                            font-weight: bold; 
                            float: right; 
                            margin-right: 20px;">
                            
                    <?=date('Y')?>
                    
                </div>
                
                <hr>
                
            </div>
            
            <?for ($i = 1; $i < $first_day; $i++):?>
            
                <div style="width: 52px; 
                            height: 52px; 
                            margin-right: 10px; 
                            margin-bottom: 10px; 
                            display: inline-block;">
                            
                </div>
                
            <?endfor;?>
            
            <?for ($i = 1; $i <= $days_in_month; $i++):?>
            
                <div style="border: 1px solid #CFCFCF; 
                            border-radius: 5px; 
                            width: 50px; 
                            height: 50px; 
                            margin-right: 10px; 
                            margin-bottom: 10px; 
                            display: inline-block;
                            font-size: 20px;
                            position: relative;
                            <?if ((date('N', mktime(0,0,0,date('n'),$i)) == 6) or (date('N', mktime(0,0,0,date('n'),$i)) == 7)):?>
                                background-color: #FFFACD;
                            <?endif;?>
                            <?if (date('j') == $i):?>
                                background-color: #E1FFE1;
                            <?endif;?>
                            " class="day">
                    
                    <div style="position: absolute; 
                                <?if ($i < 10):?>
                                    left: 20px; 
                                    top: 14px;
                                <?endif;?>
                                <?if ($i >= 10):?>
                                    left: 14px; 
                                    top: 14px;
                                <?endif;?>
                                ">
                    <?=$i?>
                    </div>
                    
                </div>
                
            <?endfor;?>
        </div>
        <?
    }
    
    function random_x($n, $min, $max) {
        $ar_arcane = array();
        for ($i = 0; $i < $n; $i++) {
            $ar_arcane[] = rand($min, $max);
        }
        return $ar_arcane;
    }
    
    function interest_random() {
        $integer_part = rand(0,500);
        $fraction_part = '0.';
        $char_number = rand(0,3);
        
        for ($i = 1; $i <= $char_number; $i++) {
            $fraction_part .= rand(0,9);
        }
        
        return $integer_part + $fraction_part;
    }
    
    function interest_adjustment($array, $p) {
        if ($p < 0) {
            return 'error';
        } else {
            for ($i = 0; $i < count($array); $i++) {
                $array[$i] *= $p;
            }
            return $array;
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
            .x_class {display: inline-block; margin-right: 15px;}
            div.x_class{font-weight: bold;}
            .day:hover {border-color: #00FF00 !important;}
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
                        <div class="x_class">
                            Enter a number:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="100" name="n" value="5">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Factorial of ' <?=$_REQUEST['n']?> ':
                            </div>
                            <?
                                echo factorial($_REQUEST['n']);
                            ?>
                        <?endif;?>
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 2   ************* -->
                    <?
                        if ($page == 2) {
                            hindu_calendar();
                        }
                    ?>
                    <!-- ************************************* -->

                    <!-- ************   TASK 3   ************* -->
                    <?if ($page == 3):?>
                        <div class="x_class">
                            Array length:
                        </div>
                        <input style="padding-left: 10px;" class="x_class" type="number" step="1" min="1" max="100" name="n" value="20">
                        <p></p>
                        <div class="x_class">
                            MIN value:
                        </div>
                        <input style="margin-left: 10px; padding-left: 10px;" class="x_class" type="number" step="1" min="-1000" max="1000" name="min" value="-10">
                        <p></p>
                        <div class="x_class">
                            MAX value:
                        </div>
                        <input style="margin-left: 6px; padding-left: 10px;" class="x_class" type="number" step="1" min="-1000" max="1000" name="max" value="10">
                        <p></p>
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                $ar_random = random_x($_REQUEST['n'],$_REQUEST['min'],$_REQUEST['max']);
                                for ($i = 0; $i < count($ar_random); $i++) {
                                    echo "<div class=\"x_class\">".$ar_random[$i]."</div> ";
                                }
                            ?>
                        <?endif;?>
                    <?endif;?>
                    <!-- ************************************* -->
                    
                    <!-- ************   TASK 4   ************* -->
                    <?if ($page == 4):?>
                        <div class="x_class">
                            Array length:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="100" name="n" value="10">
                        <div class="x_class">
                            Interest adjustment:
                        </div>
                        <input class="x_class" type="number" step="0.1" min="-100" max="100" name="p" value="0.5">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Array:
                            </div>
                            <?
                                $ar_interest = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    $ar_interest[] = interest_random();
                                    echo "<div style=\"font-weight: normal;\" class=\"x_class\">".$ar_interest[$i]."</div> ";
                                }
                            ?>
                            <p></p>
                            <div class="x_class">
                                Interest adjustment:
                            </div>
                            <?=$_REQUEST['p']?>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                if (interest_adjustment($ar_interest, $_REQUEST['p']) != 'error') {
                                    $ar_interest = interest_adjustment($ar_interest, $_REQUEST['p']);
                                    for ($i = 0; $i < count($ar_interest); $i++) {
                                        echo "<div style=\"font-weight: normal;\" class=\"x_class\">".$ar_interest[$i]."</div> ";
                                    }
                                } else {
                                    echo "ERROR: Negative interest adjustment!";
                                }
                            ?>
                        <?endif;?>
                    <?endif;?>                     
                    <!-- ************************************* -->
                </div>
            </div>
        </form>
    </body>
</html>