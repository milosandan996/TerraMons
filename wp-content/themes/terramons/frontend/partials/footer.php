
<footer>
    <div class="container d-flex justify-content-between align-items-center">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/frontend/logo.png" style="height: 80px; width: 150px;"  alt="Slika nije ucitana"/>  
        </a>
        <div>
            <strong></strong><a style="text-decoration:none;" href="https://hp-web-art.rs">© <?php echo date('Y') ?>  HP Web Art - All rights reserved</a></strong>
        </div>
    </div>
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/owl.carousel.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/main.js" type="text/javascript"></script>

<!--font awesome icons-->
<script src="https://kit.fontawesome.com/af4151337a.js" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>
