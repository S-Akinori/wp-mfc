<?php get_header(); ?>
<article>
  <div class="p-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="p-6 mb-8 c-container">
          <div class="p-page-fv c-fade-in">
            <img class="hiddem md:block absolute w-full h-full" src="<?= get_the_post_thumbnail_url(); ?>" alt="">
            <img class="md:hidden absolute w-full h-full" src="<?php the_field('sp_image') ; ?>" alt="">
            <div class="sm:w-2/3 z-10">
              <h1 class="p-page-fv__title"><?php the_title(); ?></h1>
              <div><?php the_field('en_title'); ?></div>
            </div>
          </div>
        </div>
        <div class="p-page__excerpt">
          <div class="c-container">
            <div class="breadcrumbs">
              <?php custom_breadcrumbs(); ?>
            </div>
            <div class="sm:pl-8"><?php the_excerpt(); ?></div>
          </div>
        </div>
        <div class="p-6 mx-auto c-container">
          <div>
            <?php the_content(); ?>
          </div>
        </div>
    <?php endwhile;
    endif ?>
  </div>
</article>
<?php get_footer(); ?>