<?php get_header(); ?>
<article>
  <div class="p-page">
    <div class="p-6 sm:px-20 mb-8 mx-auto">
      <div class="p-page-fv c-fade-in">
        <div class="sm:w-2/3">
          <h1 class="p-page-fv__title">ニュース</h1>
          <div>ーNEWSー</div>
        </div>
      </div>
    </div>
    <div class="p-page__excerpt">
      <div class="c-container breadcrumbs c-fade-in">
        <?php custom_breadcrumbs(); ?>
      </div>
    </div>
    <div class="c-container c-fade-in">
      <div class="p-news-index">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="p-6 mx-auto container p-news-index__item">
              <div class="sm:w-2/3 mx-auto">
                <div class="p-news-index__item__date"><?php the_date(); ?></div>
                <h2 class="p-news-index__item__title"><a href="<?php the_permalink();?>" class="p-news-index__item__link"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <a class="p-news-index__item__link" href="<?php the_permalink();?>">続きを読む</a>
              </div>
            </div>
        <?php endwhile;
        endif ?>
      </div>
    </div>
  </div>
</article>
<?php get_footer(); ?>