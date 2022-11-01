<?php

    include '../../assets/database/connection_db_be.php';

    //Get data from HTML's textfields
    $user = $_POST['usered'];
    $e_mail = $_POST['e_mail'];
    $passwords = $_POST['passwords'];
    //Password encryption
    $passwords = hash('sha512', $passwords);


    //Create the Query for save the data in MySQL

    $query = "INSERT INTO users(user, e_mail, passwords) VALUES('$user','$e_mail','$passwords')";


    //Mail authenticity checker

    if(filter_var($e_mail, FILTER_VALIDATE_EMAIL)){
    }
    else{
        echo '
            <script>
                alert("This email is not exist!");
                window.location="../app/login/login.php";
            </script>
        ';  
        exit();
        mysqli_close($connection);
    }


    //Data non-redundancy checker EMAIL

    $checker = mysqli_query($connection, "SELECT * FROM users WHERE e_mail='$e_mail'");

    if(mysqli_num_rows($checker)>0){
        echo '
            <script>
                alert("This email is already registered!");
                window.location="../../app/login/login.php";
            </script>
        ';
        exit();
        mysqli_close($connection);
    }

        //Data non-redundancy checker USER

        $checkeruser = mysqli_query($connection, "SELECT * FROM users WHERE user='$user'");

        if(mysqli_num_rows($checkeruser)>0){
            echo '
                <script>
                    alert("This user is already registered!");
                    window.location="../../app/login/login.php";
                </script>
            ';
            exit();
            mysqli_close($connection);
        }

    //Start the Query

    $start = mysqli_query($connection, $query);
    

    //Guard conditional for redirect user to the main landingpage

    if($start){
        echo '
            <script>
                alert("¡Registrado correctamente!");
                window.location ="../../index.php";
            </script>
        ';
    }
    else{
        echo 
            '<script> 
                alert("Algo salió mal :c");
                window.location ="../../app/login/login.php"; 
            </script>
        ';
    }

    //Close connection with MySQL

    mysqli_close($connection);

?>