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
    <div><img src="<?= get_template_directory_uri(); ?>/assets/images/navi_img_footlogo_20230525162012297.webp" alt=""></div>
    <div>
      <p>〒114-0013　東京都北区東田端1-6-9 2F</p>
      <div class="flex items-center">
        <p>Tel.03-6807-8688</p>
        <a href="" class="px-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/glyph-logo_May2016_white.png" width="20" height="20" alt=""></a>
        <a href="" class="px-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/Facebook_Logo_Secondary.png" width="20" height="20" alt=""></a>
      </div>
    </div>
    <div class="border-b border-main-cont">
      CONTENTS
    </div>
    <div>
      <nav class="md:flex justify-between">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'menu_id'        => 'footer-menu',
          'menu_class'     => 'footer-links',
        ));
        ?>
      </nav>
    </div>
    <div class="footer-copyright">&copy; Medical Front Clinic. ALL RIGHTS RESERVED..</div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>