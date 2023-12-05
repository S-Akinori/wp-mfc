<div class="container mx-auto c-section">
  <div class="u-bg-main-alpha p-12 border-main">
    <h2 class="font-bold text-4xl mb-8">
      ご不明な点は<br>
      お気軽にお問い合わせください
    </h2>
    <p><span class="material-symbols-outlined">
        mail
      </span>お問い合わせはこちらから
    </p>
    <div class="flex items-center my-8">
      <a href="" class="c-button mr-4">よくあるご質問</a>
      <a href="" class="c-button c-button--outline">お問い合わせ</a>
    </div>
    <p>お電話でのお問い合わせ</p>
    <p>
      <span class="material-symbols-outlined">
        call
      </span>
      03-6807-8688 <span class="text-sm">（平日10:00〜18:00）</span>
    </p>
    <p>
      <span class="material-symbols-outlined">
        mail
      </span>
      info@m-f-c.tokyo
    </p>
  </div>
</div>
</main>
<footer class="footer">
  <div class="c-container mx-auto">
    <div class="footer__top">
      <div class="c-logo mx-auto md:ml-0 md:mr-auto mb-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></div>
      <div class="text-center md:text-left whitespace-pre-wrap"><?= get_option('company_address'); ?></div>
    </div>
    <!-- <div>
      <ul class="footer__link-list">
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topMessage' : home_url("#topMessage"); ?>">メッセージ</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topFeatures' : home_url("#topFeatures"); ?>">3つの特徴</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topMenu' : home_url("#topMenu"); ?>">メニュー</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topReview' : home_url("#topReview"); ?>">お客様の声</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topBlog' : home_url("#topBlog"); ?>">ブログ</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topContact' : home_url("#topContact"); ?>">サロン情報</a></li>
      </ul>
    </div> -->
    <div class="text-center text-sm">&copy;2023 <?= get_option('company_name'); ?></div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>