<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="p-top">
            <div class="p-top-inner">
                <div class="p-top-text">
                    <h2 class="p-top-title">当院について</h2>
                    <p class="p-top-lead">ABOUT OUR CLINIC</p>
                </div>
            </div>
            <div class="breadcrumb">
                <a href=""><?php bcn_display(); ?></a>
            </div>
        </section>
        <section class="p-policy" id="policy">
            <h2 class="section-title p-policy-title">ポリシーと特徴</h2>
            <div class="p-policy-content">
                <div class="concept-right p-policy-right">
                    <div class="concept-title p-policy-right-title">POLICY</div>
                    <h2 class="concept-lead p-policy-lead">コミュニケーションから始まる最適な医療提供</h2>
                    <div class="concept-text p-policy-text">
                        当院ではまず患者様から詳しくお話を伺います。<br> 難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。<br> <span>「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</span>
                    </div>
                </div>
                <div class="concept-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/feature_1@2x.png" alt="">
                </div>
            </div>
        </section>
        <section class="p-feature">
            <div class="p-feature-content">
                <div class="p-feature-left">
                    <div class="p-feature-title">FEATURE</div>
                    <h2 class="p-feature-lead">「医療技術の追求」と <br>「通いやすさ」</h2>
                    <div class="p-feature-text">
                        <p>歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。 また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br><span>朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</span> </p>
                    </div>
                </div>
                <div class="p-feature-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/feature_2@2x.png" alt="">
                </div>
            </div>
        </section>
        <section class="look" id="look">
            <div class="look-inner">
                <h2 class="section-title">院内の様子</h2>
                <div class="look-box">
                    <ul class="look-items">
                        <li class="look-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about_look1@2x.png" alt="">
                        </li>
                        <li class="look-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about_look2@2x.png" alt="">
                        </li>
                        <li class="look-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about_look3@2x.png" alt="">
                        </li>
                        <li class="look-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about_look4@2x.png" alt="">
                        </li>
                        <li class="look-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about_look5@2x.png" alt="">
                        </li>
                        <li class="look-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about_look6@2x.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <?php get_template_part('includes/footer'); ?>
    </main>
    <? get_footer(); ?>
</body>

</html>