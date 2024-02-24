<!-- Footer -->
<footer class="bg-dark text-light text-center text-md-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column 1 -->
            <div class="col-md-12 col-lg-6  mb-4 mb-md-0">
                <h5 class="text-uppercase">The best hosting for you</h5>
                <p>
                    Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                </p>
                <div class="d-flex align-items-end">
                    <p class="mb-0 fs-5">Excellent&nbsp;&nbsp;:&nbsp;</p>
                    <span class="bg-success ms-2 p-1"><i class="fa-solid fa-star text-white"></i></span>
                    <span class="bg-success ms-1 p-1"><i class="fa-solid fa-star"></i></span>
                    <span class="bg-success ms-1 p-1"><i class="fa-solid fa-star"></i></span>
                    <span class="bg-success ms-1 p-1"><i class="fa-solid fa-star"></i></span>
                    <span class="bg-success ms-1 p-1"><i class="fa-solid fa-star"></i></span>
                </div>
                <p class="fs-5 mt-2"><span class="fw-bold">4.9</span> sur 5 basé sur <span class="fw-bold">92
                        avis&nbsp;&nbsp;</span><i class="fa-solid fa-star text-success"></i>&nbsp;Trustpilot
                </p>
            </div>

            <!--Grid column 2 -->
            <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                <h5 class="text-uppercase mb-2">Socials networks</h5>
                <p></p>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-center justify-content-md-start align-items-center">
                        <!-- Facebook -->
                        <a class="btn btn-link btn-floating btn-lg text-light" href="https://facebook.com" role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-facebook"></i></a>
                        <span>Facebook</span>
                    </li>
                    <li class="d-flex justify-content-center justify-content-md-start align-items-center">
                        <a class="btn btn-link btn-floating btn-lg text-light" href="https://twitter.com" role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-twitter"></i></a>
                        <span>Twitter</span>
                    </li>
                    <li class="d-flex justify-content-center justify-content-md-start align-items-center">
                        <a class="btn btn-link btn-floating btn-lg text-light" href="https://instagram.com" role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-instagram"></i></a>
                        <span>Instagram</span>
                    </li>
                    <li class="d-flex justify-content-center justify-content-md-start align-items-center">
                        <a class="btn btn-link btn-floating btn-lg text-light" href="https://linkedin.com" role="button" data-mdb-ripple-color="dark" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <span>Linkedin</span>
                    </li>
                </ul>
            </div>

            <!--Grid column 3 -->
            <div class="col-md-6 col-lg-3  mb-4 mb-md-0">
                <h5 class="text-uppercase fw-bold mb-4">Contact</h5>
                <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
        </div>
    </div>
    <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="d-flex flex-column flex-md-row justify-content-center p-3 bg-darkGray">
        <p class="mb-0 text-uppercase">
            ©&nbsp;<span id="year" class="ms-1 me-2"></span>Copyright
        </p>
        <a class="text-light text-decoration-none ms-sm-0 ms-md-3" href="https://daniel-ventura.com" target="_blank">dan-vent</a>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'legal', // doit correspondre avec le menu dans functions.php
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'legal__menu__footer', // ma classe personnalisée 
            )
        );
        ?>
        <p class="mb-0 text-uppercase ms-sm-0 ms-md-3">All Right reserved</p>
    </div>
    <!-- Copyright -->
</footer>
<?php wp_footer(); ?>
</main><!-- classe main -->
</body>

</html>