<?php

    session_start(); //Init session
    include '../../assets/database/connection_db_be.php';

    $user = $_POST['usered'];
    $passwords = $_POST['passwords'];
    $passwords = hash('sha512', $passwords);

    $checker_login = mysqli_query($connection, "SELECT * FROM users WHERE user = '$user' and passwords = '$passwords'");

    if(mysqli_num_rows($checker_login)>0){
        
        $_SESSION['user'] = $user; //Save the user session on cache

        header("location: ../../index.php");
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
