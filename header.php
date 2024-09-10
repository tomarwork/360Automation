<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>360 Automation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="automation" name="keywords">
    <meta content="360 automation" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Script to handle active class -->
    <script>
        $(document).ready(function () {
            $('.navbar-nav .nav-link').on('click', function () {
                $('.navbar-nav .nav-link').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid px-5" style="background-color:#083C7D;">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-dark me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    <a class="text-white" href="./contact.php">Pune, India</a>
                </div>
                <div class="h-50 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small class="text-white">sales@360acpl.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <small class="text-white">+91 95189 08598</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="far fa-clock text-white"></small>
                    </div>
                    <small class="text-white">Mon to Sat 9:30 am to 6 pm</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">
                <img class="logo" src="./img/logo.png" alt="360 Automation">
            </h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.php" class="nav-item nav-link active">HOME</a>
                <a href="about.php" class="nav-item nav-link">ABOUT US</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SERVICES & SOLUTIONS</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="automation.php" class="dropdown-item">Automation Solutions</a>
                        <a href="software_eng.php" class="dropdown-item">Software Engineering</a>
                        <a href="digital_solution.php" class="dropdown-item">Digital Factory Solutions</a>
                        <a href="design_details.php" class="dropdown-item">Design And Details Engineering</a>
                        <a href="skill_Exprt.php" class="dropdown-item">Skills and Expertise</a>
                        <a href="installation_com.php" class="dropdown-item">Installation & Commissioning</a>
                        <a href="panel_manif.php" class="dropdown-item">Hardware Engineering and Panel Manufacturing</a>
                  

             
                    </div>
                </div>
                <a href="feature.php" class="nav-item nav-link">COLLABORATION</a>
                <!-- <a href="feature.php" class="nav-item nav-link"> ALLIANCE PRODUCTS & SERVICES </a> -->
                <a href="project.php" class="nav-item nav-link">PROJECTS</a>
                <a href="customer.php" class="nav-item nav-link">CUSTOMERS</a>
                <a href="career.php" class="nav-item nav-link">CAREERS</a>
               
                <a href="contact.php" class="nav-item nav-link">CONTACT US</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

</body>

</html>
