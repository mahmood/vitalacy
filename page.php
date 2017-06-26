<div class="page-header">
  <?php
  get_header();
  ?>
</div>

<div class="page-content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    <p><?php the_content(__('')); ?></p>
  <?php endwhile; else: ?><?php endif; ?>
</div>
<div class="page-footer">
  <?php
  get_footer();
  ?>
</div>
