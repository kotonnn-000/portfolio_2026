<?php get_header(); ?>


<main>
        <div class="maincontainer">


            <div class="bgcontainer">


                <div class="mv">
                    <div class="mv_icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="">
                    </div>
                    <div class="page_mv_text">
                        <h2 class="pagemvTitle">
                            <span>生理を知る教科書</span><br>
                            Text book
                        </h2>
                    </div>
                </div>


                <div class="sitemap">
                    <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></p>
                    <p>&gt;</p>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>textbook/">Text book</a></p>
                    <p>&gt;</p>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbooksecond">生理について</a></p>
                </div>


                <section id="pageTextbookSecondpage">
                    <div class="pageTextbook">


                        <div class="pageTextbookMenu">

                            <div class="pageTextbookMenuBox">
                                <h3><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookfirst/" class="textbookMenuhead">身体と生理</a></h3>
                                <ul class="pageTextbookMenuList">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookfirst/#first_first/">女性の身体と生理のしくみ</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookfirst/#first_second/">人生における身体の変化</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookfirst/#first_third/">生理周期と身体の変化</a></li>
                                </ul>
                            </div>

                            <div class="pageTextbookMenuBox">
                                <h3><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbooksecond/" class="textbookMenuhead">生理について</a></h3>
                                <ul class="pageTextbookMenuList">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbooksecond/#second_first/">正常な生理と異常な生理</a></li>
                                </ul>
                            </div>

                            <div class="pageTextbookMenuBox">
                                <h3><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookthird" class="textbookMenuhead">生理痛と不調</a></h3>
                                <ul class="pageTextbookMenuList">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookthird/#third_first/">生理痛について</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookThird/#third_second/">PMSとPDS</a></li>
                                </ul>
                            </div>

                            <div class="pageTextbookMenuBox">
                                <h3><a href="<?php echo esc_url(home_url('/')); ?>mytextbook/" class="textbookMenuhead">My 教科書</a></h3>
                                <ul class="pageTextbookMenuList">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>mytextbook/">My 教科書とは？</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>mytextbook/#pageMyextbook/">My 教科書を作る</a></li>
                                </ul>
                            </div>

                        </div>
                        
                    </div>


                    <div class="pageTextbookpage">
                        <h4>生理について</h4>

                        <article class="pageTextbookpageArticle seijonaseiritoijonaseiri">
                            <h5>正常な生理と異常な生理</h5>
                            <p>生理にも正常な場合と異常な場合があります。<br>
                                異常な生理が続く場合には、何かしらの病気が隠れている場合もあるので、少しでも心配なところや、不安なことがある場合は婦人科に受診しましょう。
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/textbook2_1.jpeg">

                            <div class="textbookpageTopdown seirisyuki">
                                <h6>生理周期</h6>
                                <p>生理の周期とは、開始日から次の生理が始まる日の前日までの期間のことを言います。<br>
                                    正常な場合、だいたい25日〜38日間で、2~5日間ずれることもあります。また、ストレスや生活習慣によって1週間ほどずれることもあります。<br>
                                    異常な場合、1ヶ月に2〜3回と高頻度で生理がくる『頻発月経』や、逆に1ヶ月以上来ない『生理不順』等があります。
                                </p>
                            </div>

                            <div class="textbookFlex seirikikantosyukketuryo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/textbook2_2.jpeg">
                                <div class="textbookFlexPbox">
                                    <h6>生理期間と出血量</h6>
                                    <p>正常な生理中の期間はだいたい3〜7日間です。出血量は約20ml~140mlです。<br>
                                        これ以上、もしくはこれ以下の期間や量の場合はそれぞれ『過多月経』『過少月経』の可能性があります。<br>
                                        『過多月経』は、8日間以上続くことがあったり、眠れないほどの出血量や1時間以内にナプキンを交換しないといけない出血量、レバー状の大きな血の塊が出ることがあり、ホルモンバランスの乱れや、子宮筋腫などの子宮の病気の可能性もあります。<br>
                                        『過小月経』は、3日間以内に終わることがあったり、2日目で1日中ナプキンの交換が必要ないほどの少量出血の場合、生理が止まってしまう『無月経』の前兆症状の可能性もあります。<br>
                                        早めに婦人科に受診しましょう。
                                    </p>
                                </div>
                            </div>


                            <div class="textbookpageTopdown seiritu">
                                <h6>生理痛</h6>
                                <p>正常な生理痛は、日常生活が普段通りに送れて、市販の鎮痛剤を飲んだら痛みが和らぐ程度です。<br>
                                    日常生活に支障をきたす生理痛は異常で、『月経困難症』という病気の可能性が高いです。それを知らずに生理痛に悩み、苦しんでいる女性はたくさんいます。市販の鎮痛剤はお腹に優しい作りになっていますが、鎮痛剤を飲めば落ち着くと思い、たくさん服用してしまうと、効果が減ってしまったり、胃酸過多になって吐き気や腹痛を起こしたり、胃潰瘍という病気になってしまうこともあります。少しでも生理痛に悩んでいる場合は婦人科に相談してみましょう。
                                </p>
                            </div>
                        </article>
                        
                    </div>


                    <div class="pageTextbookpageButton">
                        <div class="backButton">
                            <p><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookfirst/" class="backButtonUrl">&larr; Back 生理と身体</a></p>
                        </div>
                        <div class="nextButton">
                            <p><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookthird/" class="nextButtonUrl">Next 生理痛と不調 &rarr;</a></p>
                        </div>
                    </div>
                </section>
        

            </div>
        </div>
    </main>


<?php get_footer(); ?>