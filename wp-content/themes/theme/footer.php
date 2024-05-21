</div>

<footer class="footer">
    <div class="footer__container container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <?php the_custom_logo() ?>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'Footer menu',
                    'container' => '',
                    'menu_class' => 'footer__menu'
                )
            );
            ?>
            <div class="footer__copyright"><?php the_field('copyright', 'options') ?></div>
        </div>
    </div>
</footer>


</div>
<?php wp_footer(); ?>
</body>

</html>