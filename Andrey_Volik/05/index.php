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
    const TASKS = 7;
    const HOME_WORK_NUMBER = 5;
    
    
    // *** User functions *** //
    
    function no_more_clones(&$array) {
        $ar_match = array();
        for ($i = 0; $i < count($array); $i++) {
            if (!in_array($array[$i], $ar_match)) {
                $ar_match[] = $array[$i];
            }
        }
        $array = $ar_match;
    }
    
    function frost_attack(&$array) {
        $ice_block = array();
        for ($i = 0; $i < count($array); $i++) {
          if ($array[$i] < 0) {
              $ice_block[] = $array[$i];
              echo "<div style=\"color: red;\" class=\"x_class\">".$ice_block[count($ice_block) - 1]."</div> ";
              $ice_block[] = 0;
              echo "<div style=\"color: green;\" class=\"x_class\">".$ice_block[count($ice_block) - 1]."</div> ";
          } else {
              $ice_block[] = $array[$i];
              echo "<div class=\"x_class\">".$ice_block[count($ice_block) - 1]."</div> ";
          }
        }
        $array = $ice_block;
    }
    
    function MEGA_SORT(&$array) {
        $temp = null;
        for ($i = 0; $i < count($array); $i++) {
            $min = 1000;
            $index = null;
            $temp = $array[$i];
            for ($j = $i; $j < count($array); $j++) {
                if ($min >= $array[$j]) {
                    $min = $array[$j];
                    $index = $j;
                }
            }
            $array[$i] = $array[$index];
            $array[$index] = $temp;
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
                    
                    <!--*************   TASK 1   **************-->
                    <?if ($page == 1):?>
                        <div class="x_class">
                            Enter "n" for expression 1 + 4 + 7 + 10 + ... + n :
                        </div>
                        <input class="x_class" type="number" step="3" min="1" max="1000" name="n" value="25">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Result expression:
                            </div>
                            <div class="x_class">
                                <?
                                    $summ = 0;
                                    for ($i = 1; $i < $_REQUEST['n']; $i += 3) {
                                        $summ += $i;
                                        echo $i." + ";
                                    }
                                    $summ += $_REQUEST['n'];
                                    echo $_REQUEST['n']." = ".$summ;
                                ?>
                            </div>
                        <?endif;?>
                    <?endif;?>
                    <!------------------------------------------->
                    
                    <!--*************   TASK 2   **************-->
                    <?if ($page == 2):?>
                        <div class="x_class">
                            Number of elements:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="500" name="n" value="5">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                $ar_square = array();
                                for ($i = 1; $i <= $_REQUEST['n']; $i++) {
                                    $ar_square[$i] = pow($i, 2);
                                    echo $ar_square[$i]." ";
                                }
                            ?>
                        <?endif;?>
                    <?endif;?>
                    <!------------------------------------------->
                    
                    <!--*************   TASK 3   **************-->
                    <?if ($page == 3):?>
                        <div class="x_class">
                            Array length:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="1000" name="n" value="10">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                $ar_boolean = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    if (($i % 2) == 0) {
                                        $ar_boolean[] = 0;
                                        echo $ar_boolean[$i]." ";
                                    } else {
                                        $ar_boolean[] = 1;
                                        echo $ar_boolean[$i]." ";
                                    }
                                }
                            ?>
                        <?endif;?>
                    <?endif;?>
                    <!------------------------------------------->
                    
                    <!--*************   TASK 4   **************-->
                    <?if ($page == 4):?>
                        <div class="x_class">
                            Array length:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="1000" name="n" value="10">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Array:
                            </div>
                            <?
                                $ar_repeating = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    $ar_repeating[] = rand(1,10);
                                }
                                $repeating = 0;
                                $ar_match = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    if (!in_array($ar_repeating[$i],$ar_match)) {
                                        $ar_match[] = $ar_repeating[$i];
                                        echo $ar_repeating[$i]." ";
                                    } else {
                                        $repeating++;
                                        //<span> into echo
                                        echo "<span style=\"color: red\">$ar_repeating[$i]</span> ";
                                    }
                                }
                            ?>
                            <p></p>
                            <div class="x_class">
                                Number of repeating elements:
                            </div>
                            <?=" ".$repeating?>
                        <?endif;?>
                    <?endif;?>
                    <!------------------------------------------->
                    
                    <!--*************   TASK 5   **************-->
                    <?if ($page == 5):?>
                        <div class="x_class">
                            Array length:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="1000" name="n" value="10">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Array:
                            </div>
                            <?
                                $ar_repeating = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    $ar_repeating[] = rand(1,10);
                                }
                                $repeating = 0;
                                $ar_match = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    if (!in_array($ar_repeating[$i], $ar_match)) {
                                        $ar_match[] = $ar_repeating[$i];
                                        echo $ar_repeating[$i]." ";
                                    } else {
                                        $repeating++;
                                        //<span> into echo
                                        echo "<span style=\"color: red\">$ar_repeating[$i]</span> ";
                                    }
                                }
                            ?>
                            <p></p>
                            <div class="x_class">
                                Number of repeating elements:
                            </div>
                            <?=" ".$repeating?>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                no_more_clones($ar_repeating);
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    echo $ar_repeating[$i]." ";
                                }
                            ?>
                        <?endif;?>
                    <?endif;?>
                    <!------------------------------------------->
                    
                    <!--*************   TASK 6   **************-->
                    <?if ($page == 6):?>
                        <div class="x_class">
                            Array length:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="200" name="n" value="10">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Array:
                            </div>
                            <?
                                $ar_sub_zero = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    $ar_sub_zero[] = rand(-10,10);
                                    if ($ar_sub_zero[$i] < 0) {
                                        echo "<div style=\"color: red;\" class=\"x_class\">".$ar_sub_zero[$i]."</div> ";
                                    } else {
                                        echo "<div class=\"x_class\">".$ar_sub_zero[$i]."</div> ";
                                    }
                                }
                                
                            ?>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                // Showing on screen inside function
                                frost_attack($ar_sub_zero);
                            ?>
                        <?endif;?>
                    <?endif;?>
                    <!------------------------------------------->
                    
                    <!--*************   TASK 7   **************-->
                    <?if ($page == 7):?>
                        <div class="x_class">
                            Array length:
                        </div>
                        <input class="x_class" type="number" step="1" min="1" max="200" name="n" value="20">
                        <input style="width: 75px;" class="x_class" type="submit" name="submit" value="Go">
                        <?if (!empty($_REQUEST['submit'])):?>
                            <p></p>
                            <div class="x_class">
                                Array:
                            </div>
                            <?
                                $archimed = array();
                                for ($i = 0; $i < $_REQUEST['n']; $i++) {
                                    $archimed[] = rand(-100,100);
                                    echo "<div class=\"x_class\">".$archimed[$i]."</div> ";
                                }
                                $archimed_2 = $archimed;
                            ?>
                            <p></p>
                            <div class="x_class">
                                First method: Using standart function.
                            </div>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                sort($archimed);
                                for ($i = 0; $i < count($archimed); $i++) {
                                    echo "<div class=\"x_class\">".$archimed[$i]."</div> ";
                                }
                            ?>
                            <p></p>
                            <div class="x_class">
                                Second method: Without standart functions.
                            </div>
                            <p></p>
                            <div class="x_class">
                                Result array:
                            </div>
                            <?
                                MEGA_SORT($archimed_2);
                                for ($i = 0; $i < count($archimed_2); $i++) {
                                    echo "<div class=\"x_class\">".$archimed_2[$i]."</div> ";
                                }
                            ?>
                        <?endif;?>
                    <?endif;?>
                    <!------------------------------------------->
                    
                </div>
            </div>
        </form>
    </body>
</html>