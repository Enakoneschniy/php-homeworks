<?php
if (empty($name)) {
$name = 'Alex Azimov';
}
if (empty($age)) {
$age = 22;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Homework 2</title>
    <meta charset="utf-8">
    <style>
    .wrapper {margin: 10px; margin-top: 20px; font-style: Italic; line-height: 28px;}
    .objective {font-weight: bold}
    .button {display: inline-block; margin-left: 20px;}
    .t_area {display: inline block; margin-left: 10px; margin-right: 30px; width: 50px;}
    </style>
  </head>
  <body>
    <form action="?" method="get">
      <div class="wrapper">
      <?php
      echo "Hello! My name is <span class=objective>$name</span> and
          it's my first PHP homework for the last <span class=objective>$age</span> years.";
      ?>
      <p><span>So.. Don't judge very strictly. 
        <?php
        if (empty($_GET[stage_1])) {
            echo "<p>";
            echo "<input class=button type=submit name=stage_1 value=Okay>";
            echo "<input class=button type=submit name=stage_1 value=\"No way\">";
        }
        if ($_GET[stage_1] == "Okay") {
            echo " Excellent! ";
            echo "<input type=text name=stage_1 value=Okay hidden>";
        }
        if ($_GET[stage_1] == "No way") {
            echo " Sadly... ";
            echo "<input type=text name=stage_1 value=\"No way\" hidden>";
        }
        if (empty($_GET[triangle_side])) {
          $triangle_side = 3;
        } elseif ($_GET[triangle_side] < 0) {
          $triangle_side = 3;
        } elseif ($_GET[triangle_side] > 0) {
          $triangle_side = $_GET[triangle_side];
        } else {
          $triangle_side = 3;
        }
        if (!empty($_GET[stage_1])) {
            echo "By the way, it was first exercise.</span>";
            echo "<p><span>In the second exercise we have equilateral triangle.</span>";
            echo "<p><span>Objective: determine the area of this triangle.</span>";
            echo "<p><span>If you want, you can enter any value for side of the triange.</span>";
            echo "<p><span>Or you may let value by default.</span>";
            echo "<input style=\"text-align: center; margin-left: 20px;\" type=text name=triangle_side value=$triangle_side>";
            if (empty($_GET[stage_2])) {
                echo "<p>";
                echo "<input style=\"margin-left: 50px;\" type=submit name=stage_2 value=Calculate>";
            }
        }
        if (empty($_GET[eq_a])) {
            $eq_a = 2;
        } elseif (is_float($_GET[eq_a]) or is_numeric($_GET[eq_a])) {
            $eq_a = $_GET[eq_a];
        } else {
            $eq_a = 2;
        }
        if (empty($_GET[eq_b])) {
            $eq_b = 4;
        } elseif (is_float($_GET[eq_b]) or is_numeric($_GET[eq_b])) {
            $eq_b = $_GET[eq_b];
        } else {
            $eq_b = 4;
        }
        if (empty($_GET[eq_c])) {
            $eq_c = 7;
        } elseif (is_float($_GET[eq_c]) or is_numeric($_GET[eq_c])) {
            $eq_c = $_GET[eq_c];
        } else {
            $eq_c = 7;
        }
        if (!empty($_GET[stage_2])) {
            echo "<input style=\"margin-left: 20px;\" type=submit name=re_stage_2 value=Recalculate>";
            echo "<input type=text name=stage_2 value=calculate hidden>";
            $triangle_area = (1/4)*$triangle_side*$triangle_side*sqrt(3);
            echo "<p>Finally, area of the triangle with side <span class=objective>$triangle_side</span> is <span class=objective>$triangle_area</span>";
            echo "<p>The next third and last for this homework exercise is...";
            echo "<p>Something like an equation system! And you really don't want to know detalis..";
            echo "<p>Just enter three numbers here: (or let it by default)";
            echo "<p><span style=\"margin-left: 20px;\">a:</span> <input class=t_area type=text name=eq_a value=$eq_a>";
            echo "b:<input class=t_area type=text name=eq_b value=$eq_b>";
            echo "c:<input class=t_area type=text name=eq_c value=$eq_c>";
            echo "<input type=submit name=stage_3 value=\"Do some magic!\">";
        }
        if (!empty($_GET[stage_3])) {
            echo "<input type=text name=stage_3 value=magic hidden>";
            if ($eq_a < $eq_c) {
                $eq_x = $eq_a + $eq_b / ($eq_c * $eq_a);
            }
            if ($eq_a == $eq_c) {
                $eq_x = 100;
            }
            if ($eq_a > $eq_c) {
                $eq_x = $eq_c * 3 * $eq_b + $eq_c / ($eq_c * sqrt($eq_c));
            }
            echo "<p>And answer is.......... <span class=objective>$eq_x</span>!!!";
            echo "<p>What is it? It's \"X\". Just don't ask me anything.";
            echo "<p>Hope you had fun from this interactive homework. Cya!";
        }
         ?>
      </form>
      </div>
  </body>
</html>