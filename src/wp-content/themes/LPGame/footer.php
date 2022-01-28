
</div><!-- #page -->
<footer class="l__footer">
    <div class="pnavi">
        <a href="#page"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/p-navi.png" alt=""></a>
    </div>
    <div class="l__footer--inner">
        <div class="l__footer--logo wow fadeInUp">
            <div class="img__logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_footer.png" alt="">
            </div>
            <div class="social__network ">
                <ul>
                    <li><a href=""> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_tw.png" alt=""></a></li>
                    <li><a href=""> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_fb.png" alt=""></a></li>
                    <li><a href=""> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_in.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="l__footer--content">
            <div class="l__footer--address">
                <div class="footer__address--ttl wow fadeInUp">
                    <?php if(pll_current_language() == 'vi'): ?>
                        <p><?php echo get_field('footer_address_title',158);?></p>
                    <?php else: ?>
                        <p><?php echo get_field('footer_address_title',44);?></p>
                    <?php endif; ?>
                </div>
                <ul>
                    <li class="address__cnt wow fadeInUp" data-wow-delay="0.5s">
                        <?php if(pll_current_language() == 'vi'): ?>
                            <?php echo get_field('footer_address_description',158);?>
                        <?php else: ?>
                            <?php echo get_field('footer_address_description',44);?>
                        <?php endif; ?>
                    </li>
                    <li class="phone__number wow fadeInUp" data-wow-delay="0.7s">
                        <?php if(pll_current_language() == 'vi'): ?>
                        <p><?php echo get_field('footer_number_phone',158);?></p>
                        <?php else: ?>
                            <p><?php echo get_field('footer_number_phone',44);?></p>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <div class="l__footer--subscribe">
                <div class="footer__address--ttl wow fadeInUp">
                        <?php if(pll_current_language() == 'vi'): ?>
                            <p><?php echo get_field('subscribe_title',158);?></p>
                        <?php else: ?>
                            <p><?php echo get_field('subscribe_title',44);?></p>
                        <?php endif; ?>
                </div>
                <div class="footer__subscribe--cnt wow fadeInUp" data-wow-delay="0.5s">
                    <?php if(pll_current_language() == 'vi'): ?>
                    <p><?php echo get_field('subscribe_description',158);?></p>
                        <?php else: ?>
                            <p><?php echo get_field('subscribe_description',44);?></p>
                        <?php endif; ?>
            
                    <div class="block__email wow fadeInUp" data-wow-delay="0.7s">
                        <?php the_field('email_subscribers');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <p>2017 Copyright. Policy.</p>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
