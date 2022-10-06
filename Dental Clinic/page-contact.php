<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<? get_header();?>

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
                <a href=""><?php bcn_display(); ?></a>
            </div>
        </section>
        <div class="inner">
            <div class="c-inner">

                <div class="c-top">
                    お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br> 以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br> また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
                    <span> ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
                </div>
                <section class="c-contact">
                    <h2 class="section-title">お問い合わせフォーム</h2>
                    <?php echo do_shortcode('[contact-form-7 id="2187" title="お問い合わせ"]'); ?>
                    <!-- <form action="" class="contact-form" id="js-contact-form"> -->
                        <!-- <dl class="contact-list">
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    お名前
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="text" name="name" placeholder="山田　太郎" required>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    フリガナ
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="text" name="furigana" placeholder="ヤマダ　タロウ" required>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    電話番号
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="text" name="phone" placeholder="000-0000-0000" required>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    メールアドレス
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="text" name="email" placeholder="xxx@example.com" required>
                                </dd>
                            </div>
                            <div class="contact-item message">
                                <dt class="contact-item-title">
                                    お問い合わせ内容
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <textarea name="content" id="" placeholder="ご自由にご記入ください。" required></textarea>
                                </dd>
                            </div>
                        </dl>
                        <div class="contact-footer-submit">
                            <input class="submit-button" type="submit" value="送 信">
                        </div> -->
                    <!-- </form> -->
                    <div id="js-success" class="contact-message">
                        <p>WEBよりご予約いただき誠にありがとうございます。<br> 送信いただいた内容を確認して1営業日以内に返信いたします。<br><span> ※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
                    </div>
                    <div id="js-error" class="contact-message -error">
                        <p>送信に失敗しました。ページを更新して再度送信してください。</p>
                    </div>
                </section>
            </div>
        </div>

        <?php get_template_part('includes/footer'); ?>
    </main>
    <?php get_footer();?>

</body>
</html>