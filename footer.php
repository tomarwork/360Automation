<!-- Footer Start -->
<div class="container-fluid  text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color:	#083a78;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3 "></i>213, 2nd Floor, Sonigara Landmark, Near Chhatrapati Chowk, Kaspate Wasti, Wakad, Pune – 411 057</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3 hover"></i>+91 95189 08598</p>
                <p class="mb-2"><i class="fa fa-envelope me-3 hover"></i>sales@360acpl.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Services</h5>
                <a class="btn btn-link" href="automation.php">Automation Solutions</a>
                <a class="btn btn-link" href="design_details.php">Design And Details Engineering</a>
                <a class="btn btn-link" href="digital_solution.php">Digital Factory solutions</a>
                <a class="btn btn-link" href="installation_com.php">Installation & Commissioning</a>
                <a class="btn btn-link" href="software_eng.php">Software Engineering</a>
                <a class="btn btn-link" href="panel_manif.php">Panel Manufacturing</a>

            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="contact.php">Contact Us</a>
                <a class="btn btn-link" href="service.php">Our Services</a>
                <a class="btn btn-link" href="#">Terms & Condition</a>
                <a class="btn btn-link" href="career.php">Careers</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>For any sales / orders / services related enquiries please feel free to connect to us on the mail address below:</p>
                <div class="position-relative w-100">
                    <input id="emailInput" class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" onclick="subscribe()">SignUp</button>
                </div>
            </div>

            <script>
                function subscribe() {
                    var email = document.getElementById("emailInput").value;
                    if (email) {
                        window.location.href = "mailto:sales@360acpl.com?subject=Newsletter Subscription&body=Please subscribe me to the newsletter. My email is: " + email;
                    } else {
                        alert("Please enter a valid email address.");
                    }
                }
            </script>

        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid py-4" style="background: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">

                <i class="fas fa-copyright me-2"></i><a class="border-bottom " href="#">360 AUTOMATION AND CONTROLS</a>, All right reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Designed By
                <a href="https://www.linkedin.com/in/vaishnavi-tomar-727a9320a" target="_blank">Tomar</a>
            </div>

        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>