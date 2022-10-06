<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="p-top m-top s-top a-top">
            <div class="p-top-inner m-top-inner s-top-inner a-top-inner">
                <div class="p-top-text m-top-text s-top-text">
                    <h2 class="p-top-title m-top-title s-top-title">スタッフブログ</h2>
                    <p class="p-top-lead m-top-lead s-top-lead">STAFF BLOG</p>
                </div>
            </div>
            <div class="breadcrumb">
                <?php bcn_display(); ?>
            </div>
        </section>
        <div class="inner">
            <div class="a-inner">
                <div class="a-inner-left">
                    <div class="a-blog-items">
                        <?php
                        // 現在ページを取得
                        if (get_query_var('paged')) {
                            $paged = get_query_var('paged');
                        } else {
                            // ページ数が取得できなかったら1ページ目と判断する
                            $paged = 1;
                        }
                        
                        $term_object = get_queried_object(); // タームオブジェクトを取得
                        $term_slug   = $term_object->slug; // タームスラッグ
                        $args = array(
                            'post_type' => 'blog',
                            'taxonomy' => 'doctor',
                            'term' => $term_slug,
                            'posts_per_page' => 6 // -1にすると全件表示
                        );
                        $custom_query = new WP_Query($args);

                        ?>
                        <?php if ($custom_query->have_posts()) : ?>
                            <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                                <div class="a-blog-item">
                                    <!-- 新着記事にはnewボタンをつける -->
                                    <?php
                                    $days = 10;
                                    $today = date_i18n('U');
                                    $entry_day = get_the_time('U');
                                    $dif = date('U', ($today - $entry_day)) / 86400;
                                    ?>
                                    <?php if ($days > $dif) : ?>
                                        <div class="new-circle">NEW</div>
                                    <?php endif; ?>

                                    <a href="<?php the_permalink(); ?>" class="a-blog-item-link">
                                        <div class="a-blog-img">
                                            <?php $img = get_eyecatch_with_default(); ?>
                                            <img src="<?php echo $img[0]; ?>" alt="">
                                        </div>
                                        <div class="a-blog-item-text">
                                            <div class="a-blog-item-category">
                                                <?php
                                                echo esc_html(get_the_terms(get_the_ID(), 'doctor')[0]->name);
                                                ?>
                                            </div>
                                            <div class="a-blog-item-title">
                                                <?php the_title(); ?>

                                            </div>
                                            <time class="a-blog-item-date"><?php the_time(get_option('date_format')); ?></time>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; ?>
                        <?php else : ?>
                            <p>記事が見つかりませんでした</p>
                        <?php endif;
                        wp_reset_postdata();
                        ?>

                    </div>
                    <div class="pager">
                        <?php
                        global $query;
                        $big = 999999999;

                        $pagerArgs =
                            array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, $paged),
                                'total' => $custom_query->max_num_pages,
                                'prev_text' => '前へ',
                                'next_text' => '次へ',

                            );

                        echo paginate_links($pagerArgs);
                        ?>
                    </div>
                    <!-- ページネーション -->
                    <div class="blog-page-buttons">


                        <!-- <a href="" class="left-button arrow-button">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/arrow-circle-left.svg" alt="">

                        </a>
                        <a href="" class="blog-page-button">1</a>
                        <a href="" class="blog-page-button">2</a>
                        <a href="" class="blog-page-button">3</a>
                        <a href="" class="blog-page-button is-pc">4</a>
                        <a href="" class="blog-page-button is-pc">5</a>
                        <a href="" class="blog-page-button is-pc">6</a>
                        <a href="" class="blog-page-button">...</a>
                        <a href="" class="blog-page-button">20</a>
                        <div class="s-blog-bottom-right">


                        </div> -->

                    </div>
                </div>
                <?php get_template_part('includes/blog-side-bar'); ?>
            </div>
        </div>
        <?php get_template_part('includes/footer'); ?>
    </main>
    <?php get_footer(); ?>
</body>

</html>