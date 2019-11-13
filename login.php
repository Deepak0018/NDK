<?php
session_start();
if(isset($_SESSION['user']))
{
    header("location:index.php");
}
else
{

}
if(isset($_POST['login']))
{
    mysql_connect("localhost","root","");
	mysql_select_db("ndk_beta");
    $uid = $_POST['uid'];
    $pass = $_POST['password'];
    $que1=mysql_query("select * from users where uid='$uid' and Password='$pass'");
    $count1=mysql_num_rows($que1);
    $rec1=mysql_fetch_array($que1);
    // print_r($rec1[2]); die();
    if($count1>0)
    {   
        $_SESSION['user'] = $uid;
        $_SESSION['username'] = $rec1[2];
        // print_r($_SESSION['username']."success"); die();
        header("location:index.php");
    }
    else
    {
        echo "<script>alert('Invalid Entry')</script>";
    }
}
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Student Portal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Student Portal</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.php">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="posts/index.php">Posts</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.php">About Us</a></li>
                   
                    <?php 
                        if(!isset($_SESSION['user']))
                        {

                    ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                    <?php 
                    
                        }
                        else 
                        {
                            
                    ?>
                    <li class="nav-item  " role="presentation"><a class="nav-link" href = "logout.php" onclick="dropdown()">
                    <?php
                    echo $_SESSION['username']." (logout)";
                    ?>
                    </a>
                    </li>
                    <?php 
                        }
                    ?>
                </ul>

            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Sign In to Access All the Features</p>
                </div>
                <form action = "#" method = "POST">
                    <div class="form-group"><label for="email">User Name</label><input class="form-control item" type="text" id="email" name="uid"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" id="password" name="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit" name="login">Log In</button></form>
            </div>
        </section>
       </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright Text</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>