<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        input {display: inline-block;margin-left: 10px;margin-right: 25px;}
    </style>
</head>
<body>
<h3>First task</h3>
<table>
    <form action="" method="post">

        <input style="margin-left: 30px;" type="number" name="rows" required placeholder="rows" value="<?=isset($_REQUEST['rows']) ? $_REQUEST['rows'] : '' ?>">


        <input type="number" name="cols" required placeholder="cols" value="<?=isset($_REQUEST['cols']) ? $_REQUEST['cols'] : '' ?>">


            <input type="submit" name="submit" value="Send">

    </form>
    <p></p>
  <?php
  if (isset($_REQUEST['submit'])) {
      $rows = $_REQUEST['rows'];
      $cols = $_REQUEST['cols'];
     }
  ?>
    <?for ($i = 1;$i <= $rows;$i++):?>
    <tr>
        <?for ($j = 1;$j <= $cols;$j++):?>
            <?if (($i == 1) or ($j == 1)) {?>
            <td style="width: 50px; text-align:center; font-weight: bold; background-color: chartreuse ">
            <?}else{?>
                <td style="width: 50px; text-align:center;background-color: cyan ">
                <?}?>
                <?=$i * $j?>

            </td>
        <?endfor;?>
    </tr>
    <?endfor;?>



</table>
<h3>Second task</h3>
<p></p>
<?php
for ($i = 1;$i <= 50;$i++){
    if ($i % 2 != 0){
        echo "$i ";
    }
}
?>
</body>
</html>