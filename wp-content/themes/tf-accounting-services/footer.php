<?php 
/* Footer Template */
?>

<footer class="footer">
        <nav>
            <?php
                    wp_nav_menu( $arg = array (
                            'menu_class' => 'footer-navigation',
                            'theme_location' => 'footer'
                    ));
                ?>
        </nav>
        <p class="copyright">
            <small>All content on this site &copy; T & F Accounting Services, LLC</small></br>
            <small>Web Developed and Design by : Josette Rojas</small>
        </p>
    </footer>
<?php wp_footer(); ?>
</body>

</html>