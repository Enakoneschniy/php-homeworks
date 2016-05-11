
<form method="post">
    <p>Enter a: <input type="text" name="a" /></p>
    <p><input type="submit" name="submit" /></p>
</form>
<?php

if (!empty($_POST['submit'])) {
    if (!empty($_POST['a'])) {
        $a = (float)$_POST['a'];
        $S = 1/4*$a*sqrt(3);
        echo "$S";
    }
    else {
        echo "Error.Enter a";
    }
}

?>