<div class="blog-page-buttons">
    <?php
    global $query;
    $big = 999999999;

    $pagerArgs =
        array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, $paged),
            // 'total' => $query->max_num_pages,
            'prev_text' => '前へ',
            'next_text' => '次へ',
        );
    echo paginate_links($pagerArgs);
    ?>
</div>