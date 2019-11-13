<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Student Portal</title>
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
                     <li class="nav-item" role="presentation"><a class="nav-link" href="mcq/index.php">MCQ</a></li>
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
    <main class="page landing-page">
        <section class="clean-block slider dark">
            <div class="container">
            
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/1.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/2.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/3.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>Enleash the Creativity to the world</h2>
                <p>Sigin to Access all the Features</p><a href="login.php"><font color="white" >Sign In</font></a></div>
        </section>

        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Online Exam</h4>
                        <p>Online Exam Abstract</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Live Notifications</h4>
                        <p>Live Notifications Abstract</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Assignments Upload</h4>
                        <p>Assignments Upload Abstract</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>Courses Abstract</h4>
                        <p>Courses Abstract </p>
                    </div>
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
<script>
function dropdown() {
  document.getElementById("logout").classList.toggle("hide");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>