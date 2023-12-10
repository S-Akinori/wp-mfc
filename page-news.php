<?php get_header(); ?>
<article>
  <div class="p-page">
    <div class="p-6 px-12 mb-8 mx-auto container">
      <div class="p-page-fv">
        <div>
          <h1 class="p-page-fv__title">ニュース</h1>
          <div>ーNEWSー</div>
        </div>
      </div>
    </div>
    <div class="p-page__excerpt">
      <div class="c-container breadcrumbs">
        <?php custom_breadcrumbs(); ?>
      </div>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="p-6 mx-auto container">
            <div><?php the_date(); ?></div>
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink();?>">続きを読む</a>
        </div>
    <?php endwhile;
    endif ?>
  </div>
</article>
<?php get_footer(); ?>