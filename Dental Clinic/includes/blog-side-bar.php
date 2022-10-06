<div class="a-inner-right">
    <div class="clinic-intro">
        <div class="clinic-intro-title a-inner-right-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/sidebar-icon_1.svg" alt="">
            クリニックの紹介
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/sidebar-img_1@2x.png" alt="" class="clinic-intro-img">
        <div class="clinic-intro-text">
            <div class="clinic-name">みなみ歯科クリニック</div>
            <div class="clinic-text-bottom">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</div>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="clinic-intro-link">
                当院について
                <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/arrow.svg" alt="">
            </a>
        </div>
    </div>
    <div class="new-blog">
        <div class="a-inner-right-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/sidebar-icon_2.svg" alt="">
            新着記事
        </div>
        <div class="new-blog-items">
            <?php
            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 5,
                'no_found_rows' => true,
                'orderby' => 'post_date',
                'order' => 'DESC',
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="a-blog-item new-blog-item">
                        <a href="<?php the_permalink(); ?>" class="a-blog-item-link new-blog-item-link">
                            <div class="a-blog-img new-blog-img">
                                <?php $img = get_eyecatch_with_default(); ?>
                                <img src="<?php echo $img[0]; ?>" alt="">
                            </div>
                            <div class="a-blog-item-text new-blog-item-text">
                                <div class="a-blog-item-category new-blog-item-category">
                                    <?php
                                    echo esc_html(get_the_terms(get_the_ID(), 'doctor')[0]->name);
                                    ?>
                                </div>
                                <div class="a-blog-item-title new-blog-item-title">
                                    <?php if (strlen($post->post_title) > 10) {
                                        echo mb_substr(the_title($before = '', $after = '', FALSE), 0, 15) . '…';
                                    } else {
                                        the_title();
                                    } ?>
                                </div>
                                <time class="a-blog-item-date new-blog-item-date"><?php the_time(get_option('date_format')); ?></time>
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
    </div>
    <div class="category">
        <div class="a-inner-right-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/sidebar-icon_3.svg" alt="">
            カテゴリー
        </div>
        <?php
        $doctor_terms = get_terms('doctor', array('hide_empty' => false));
        foreach ($doctor_terms as $doctor_term) :
        ?>
            <a href="<?php echo esc_url(get_term_link($doctor_term, 'doctor')); ?>" class="category-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/icon-arrow-blue.svg" alt="">
                <?php echo esc_html($doctor_term->name); ?>
            </a>
        <?php endforeach; ?>

    </div>
</div>