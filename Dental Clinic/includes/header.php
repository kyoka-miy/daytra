<?php wp_body_open(); ?>

<header class="header" id="js-header">
    <div class="header-inner">
        <h1 class="header-left">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-left-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="サイトロゴ">
            </a>
        </h1>
        <div class="header-right">

            <ul class="header-right-items">
                <li class="header-right-item">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header-right-item-link <?php if(is_page('top')){echo 'is-active';} ?>" id="js-nav-link">
                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#1391e6">
                                <path d="m0 0h24v24h-24z" opacity="0" />
                                <path d="m20.42 10.18-7.71-7.88a1 1 0 0 0 -1.42 0l-7.71 7.89a2 2 0 0 0 -.58 1.43v8.38a2 2 0 0 0 1.89 2h14.22a2 2 0 0 0 1.89-2v-8.38a2.07 2.07 0 0 0 -.58-1.44zm-10.42 9.82v-6h4v6zm9 0h-3v-7a1 1 0 0 0 -1-1h-6a1 1 0 0 0 -1 1v7h-3v-8.42l7-7.15 7 7.19z" />
                            </g>
                        </svg>
                        <span class="header-name">ホーム</span>
                    </a>
                </li>
                <li class="header-right-item ">
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="header-right-item-link <?php if(is_page('about')){echo 'is-active';} ?>" id="js-nav-link">
                        <svg class="header-icon" id="icon-02" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path id="hospital" d="M5.368,10.232V8.555a.5.5,0,0,1,.5-.5H7.548a.5.5,0,0,1,.5.5v1.677a.5.5,0,0,1-.5.5H5.871A.5.5,0,0,1,5.368,10.232Zm5.871.5h1.677a.5.5,0,0,0,.5-.5V8.555a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,10.735ZM8.051,14.258V12.58a.5.5,0,0,0-.5-.5H5.871a.5.5,0,0,0-.5.5v1.677a.5.5,0,0,0,.5.5H7.548A.5.5,0,0,0,8.051,14.258Zm3.187.5h1.677a.5.5,0,0,0,.5-.5V12.58a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,14.761Zm7.548,5.2v1.51H0v-1.51a.5.5,0,0,1,.5-.5h.818V3.566a.95.95,0,0,1,1.006-.882H6.039V1.006A1.006,1.006,0,0,1,7.045,0h4.7a1.006,1.006,0,0,1,1.006,1.006V2.684h3.711a.95.95,0,0,1,1.006.882V19.458h.818A.5.5,0,0,1,18.787,19.961ZM3.334,19.416H8.051v-2.81a.5.5,0,0,1,.5-.5h1.677a.5.5,0,0,1,.5.5v2.81h4.718V4.7h-2.7V5.7A1.006,1.006,0,0,1,11.742,6.71h-4.7A1.006,1.006,0,0,1,6.039,5.7V4.7h-2.7ZM11.155,2.684h-1.09V1.594a.252.252,0,0,0-.252-.252H8.974a.252.252,0,0,0-.252.252v1.09H7.632a.252.252,0,0,0-.252.252v.839a.252.252,0,0,0,.252.252h1.09v1.09a.252.252,0,0,0,.252.252h.839a.252.252,0,0,0,.252-.252V4.026h1.09a.252.252,0,0,0,.252-.252V2.935A.252.252,0,0,0,11.155,2.684Z" transform="translate(3 1)" fill="#393939" />
                        </svg>
                        <span class="header-name">当院について</span>
                    </a>
                </li>
                <li class="header-right-item">
                    <a href="<?php echo esc_url(home_url('/medical')); ?>" class="header-right-item-link <?php if(is_page('medical')){echo 'is-active';} ?>" id="js-nav-link">
                        <svg id="icon-03" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="file-text">
                                <rect id="長方形_23355" data-name="長方形 23355" width="24" height="24" fill="#393939" opacity="0" />
                                <path id="パス_43765" data-name="パス 43765" d="M15,16H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" fill="#393939" />
                                <path id="パス_43766" data-name="パス 43766" d="M9,14h3a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Z" fill="#393939" />
                                <path id="パス_43767" data-name="パス 43767" d="M19.74,8.33l-5.44-6A1,1,0,0,0,13.56,2h-7A2.53,2.53,0,0,0,4,4.5v15A2.53,2.53,0,0,0,6.56,22H17.44A2.53,2.53,0,0,0,20,19.5V9a1,1,0,0,0-.26-.67ZM14,5l2.74,3h-2A.79.79,0,0,1,14,7.15Zm3.44,15H6.56A.53.53,0,0,1,6,19.5V4.5A.53.53,0,0,1,6.56,4H12V7.15A2.79,2.79,0,0,0,14.71,10H18v9.5a.53.53,0,0,1-.56.5Z" fill="#393939" />
                            </g>
                        </svg>
                        <span class="header-name">診療案内</span>
                    </a>
                </li>
                <li class="header-right-item">
                    <a href="<?php echo esc_url(home_url('/staff')); ?>" class="header-right-item-link <?php if(is_page('staff')){echo 'is-active';} ?>" id="js-nav-link">

                        <svg id="icon-04" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="people">
                                <rect id="長方形_23354" data-name="長方形 23354" width="24" height="24" fill="#393939" opacity="0" />
                                <path id="パス_43762" data-name="パス 43762" d="M9,11A4,4,0,1,0,5,7a4,4,0,0,0,4,4ZM9,5A2,2,0,1,1,7,7,2,2,0,0,1,9,5Z" fill="#393939" />
                                <path id="パス_43763" data-name="パス 43763" d="M17,13a3,3,0,1,0-3-3A3,3,0,0,0,17,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,17,9Z" fill="#393939" />
                                <path id="パス_43764" data-name="パス 43764" d="M17,14a5,5,0,0,0-3.06,1.05A7,7,0,0,0,2,20a1,1,0,1,0,2,0,5,5,0,0,1,10,0,1,1,0,0,0,2,0,6.9,6.9,0,0,0-.86-3.35A3,3,0,0,1,20,19a1,1,0,1,0,2,0A5,5,0,0,0,17,14Z" fill="#393939" />
                            </g>
                        </svg>

                        <span class="header-name">スタッフ紹介</span>
                    </a>
                </li>
                <li class="header-right-item">
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="header-right-item-link <?php if(is_archive('blog')){echo 'is-active';} ?>" id="js-nav-link">
                        <svg id="icon-05" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="edit">
                                <rect id="長方形_23353" data-name="長方形 23353" width="24" height="24" fill="#393939" opacity="0" />
                                <path id="パス_43761" data-name="パス 43761" d="M19.4,7.34,16.66,4.6A2,2,0,0,0,14,4.53l-9,9a2,2,0,0,0-.57,1.21L4,18.91A1,1,0,0,0,5,20h.09l4.17-.38a2,2,0,0,0,1.21-.57l9-9a1.92,1.92,0,0,0-.07-2.71ZM9.08,17.62l-3,.28.27-3L12,9.32l2.7,2.7ZM16,10.68,13.32,8l1.95-2L18,8.73Z" fill="#393939" />
                            </g>
                        </svg>

                        <span class="header-name">スタッフブログ</span>
                    </a>
                </li>
                <li class="header-right-item">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header-right-item-link <?php if(is_page('contact')){echo 'is-active';} ?>" id="js-nav-link">
                        <svg id="icon-07" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="email">
                                <rect id="長方形_23352" data-name="長方形 23352" width="24" height="24" fill="#393939" opacity="0" />
                                <path id="パス_43760" data-name="パス 43760" d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7a3,3,0,0,0-3-3Zm-.67,2L12,10.75,5.67,6ZM19,18H5a1,1,0,0,1-1-1V7.25l7.4,5.55a1,1,0,0,0,1.2,0L20,7.25V17A1,1,0,0,1,19,18Z" fill="#393939" />
                            </g>
                        </svg>
                        <span class="header-name">お問い合わせ</span>
                    </a>
                </li>


            </ul>
            <div class="header-right-tel">
                <p class="header-tel-text">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
                <a href="#" class="header-tel-number">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_tel.svg" alt="">
                    03-1234-5678
                </a>
            </div>
        </div>
        <button type="button" class="header-burger " id="js-toggle">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </button>
        <div class="header-drawer-menu">
            <a href="#" class="header-drawer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sp/logo-drawer.svg" alt="">
            </a>
            <div class="header-drawer-menu-scroll">
                <div class="header-drawer-items">
                    <div class="header-drawer-item">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-drawer-item-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/icon-01.svg" alt="">
                            <span>ホーム</span>
                        </a>
                    </div>
                    <div class="header-drawer-item">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="header-drawer-item-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/icon-02.svg" alt="">
                            <span>当院について</span>
                        </a>
                    </div>
                    <div class="header-drawer-item">
                        <a href="<?php echo esc_url(home_url('/medical')); ?>" class="header-drawer-item-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/icon-03.svg" alt="">
                            <span>診療案内</span>
                        </a>
                    </div>
                    <div class="header-drawer-item">
                        <a href="<?php echo esc_url(home_url('/staff')); ?>" class="header-drawer-item-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/icon-04.svg" alt="">
                            <span>スタッフ紹介</span>
                        </a>
                    </div>
                    <div class="header-drawer-item">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="header-drawer-item-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/icon-05.svg" alt="">
                            <span>スタッフブログ</span>
                        </a>
                    </div>
                    <div class="header-drawer-item">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header-drawer-item-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/icon-07.svg" alt="">
                            <span>お問い合わせ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</header>
<div class="contact-button">
    <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="contact-button-link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-pc.svg" alt="">
        <p>WEB予約 <br>はこちら</p>
    </a>
</div>