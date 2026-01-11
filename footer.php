<div class="container-fluid bg-dark text-white-50 footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Brgy. Ayos Lomboy, Guimba, Nueva Ecija, Philippines</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0947 292 5406</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>barangayayoslomboy@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                         <?php if (isset($_SESSION['user_type'])) {
                        if ($_SESSION['user_type'] != "admin") { 
                        
                        ?>
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a href="Home-page" class="btn btn-link text-white-50">Home</a>
                        <?php
                            if (!isset($_SESSION['ID'])) {
                                echo '<a class="btn btn-link text-white-50" href="login">Login</a>
                                    <a class="btn btn-link text-white-50" href="register">Register</a>';
                            }
                        ?>
                        <a class="btn btn-link text-white-50" href="news">News</a>
                        <a class="btn btn-link text-white-50" href="events">Events</a>
                    
                        <?php 
                            }
                            }
                            else {
                        ?>            
                            <h5 class="text-white mb-4">Quick Links</h5>     
                            <a href="Home-page" class="btn btn-link text-white-50">Home</a>         
                            <a class="btn btn-link text-white-50" href="login">Login</a>
                            <a class="btn btn-link text-white-50" href="register">Register</a>
                            <a class="btn btn-link text-white-50" href="news">News</a>
                            <a class="btn btn-link text-white-50" href="events">Events</a>
                        <?php 
                            }
                        ?>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Map</h5>
                        <div class="row g-2 pt-2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30728.7872056418!2d120.74988081179288!3d15.692927852037737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33912c5ab3e8dd89%3A0x3109bbaa68b7ceae!2sAyos%20Lomboy%2C%20Guimba%2C%20Nueva%20Ecija!5e0!3m2!1sen!2sph!4v1698208537197!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Ayos Lomboy Barangay Management Information System</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<br>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                           Designed By <a class="border-bottom" href="groupPage">G5 IT Students</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="JS/jscode.js"></script>
</body>
</html>
