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

<body bgcolor="blue">
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
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
</body>
</html>