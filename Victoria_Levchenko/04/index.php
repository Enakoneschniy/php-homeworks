<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>lesson 4</title>
    <style>
        table {
            margin-bottom: 50px;
        }

        th {
            background: navy;
            color: white;
        }

        td {
            text-align: center;
            border: 1px solid navy;
        }
    </style>
</head>
<body>
<table>
    <?php
    $cols = 10;
    $rows = 10;

    for ($a = 1; $a <= $rows; $a++) {
        echo '<tr>';
        for ($b = 1; $b <= $cols; $b++) {
            if ($a == 1 || $b == 1) {
                echo '<th>' . $a * $b . '</th>';
            } else {
                echo '<td>' . $a * $b . '</td>';
            }
        }
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>