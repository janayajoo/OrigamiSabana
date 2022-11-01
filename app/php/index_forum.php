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
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="forums.php">Forums</a></li>
                    <li class="nav-item"><a href="posts.php">Posts</a></li>
                    <li class="nav-item"><a href="detail.php">Detail</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">Foro Grullas Unisabana</div>
        </div>
        <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Todos</option>
                    <option value="Titles">Título</option>
                    <option value="Descriptions">Descripción</option>
                </select>
                <input type="text" name="q" placeholder="Buscar...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>General Information</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
        </div>
        <!--More-->
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>General Information</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
        </div>
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>General Information</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Description Title</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

           
        </div>
        <!---->
    </div>

    <!-- Forum Info -->
    <div class="forum-info">
        <div class="chart">
            MyForum - Stats &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>5,369</u> Posts in <u>48</u> Topics by <u>8,124</u> Members.</span><br>
        <span>Latest post: <b><a href="">Random post</a></b> on Dec 15 2021 By <a href="">RandomUser</a></span>.<br>
        <span>Check <a href="">the latest posts</a> .</span><br>
    </div>

    <footer>
        <span>&copy; 2022 Universidad de La Sabana</span>
    </footer>
    <script src="../../assets/js/scriptForum.js"></script>
</body>
</html>
