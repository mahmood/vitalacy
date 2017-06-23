<?php 
$config = $GLOBALS['config'];
$footer_logo = $config['footer-logo']['url'];
get_template_part('templates/blog/header');
?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <header class="blog--post">
          <?php 
            if(!empty(get_post_thumbnail_id( $post->ID ))) {
              $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
              $luminance = calculateAvgLuminance($img[0], 10);  ?>
              <div class="bg--overlay"><?php the_post_thumbnail('featured'); ?></div>
            <?php } else {
              $img = get_template_directory_uri()."/assets/blog/images/bg/header.jpg";
              $luminance = calculateAvgLuminance($img, 10); ?>
            <div class="bg--overlay"><img src="<?= $img ?>"/></div>                                               
          <?php } ?>
          <div class="container is-fluid is-marginless">
            <div class="hero">
              <div class="nav">
                <div class="nav-left">
                <?php
                if($luminance > 170) {?>
                  <a class="nav-item logo logo-light" href="#">
                  <img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt="">                                      
                <?php }else { ?>
                  <a class="nav-item logo logo-dark" href="#">
                  <img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt="">
                <?php } ?>
                <!--<a class="nav-item logo logo-dark" href="#">-->
                </a></div><span class="nav-toggle"><span></span><span></span><span></span></span>
                <?php if($luminance > 170) { ?>
                <div class="nav-right nav-menu is--dark">
                <?php }else{ ?>
                <div class="nav-right nav-menu">                
                <?php } ?>
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                                          
                <a class="nav-item nav-item__request" href="#" title="">Request A Demo</a></div>
                <div class="toggleMenu" id="toggleMenu"><a class="toggleMenu--logo" href="#"><img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt=""></a>
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                  <a class="req-a-demo" href="#">Request A Demo</a>
                </div>
              </div>
            </div>

        <?php if($luminance > 170 ){ ?>
          <div class="section is--dark post--featured" id="featured">
        <?php }else{ ?>
          <div class="section post--featured" id="featured">
        <?php } ?>
          <div class="container">
          
            <div class="columns">
              <div class="column is-half is-offset-one-quarter">
                <div class="featured">
                  <h2 class="title"><?php the_title(); ?></h2>
              <?php endwhile; ?>

            <?php else : ?>
              <header>
                <div class="bg--overlay"><img src="<?php bloginfo('template_url') ?>/assets/blog/images/bg/header.jpg"></div>
                <div class="container is-fluid is-marginless">
                  <div class="hero">
                    <div class="nav">
                      <div class="nav-left"><a class="nav-item logo logo-light" href="#"><!-- or .logo-dark --><img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt=""></a></div><span class="nav-toggle"><span></span><span></span><span></span></span>
                      <?php if($luminance > 170) { ?>
                      <div class="nav-right nav-menu is--dark">
                      <?php }else{ ?>
                      <div class="nav-right nav-menu">                
                      <?php } ?>
                      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                        
                                            
                      <a class="nav-item nav-item__request" href="#" title="">Request A Demo</a></div>
                      <div class="toggleMenu" id="toggleMenu"><a class="toggleMenu--logo" href="#"><img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt=""></a>
                      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                        
                      <a class="req-a-demo" href="#">Request A Demo</a>
                      </div>
                    </div>
                  </div>
                Please select one post for featured post
                <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </header>
    <section class="section" id="post--article">
      <div class="container is-fluid is-marginless">
        <div class="columns">
          <div class="post column is-half is-offset-one-quarter">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="latest">
      <div class="container">
        <h3>Latest Articles</h3>
      </div>
      <div class="latest">
      <?php 
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="latest__item">
        <a href="<?php the_permalink();?>">
        
          <div class="latest__item__shadow"></div>
          <div class="latest__item__img">
            <?php the_post_thumbnail('blogSecond'); ?>            
          </div>
          <div class="latest__item__category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div>
          <p class="item__paragraph"><?php echo wp_trim_words( get_the_content(), 10 ) ?></p>
        </a>
          
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
    </section>
    <?php get_template_part('templates/blog/footer'); ?>