<?php
$args = array(
  'post_type' => 'menus', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
  'tax_query' => array(
    array(
      'taxonomy' => 'menus-cat', // カスタムタクソノミーの名前
      'field'    => 'slug',
      'terms'    => 'sushi-roulette', // タームのスラッグ
    ),
  ),
);

$menus = get_posts($args);
?>
<?php get_header(); ?>
<div class="container mx-auto">
  <div class="c-fv">
    <div class="c-fv__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_limg.webp" alt="" /></div>
  </div>
  <div class="c-2cols">
    <div class="c-2cols__col">
      <a href="/checkup/mobileCheckup"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_bnr_junkai.webp" alt="巡回検診"></a>
    </div>
    <div class="c-2cols__col">
      <div class="flex items-center justify-between c-gradient-box">
        <div class="text-main font-bold text-3xl">各種検査</div>
        <div class="flex flex-col">
          <a href="/checkup/stresscheck" class="c-card-button mb-4">ストレスチェック</a>
          <a href="/checkup/sas" class="c-card-button mb-4">SAS検査</a>
          <a href="/checkup/dental" class="c-card-button mb-4">歯周病検査</a>
        </div>
      </div>
    </div>
    <div class="c-2cols__col">
      <a href="/online"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_bnr_online.webp" alt="オンライン外来"></a>
    </div>
  </div>
  <div class="c-section">
    <h2 class="c-title">ニュース</h2>
    <div class="c-blog-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="c-blog-list__item">
            <p class="c-blog-list__item__date"><?php the_date(); ?></p>
            <h2 class="c-blog-list__item__title"><a href="<?php the_permalink(); ?>" class="c-blog-list__item__title__link"><?php the_title() ?></a></h2>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
    <div class="mt-8 text-center">
      <a href="/news" class="c-button">全て見る</a>
    </div>
  </div>
</div>
<div class="u-bg-main-alpha c-section">
  <div class="container mx-auto">
    <div class="md:flex">
      <div>
        <h2 class="font-bold">
          メディカルフロントクリニック<br>
          <span class="text-5xl text-main">Wellness for LIFE</span>
        </h2>
        <h3 class="font-bold">自分のため、家族のために健康で長く働ける幸せな生活を</h3>
        <p>「早期発見」を目指して
          日本における死亡原因のトップである「がん」は、早期発見こそが治療へのもっとも確実なステップです。
        </p>
        <p>
          また、近年では生活習慣に基づく疾患の発見と予防が重視されています。</p>
        <p>
          そのほか職場によっておこりうる特殊な環境による薬品中毒や感染症なども、兆候を早期発見することが大切です。
          定期的な健康診断を受けることで、様々な病気の早期発見を目指します。</p>
      </div>
      <div class="shrink-0 pl-8"><img src="<?= get_template_directory_uri(); ?>/assets/images/img_about_busph.webp" alt=""></div>
    </div>
    <div class="c-2cols mt-4">
      <div class="c-2cols__col"><a href="/about"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_aboutclinic.webp" alt="クリニックについて"></a></div>
      <div class="c-2cols__col"><a href="/Towimc"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_tantousha.webp" alt="ご担当者様へ"></a></div>
    </div>
  </div>
</div>
<div class="container mx-auto c-section">
  <h2 class="c-title">健康診断</h2>
  <p class="text-center mb-8">Medical Front Clinicでは、健康状態をチェックできる健康診断を各種行っています。</p>
  <div class="c-3cols c-3cols--start">
    <div class="c-3cols__col">
      <a href="/checkup/mobileCheckup" class="c-card-button inline-block w-full">巡回健診</a>
    </div>
    <div class="c-3cols__col">
      <a href="/checkup/vaccination" class="c-card-button inline-block w-full">予防接種</a>
    </div>
  </div>
  <div class="c-3cols c-3cols--start">
    <div class="c-3cols__col">
      <a href="/checkup/stresscheck" class="c-card-button inline-block w-full">ストレスチェック</a>
    </div>
    <div class="c-3cols__col">
      <a href="/checkup/sas" class="c-card-button inline-block w-full">SAS検査</a>
    </div>
    <div class="c-3cols__col">
      <a href="/checkup/dental" class="c-card-button inline-block w-full">歯周病検査</a>
    </div>
  </div>
  <div class="c-3cols c-3cols--start">
    <div class="c-3cols__col">
      <a href="/checkup/healthguid" class="c-card-button inline-block w-full">労災二次健診</a>
    </div>
    <div class="c-3cols__col">
      <a href="/checkup/resultguide" class="c-card-button inline-block w-full">検査結果ガイド</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>