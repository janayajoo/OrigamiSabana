<?php

session_start();

    if(!isset($_SESSION['user'])){
        echo'
        <script>
            alert("Login before access here!");
            window.location = "../../app/login/login.php";
        </script>
        ';
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/stylesForum.css">
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">
    <title>Comunidad</title>
</head>
<body>
    <h1>Bienvenido al foro de grullas</h1>
    <a href="../login/close_session_be.php">xd</a>
</body>
</html>
