<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Student Portal</title>
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
    <main class="page gallery-page">
        <section class="clean-block clean-gallery dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Gallery</h2>
                    <p>Memories are not going to FadeAway</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/1.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/1.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/2.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/2.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/4.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/4.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/3.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/3.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/5.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/5.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/6.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/6.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/7.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/7.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/8.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/8.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a href="assets/img/scenery/9.jpg" class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/9.jpg"></a></div>
                </div>
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