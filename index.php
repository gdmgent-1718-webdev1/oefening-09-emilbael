<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <input type="text" name="search" placeholder="Zoeken"><br>
    <input name="send" type="submit" value="verzenden">
</form>
<?php
$send = isset($_REQUEST['send']);
if ($send) {
 echo 'Zoekresultaten voor '.$_GET['search'];
}
?>
</body>
</html>