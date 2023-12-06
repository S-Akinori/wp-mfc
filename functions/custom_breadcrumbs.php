<?php

function custom_breadcrumbs() {
    // ホームページへのリンク
    echo '<a href="'.home_url().'" rel="nofollow">ホーム</a>';

    // ページがカテゴリーのアーカイブページの場合
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        // WordPressのページ（投稿ではない）の場合
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        // 検索結果ページの場合
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;検索結果: ";
        echo the_search_query();
    }
}
