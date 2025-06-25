<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Crime Investigation</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
           

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

       

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+91-9480800123</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>cid@justice.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/MyGovIndia/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/mygovindia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/mygovindia/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/mygovindia" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="text-primary m-0 fs-3"><img src="img/logo1.png" width=90> Crime Investigator</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    <?php
                    if($_SESSION['type'] == 'Police'){
                    ?>
                        <a href="home1.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home1.php' ? 'active' : ''; ?> ">Home</a>
                        <a href="fir.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'fir.php' ? 'active' : ''; ?> ">FIR</a>
                        <a href="view-prisoner-time.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-prisoner-time.php' ? 'active' : ''; ?> "> Verify Prisons time</a>
                        <a href="complaints.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'complaints.php' ? 'active' : ''; ?>">Complaints</a>
                        <a href="http://127.0.0.1:5000" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'http://127.0.0.1:5000' ? 'active' : ''; ?>">Criminal Detection</a>
                        <a href="change-password.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'change-password.php' ? 'active' : ''; ?>">Settings</a>

                    <?php
                    } else {
                    ?>
                        <a href="home.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?> ">Home</a>
                        <a href="add-complaint.php" class="nav-item  nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'add-complaint.php' ? 'active' : ''; ?>">Add Complaint</a>
                        <a href="view-complaint.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-complaint.php' ? 'active' : ''; ?>">View complaint</a>
                        <a href="prision-request.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'prision-request.php' ? 'active' : ''; ?>">Prisons Request time</a>
                        <a href="change-password.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'change-password.php' ? 'active' : ''; ?>">Settings</a>
                        <a href="feedback.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'feedback.php' ? 'active' : ''; ?>">Feedback</a>
                    <?php
                    }
                    ?>
                    </div>
                    <a href="include/logout.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Logout</a>
                </div>
            </nav>
