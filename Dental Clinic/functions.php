<?php
add_action('init', function(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'global' => 'ヘッダーメニュー',
        'drawer' => 'ドロワーメニュー',
        'footer' => 'フッターメニュー'
    ]);
});

// アイキャッチがなければ標準画像を取得する
function get_eyecatch_with_default(){
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
    else :
        $img = array(get_template_directory_uri() . '/img/default.jpg');
    endif;

    return $img;
}

// カスタム投稿を日付順に表示させる
function change_admin_orderby_post_types( $wp_query ) {
    if (is_admin()) {
      $post_type = $wp_query->query['post_type'];
      if ( $post_type == 'blog' ) {
        $wp_query->set('orderby', 'date'); // 'date'-> 日付で並び替え
        $wp_query->set('order', 'DESC'); // 'DESC'-> 降順、 'ASC'-> 昇順
      }
    }
  }
  add_filter('pre_get_posts', 'change_admin_orderby_post_types');