<?php  
include 'rec.php';
include 'recC.php';
include 'rdv.php';
include 'rdvC.php' ;
$error = "";
$rec = null;

    // create an instance of the controller
 $recC = new recC();
 $rdvC = new rdvC();
 if (  
 isset($_POST["firstname"]) &&
 isset($_POST["lastname"]) &&
 isset($_POST["email"]) &&
 isset($_POST["typecar"]) &&
 isset($_POST["messager"]) &&
 isset($_POST["idrec"])&&
 isset($_POST["rdv"]) 
 ) {
     if (
     !empty($_POST["firstname"]) &&
     !empty($_POST["lastname"]) &&
     !empty($_POST["email"]) &&
     !empty($_POST["typecar"]) &&
     !empty($_POST["messager"]) &&
     !empty($_POST["idrec"])&&
     !empty($_POST["rdv"])
        
     ) {
         $rec = new rec(
            
             $_POST['firstname'],
             $_POST['lastname'],
             $_POST['email'],
             $_POST['typecar'],
             $_POST['messager'],
             $_POST['idrec'],
             $_POST['rdv']
         );
        $recC->updaterec($rec, $_GET["idd"]);
        header('Location:listerec.php'); 
    } else
        $error = "Missing information";
}
 
$liste=$rdvC->listerdv();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Like in Tokyo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+216 25 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>Likeintokyo@esprit.tn</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Like In Tokyo</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">Login</a>
                        <a href="service.html" class="nav-item nav-link active">AS Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cars</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="car.html" class="dropdown-item">Car Listing</a>
                                <a href="detail.html" class="dropdown-item">Car Detail</a>
                                <a href="booking.html" class="dropdown-item">Car Booking</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="team.html" class="dropdown-item">The Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">AS Service</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">AS Service</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reclamation</title>
    
</head>

<body>
<a class="btn btn-primary mt-2 py-3 px-5" href="listerec.php">Return to RECLAMATION list</a>
    <hr>

    

    <?php
    if (isset($_GET['idd'])) {
        $rec = $recC->showrec($_GET['idd']);

    ?>

<form method="POST">
      <h1 align="center">UPDATE RECLAMATION</h1>
      <div class="separation"></div>
      <div  align="center"class="corps-formulaire">
        <div class="gauche">
          
          <div class="groupe">
            <label>First Name :</label>
            <input type="text" autocomplete="off" value="<?PHP echo $rec['firstname']; ?>" placeholder=" fisrt name" name="firstname" 
            minlength="3" maxlength="20" size="10"
          required  />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Last Name :</label>
            <input type="text" autocomplete="off" value="<?PHP echo $rec['lastname']; ?>" placeholder=" last name" name="lastname" 
            minlength="3" maxlength="20" size="10"
          required  />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Email :</label>
            <input type="email" autocomplete="off" value="<?PHP echo $rec['email']; ?>" placeholder="Email" name="email"/>
            <i class="fas fa-envelope"></i>
          </div>
            <div class="groupe">
              <label>Type :</label>
              <input type="text" name="typecar" value="<?PHP echo $rec['typecar']; ?>" placeholder="Car">
            </div>
            
        </div>
        <div class="droite">
          <div class="groupe">
            <label>Message</label>
            <textarea placeholder="Enter here ..." name="messager" ><?PHP echo $rec['messager']; ?></textarea>
          </div>
        </div>
        <div class="groupe">
              <label>ID to claim :</label>
              <input type="text" name="idrec" value="<?PHP echo $rec['idrec']; ?>" placeholder="ID to claim">
              <i class="fas fa-user"></i>
            </div>
      </div>
      <select name="rdv" class="form-control p-6">
                <option value="">Select An ID</option>
                <?php foreach($liste as $rec){ ?>
                <option value="<?php echo $rec['id_rdv'] ?>"><?php echo $rec['id_rdv'] ?></option>
                <?php } ?>
              </select>
      <div align="center">
      <input type="submit" align="center"  class="btn btn-primary "value="Update Reclamation"> 
        </div>
    </form>
    <?php
    }
    ?>
</body>
</html>


<!-- Vendor Start -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>123 GHAZELA, ARIANA, TUNISIA</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+216 25 345 6789</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>Likeintokyo@esprit.tn</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help & FQAs</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
               
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">Like In Tokyo</a>. All Rights Reserved.</p>
       
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>