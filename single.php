<?php get_header(); ?>
<article>
  <div class="p-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="p-6 mb-8 mx-auto container">
          <div class="p-page-fv c-fade-in">
            <div>
              <h1 class="p-page-fv__title"><?php the_title(); ?></h1>
              <div>ーNEWSー</div>
            </div>
          </div>
        </div>
        <div class="p-page__excerpt">
          <div class="c-container breadcrumbs c-fade-in">
            <?php custom_breadcrumbs(); ?>
          </div>
        </div>
        <div class="p-6 mx-auto c-container">
          <div class="mb-4"><?php the_date(); ?></div>
          <div>
            <?php the_content(); ?>
          </div>
        </div>
    <?php endwhile;
    endif ?>
    <div class="p-6 mx-auto container">
      <div class="p-pagination">
        <div class="p-pagination__prev"><?php previous_post_link('%link', '前の記事へ'); ?></div>
        <div class="p-pagination__next"><?php next_post_link('%link', '次の記事へ'); ?></div>
      </div>
    </div>
  </div>
</article>
<?php get_footer(); ?>