<?php
    ini_set('short_open_tag','on');
?>

<?
      if (!empty($_REQUEST[tab])) {
          $tab = $_REQUEST[tab];
      } else {
          $tab = 'C';
      }
  ?>
  
  <?
      class circle
      {
        public $type = 1;
        public $id = null;
        public $x = null;
        public $y = null;
        public $radius = null;
        public $angle_1 = null;
        public $angle_2 = null;
      }
      
      class rectangle
      {
        public $type = 2;
        public $id = null;
        public $x1 = null;
        public $y1 = null;
        public $x2 = null;
        public $y2 = null;
      }
      
      class polygon
      {
        public $type = 3;
        public $id = null;
        public $x = array();
        public $y = array();
      }
  ?>
  
  <?
      $id_counter = 0;
      $field = array();
      if (($_POST[1] == 'begin_data') and (empty($_POST[clear]))) {
          $constructor = 2;
          do {
              if ($_POST[$constructor] == 1) {
                  $constructor = $constructor + 1;
                  $new_id = $id_counter + 1;
                  $field[$new_id] = new circle();
                  $field[$new_id]->id = $new_id;
                  $field[$new_id]->x = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $field[$new_id]->y = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $field[$new_id]->radius = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $field[$new_id]->angle_1 = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $field[$new_id]->angle_2 = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $id_counter = $id_counter + 1;
              }
              if ($_POST[$constructor] == 2) {
                  $constructor = $constructor + 1;
                  $new_id = $id_counter + 1;
                  $field[$new_id] = new rectangle();
                  $field[$new_id]->id = $new_id;
                  $field[$new_id]->x1 = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $field[$new_id]->y1 = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $field[$new_id]->x2 = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $field[$new_id]->y2 = $_POST[$constructor];
                  $constructor = $constructor + 1;
                  $id_counter = $id_counter + 1;
              }
              if ($_POST[$constructor] == 3) {
                  $constructor = $constructor + 1;
                  $new_id = $id_counter + 1;
                  $field[$new_id] = new polygon();
                  $field[$new_id]->id = $new_id;
                  for ($i = 1; $i <=5; $i++) {
                      $field[$new_id]->x[$i] = $_POST[$constructor];
                      $constructor = $constructor + 1;
                      $field[$new_id]->y[$i] = $_POST[$constructor];
                      $constructor = $constructor + 1;
                  }
                  $id_counter = $id_counter + 1;
              }
          } while ($_POST[$constructor] != 'end_data');
      }
  ?>
  
  <?
      if (!empty($_POST[create])) {
          if ($tab == 'C') {
              $new_id = $id_counter + 1;
              $field[$new_id] = new circle();
              $field[$new_id]->id = $new_id;
              $field[$new_id]->x = $_POST[x];
              $field[$new_id]->y = $_POST[y];
              $field[$new_id]->radius = $_POST[radius];
              $field[$new_id]->angle_1 = $_POST[angle_1];
              $field[$new_id]->angle_2 = $_POST[angle_2];
              $id_counter = $id_counter + 1;
          }
          if ($tab == 'R') {
              $new_id = $id_counter + 1;
              $field[$new_id] = new rectangle();
              $field[$new_id]->id = $new_id;
              $field[$new_id]->x1 = $_POST[x1];
              $field[$new_id]->y1 = $_POST[y1];
              $field[$new_id]->x2 = $_POST[x2];
              $field[$new_id]->y2 = $_POST[y2];
              $id_counter = $id_counter + 1;
          }
          if ($tab == 'P') {
              $new_id = $id_counter + 1;
              $field[$new_id] = new polygon();
              $field[$new_id]->id = $new_id;
              for ($i = 1; $i <=5; $i++) {
              $field[$new_id]->x[$i] = $_POST['x'.$i];
              $field[$new_id]->y[$i] = $_POST['y'.$i];
              }
              $id_counter = $id_counter + 1;
          }
      }
  ?>

  <?function pixel($x, $y, $color) {?>
    <div style="position: absolute; 
                left: <?=$x?>; 
                top: <?=$y?>; 
                background-color: <?=$color?>; 
                width: 1px; 
                height: 1px;">
    </div>
  <?}?>
  
  <?function rect($x1, $y1, $x2, $y2, $color) {?>
    <div style="position: absolute;
                left: <?=$x1?>;
                top: <?=$y1?>;
                border: 1px solid <?=$color?>;
                width: <?=$x2 - $x1?>;
                height: <?=$y2 - $y1?>;
                <?if (($x2 - $x1) == 0):?>
                  border-right: 0px;
                <?endif;?>
                <?if (($y2 - $y1) == 0):?>
                  border-bottom: 0px;
                <?endif;?>
                ">
    </div>
  <?}?>
  
  <?
      function line($x1, $y1, $x2, $y2, $color) {
              $height = abs($y2 - $y1);
              $width = abs($x2 - $x1);
              if (($height != 0) and ($width != 0)) {
                  if ($y2 > $y1) { $y_mod = 1; } elseif ($y1 > $y2) { $y_mod = -1; };
                  if ($x2 > $x1) { $x_mod = 1; } elseif ($x1 > $x2) { $x_mod = -1; };
                  if ($height >= $width) { $y_freq = 1; $length = $height; };
                  if ($width >= $height) { $x_freq = 1; $length = $width; };
                  if ($y_freq != 1) { $y_freq = $width / $height; };
                  if ($x_freq != 1) { $x_freq = $height / $width; };
                  $y_cur = $y1;
                  $x_cur = $x1;
                  $y_freq_cur = floor($y_freq);
                  $x_freq_cur = floor($x_freq);
                  $counter = 0;
                  $balance = 0;
                  $led = 0;
                  for ($i = 0; $i <= $length; $i++) {
                      pixel($x_cur, $y_cur, $color);
                      if ($y_freq == 1) {
                          $y_cur = $y_cur + $y_mod;
                          if (is_int($x_freq)) {
                            if ($i % $x_freq_cur == 0) { $x_cur = $x_cur + $x_mod;};
                          } else {
                            $counter = $counter + 1;
                            if ($balance >= 1) {
                              $x_freq_cur = $x_freq_cur + 1;
                              $balance = $balance - 1;
                              $led = 1;
                            }
                            if ($counter == $x_freq_cur) {
                              $x_cur = $x_cur + $x_mod;
                              if ($led == 1) {
                                $x_freq_cur = $x_freq_cur - 1;
                                $led = 0;
                              }
                              $balance = $balance  + ($x_freq - $x_freq_cur);
                              $counter = 0;
                            }
                          }
                      } elseif ($x_freq == 1) {
                          $x_cur = $x_cur + $x_mod;
                          if (is_int($y_freq)) {
                            if ($i % $y_freq_cur == 0) { $y_cur = $y_cur + $y_mod; };
                          } else {
                            $counter = $counter + 1;
                            if ($balance >= 1) {
                              $y_freq_cur = $y_freq_cur + 1;
                              $balance = $balance - 1;
                              $led = 1;
                            }
                            if ($counter == $y_freq_cur) {
                              $y_cur = $y_cur + $y_mod;
                              if ($led == 1) {
                                $y_freq_cur = $y_freq_cur - 1;
                                $led = 0;
                              }
                              $balance = $balance + ($y_freq - $y_freq_cur);
                              $counter = 0;
                            }
                          }
                      }
                  }   
              } else {
                  if ($height == 0) {
                      if ($x2 > $x1) {
                          rect($x1, $y1, $x2, $y2, $color);
                      } elseif ($x1 > $x2) {
                          rect($x2, $y1, $x1, $y2, $color);
                      } else { pixel ($x1, $y1, $color); 
                      }
                  }
                  if ($width == 0) {
                      if ($y2 > $y1) {
                          rect($x1, $y1, $x2, $y2, $color);
                      } elseif ($y1 > $y2) {
                          rect($x1, $y2, $x2, $y1, $color);
                      } else { pixel ($x1, $y1, $color); 
                      }
                  }
                
              } 
      }
  ?>
  
  <?
      function circle($x, $y, $angle_1, $angle_2, $radius, $color) {
          if ($angle_1 > $angle_2) {$arseniy = $angle_2; $angle_2 = $angle_1; $angle_1 = $arseniy;};
          for ($i = $angle_1; $i <= $angle_2; $i++) {
              pixel(round($radius * cos(($i * 3.1415) / 180)) + $x,- round($radius * sin(($i * 3.1415) / 180)) + $y,$color);
          }
          if ((abs($angle_2) - abs($angle_1)) != 360) {
            line($x, $y, round($radius * cos(($angle_1 * 3.1415) / 180)) + $x, - round($radius * sin(($angle_1 * 3.1415) / 180)) + $y, $color);
            line($x, $y, round($radius * cos(($angle_2 * 3.1415) / 180)) + $x, - round($radius * sin(($angle_2 * 3.1415) / 180)) + $y, $color);
          }
      }
  ?>
  
  <?
      function grid() {
          for ($i = 9; $i < 595; $i = $i + 10) {
                rect($i, 0, $i, 597, lightgray);
              }
          for ($i = 9; $i < 495; $i = $i + 10) {
            rect(0, $i, 597, $i, lightgray);
          }
          rect(298, 0, 298, 497, black);
          rect(0, 248, 598, 248, black);
          line(298,0,292,20,black);
          line(298,0,304,20,black);
          line(598,248,578,242,black);
          line(598,248,578,254,black);
      }
  ?>
  
  <?  
      function draw() {
        global $id_counter;
        for ($i = 1; $i <= $id_counter; $i++) {
            global $field;
            if ($i == 1) {$color_cur = '#0000CD';};
            if ($i == 2) {$color_cur = '#228B22';};
            if ($i == 3) {$color_cur = '#FF8C00';};
            if ($i == 4) {$color_cur = '#9400D3';};
            if ($i == 5) {$color_cur = '#00868B';};
            if ($field[$i]->type == 1) {
                circle($field[$i]->x + 298, ($field[$i]->y) * (-1) + 248, $field[$i]->angle_1, $field[$i]->angle_2, $field[$i]->radius, $color_cur);
            }
            if ($field[$i]->type == 2) {
                rect($field[$i]->x1 + 298, ($field[$i]->y1) * (-1) + 248, $field[$i]->x2 + 298, ($field[$i]->y2) * (-1) + 248, $color_cur);
            }
            if ($field[$i]->type == 3) {
                for ($j = 1; $j <= 4; $j++) {
                    line($field[$i]->x[$j] + 298, ($field[$i]->y[$j]) * (-1) + 248, $field[$i]->x[$j + 1] + 298, ($field[$i]->y[$j + 1]) * (-1) + 248, $color_cur);
                }
                line($field[$i]->x[5] + 298, ($field[$i]->y[5]) * (-1) + 248, $field[$i]->x[1] + 298, ($field[$i]->y[1]) * (-1) + 248, $color_cur);
            }
        }
      }
  ?>
  
  <?
      $heu = 0;
      if (!empty($_POST[heu])) {
          $heu_x = $_POST[heu_x];
          $heu_y = $_POST[heu_y];
          $heu = 1;
          $cir_x = array();
          $cir_y = array();
          $index = null;
      }
  ?>
  
  <?
      function line_counter($x1, $y1, $x2, $y2) {
          global $cir_x;
          global $cir_y;
          global $index;
          
              $height = abs($y2 - $y1);
              $width = abs($x2 - $x1);
                  if ($y2 == $y1) { $y_mod = 0; };
                  if ($x2 == $x1) { $x_mod = 0; };
                  if ($y2 > $y1) { $y_mod = 1; } elseif ($y1 > $y2) { $y_mod = -1; };
                  if ($x2 > $x1) { $x_mod = 1; } elseif ($x1 > $x2) { $x_mod = -1; };
                  if ($height >= $width) { $y_freq = 1; $length = $height; };
                  if ($width >= $height) { $x_freq = 1; $length = $width; };
                  if (($y_freq != 1) and ($height != 0)) { $y_freq = $width / $height; };
                  if (($x_freq != 1) and ($width != 0)) { $x_freq = $height / $width; };
                  $y_cur = $y1;
                  $x_cur = $x1;
                  $y_freq_cur = floor($y_freq);
                  $x_freq_cur = floor($x_freq);
                  $counter = 0;
                  $balance = 0;
                  $led = 0;
                  for ($i = 0; $i <= $length; $i++) {
                      $cir_x[$index] = $x_cur;
                      $cir_y[$index] = $y_cur;
                      $index = $index + 1;
                      if ($y_freq == 1) {
                          $y_cur = $y_cur + $y_mod;
                          if (is_int($x_freq)) {
                            if ($i % $x_freq_cur == 0) { $x_cur = $x_cur + $x_mod;};
                          } else {
                            $counter = $counter + 1;
                            if ($balance >= 1) {
                              $x_freq_cur = $x_freq_cur + 1;
                              $balance = $balance - 1;
                              $led = 1;
                            }
                            if ($counter == $x_freq_cur) {
                              $x_cur = $x_cur + $x_mod;
                              if ($led == 1) {
                                $x_freq_cur = $x_freq_cur - 1;
                                $led = 0;
                              }
                              $balance = $balance  + ($x_freq - $x_freq_cur);
                              $counter = 0;
                            }
                          }
                      } elseif ($x_freq == 1) {
                          $x_cur = $x_cur + $x_mod;
                          if (is_int($y_freq)) {
                            if ($i % $y_freq_cur == 0) { $y_cur = $y_cur + $y_mod; };
                          } else {
                            $counter = $counter + 1;
                            if ($balance >= 1) {
                              $y_freq_cur = $y_freq_cur + 1;
                              $balance = $balance - 1;
                              $led = 1;
                            }
                            if ($counter == $y_freq_cur) {
                              $y_cur = $y_cur + $y_mod;
                              if ($led == 1) {
                                $y_freq_cur = $y_freq_cur - 1;
                                $led = 0;
                              }
                              $balance = $balance + ($y_freq - $y_freq_cur);
                              $counter = 0;
                            }
                          }
                      }
                  }   
      }
      
      function circle_counter($x, $y, $angle_1, $angle_2, $radius) {
          global $cir_x;
          global $cir_y;
          global $index;
          
          if ($angle_1 > $angle_2) {$arseniy = $angle_2; $angle_2 = $angle_1; $angle_1 = $arseniy;};
          for ($i = $angle_1; $i <= $angle_2; $i++) {
              $cir_x[$index] = round($radius * cos(($i * 3.1415) / 180)) + $x;
              $cir_y[$index] = - round($radius * sin(($i * 3.1415) / 180)) + $y;
              $index = $index + 1;
          }
          if ((abs($angle_2) - abs($angle_1)) != 360) {
            line_counter($x, $y, round($radius * cos(($angle_1 * 3.1415) / 180)) + $x, - round($radius * sin(($angle_1 * 3.1415) / 180)) + $y);
            line_counter($x, $y, round($radius * cos(($angle_2 * 3.1415) / 180)) + $x, - round($radius * sin(($angle_2 * 3.1415) / 180)) + $y);
          }
      }
  ?>
  
  <?
      function heu() {
          $match = false;
          global $field;
          global $heu_x;
          global $heu_y;
          global $id_counter;
          global $index;
          global $cir_x;
          global $cir_y;
  ?>
          <div style="position: absolute; left: 15px; top: 35px; font-weight: bold; font-size: 12px;">
            POINT ( <?=$heu_x?> , <?=$heu_y?> ) INCLUDED IN:
          </div>
          <div style="position: absolute; left: 0px; top: 54px;">
  <?
          for ($i = 1; $i <= $id_counter; $i++) {
              if ($i == 1) {$color_cur = '#0000CD';};
              if ($i == 2) {$color_cur = '#228B22';};
              if ($i == 3) {$color_cur = '#FF8C00';};
              if ($i == 4) {$color_cur = '#9400D3';};
              if ($i == 5) {$color_cur = '#00868B';};
              
              if ($field[$i]->type == 2) {
                  if ((($field[$i]->x1 <= $heu_x) and ($field[$i]->x2 >= $heu_x)) and
                     (($field[$i]->y1 >= $heu_y) and ($field[$i]->y2 <= $heu_y))) {
                        $match = true;
  ?>
                        <div class="cube" style="<?='background-color:'.$color_cur?>"></div>
                        <div class="cube_text" style="<?='color:'.$color_cur?>">FIELD <?=$i?></div>
  <?
                  }
              } else {
                  $cir_x = array();
                  $cir_y = array();
                  $index = 1;
                  $heu_x_glob = $heu_x + 298;
                  $heu_y_glob = ($heu_y) * (-1) + 248;
                  
                  if ($field[$i]->type == 1) {
                      circle_counter($field[$i]->x + 298, ($field[$i]->y) * (-1) + 248, $field[$i]->angle_1, $field[$i]->angle_2, $field[$i]->radius);
                  }
                  if ($field[$i]->type == 3) {
                      for ($j = 1; $j <= 4; $j++) {
                          line_counter($field[$i]->x[$j] + 298, ($field[$i]->y[$j]) * (-1) + 248, $field[$i]->x[$j + 1] + 298, ($field[$i]->y[$j + 1]) * (-1) + 248);
                      }
                      line_counter($field[$i]->x[5] + 298, ($field[$i]->y[5]) * (-1) + 248, $field[$i]->x[1] + 298, ($field[$i]->y[1]) * (-1) + 248);
                  }
                  
                  $interval_x = array();
                  $interval_y = array();
                  $x_counter = 0;
                  $y_counter = 0;
                  
                  for ($j = 1; $j < $index; $j++) {
                      if ($cir_x[$j] == $heu_x_glob) {
                          $y_counter = $y_counter + 1;
                          $interval_y[$y_counter] = $cir_y[$j];
                      }
                      if ($cir_y[$j] == $heu_y_glob) {
                          $x_counter = $x_counter + 1;
                          $interval_x[$x_counter] = $cir_x[$j];
                      }
                  }
                  
                  $x_max = -1000;
                  $x_min = 1000;
                  $y_max = -1000;
                  $y_min = 1000;
                  
                  for ($j = 1; $j <= $x_counter; $j++) {
                      if ($interval_x[$j] > $x_max) {
                          $x_max = $interval_x[$j];
                      }
                      if ($interval_x[$j] < $x_min) {
                          $x_min = $interval_x[$j];
                      }
                  }
                  for ($j = 1; $j <= $y_counter; $j++) {
                      if ($interval_y[$j] > $y_max) {
                          $y_max = $interval_y[$j];
                      }
                      if ($interval_y[$j] < $y_min) {
                          $y_min = $interval_y[$j];
                      }
                  }
                  
                  if ((($heu_x_glob >= $x_min) and ($heu_x_glob <= $x_max)) and
                     (($heu_y_glob >= $y_min) and ($heu_y_glob <= $y_max))) {
                        $match = true;
  ?>
                        <div class="cube" style="<?='background-color:'.$color_cur?>"></div>
                        <div class="cube_text" style="<?='color:'.$color_cur?>">FIELD <?=$i?></div>
  <?
                  }
              }
          }
  ?>
          </div>
  <?
          if ($match == 0) {
  ?>
          <div style="position: absolute; left: 170px; top: 57px; font-weight: bold; font-size: 12px;">
            NO MATCH!
          </div>
  <?
          }
      }
  ?>
  
  <?
      function draw_heu_point() {
          global $heu_x;
          global $heu_y;
          line($heu_x + 298, ($heu_y) * (-1) + 248, $heu_x + 278, ($heu_y) * (-1) + 248, red);
          line($heu_x + 298, ($heu_y) * (-1) + 248, $heu_x + 298, ($heu_y) * (-1) + 228, red);
          line($heu_x + 298, ($heu_y) * (-1) + 248, $heu_x + 318, ($heu_y) * (-1) + 248, red);
          line($heu_x + 298, ($heu_y) * (-1) + 248, $heu_x + 298, ($heu_y) * (-1) + 268, red);
          circle($heu_x + 298, ($heu_y) * (-1) + 248, 0, 360, 10, red);
      }
  ?>
  
