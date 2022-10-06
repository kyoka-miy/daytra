<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <? get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?>

    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- ループ内でしか使えないテンプレートタグがあるので一つでもループさせる -->

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
                        <div class="s-inner-left">
                            <h1 class="s-blog-title"><?php the_title(); ?></h1>
                            <div class="blog-title-meta">
                                <p class="title-meta-date">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/single-img/icon-time.svg" alt="">
                                    <?php the_date(); ?>
                                </p>
                                <p class="title-meta-category">
                                    <?php ?>
                                    <?php
                                    $category = get_the_category();
                                    if ($category[0]) {
                                        echo $category[0]->cat_name;
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="s-blog-content">
                                <?php the_content(); ?>
                                <?php
                                // 改ページを有効にするための記述
                                wp_link_pages(
                                    array(
                                        'before' => '<nav class="entry-links">',
                                        'after' => '</nav>',
                                        'link_before' => '',
                                        'link_after' => '',
                                        'text_or_number' => 'number',
                                        'separator' => '',
                                    )
                                );
                                ?>

                            </div>                 
                            <?php endwhile; ?>
                        <?php endif; ?>
                            <div class="s-blog-bottom">
                                <div class="s-blog-bottom-left">
                                    <?php previous_post_link('%link', '前の記事へ'); ?>
                                </div>
                                <a href="<?php echo esc_url(home_url('/news')); ?>" class="s-blog-bottom-center">記事一覧</a>
                                <div  class="s-blog-bottom-right">
                                <?php next_post_link('%link', '次の記事へ'); ?>
                                </div>
                            </div>
                            
                        </div>
                        <?php get_template_part('includes/side-bar'); ?>
                    </div>
                </div>
        <?php get_template_part('includes/footer'); ?>
    </main>
    <?php get_footer(); ?>
</body>

</html>