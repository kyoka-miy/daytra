<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="p-top m-top s-top">
            <div class="p-top-inner m-top-inner s-top-inner">
                <div class="p-top-text m-top-text s-top-text">
                    <h2 class="p-top-title m-top-title s-top-title">スタッフ紹介</h2>
                    <p class="p-top-lead m-top-lead s-top-lead">STAFF</p>
                </div>
            </div>
            <div class="breadcrumb">
                <a href=""><?php bcn_display(); ?></a>
            </div>
        </section>
        <section class="s-intro" id="hello">
            <div class="inner">
                <h2 class="section-title s-intro-title">院長のあいさつ</h2>
                <div class="s-intro-inner">
                    <div class="s-intro-left">
                        <div class="s-intro-left-top">
                            <h3 class="s-title">気軽に相談できる <br>街の歯医者さんでありたい。</h3>
                            <p class="s-lead1">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。</p>
                            <p class="s-lead2">「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
                            <p class="s-lead3">みなみ歯科クリニック <br>院長　南 俊雄</p>
                            <div class="s-intro-middle is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/page-staff-img/staff1@2x.png" alt="">
                            </div>
                            <div class="s-career">
                                <div class="s-career-top">
                                    <p class="s-career-top-title">経歴</p>
                                    <div class="s-career-top-block">
                                        <p class="s-career-top-block-text">2004年</p>
                                        <p class="s-career-top-block-text">東京医科歯科大学歯学部 卒業</p>
                                    </div>
                                    <div class="s-career-top-block">
                                        <p class="s-career-top-block-text">2008年</p>
                                        <p class="s-career-top-block-text">東京歯科大学歯学研究科大学院修了 <br>博士(歯学)取得</p>
                                    </div>
                                    <div class="s-career-top-block">
                                        <p class="s-career-top-block-text">2012年</p>
                                        <p class="s-career-top-block-text">みなみ歯科クリニック 開院</p>
                                    </div>
                                </div>
                                <div class="s-career-bottom">
                                    <p class="s-career-bottom-title">資格</p>
                                    <p class="s-career-bottom-text">歯科医師臨床研修指導歯科医</p>
                                    <p class="s-career-bottom-text">博士(歯学)</p>
                                    <p class="s-career-bottom-text">衛生検査技師</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-intro-right is-pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page-staff-img/staff1@2x.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="s-staff-gallery" id="staff">
            <!-- スライダーのコンテナ -->
            <div class="swiper s-swiper">
                <!-- 必要に応じたwrapper -->
                <div class="swiper-wrapper" id="js-staff-swiperWrapper">
                    <!-- スライド -->
                    <div class="swiper-slide s-staff-img"><img src="<?php echo get_template_directory_uri(); ?>/img/page-staff-img/staff-slider1-1@2x.png" alt=""></div>
                    <div class="swiper-slide s-staff-img"><img src="<?php echo get_template_directory_uri(); ?>/img/page-staff-img/staff-slider1-2@2x.png" alt=""></div>
                    <div class="swiper-slide s-staff-img"><img src="<?php echo get_template_directory_uri(); ?>/img/page-staff-img/staff-slider1-3@2x.png" alt=""></div>
                    <div class="swiper-slide s-staff-img"><img src="<?php echo get_template_directory_uri(); ?>/img/page-staff-img/staff-slider1-4@2x.png" alt=""></div>
                    <div class="swiper-slide s-staff-img"><img src="<?php echo get_template_directory_uri(); ?>/img/page-staff-img/staff-slider1@2x.png" alt=""></div>
                </div>
            </div>
        </section>
        <section class="staff-info">
            <div class="inner">
                <h2 class="section-title">
                    スタッフ紹介
                </h2>
                <?php //タクソノミー（カテゴリ）別に記事を一覧出力
                $terms = get_terms('staff');
                foreach ($terms as $term) :
                    $args = array(
                        'post_type' => 'staffs',
                        'taxonomy' => 'staff',
                        'term' => $term->slug,
                        'post_per_page' => -1,
                        'no_found_rows' => true
                    );
                    $query = new WP_Query($args); ?>
                    <div class="staff-doctor">
                        <p class="doctor-title"><?php echo esc_html($term->name); ?></p>
                        <div class="doctor-items">
                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="doctor-item">
                                        <?php $img = get_eyecatch_with_default(); ?>
                                        <img src="<?php echo $img[0]; ?>" alt="">
                                        <p class="doctor-name"><?php echo esc_html($term->name); ?><span><?php the_title(); ?></span></p>
                                        <dl class="doctor-info">
                                            <dt class="doctor-info-left">出身地</dt>
                                            <?php if(get_field('from')): ?>
                                            <dt class="doctor-info-right"><?php the_field('from');?></dt>
                                            <?php endif; ?>
                                            <dt class="doctor-info-left">趣味</dt>
                                            <?php if(get_field('hobby')): ?>
                                            <dt class="doctor-info-right"><?php the_field('hobby');?></dt>
                                            <?php endif; ?>
                                            <dt class="doctor-info-left">好きな食べ物</dt>
                                            <?php if(get_field('food')): ?>
                                            <dt class="doctor-info-right"><?php the_field('food');?></dt>
                                            <?php endif; ?>
                                        </dl>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <?php get_template_part('includes/footer'); ?>
    </main>
    <? get_footer(); ?>
</body>

</html>