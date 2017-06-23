<?php /*
    template Name: blog
*/
get_template_part('templates/blog/header');
?>
            <?php 
                  $wpb_all_query = new WP_Query(array('post_type'=>'post','meta_query'  => array(
            array(
                'key' => 'meta-box-checkbox',
                'value' => 'true'
            )
        ), 'post_status'=>'publish', 'posts_per_page'=>'1')); ?>
                  <?php if ( $wpb_all_query->have_posts() ) : ?>
                  <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          <header>
          
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
                  <img class="white--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/white-logo.svg" alt="">
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
          <div class="section is--dark" id="featured">
        <?php }else{ ?>
          <div class="section" id="featured">
        <?php } ?>
          <div class="container">
          
            <div class="columns">
              <div class="column is-half column-all">
                <div class="featured">
                  <h3>Featured</h3>
                  <h2 class="title"><?php the_title(); ?></h2>
                  <p><?php echo wp_trim_words( get_the_content(), 50 ) ?></p>
                  <a class="featured__more" href="<?php the_permalink(); ?>">Continue reading</a>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <?php wp_reset_postdata(); ?>

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
                      <!--<a class="nav-item" href="#" title="">Products</a>
                      <a class="nav-item" href="#" title="">Solutions</a>
                      <a class="nav-item" href="#" title="">About</a>
                      <a class="nav-item" href="#" title="">Contact</a>-->
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
    <section class="section" id="latest">
        <h3>Latest Articles</h3>
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
    <section class="section" id="recent">
      <div class="container is-fluid is-marginless">
        <div class="columns">
          <div class="recent column is-half is-offset-one-quarter">
            <h3>Recent Articles</h3>
            <?php 
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>10, 'paged' => get_query_var('paged'))); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>

              <!-- the loop -->
              <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="recent__item tile is-ancestor">
                  <div class="tile is-4 is-parent">
                    <div class="tile is-child recent__item__img">
                      <?php the_post_thumbnail('blog'); ?>
                    </div>
                  </div>
                  <div class="tile is-parent">
                    <div class="tile is-child">
                      <div class="recent__category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div><a href="<?php the_permalink(); ?>" class="recent__title title">
                        <h2><?php the_title(); ?></h2></a>
                      <p class="recent__paragraph"><?php echo wp_trim_words( get_the_content(), 50 ) ?></p>
                      <hr class="recent__breaker">
                      <div class="recent__date"><?php the_time('j F Y'); ?></div>
                      <div class="recent__time">
                      <?php 
                      $readingTime = get_post_meta($post->ID, 'readingTime', true);
                      if($readingTime){
                        echo $readingTime;
                        echo ' read';
                      }?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php echo wp_pagenavi( array( 'query' => $wpb_all_query ) ); ?>
            <!--<a class="recent__more" href="#">More Articles</a>-->
          </div>
        </div>
      </div>
    </section>

    <section id="subscribe">
      <div class="container is-fluid is-marginless">
        <div class="columns">
          <div class="recent column is-half is-offset-one-quarter">
            <div class="column">
              <div class="columns">
                <div class="subscribe__outer column is-two-thirds">
                  <h3 class="subscribe__title">Let's talk possibilites</h3>
                  <p class="subscribe__text">Our Platform does a lot. Tell us what you're looking for, and we can probably make it happen.</p>
                </div>
                <div class="column">
                  <form class="subscribe__form">
                    <div><input class="input" type="text" placeholder="Full Name"/></div>
                    <div><input class="input" type="email" placeholder="Email"/></div>
                    <div><input class="input" type="text" placeholder="Company Name"/></div>
                    <div><input class="submit" type="submit" value="Get in Touch"/></div>
                  </form>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part('templates/blog/footer'); ?>