<?php get_header(); ?>
<article>
  <div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="p-6 mb-8 mx-auto container">
          <div class="p-page-fv">
            <div>
              <h1 class="p-page-fv__title"><?php the_title(); ?></h1>
              <div><?php the_field('en_title'); ?></div>
            </div>
          </div>
        </div>
        <div class="p-page__excerpt">
          <?php the_excerpt(); ?>
        </div>
        <div class="p-6 mx-auto container">
          <div>
            <?php the_content(); ?>
          </div>
          <p><?php the_date(); ?></p>
        </div>
    <?php endwhile;
    endif ?>
  </div>
</article>
<?php get_footer(); ?>