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
                    <h2 class="p-top-title m-top-title s-top-title">WEB予約</h2>
                    <p class="p-top-lead m-top-lead s-top-lead">RESERVE</p>
                </div>
            </div>
            <div class="breadcrumb">
                <a href=""><?php bcn_display(); ?></a>
            </div>
        </section>
        <div class="inner">
            <div class="c-inner">
                <div class="r-top">
                    <div class="r-top1">
                        <div class="r-top-title">お電話でのご予約/ご相談</div>
                        <a href="" class="r-top-phone">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_tel.svg" alt="">
                            <div class="r-top-phone-right">
                                <div class="r-phone-right-top">03-1234-5678</div>
                                <div class="r-phone-right-bottom">(年中無休 AM9:00〜PM22:00)</div>
                            </div>
                        </a>
                        <div class="r-top-text">お急ぎの方は電話での連絡がスムーズです。<br> 混雑状況によっては当日受診をご利用いただけない場合がございます。<br> あらかじめご了承ください。</div>
                    </div>
                    <div class="r-top2">
                        <div class="r-top-title">メールでのご予約/ご相談</div>
                        <div class="r-top-text">【ご予約に関しての注意点】<br> メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br> ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</div>
                    </div>
                </div>
                <section class="c-contact r-reserve">
                    <h2 class="section-title">予約フォーム</h2>
                    <?php echo do_shortcode('[contact-form-7 id="2190" title="WEB予約"]'); ?>
                    <!-- <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfe0GV-gP7nJbN3j3U-6JxVNtQoHMYF_v2BJFs0lnzJmqu5Ew/formResponse" class="contact-form">
                        <dl class="contact-list">
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    お名前
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="text" name="entry.1569618829" placeholder="山田　太郎" required>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    フリガナ
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="text" name="entry.848085332" placeholder="ヤマダ　タロウ" required>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    電話番号
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="text" name="entry.796251941" placeholder="000-0000-0000" required>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    メールアドレス
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <input type="email" name="entry.487769379" placeholder="xxx@example.com" required>
                                </dd>
                            </div>

                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    初診/再診
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input contact-item-radio">
                                    <div class="contact-radio">
                                        <input type="radio" id="radio-left1" value="初診" name="entry.66801245" checked>
                                        <label for="radio-left1" class="radio-label">初診</label>
                                    </div>
                                    <div class="contact-radio">
                                        <input type="radio" id="radio-right2" name="entry.66801245" value="再診">
                                        <label for="radio-right2" class="radio-label">再診</label>
                                    </div>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    <div class="contact-item-content-title">
                                        診療内容<br>
                                        <p>※(複数選択可)</p>
                                    </div>
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input contact-item-checkbox">
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content1" name="checkbox-1" value="虫歯">
                                        <label for="form-content1" class="content-label">虫歯</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content2" name="checkbox-1" value="被せ物がとれた">
                                        <label for="form-content2" class="content-label">被せ物がとれた</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content3" name="checkbox-1" value="矯正歯科">
                                        <label for="form-content3" class="content-label">矯正歯科</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content4" name="checkbox-1" value="噛み合わせ">
                                        <label for="form-content4" class="content-label">咬み合わせ</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content5" name="checkbox-1" value="歯周病">
                                        <label for="form-content5" class="content-label">歯周病</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content6" name="checkbox-1" value="小児歯科">
                                        <label for="form-content6" class="content-label">小児歯科</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content7" name="checkbox-1" value="入れ歯">
                                        <label for="form-content7" class="content-label">入れ歯</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content8" name="checkbox-1" value="インプラント">
                                        <label for="form-content8" class="content-label">インプラント</label>
                                    </div>
                                    <div class="contact-checkbox">
                                        <input type="checkbox" id="form-content9" name="checkbox-1" value="その他">
                                        <label for="form-content9" class="content-label">その他</label>
                                    </div>
                                </dd>
                            </div>

                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    ご連絡方法
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <div class="contact-item-select">
                                        <select name="" id="your-kind" name="entry.789663046">
                                            <option value="メール" selected>メール</option>
                                            <option value="メール1">メール1</option>
                                            <option value="メール2">メール2</option>
                                        </select>
                                    </div>
                                </dd>
                            </div>
                            <div class="contact-item">
                                <dt class="contact-item-title">
                                    希望日
                                </dt>
                                <dd class="contact-item-input contact-item-date">
                                    <input type="date" placeholder="年 / 月 / 日">
                                    <input type="date" placeholder="年 / 月 / 日">
                                    <input type="date" placeholder="年 / 月 / 日">
                                </dd>
                            </div>
                            <div class="contact-item message">
                                <dt class="contact-item-title">
                                    お問い合わせ内容
                                    <span>必須</span>
                                </dt>
                                <dd class="contact-item-input">
                                    <textarea name="entry.1790641861" id="" placeholder="ご自由にご記入ください。" required></textarea>
                                </dd>
                            </div>
                        </dl>
                        <div class="contact-footer-submit">
                            <button class="submit-button" type="submit">送　信</button>
                        </div>
                    </form> -->
                </section>
            </div>
        </div>

        <?php get_template_part('includes/footer'); ?>
    </main>
    <? get_footer(); ?>
</body>

</html>