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
<div class="c-container">
  <div class="mx-auto">
    <div class="c-fv c-fade-in">
      <div class="c-fv__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_limg.webp" alt="" /></div>
    </div>
    <div class="c-section ">
      <div class="c-2cols">
        <div class="c-2cols__col c-fade-in">
          <a href="/cms/checkup/mobileCheckup"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_bnr_junkai.webp" alt="巡回検診"></a>
        </div>
        <div class="c-2cols__col c-fade-in">
          <div class="md:flex items-center justify-between sm:c-gradient-box">
            <div class="text-main font-bold text-3xl hidden sm:block">各種検査</div>
            <div class="flex flex-col">
              <a href="/cms/checkup/stresscheck" class=" mb-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btns_dental_20230614221443685.webp" alt="ストレスチェック"></a>
              <a href="/cms/checkup/sas" class=" mb-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btns_sas_20230614221443685.webp" alt="SAS検査"></a>
              <a href="/cms/checkup/dental" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btns_stress_20230614221443685.webp" alt="ストレスチェック"></a>
            </div>
          </div>
        </div>
        <div class="c-2cols__col c-fade-in">
          <a href="/cms/online"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_bnr_online.webp" alt="オンライン外来"></a>
        </div>
      </div>
    </div>
    <div class="c-section c-fade-in">
      <div class="c-title-container">
        <h2 class="c-title"><span class="c-title__text">ニュース</span></h2>
        <p class="c-title__sub">NEWS</p>
      </div>
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
        <a href="/cms/news" class="c-button">全て見る</a>
      </div>
    </div>
  </div>
  <div class="u-bg-main-alpha c-section">
    <div class="mx-auto">
      <div class="md:flex">
        <div>
          <h2 class="font-bold c-fade-in">
            メディカルフロントクリニック<br>
            <span class="text-5xl text-main">Wellness for LIFE</span>
          </h2>
          <h3 class="font-bold c-fade-in">自分のため、家族のために健康で長く働ける幸せな生活を</h3>
          <div class="c-fade-in">
            <p><span style="background: #e5f05b;">「早期発見」を目指して</span><br>
              日本における死亡原因のトップである「がん」は、早期発見こそが治療へのもっとも確実なステップです。
            </p>
            <p>
              また、近年では生活習慣に基づく疾患の発見と予防が重視されています。</p>
            <p>
              そのほか職場によっておこりうる特殊な環境による薬品中毒や感染症なども、兆候を早期発見することが大切です。
              定期的な健康診断を受けることで、様々な病気の早期発見を目指します。</p>
          </div>
        </div>
        <div class="shrink-0 pl-8 c-fade-in"><img src="<?= get_template_directory_uri(); ?>/assets/images/img_about_busph.webp" alt=""></div>
      </div>
      <div class="c-2cols mt-4 c-fade-in">
        <div class="c-2cols__col"><a href="/cms/about"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_aboutclinic.webp" alt="クリニックについて"></a></div>
        <div class="c-2cols__col"><a href="/cms/Towimc"><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_tantousha.webp" alt="ご担当者様へ"></a></div>
      </div>
    </div>
  </div>
  <div class="mx-auto c-section">
    <div class="c-fade-in">
    <div class="c-title-container">
        <h2 class="c-title"><span class="c-title__text">健康診断</span></h2>
        <p class="c-title__sub">MEDICAL CHECKUP</p>
      </div>
      <p class="text-center mb-8">Medical Front Clinicでは、健康状態をチェックできる健康診断を各種行っています。</p>
    </div>
    <div class="c-3cols c-3cols--start">
      <div class="c-3cols__col c-fade-in">
        <a href="/cms/checkup/mobileCheckup" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_junkai_20230524230743559.webp" alt="巡回検診"></a>
      </div>
      <div class="c-3cols__col c-fade-in">
        <a href="/cms/checkup/vaccination" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_yobousesshu.webp" alt="予防接種"></a>
      </div>
    </div>
    <div class="c-3cols c-3cols--start">
      <div class="c-3cols__col c-fade-in">
        <a href="/cms/checkup/stresscheck" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btns_dental_20230614221443685.webp" alt="ストレスチェック"></a>
      </div>
      <div class="c-3cols__col c-fade-in">
        <a href="/cms/checkup/sas" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btns_sas_20230614221443685.webp" alt="SAS検査"></a>
      </div>
      <div class="c-3cols__col c-fade-in">
        <a href="/cms/checkup/dental" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btns_stress_20230614221443685.webp" alt="歯周病検査"></a>
      </div>
    </div>
    <div class="c-3cols c-3cols--start">
      <div class="c-3cols__col c-fade-in">
        <a href="/cms/checkup/healthguid" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_nijikenshin.webp" alt="労災二次検診"></a>
      </div>
      <div class="c-3cols__col c-fade-in">
        <a href="/cms/checkup/resultguide" class=""><img src="<?= get_template_directory_uri(); ?>/assets/images/top_btn_kensaguid.webp" alt="検査結果ガイド"></a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>