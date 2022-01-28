<?php
/*
    Template Name: Top Page
*/
get_header(); ?>
<div class="block__mainvisual">
    <div class="block__mainvisual--inner">
        <div class="block__mainvisual--title wow fadeInUp">
            <h1><?php the_field('main_visual_title');?></h1>
        </div>
        <div class="block__countdown wow fadeInUp" data-wow-delay="0.5s">
            <ul>
            <?php if(pll_current_language() == 'vi'): ?>
                <li><p><span id="item__days">30</span><small>:</small></p><?php echo get_field('name_days',158);?></li>
                <li><p><span id="item__hours">18</span><small>:</small></p><?php echo get_field('name_hours',158);?></li>
                <li><p><span id="item__minutes">20</span><small>:</small></p><?php echo get_field('name_minutes',158);?></li>
                <li><p><span id="item__seconds">11</span></p><?php echo get_field('name_seconds',158);?></li>
            <?php else: ?>
                <li><p><span id="item__days">30</span><small>:</small></p><?php echo get_field('name_days',44);?></li>
                <li><p><span id="item__hours">18</span><small>:</small></p><?php echo get_field('name_hours',44);?></li>
                <li><p><span id="item__minutes">20</span><small>:</small></p><?php echo get_field('name_minutes',44);?></li>
                <li><p><span id="item__seconds">11</span></p><?php echo get_field('name_seconds',44);?></li>
            <?php endif; ?>

            </ul>
        </div>
        <div class="block__description wow fadeInUp" data-wow-delay="1s">
            <p><?php the_field('main_visual_description');?></p>
        </div>
        <div class="block__email wow fadeInUp" data-wow-delay="1.5s">
            <?php the_field('email_subscribers');?>
            <!-- <input type="email" name="" id="" placeholder="<?php echo get_field('placeholder_email',44);?>"> -->
        </div>
    </div>
</div>
<div class="block__about">
    <div class="l__container">
        <div class="block__about--inner">
            <div class="block__about--lft" id="counter">
                <div class="about__title wow fadeInUp">
                    <h2><?php the_field('about_us_title');?></h2>
                </div>
                <div class="about__description wow fadeInUp" data-wow-delay="0.5s">
                    <p><?php the_field('about_us_description');?></p>
                </div>
                <div class="about__total wow fadeInUp">
                    <p class="total_number number-user counter-value" data-count="600">600<small>+</small></p>
                    <?php if(pll_current_language() == 'vi'): ?>
                        <p class="total_name"><?php echo get_field('user_name',158);?></p>
                    <?php else: ?>
                        <p class="total_name"><?php echo get_field('user_name',44);?></p>
                    <?php endif; ?>
                    
                </div>
                <div class="about__total wow fadeInUp">
                    <p class="total_number number-games counter-value" data-count="135" >135<small>+</small></span></p>
                    <?php if(pll_current_language() == 'vi'): ?>
                        <p class="total_name"><?php echo get_field('game_name',158);?></p>
                    <?php else: ?>
                        <p class="total_name"><?php echo get_field('game_name',44);?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="block__about--rgt">
                <div class="block__rgt--inner">
                    <div class="block__item">
                        <div class="item__icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_hour.png" alt="">
                        </div>
                        <div class="item__content">
                            <h3 class="wow fadeInUp"><?php the_field('time_hour_caption');?></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"><?php the_field('time_hour_description');?></p>
                        </div>
                    </div>
                    <div class="block__item">
                        <div class="item__icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_team.png" alt="">
                        </div>
                        <div class="item__content">
                            <h3 class="wow fadeInUp"><?php the_field('design_caption');?></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"><?php the_field('design_caption_description');?></p>
                        </div>
                    </div>
                    <div class="block__item">
                        <div class="item__icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_design.png" alt="">
                        </div>
                        <div class="item__content">
                            <h3 class="wow fadeInUp"><?php the_field('team_caption');?></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"><?php the_field('team_description');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block__map">
    <div class="image__map">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/main/pin-map.png" alt="">
    </div>
    <div class="witch">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/main/witch.png" alt="">
    </div>
</div>
<div class="our__games">
    <div class="our__games--ttl">
        <h2 class="wow fadeInUp"><?php the_field('our_game_title');?></h2>
        <p class="wow fadeInUp" data-wow-delay="0.5s"><?php the_field('our_game_description');?></p>
    </div>
    <?php
        $post_args = array(
            'post_type' => 'post',
            'paged'     => $paged,
            'order'     => 'ASC',
            'posts_per_page' => 12,
        );
        $post_args = new WP_Query($post_args);
    ?>
     <?php if ($post_args -> have_posts()) : ?>
        <div class="our__games--cnt">
            <?php while ($post_args -> have_posts()) : $post_args -> the_post();?>
                <div class="our__games--item wow fadeInUp">
                    <div class="our__games--wrap">
                        <a href="<?php the_permalink() ?>">
                            <div class="our__games--img">
                                <img src="<?php the_post_thumbnail_url()?>" alt="">
                            </div>
                            <div class="our__games--body">
                                <h3><?php the_title();?></h3>
                             
                                    <?php the_content();?>
                              
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php wp_reset_postdata(); ?>
    <?php endif;?> 
</div>
<div class="our__partners">
    <div class="our__partners--ttl wow fadeInUp">
        <h2><?php the_field('our_partners_title');?></h2>
    </div>
    <div class="our__partners--cnt">
        <div class="our__partners--slick">
            <?php 
                $partnerss = get_field('our_partners_banner');
                if( $partnerss ): ?>
                <?php foreach( $partnerss as $partners ): ?>
                    <div class="our__partners--item">
                        <img src="<?php echo esc_url($partners['url']); ?>" alt="<?php echo esc_attr($partners['alt']); ?>" />
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();?>
