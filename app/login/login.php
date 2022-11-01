<?php

  include '../../assets/database/connection_db_be.php';

  session_start();

  if(isset($_SESSION['usuario'])){
      header("location: ./../index.html")
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../../assets/css/styleLogin.css" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">
    <title>Inicia sesión</title>
  </head>


  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">¡Ingresa!</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="¡De vuelta!" class="btn solid" />
            <p class="social-text">¿Quieres ver nuestras redes?</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">¡Iniciemos!</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="¡Creemos juntos!" />
            <p class="social-text">¿Quieres ver nuestras redes?</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Eres nuevo grullero?</h3>
            <p>
              ¡Puedes ingresar aquí para hacer parte de esta gran comunidad!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Regístrate
            </button>
          </div>
          <img src="../../assets/img/login/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tienes cuenta, grullero?</h3>
            <p>
              ¡Ingresa para apoyar a nuevos grulleros a aportar su granito de arena para la paz!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicia Sesión
            </button>
          </div>
          <img src="../../assets/img/login/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../../assets/js/loginScript.js"></script>
  </body>
  
</html>