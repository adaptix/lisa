  <div><!-- Blog post thumbnail begins here. -->
    <?php if ( has_post_thumbnail()) : ?>
     <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
     <?php the_post_thumbnail(); ?></a>
    <?php endif; ?>
  </div><!-- Blog post thumbnail ends here. -->

  <h2><!-- Blog post title begins here. -->
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2><!-- Blog post title ends here. -->

  <p><!-- Blog post exerpt begins here. -->
    <?php the_excerpt(); ?>
  </p><!-- Blog post exerpt ends here. -->
