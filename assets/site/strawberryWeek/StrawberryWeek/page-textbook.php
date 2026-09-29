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
                </div>


                <section id="pageTextbook">
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


                        <div class="pageTextbookPBox">
                            <h4 class="slide-bottom">
                                生理について知ってみましょう<br>
                                知ることで悩みを解決できるかもしれません
                            </h4>

                            <p>生理についてどれくらい知っていますか？</p>

                            <p>生理を経験したことがない人はもちろんですが、生理と何年も共存している人でも意外と身体の中がどういう状態なのか？なぜ生理中に不調になりやすいのか？など知らない人が実は多いです。しかし、それは現代の『性教育』が難しい環境では仕方のないことです。<br>
                                だからと言って、知らないよりは知っている方のメリットが圧倒的に多いです。<br>
                                知ることで自分の生理に対しての悩みを解決できるかもしれません。身近にいる生理で苦しんでいる人を助けられるかもしれません。
                            </p>

                            <p>まずは生理を、身体を『知る』ことから始めてみませんか？</p>
                        </div>

                        
                    </div>
                </section>

            
            </div>
        </div>
    </main>


<?php get_footer(); ?>