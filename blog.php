<?php /*
    template Name: blog
*/
get_template_part('templates/blog/header');
?>


      <div class="hero hidden">
              <div class="nav">
                <div class="nav-left">
                <?php
                $luminance = 180;
                if($luminance > 170) {?>
                  <a class="nav-item logo logo-light" href="<?php bloginfo('url')?>">
                  <img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt="">                                      
                <?php }else { ?>
                  <a class="nav-item logo logo-dark" href="<?php bloginfo('url')?>">
                  <img class="white--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/white-logo.svg" alt="">
                <?php } ?>
                </a></div><span id="nav-toggle2" class="nav-toggle"><span></span><span></span><span></span></span>
                <?php if($luminance > 170) { ?>
                <div class="nav-right nav-menu is--dark">
                <?php }else{ ?>
                <div class="nav-right nav-menu">                
                <?php } ?>
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                                          
                <a class="nav-item nav-item__request popup-open" title="">Request A Demo</a></div>
                <div class="toggleMenu" id="toggleMenu"><a class="toggleMenu--logo" href="<?php bloginfo('url')?>"><img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt=""></a>
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                  <a class="req-a-demo popup-open">Request A Demo</a>
                </div>
              </div>
      </div>      

      <div id="featured_slider">
      <?php 
        $wpb_all_query = new WP_Query(array('post_type'=>'post','meta_query'  => array(
          array(
            'key' => 'meta-box-checkbox',
            'value' => 'true'
          )
        ),
        'post_status'=>'publish', 'posts_per_page'=>'3')); ?>
        
          <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          <div>
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
                  <a class="nav-item logo logo-light" href="<?php bloginfo('url')?>">
                  <img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt="">                                      
                <?php }else { ?>
                  <a class="nav-item logo logo-dark" href="<?php bloginfo('url')?>">
                  <img class="white--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/white-logo.svg" alt="">
                <?php } ?>
                </a></div><span class="nav-toggle"><span></span><span></span><span></span></span>
                <?php if($luminance > 170) { ?>
                <div class="nav-right nav-menu is--dark">
                <?php }else{ ?>
                <div class="nav-right nav-menu">                
                <?php } ?>
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                                          
                <a class="nav-item nav-item__request popup-open" title="">Request A Demo</a></div>
                <div class="toggleMenu" id="toggleMenu"><a class="toggleMenu--logo" href="<?php bloginfo('url')?>/blog"><img class="blue--logo" src="<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg" alt=""></a>
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                  <a class="req-a-demo popup-open">Request A Demo</a>
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
                  <p><?php echo wp_trim_words( get_the_content(), 40 ) ?></p>
                  <a class="featured__more" href="<?php the_permalink(); ?>">Continue reading</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </header>
    </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
<?php wp_reset_postdata(); ?>
</div>
    
    <section class="section" id="recent">
      <div class="container is-fluid is-marginless">
        <div class="columns">
          <div class="recent column is-half is-offset-one-quarter">
            <h3>Recent Articles</h3>
            <?php 
            $wpb_all_query = new WP_Query(
            array ('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>10, 'paged' => get_query_var('paged'), 'meta_query'=> array (
              array (
                'key' => 'meta-box-checkbox',
                'value' => false
              )
            ))
            ); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>

              <!-- the loop -->
              <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="recent__item tile is-ancestor">
                  <div class="tile is-4 is-parent">
                    <div class="tile is-child recent__item__img">
                    <a href="<?php the_permalink()?>">
                      <?php 
                      if(has_post_thumbnail()){
                        the_post_thumbnail('blog');
                      }else {
                        $img = get_template_directory_uri()."/assets/blog/images/bg/header.jpg";
                      ?>
                      <img src="<?= $img ?>"/>
                      <?php } ?>  
                    </a>
                    </div>
                  </div>
                  <div class="tile is-parent">
                    <div class="tile is-child">
                    <?php
                      $colorList = [
                        'case-studies' => '#151AE6',
                        'research' => '#0F752B',
                        'industry' => '#0BA1A5',
                        'infectious-diseases' => '#ef0b0b',
                        'hospital-culture' => '#0BA1A5',
                        'ratings-recognition' => '#ff9100',
                        'laws-Regulation' => '#225EDD',
                        'hand-hygiene' => '#00d1b2',
                        'regulations' => '#20cffb',
                        'uncategorized' => '#225EDD'
                      ];
                      
                      foreach((get_the_category()) as $category) {
                      $catSlug = $category->slug;
                      $catName = $category->cat_name;
                      ?>
                      <div class="recent__category" style="color:<?= $colorList[$catSlug] ?>"><?= $catName ?></div>
                     <?php } ?>
                      <a href="<?php the_permalink(); ?>" class="recent__title title">
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
              <p><?php _e( 'Sorry, no posts matched your criteria :D.' ); ?></p>
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
                  <h2 class="subscribe__title">Subscribe Now</h2>
                  <p class="subscribe__text">Join our mailing list & newsletter.</p>
                </div>
                <div class="column">
                  <form class="subscribe__form" id="subscribe_form" method="post">
                    <div><input class="input" name="name" type="text" placeholder="Full Name"/></div>
                    <div><input class="input" name="email" type="email" placeholder="Email"/></div>
                    <div><input class="input" name="companyName" type="text" placeholder="Company Name"/></div>
                    <div><input class="submit" id="submit" type="submit" value="Get in Touch"/></div>
                  </form>
                  <div id="message" style="display:none">Thanks 😎</div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part('templates/blog/footer'); ?>