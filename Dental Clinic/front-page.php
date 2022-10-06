<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="top">
            <div class="top-inner">

                <!-- スライダーのコンテナ -->
                <div class="f-swiper swiper">
                    <!-- 必要に応じたwrapper -->
                    <div class="swiper-wrapper top-visiual">
                        <!-- スライド -->
                        <div class="swiper-slide top-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-01@3x.png" alt="" class="top-img">
                            <img class="top-text" src="<?php echo get_template_directory_uri(); ?>/img/top-text@2x.png" alt="">
                        </div>
                        <div class="swiper-slide top-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-02@3x.png" alt="" class="top-img">
                            <img class="top-text" src="<?php echo get_template_directory_uri(); ?>/img/top-text@2x.png" alt="">
                        </div>
                        <div class="swiper-slide top-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-03@3x.png" alt="" class="top-img">
                            <img class="top-text" src="<?php echo get_template_directory_uri(); ?>/img/top-text@2x.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- 必要に応じてページネーション -->
                <div class="swiper-pagination"></div>
                <!-- 必要に応じてナビボタン -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="top-bottom">
                <div class="schedule">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/medical-time-pc-1@3x.png" alt="">
                </div>
                <div class="news">
                    <div class="news-meta">
                        <div class="news-meta-left">
                            <h2>お知らせ</h2>
                            <p>NEWS</p>
                        </div>
                        <div class="news-meta-right">
                            <a href="<?php echo esc_url(home_url('/news')); ?>" class="news-right-meta-link">過去のお知らせはこちら</a>
                        </div>
                    </div>
                    <?php query_posts(array(
                        'posts_per_page' => 1,
                        'ignore_sticky_posts' => 1,
                    ));
                    ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <a class="news-content" href="<?php the_permalink(); ?>">
                                <time class="news-date"><?php the_date('Y.m.d'); ?></time>
                                <p class="news-text"><?php the_title(); ?></p>
                            </a>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
            </div>
        </section>
        <section class="concept">
            <div class="concept-right">
                <div class="concept-title">CONCEPT</div>
                <h2 class="concept-lead">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h2>
                <div class="concept-text">
                    私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。 お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
                </div>
                <div class="concept-button">
                    <a class="concept-button-link common-link" href="<?php echo esc_url(home_url('/about')); ?>">当院について</a>
                </div>
            </div>
            <div class="concept-left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/concept-img1@3x.png" alt="">
            </div>
        </section>
        <section class="recommend">
            <div class="inner">
                <h2 class="recommend-title section-title">当院の3つのおすすめ</h2>

                <ul class="recommend-items">
                    <li class="recommend-item">
                        <div class="recommend-top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-1.svg" alt="">
                        </div>
                        <div class="recommend-mid">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img-01.svg" alt="">
                        </div>
                        <div class="recommend-text">歯の治療において、小さな違和感は大きなストレスにつながります。<br> 私たちは常に快適な歯科医療技術の研究を行っております。</div>
                    </li>
                    <li class="recommend-item">
                        <div class="recommend-top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-2.svg" alt="">
                        </div>
                        <div class="recommend-mid">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img-02.svg" alt="">
                        </div>
                        <div class="recommend-text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</div>
                    </li>
                    <li class="recommend-item">
                        <div class="recommend-top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-3.svg" alt="">
                        </div>
                        <div class="recommend-mid">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img-03.svg" alt="">
                        </div>
                        <div class="recommend-text">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br><span> ※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span></div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="info">
            <div class="info-top-bg"></div>
            <div class="inner">

                <h2 class="info-title section-title">診療案内</h2>
                <div class="info-items">

                    <a href="<?php echo esc_url(home_url('/medical')); ?>#general" class="info-item-link">
                        <div class="info-item-link-line">
                            <div class="info-item-text">
                                <div class="info-item-top">一般診療</div>
                                <div class="info-item-bottom">虫歯・入れ歯・小児歯科</div>

                            </div>
                        </div>
                    </a>

                    <a href="<?php echo esc_url(home_url('/medical')); ?>#special" class="info-item-link">
                        <div class="info-item-link-line">
                            <div class="info-item-text">

                                <div class="info-item-top">特殊診療</div>
                                <div class="info-item-bottom">インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科</div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="info-text">
                    当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br> 痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br><span>※特殊性の高い矯正治療などは保険の適応外となります。これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
                </div>
            </div>
        </section>
        <div class="info-bottom-bg"></div>
        <section class="blog">
            <div class="inner">
                <h2 class="blog-title section-title">スタッフブログ</h2>
                <div class="blog-items">
                    <?php //タクソノミー（カテゴリ）別に記事を一覧出力
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 6,
                        'no_found_rows' => true,               
                    );
                    $query = new WP_Query($args); ?>
                    <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="blog-item">
                            <?php
                            $days = 12;
                            $today = date_i18n('U');
                            $entry_day = get_the_time('U');
                            $dif = date('U',($today - $entry_day)) / 86400;
                            ?>
                            <?php if($days > $dif): ?>
                            <div class="new-circle">NEW</div>
                            <?php endif; ?>
                                <a class="blog-item-link" href="<?php the_permalink(); ?>">
                                    <div class="blog-item-img">
                                        <?php
                                        $img = get_eyecatch_with_default();
                                        ?>
                                        <img src="<?php echo $img[0]; ?>" alt="">
                                    </div>
                                    <div class="blog-item-text">
                                        <div class="blog-item-category">
                                            <?php
                                                echo esc_html(get_the_terms(get_the_ID(),'doctor')[0]->name);
                                            ?>
                                        </div>
                                        <div class="blog-item-title">
                                            <?php the_title(); ?>
                                        </div>
                                        <time class="blog-item-date">
                                        <?php the_date('Y.m.d'); ?>
                                            <?php the_time(get_option('date_format')); ?> 
                                        </time>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>記事が見つかりませんでした</p>
                    <?php endif; ?>
                   
                </div>
                <div class="blog-button">
                    <a href="http://minami-shika.local/blog" class="blog-button-link common-link">スタッフブログ一覧はこちら</a>
                </div>
            </div>
        </section>
        <?php get_template_part('includes/footer'); ?>
    </main>
    <? get_footer(); ?>
</body>

</html>