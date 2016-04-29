<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$cols = 5;
$rows = 6;
echo "<table><tr>";
for ($cols = 1; $cols <=5; $cols++) {
 for ($rows = 1; $rows <=6; $rows++)
     echo "<td>".($cols*$rows)."</td>";
    if ($cols !=5) echo "</tr><tr>";
};
echo "</tr></table>";

?>
<hr>
<table>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
    </tr>
    <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>8</td>
        <td>10</td>
        <td>12</td>
    </tr><tr>
        <td>3</td>
        <td>6</td>
        <td>9</td>
        <td>12</td>
        <td>15</td>
        <td>18</td>
    </tr>
    <tr>
        <td>4</td>
        <td>8</td>
        <td>12</td>
        <td>16</td>
        <td>20</td>
        <td>24</td>
    </tr>
    <tr>
        <td>5</td>
        <td>10</td>
        <td>15</td>
        <td>20</td>
        <td>25</td>
        <td>30</td>
    </tr>

</table>


</body>
</html>