<?php get_header("service"); ?>
        <main>
            <section class="aboutConnectASP">
                <div class="mainTitle">
                    <h2 class="slide-bottom">インフルエンサーの力で商品の価値を最大限に</h2>
                    <h3 class="slide-bottom">ABOUT CONNECT ASP</h3>
                </div>

                <div class="pBox">
                    <p class="slide-bottom">
                        グローリットはインフルエンサーと企業の架け橋として、アフィリエイトプラットフォーム事業をしております。
                    </p>
                </div>
            </section>

            <div class="backgroundContainer">
                <section class="connectASP">
                    <div class="connectASPImg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/connectAsp.jpg" alt="">
                    </div>
                    <div class="pbox">
                        <h3>CONNECT ASP</h3>
                        <p>
                            現代社会において広告は重要なものです。<br>
                            グローリットでは広告業界の”成長”を促し、社会の”明るい”未来を見据えて広告を運用していきます。<br>
                            そして皆さんが笑顔になれる社会を目指しております。
                        </p>
                    </div>

                    <div class="button">
                        <p><a href="https://connect-afili.com">CONNECT Affiliate<i class="fa-solid fa-circle-chevron-right"></i></a></p>
                    </div>
                </section>

            </div>

            <section class="baseContact">
                <h2 class="title contactTitle">CONTACT</h2>
                <p class="contactp">
                    当社へのご案内は下記よりお電話、<br>
                    もしくはお問い合わせフォームよりお気軽にお問い合わせください。
                </p>
                <div class="button">
                <!--
                    <div class="telButton">
                        <a href=tel:000-0000-0000>
                            <p>電話でのお問い合わせ</p>
                            <p class="telNumber"><i class="fa-solid fa-phone"></i>000-0000-0000</p>
                            <p class="time">営業時間/00:00~00:00<br>定休日/土曜日・日曜日</p>
                        </a>
                    </div>
                -->
                    <div class="formButton">
                    <a href="<?php echo esc_url(home_url('/')) ;?>contact/"><p>フォームからのお問い合わせ<i class="fa-solid fa-chevron-right"></i></p></a>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer(); ?>