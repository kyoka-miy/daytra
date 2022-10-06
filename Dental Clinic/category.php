<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body>

    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="p-top m-top s-top a-top">
            <div class="p-top-inner m-top-inner s-top-inner a-top-inner">
                <div class="p-top-text m-top-text s-top-text">
                    <h2 class="p-top-title m-top-title s-top-title">お知らせ</h2>
                    <p class="p-top-lead m-top-lead s-top-lead">NEWS</p>
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

                        ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

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
                                            $category =get_the_category();
                                            if($category){
                                                echo $category[0]->name;
                                            }
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
                        <?php endif; ?>

                    </div>
                    <?php get_template_part('includes/pager'); ?>                  
                </div>
            <?php get_template_part('includes/side-bar'); ?>
        </div>
        <?php get_template_part('includes/footer'); ?>
    </main>
    <?php get_footer(); ?>
</body>

</html>