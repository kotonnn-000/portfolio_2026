<?php get_header("frontpage"); ?>

        <main>
            <div class="backgroundContainer">

                <section class="aboutUs">
                    <h2 class="title aboutUsTitle">ABOUT US</h2>

                    <h3 class="subtitle aboutUsSubitle">
                        インフルエンサーの力で<br>
                        商品の価値を最大限に
                    </h3>

                    <p class="aboutUsp">
                        現代社会において広告は重要なものです。<br>
                        グローリットでは広告業界の”成長”を促し、社会の”明るい”未来を見据えて広告を運用していきます。<br>
                        そして皆さんが笑顔になれる社会を目指しております。
                    </p>

                    <div class="moreButton">
                        <p><a href="<?php echo esc_url(home_url('/')); ?>service/">事業内容を見る<i class="fa-solid fa-circle-chevron-right"></i></a></p>
                    </div>

                </section>

                <section class="ourBusiness">
                    <h2 class="title ourBusinessTitle">OUR BUSINESS</h2>

                    <div class="ourBusinessImg">
                        <img src="images/connectAsp.jpg" alt="">
                    </div>

                    <div class="ourBusinessText">
                        <h3 class="subtitle ourBuisinessSubitle">
                            CONNECT ASP
                        </h3>

                        <p class="ourBusinessp">
                            CONNECT ASPは、多ジャンルで高単価な案件を取り扱っているインフルエンサー専門アフィリエイトプラットフォーム。<br>
                            美容を筆頭とし、転職やゲームなどの様々なジャンルを扱っているので、獲得に比重をおいた施策や広告効果の高いプロモーションを行います。
                        </p>

                        <div class="moreButton">
                            <p><a href="<?php echo esc_url(home_url('/')); ?>company/">企業情報を見る<i class="fa-solid fa-circle-chevron-right"></i></a></p>
                        </div>

                    </div>

                </section>

                <section class="influencerPresen">

                    <h2>Influencer</h2>

                    <div class="influencer">
                        <!--
                        <div class="influencer01 influencerContents">
                            <p class="influencerImg influencer01_Img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/influencer01.png">
                            </p>
                            <div class="influencerText">
                                <p class="influencerName influencer01_Name">
                                    樹乃
                                </p>
                                <p class="influencerURL"><a href="https://www.instagram.com/juno1511/?igshid=NzZlODBkYWE4Ng%3D%3D"><i class="fa-brands fa-instagram"></i>&commat;juno1511</a></p>
                            </div>
                        </div>
                        -->

                        <div class="influencer02 influencerContents">
                            <p class="influencerImg influencer01_Img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/influencer02.png">
                            </p>
                            <div class="influencerText">
                                <p class="influencerName influencer02_Name">
                                    フードロス削減　コロナ支援【公式】
                                </p>
                                <p class="influencerURL"><a href="https://twitter.com/otasuke_1234?s=21&t=nuW4_M-8a0pqEAvt1ovWGg"><i class="fa-brands fa-x-twitter"></i>&commat;otasuke_1234</a></p>
                            </div>
                        </div>

                        <div class="influencer03 influencerContents">
                            <p class="influencerImg influencer03_Img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/influencer03.png">
                            </p>
                            <div class="influencerText">
                                <p class="influencerName influencer03_Name">
                                    酸素
                                </p>
                                <p class="influencerURL"><a href="https://www.instagram.com/sansochan1/?igshid=OGQ5ZDc2ODk2ZA%3D%3D"><i class="fa-brands fa-instagram"></i>&commat;sansochan1</a></p>
                                <p class="influencerURL"><a href="https://www.tiktok.com/@sansochan1?_t=8iEQJUYWowE&_r=1"><i class="fa-brands fa-tiktok"></i>&commat;sansochan1</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="influencer influencerLast">
                        <div class="influencer04 influencerContents">
                            <p class="influencerImg influencer04_Img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/influencer04.png">
                            </p>
                            <div class="influencerText">
                                <p class="influencerName influencer04_Name">
                                    みみちゃん
                                </p>
                                <p class="influencerURL"><a href="https://www.instagram.com/sq._.mu/?igshid=OGQ5ZDc2ODk2ZA%3D%3D"><i class="fa-brands fa-instagram"></i>&commat;sq._.mu</a></p>
                                <p class="influencerURL"><a href="https://www.tiktok.com/@01310mu?_t=8iEQMLPCSxu&_r=1"><i class="fa-brands fa-tiktok"></i>&commat;01310mu</a></p>
                            </div>
                        </div>
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