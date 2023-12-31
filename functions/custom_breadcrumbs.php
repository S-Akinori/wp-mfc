<?php

function custom_breadcrumbs() {
    // ホームページへのリンク
    echo '<a href="'.home_url().'" rel="nofollow">ホーム</a>';

    // ページがカテゴリーのアーカイブページの場合
    if (is_category() || is_single()) {
        echo "|";
        // the_category(' &bull; ');
            if (is_single()) {
                // echo " | ";
                the_title();
            }
    } elseif (is_page()) {
        // WordPressのページ（投稿ではない）の場合
        echo "|";
        echo the_title();
    } elseif (is_search()) {
        // 検索結果ページの場合
        echo "|検索結果: ";
        echo the_search_query();
    }
}
