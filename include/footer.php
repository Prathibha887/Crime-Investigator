        <!-- Footer Start -->
               <!-- Footer Start -->

        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url(footer.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-5">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4"><img src="img/logo1.png" width=90> Crime Ivestigator</h4>
                            <p style="text-align:justify">we are committed to serving and protecting our community with integrity, professionalism, and dedication. Our mission is to ensure the safety and security of all residents, uphold the law, and provide assistance to those in need.
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/MyGovIndia/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://twitter.com/mygovindia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.instagram.com/mygovindia/"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.youtube.com/mygovindia"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    if($_SESSION['type'] == 'User'){
                    ?>
                    <div class="col-md-6 col-lg-6 col-xl-3" id="mid">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Quick Links</h4>
                            <a href="home1.php"><i class="fas fa-angle-right me-2"></i>Home</a>
                            <a href="add-complaint.php"><i class="fas fa-angle-right me-2"></i>Add Compalint</a>
                            <a href="view-complaint.php"><i class="fas fa-angle-right me-2"></i>View Complaint</a>
                            <a href="prision-request.php"><i class="fas fa-angle-right me-2"></i>Prisons Request Time</a>
                            <a href="change-password.php"><i class="fas fa-angle-right me-2"></i>Settings</a>
                            <a href="feedback.php"><i class="fas fa-angle-right me-2"></i>Feedback</a>
                            </div>
                    </div>
                    <?php
                    } 
                    else{
                        ?>
                        <div class="col-md-6 col-lg-6 col-xl-3" id="mid">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Quick Links</h4>
                            <a href="home1.php"><i class="fas fa-angle-right me-2"></i>Home</a>
                            <a href="fir.php"><i class="fas fa-angle-right me-2"></i>FIR</a>
                            <a href="view-prisoner-time.php"><i class="fas fa-angle-right me-2"></i>Verify Prisons Time</a>
                            <a href="complaints.php"><i class="fas fa-angle-right me-2"></i> Complaints</a>
                            <a href="prision-request.php"><i class="fas fa-angle-right me-2"></i> Criminal detection</a>
                            <a href="change-password.php"><i class="fas fa-angle-right me-2"></i> Settings</a>
                            <a href="feedback.php"><i class="fas fa-angle-right me-2"></i>Feedback</a>
                            </div>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Our Services</h4>
                            <a href="add-complaint.php"><i class="fas fa-angle-right me-2"></i>Add Compalint</a>
                            <a href="view-complaint.php"><i class="fas fa-angle-right me-2"></i>View Complaint</a>
                            <a href="prision-request.php"><i class="fas fa-angle-right me-2"></i> Prisons Request Time</a>
                            <a href="feedback.php"><i class="fas fa-angle-right me-2"></i>Feedback</a>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Info</h4>
                            <a href=""><i class="fa-solid fa-city"></i>    Director General of Police, CID</a>
                            <a href=""><i class="fas fa-map-marker-alt"></i> Special Units & Economic Offences, Bengaluru.</a>
                            <a href=""><i class="fas fa-envelope me-2"></i>cid@justice.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i>+91-9480800123</a>
                            <a href="" class="mb-3"><i class="fas fa-tty"></i>    080 - 22942444</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <!-- <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div> -->
                    <!-- <div class="col-md-6 text-center text-md-end text-white">
                    /*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
    </body>

</html>
