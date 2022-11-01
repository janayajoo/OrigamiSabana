<?php

    session_start(); //Init session
    include '../../assets/database/connection_db_be.php';

    $e_mail = $_POST['e_mail'];
    $passwords = $_POST['passwords'];
    $passwords = hash('sha512', $passwords);

    $checker_login = mysqli_query($connection, "SELECT * FROM users WHERE e_mail = '$e_mail' and passwords = '$passwords'");

    if(mysqli_num_rows($checker_login)>0){
        
        $_SESSION['user'] = $correo; //Save the user session on cache

        header("location: ../../index.html");
        exit();
    }
    else{
        echo '
            <script>
                alert("The user does not exist!");
                window.location = "../../app/login/login.php";
            </script>
        ';
        exit();
        mysqli_close($connection);
    }


?>
