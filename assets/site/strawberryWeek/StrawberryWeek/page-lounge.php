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
                            <span>生理で悩む人のためのコラム</span><br>
                            Lounge
                        </h2>
                    </div>
                </div>


                <div class="sitemap">
                    <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></p>
                    <p>&gt;</p>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>lounge/">Lounge</a></p>
                </div>


                <section id="pageLounge">
                    <div class="pageLounge">


                        <div class="newArticle">
                            <h3>最新の記事</h3>

                            <div class="newArticleInner">

                                <a href="<?php echo esc_url(home_url('/')); ?>lounge/loungepagefirst/" class="newArticleBox">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/lounge_2.jpeg" alt="">
                                    <p class="newArticleBoxCategory">Life/Health</p>
                                    <h4 class="newArticleBoxHead">ピルって実際どうなの？</h4>
                                </a>

                                <a href="#" class="newArticleBox">
                                    <img src="" alt="">
                                    <p class="newArticleBoxCategory">Product</p>
                                    <h4 class="newArticleBoxHead">
                                        生理周期を共有しよう<br>
                                        アプリ『ケアミー』
                                    </h4>
                                </a>

                                <a href="#" class="newArticleBox">
                                    <img src="" alt="">
                                    <p class="newArticleBoxCategory">Trouble</p>
                                    <h4 class="newArticleBoxHead">
                                        生理の悩みあるある<br>
                                        『ナプキンかぶれ』
                                    </h4>
                                </a>

                                <a href="#" class="newArticleBox">
                                    <img src="" alt="">
                                    <p class="newArticleBoxCategory">Other</p>
                                    <h4 class="newArticleBoxHead">サンプルサンプルサンプルサンプル</h4>
                                </a>

                            </div>

                            <div class="moreButton">
                                <p><a href="#" class="newarticleMoreButton">More</a></p>
                            </div>

                        </div>


                        <div class="articleCategory">

                            <h3>カテゴリー</h3>

                            
                            <ul class="articleCategoryInner">
                                <li><a href="#" class="categoryButton">Product</a></li>
                                <li><a href="#" class="categoryButton">Life/Health</a></li>
                                <li><a href="#" class="categoryButton">Trouble</a></li>
                                <li><a href="#" class="categoryButton">Other</a></li>
                            </ul>


                        </div>
                    </div>
                </section>


            </div>
        </div>
    </main>


<?php get_footer(); ?>