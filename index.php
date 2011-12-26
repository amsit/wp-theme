<?php get_header(); ?>

  <div class="span11 content">

    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>

      <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
      <p><?php the_content(); ?></p>

      <?php endwhile; ?>

    <?php else : ?>

    <h2>Nothing Found!</h2>

    <?php endif; ?>

  </div> <!-- /content -->

<?php get_footer(); ?>