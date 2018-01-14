<div class="case-study__post">
  <div class="case-study__thumbnail">
    <?php if ( has_post_thumbnail()) : ?>
     <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <div class="case-study__title">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p class="case-study__description"><?php the_excerpt(); ?></p>
      <div class="case-study__tags">
        <p><?php the_tags(); ?></p>
      </div>
    </div>
  </div>

  <div class="hidden-xs scroll-down col-xs-12">
    <a href="#case-study-content">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/down-arrow.png" alt="Down arrow - to content">
    </a>
  </div>

  <div id="case-study-content">
    <?php the_content(); ?>
  </div>

</div><!-- /.blog-post -->