<html>
  <head>
    <meta charset="UTF-8">
    <title>Homework 4</title>
    <style>
    .page_1 .button {margin-left: 10; margin-right: 20;}
    .page_1 table {border: 1px solid #CDC5BF; border-collapse: collapse; margin-left: 2px;}
    .page_1 td {border: 1px solid #CDC5BF; width: 47px; height: 10px; text-align: center;}
    .page_1 div {vertical-align: top;}
    .page_1 .SH_button {margin-left: 20px; width: 100px;}
    .page_1 .goto_page_2 {position: absolute; left: 10px; top: 300px; background-color: red;}
    .page_2 .wrapper {border: 1px solid black; width: 800px; height: 600px; position: absolute; left: 10px; top: 10px;}
    .page_2 .sidebar {border: 1px solid black; width: 200px; height: 600px; position: absolute; left: -1px; top: -1px; background-color: #98FB98; z-index: 1;}
    .page_2 .content {border: 1px solid black; width: 600px; height: 500px; position: absolute; left: 199px; top: -1px; background-color: white; z-index: -1;}
    .page_2 .footer {border: 1px solid black; width: 599px; height: 100px; position: absolute; left: 200px; top: 499px; background-color: white;}
    .page_2 .back {position: absolute; left: 45px; top: 560px; background-color: red; width: 100px;}
    .page_2 .tab {position: absolute; top: 15px; width: 50px; height: 50px; font-size: 30px;}
    .page_2 .title {position: absolute; top: 90px; font-size: 26px; font-weight: bold;}
    .page_2 .text {position: absolute; font-size: 20px; font-width: bold;}
    .page_2 .coordinates {position: absolute;}
    .page_2 .xy_field {width: 60px; margin-left: 3px; margin-right: 10px;}
    .page_2 .create {position: absolute; left: 22px; width: 150px; height: 30px; background-color: #7FFF00;}
    .page_2 .coordinates_r {position: absolute; padding: 5px 5px 5px 5px;}
    .page_2 .tip {margin: 10px 15px 15px 15px; font-size: 12px;}
    .page_2 .clear {background-color: #FF4500; width: 100px; margin-left: 45px;}
    .page_2 .cube {display: inline-block; width: 10px; height: 10px; margin-left: 12px;}
    .page_2 .cube_text {display: inline-block; margin-left: 5px; font-weight: bold; vertical-align: middle; font-size: 12px;}
    </style>
    <script type="text/javascript"> 
      function check()
      {
          if (confirm("Are you sure you want to exit? \n All changes will not be saved!"))
          return true;
          else return false;
       }
</script>
  </head>
  <body>
  <?if (empty($_REQUEST[page])):?>
  <div class="page_1">
    <form action="?" method="GET">
      <?// Костылирование ?>
      <?if (!empty($_REQUEST[send])):?>
        <input type="text" name="send" value="Show" hidden>
      <?endif;?>
      <?if (!empty($_REQUEST[odd])):?>
        <?if ($_REQUEST[odd] == Show) {?>
          <input type="text" name="odd" value="Show" hidden>
        <?} else {?>
          <input type="text" name="odd" value="Hide" hidden>
        <?}?>
      <?endif;?>
      <div style="display: inline-block;">
        <?
            if (!empty($_REQUEST[cols])) {
                $cols = $_REQUEST[cols];
            } else {
                $cols = 10;
            }
            if (!empty($_REQUEST[rows])) {
                $rows = $_REQUEST[rows];
            } else {
                $rows = 10;
            }
            
        ?>
            <p>Rows:
              <input type="number" class="button" min="1" max="10" name="rows" value="<?=$rows?>">
              Columns:
              <input type="number" class="button" min="1" max="10" name="cols" value="<?=$cols?>">
              <input type="submit" name="send" value="Show">
            </p>
          <?if (!empty($_REQUEST[send])): ?>
          <table>
            <?for ($i = 1; $i <= $rows; $i++): ?>
              <tr>
                <?for ($j = 1; $j <= $cols; $j++): ?>
                  <?if (($i == 1) or ($j == 1)) {?>
                  <td style="background-color: #FFEBCD; font-weight: bold;">
                  <?} else {?>
                  <td>
                  <?}?>
                    <?=$i * $j?>
                  </td>
                <?endfor;?>
              </tr>
            <?endfor;?>
          </table>
          <?endif;?>
      </div>
      <div style="display: inline-block; margin-left: 40px;">
        <p>
          Exercise 4: List of ODD numbers (from 1 to 50):
          <?if ($_REQUEST[odd] == "Show") {?>
          <input class="SH_button" type="submit" name="odd" value="Hide">
          <?} else {?>
          <input class="SH_button" type="submit" name="odd" value="Show">
          <?}?>
        </p>
        <?if ($_REQUEST[odd] == "Show"):?>
          <?for ($i = 1; $i <= 50; $i++):?>
            <?if ($i % 2 != 0):?>
              <div style="align: center;"><?=$i?></div>
            <?endif;?>
          <?endfor;?>
        <?endif;?>
      </div>
      <input class="goto_page_2" type="submit" name="page" value="FIELD CONSTRUCTOR (Exercise with *)">
    </form>
  </div>
  <?endif;?>
  <?if (!empty($_REQUEST[page])):?>
  <div class="page_2">
      <div class="wrapper">
        <div class="sidebar">
        <div style="position: absolute; top: -51px; left: 0px; width: 800px; height: 50px; background-color: white;"></div>
        <div style="position: absolute; top: -51px; left: 801px; width: 100px; height: 651px; background-color: white;"></div>
          <form action="?" method="POST">
            <input type="text" name="page" value="page_2" hidden>
            <input type="text" name="tab" value="<?=$tab?>" hidden>
            <input class="tab" style="left: 14px; background-color: #FFFF00;" type="submit" name="tab" value="C">
            <input class="tab" style="left: 74px; background-color: #00FF00;" type="submit" name="tab" value="R">
            <input class="tab" style="left: 134px; background-color: #00FFFF;" type="submit" name="tab" value="P">
            <div style="height: 70px;"></div>
            <hr>
            <?if ($tab == 'C'):?>
              <div class="title" style="left: 55px; color: #FFFF00;">Circle</div>
              <div class="text" style="top: 120px; left: 15px; ">Center coordinates:</div>
              <div class="coordinates" style="top: 150px; left: 10px;">
                X: 
                <input class="xy_field" type="number" min="-295" max="+295" name="x" value="0" <?if ($id_counter == 5) {?>disabled<?};?>>
                Y:
                <input class="xy_field" type="number" min="-245" max="+245" name="y" value="0" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <div class="text" style="top: 180px; left: 37px; ">Circle radius:</div>
              <input style="position: absolute; top: 210px; left: 22px; width: 150px;" type="number" name="radius" min="1" max="245" value="100" <?if ($id_counter == 5) {?>disabled<?};?>>
              <div class="text" style="top: 240px; left: 60px; ">Angles:</div>
              <div class="coordinates" style="top: 270px; left: 10px;">
                S: 
                <input class="xy_field" type="number" min="0" max="360" name="angle_1" value="0" <?if ($id_counter == 5) {?>disabled<?};?>>
                E:
                <input class="xy_field" type="number" min="0" max="360" name="angle_2" value="360" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <input style="top: 310px;" class="create" type="submit" name="create" value="Create Field!" <?if ($id_counter == 5) {?>disabled<?};?>>
              <div style="height: 265px;"></div>
              <hr>
              <div class="tip">
                <p>
                Tip: Angles is optional function to create a a truncated circle.
                </p>
              </div>
            <?endif;?>
            <?if ($tab == 'R'):?>
              <div class="title" style="left: 38px; color: #32CD32;">Rectangle</div>
              <div class="text" style="top: 125px; left: 12px; font-size: 14px; font-weight: bold;">Left-Top corner coordinates:</div>
              <div class="coordinates" style="top: 150px; left: 10px;">
                X: 
                <input class="xy_field" type="number" min="-295" max="+295" name="x1" value="-50" <?if ($id_counter == 5) {?>disabled<?};?>>
                Y:
                <input class="xy_field" type="number" min="-245" max="+245" name="y1" value="50" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <div class="text" style="top: 185px; left: 8px; font-size: 14px; font-weight: bold;">Right-Bot corner coordinates:</div>
              <div class="coordinates" style="top: 212px; left: 10px;">
                X: 
                <input class="xy_field" type="number" min="-295" max="+295" name="x2" value="50" <?if ($id_counter == 5) {?>disabled<?};?>>
                Y:
                <input class="xy_field" type="number" min="-245" max="+245" name="y2" value="-50" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <input style="top: 250px;" class="create" type="submit" name="create" value="Create Field!" <?if ($id_counter == 5) {?>disabled<?};?>>
              <div style="height: 205px;"></div>
              <hr>
            <?endif;?>
            <?if ($tab == 'P'):?>
              <div class="title" style="left: 45px; color: #1E90FF;">Polygon</div>
              <?line(90,149,90,130,'#20B2AA');?>
              <?line(90,130,184,130,'#20B2AA');?>
              <?line(185,130,185,399,'#20B2AA');?>
              <?line(184,400,90,400,'#20B2AA');?>
              <?line(90,399,90,383,'#20B2AA');?>
              <?line(90,199,90,183,'#20B2AA');?>
              <?line(90,249,90,233,'#20B2AA');?>
              <?line(90,299,90,283,'#20B2AA');?>
              <?line(90,349,90,333,'#20B2AA');?>
              <div class="coordinates_r" style="top: 150px; left: 10px; border: 1px solid #20B2AA;">
                <input class="xy_field" type="number" min="-295" max="+295" name="x1" value="-50" <?if ($id_counter == 5) {?>disabled<?};?>>
                <input class="xy_field" type="number" min="-245" max="+245" name="y1" value="50" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <div class="coordinates_r" style="top: 200px; left: 10px; border: 1px solid #20B2AA;">
                <input class="xy_field" type="number" min="-295" max="+295" name="x2" value="-50" <?if ($id_counter == 5) {?>disabled<?};?>>
                <input class="xy_field" type="number" min="-245" max="+245" name="y2" value="-50" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <div class="coordinates_r" style="top: 250px; left: 10px; border: 1px solid #20B2AA;">
                <input class="xy_field" type="number" min="-295" max="+295" name="x3" value="50" <?if ($id_counter == 5) {?>disabled<?};?>>
                <input class="xy_field" type="number" min="-245" max="+245" name="y3" value="-50" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <div class="coordinates_r" style="top: 300px; left: 10px; border: 1px solid #20B2AA;">
                <input class="xy_field" type="number" min="-295" max="+295" name="x4" value="50" <?if ($id_counter == 5) {?>disabled<?};?>>
                <input class="xy_field" type="number" min="-245" max="+245" name="y4" value="50" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <div class="coordinates_r" style="top: 350px; left: 10px; border: 1px solid #20B2AA;">
                <input class="xy_field" type="number" min="-295" max="+295" name="x5" value="0" <?if ($id_counter == 5) {?>disabled<?};?>>
                <input class="xy_field" type="number" min="-245" max="+245" name="y5" value="100" <?if ($id_counter == 5) {?>disabled<?};?>>
              </div>
              <input style="top: 410px;" class="create" type="submit" name="create" value="Create Field!" <?if ($id_counter == 5) {?>disabled<?};?>>
              <div style="height: 360px;"></div>
              <hr>
            <?endif;?>
              <div class="tip">
                <p>
                  Tip: You can create not more then five fields total.
                </p>
              </div>
              <div style="height: 10px;"></div>
              <input class="clear" type="submit" name="clear" value="Clear fields">
              
              <div class="coordinates" style="top: 545px; left: 610px;">
                <div style="position: absolute; top: 0px; left: 5px; font-weight: bold;">X:</div> 
                <input style="position: absolute; top: 0px; left: 25px; width: 60px;" type="number" min="-295" max="+295" name="heu_x" value="0">
                <div style="position: absolute; top: 0px; left: 102px; font-weight: bold;">Y:</div> 
                <input style="position: absolute; top: 0px; left: 120px; width: 60px;" type="number" min="-245" max="+245" name="heu_y" value="0">
                <input style="position: absolute; top: 25px; left: 5px; width: 175px; background-color: #E8E8E8; font-weight: bold;" type="submit" name="heu" value="ANALYSIS">
              </div>
              
              <?if ($id_counter > 0):?>
              <?$data_counter = 2;?>
                <input type="text" name="1" value="begin_data" hidden>
                <?for ($i = 1; $i <= $id_counter; $i++):?>
                  <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->type?>" hidden>
                  <?$data_counter = $data_counter + 1;?>
                  <?if ($field[$i]->type == 1):?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->x?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->y?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->radius?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->angle_1?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->angle_2?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                  <?endif;?>
                  <?if ($field[$i]->type == 2):?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->x1?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->y1?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->x2?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                    <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->y2?>" hidden>
                    <?$data_counter = $data_counter + 1;?>
                  <?endif;?>
                  <?if ($field[$i]->type == 3):?>
                    <?for ($j = 1; $j <= 5; $j++):?>
                      <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->x[$j]?>" hidden>
                      <?$data_counter = $data_counter + 1;?>
                      <input type="text" name="<?=$data_counter?>" value="<?=$field[$i]->y[$j]?>" hidden>
                      <?$data_counter = $data_counter + 1;?>
                      <?endfor;?>
                  <?endif;?>
                <?endfor;?>
                <input type="text" name="<?=$data_counter?>" value="end_data" hidden>
              <?endif;?>
          </form>
          <form>
          <input class="back" type="submit" name="page_change" value="BACK" onclick="return check()">
          <input type="text" name="page" value="" hidden>
          </form>
        </div>
        <div class="content">
          <?
          grid();
          draw();
          if ($heu == 1){
                  draw_heu_point();
              }
          ?>
        </div>
        <div class="footer">
          <div class="tip" style="position: absolute; left: 130px; top: 70px;">
            Tip: Grid Spacing is 10.
          </div>
          <?line(400,0,400,99,black);?>
          <div>
            <div style="position: absolute; top: 2px; left: 435px; font-weight: bold;">Choose a point for</div>
            <div style="position: absolute; top: 20px; left: 435px; font-weight: bold;">Heuristic Analysis:</div>
          </div>
          <div style="position: absolute; left: 0px; top: 5px;">
            <?
              for ($i = 1; $i <= $id_counter; $i++):
                  if ($i == 1) {$color_cur = '#0000CD';};
                  if ($i == 2) {$color_cur = '#228B22';};
                  if ($i == 3) {$color_cur = '#FF8C00';};
                  if ($i == 4) {$color_cur = '#9400D3';};
                  if ($i == 5) {$color_cur = '#00868B';};
            ?>
                  <div class="cube" style="<?='background-color:'.$color_cur?>"></div>
                  <div class="cube_text" style="<?='color:'.$color_cur?>">FIELD <?=$i?></div>
                  
              <?endfor;?>
          </div>
          <?
              line(0,32,399,32,black);
              if ($heu == 1){
                  heu();
              }
          ?>
        </div>
      </div>
  </div>
  <?endif;?>
  </body>
</html>