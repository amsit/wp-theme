<?php get_header(); ?>

  <div class="span11 content">

    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="featured-image">
            <?php the_post_thumbnail(array(250,250)); ?>
          </div>
        <?php endif; ?>

        <?php the_content(); ?>

      <?php endwhile; ?>

    <?php else : ?>

    <h2>Nothing Found!</h2>

    <?php endif; ?>

  </div> <!-- /content -->

<?php get_footer(); ?>