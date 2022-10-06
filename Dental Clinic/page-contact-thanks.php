<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>
   
    <main>
        <section class="p-top m-top s-top a-top">
            <div class="p-top-inner m-top-inner s-top-inner a-top-inner c-top-inner">
                <div class="p-top-text m-top-text s-top-text">
                    <h2 class="p-top-title m-top-title s-top-title">お問い合わせ</h2>
                    <p class="p-top-lead m-top-lead s-top-lead">CONTACT</p>
                </div>
            </div>
            <div class="breadcrumb">
                <a href="">ホーム > お問い合わせ<span>> お問い合わせ完了</span> </a>
            </div>
        </section>
        <div class="inner">
            <div class="c-inner">

                <div class="c-thanks">
                    お問い合わせありがとうございました。<br> 3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。<br>
                    <span> ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
                </div>
            </div>
        </div>

    <?php get_template_part('includes/footer'); ?>
    </main>
    <? get_footer(); ?>
</body>

</html>