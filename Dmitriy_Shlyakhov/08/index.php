<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework8</title>
</head>
<body>

<h2>First and second task </h2>

<h2>Fill the form</h2>
<?php define($fileName, 'file');?>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" style="width: 200px; margin-left: 25px;;" placeholder="<?=$_REQUEST['name'];?>">
    </p>
    <?php
        $userName = $_REQUEST['name'];
        if (!preg_match("/^[A-Za-z0-9]+$/", $userName)) {
            echo "<p style='color: red'>The name is entered incorrectly</p>";
        } else {
            echo "<p style='color: green'>The name is entered correctly</p>";
        }
    ?>
    <p>
        <label for="surname">Surname:</label>
        <input type="text" name="surname" style="width: 200px;" placeholder="<?=$_REQUEST['surname'];?>">
    </p>
    <?php
        $userSurname = $_REQUEST['surname'];
        if (!preg_match("/^[A-Za-z0-9]+$/", $userSurname)) {
            echo "<p style='color: red'>The name is entered incorrectly</p>";
        } else {
            echo "<p style='color: green'>The name is entered correctly</p>";
        }
        ?>
    <p>
        <input type="submit" name="submit" value="Send">
    </p>
</form>



<?php
    $fo = fopen("text.txt", "a+t");
    $text = "I like people \r\n";
    fwrite($fo, $text);
    fclose($fo);
    $pathToTheFile = 'text.txt';
    if (file_exists($pathToTheFile)) {
        echo 'File exists';
    } else {
        echo 'The file does not exist';
    }
?>
<hr>

<h2>Third task(check a domain name)</h2>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <p>
        <label for="domainName">Enter the domain name:</label>
        <input type="text" name="domainName" style="width: 500px; margin-left: 25px;;" placeholder="<?=$_REQUEST['domainName'];?>">
    </p>
    <?php
    $domainName = $_REQUEST['domainName'];
    if (!preg_match('/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $domainName)) {
        echo "<p style='color: red'>Domain name is entered incorrectly</p>";
    } else {
        echo "<p style='color: green'>Domain name is entered correctly</p>";
    }
    ?>
    <p>
        <input type="submit" name="submit" value="Send">
    </p>
</form>
    <h3>The output from the file</h3>
    <?php
    $domains = file('domainName.txt');
    $correctlyDomains = preg_grep('/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $domains);
    var_dump($correctlyDomains);
    ?>
<hr>

<h2>Fourth task(select the number with a comma or space)</h2>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <p>
        <label for="numberCommaSpace">Enter the number:</label>
        <input type="text" name="numberCommaSpace" style="width: 100px; margin-left: 25px;;" placeholder="<?=$_REQUEST['numberCommaSpace'];?>">
    </p>
    <?php
    $numberCommaSpace = $_REQUEST['numberCommaSpace'];
    if (!preg_match('/[0-9]+\.[0-9]+/', $numberCommaSpace)) {
        echo "<p style='color: red'>$numberCommaSpace - NO</p>";
    } else {
        echo "<p style='color: green'>$numberCommaSpace - YES</p>";
    } 
    ?>
    <p>
        <input type="submit" name="submit" value="Send">
    </p>
</form>
    <h3>The output from the file</h3>
    <?php
    $numbers = file('numberCommaSpace.txt');
    $correctlyNumbers = preg_grep('/[0-9]+\.[0-9]+/', $numbers);
    var_dump($correctlyNumbers);
    ?>
<hr>

<h2>Fifth task(check ip (only in the decimal system))</h2>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <p>
        <label for="checkIp">Enter the ip:</label>
        <input type="text" name="checkIp" style="width: 150px; margin-left: 25px;;" placeholder="<?=$_REQUEST['checkIp'];?>">
    </p>
    <?php
    $checkIp = $_REQUEST['checkIp'];
    if (!preg_match('/^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/', $checkIp)) {
        echo "<p style='color: red'>$checkIp - NO</p>";
    } else {
        echo "<p style='color: green'>$checkIp - YES</p>";
    }
    ?>
    <p>
        <input type="submit" name="submit" value="Send">
    </p>
    <h3>The output from the file</h3>
    <?php
    $ipAddress = file('ipAddress.txt');
    $correctlyIp = preg_grep('/^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/', $ipAddress);
    var_dump($correctlyIp);
    ?>
</form>

</body>
</html>