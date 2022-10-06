<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="p-top m-top">
            <div class="p-top-inner m-top-inner">
                <div class="p-top-text m-top-text">
                    <h2 class="p-top-title m-top-title">診療案内</h2>
                    <p class="p-top-lead m-top-lead">MEDICAL</p>
                </div>
            </div>
            <div class="breadcrumb">
                <a href=""><?php bcn_display(); ?></a>
            </div>
        </section>
        <section class="m-info">
            <div class="inner">
                <?php //タクソノミー（カテゴリ）別に記事を一覧出力
                $terms = get_terms('genre');
                foreach ($terms as $term) :
                    $args = array(
                        'post_type' => 'plan',
                        'taxonomy' => 'genre',
                        'term' => $term->slug,
                        'post_per_page' => -1,
                        'no_found_rows' => true
                    );
                    $query = new WP_Query($args); ?>


                    <div class="info-general">
                        <div class="general-head">
                            <h3 class="general-head-left"><?php echo esc_html($term->name); ?></h3>
                            <?php if($term->slug == "general"): ?>
                            <p class="general-head-right is-blue">
                                保険対象
                            </p>
                            <?php elseif($term->slug == "special"): ?>
                                <p class="general-head-right is-red">
                                    実費
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="general-items">
                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="general-item">
                                        <a href="#<?php the_ID(); ?>" class="general-item-link"><?php the_title(); ?></a>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            </div>

        </section>

            <?php //タクソノミー（カテゴリ）別に記事を一覧出力
            $terms = get_terms('genre');
            foreach ($terms as $term) :
                $args = array(
                    'post_type' => 'plan',
                    'taxonomy' => 'genre',
                    'term' => $term->slug,
                    'post_per_page' => -1,
                    'no_found_rows' => true
                );
                $query = new WP_Query($args); 
                
                ?>
        <section class="info m-cards" id="<?php  echo esc_html($term->slug)?>">
                <div class="info-top-bg"></div>
                <div class="inner info-inner">
                    <h2 class="info-title section-title m-cards-title"><?php echo esc_html($term->name); ?></h2>
                    <div class="m-cards-items">
                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="m-cards-item" id="<?php the_ID(); ?>">

                                <?php if($term->slug == "general"): ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/page-medical-img/tag-01.svg" alt="" class="m-cards-item-img-blue">
                                <?php elseif($term->slug == "special"): ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/page-medical-img/tag-02.svg" alt="" class="m-cards-item-img-red">
                                <?php endif; ?>   

                                    <div class="m-card-head">
                                        <h3 class="m-card-head-left"><?php the_title(); ?></h3>
                                        <p class="m-card-head-right"><?php the_field('problem'); ?></p>
                                    </div>
                                    <div class="m-card-content">
                                        <div class="m-card-content-text">
                                            <?php the_field('about'); ?>
                                        </div>
                                        <div class="m-card-content-img">
                                            <?php $img = get_eyecatch_with_default(); ?>
                                            <img src="<?php echo $img[0]; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="info-bottom-bg"></div>
            </section>
            <?php endforeach; ?>
        <?php get_template_part('includes/footer'); ?>
    </main>
    <? get_footer(); ?>
</body>

</html>