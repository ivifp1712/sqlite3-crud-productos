<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require_once('connection.php');
    if (isset($_GET['controller'])&&isset($_GET['action'])) {

        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }
    else {
        $controller="producto";
        $action="index";
    }
  

    // echo $controller;
    // echo $action;

    require_once('Views/Layouts/layout.php');

    ?>
</body>
</html>