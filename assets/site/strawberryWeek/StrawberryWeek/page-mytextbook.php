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
                            <span>生理に悩む<br>
                                『あなただけの教科書』</span><br>
                            My Text book
                        </h2>
                    </div>
                </div>
                


            


                <div class="sitemap">
                    <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></p>
                    <p>&gt;</p>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>mytextbook/">My Text book</a></p>
                </div>


                <section id="pageMyextbook">
                    <div class="pageMytextbook">

                        <div class="pageMytextbookPBox">
                            <h3 class="slide-bottom">
                                信頼している人に自分の生理を知ってもらって<br>
                                支えあってみませんか？
                            </h3>

                            <p>生理の悩みを打ち明けたことありますか？</p>

                            <p>世間的に少しずつ女性の活躍する場が増え、生理休暇制度を取り入れる会社や生理に悩む女性向けのサービスも増え、本当に少しずつ生理に対しての考え方が変わっているのは確かですが、それでも『生理について声にする』ことはとても不安だと思います。</p>
                            
                            <p><span class="pinkp">でも少しずつ変わっている世間を、身近にいる信頼できる人を、<br>
                                あなたも少しだけ信じて勇気を出して頼ってみませんか？</span>
                            </p>

                            <p>全部を理解してもらうことや、男性に生理を実際に体験してもらうことは難しいですが、<br>
                                <span class="pinkp">まずは『あなたの生理』を知ってもらうところからはじめてみませんか？</span>
                            </p>
                        </div>


                        <div class="mytextbookHow">
                            <div class="contentTitle_left">
                                <h3>My教科書の使い方</h3>
                                <h4>How to My Textbook</h4>
                            </div>

                            <div class="mytextbookHow_pbox">
                                <div class="mytextbookHow_step">
                                    <h5>Step1</h5>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mytextbook_button.png">
                                    <p>このボタンを押してください</p>
                                </div>

                                <div class="mytextbookHow_step">
                                    <h5>Step2</h5>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mytextbook_ex.png">
                                    <p>例文はあくまでも参考程度に、自分の生理についての文章を作成しましょう</p>
                                </div>

                                <div class="mytextbookHow_step">
                                    <h5>Step3</h5>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mytextbook_line.png">
                                    <p>
                                        文章を作成して、LINEで信頼できる人に送りましょう<br>
                                        自分の『生理』を知ってもらうことで、頼り合える関係を築きましょう
                                    </p>
                                </div>
                            </div>

                        </div>


                        <div class="openButton">
                            <button class="modal-open js-modal-open">My 教科書をつくってみる</button>
                        </div>

                        <!--modal-->
                        <section id="makemytextbookModal">
                            <div class="modal js-modal">
                                <div class="modalcontainer">

                                    <button class="modal-close js-modal-close">×</button>

                                    <div class="modalContent">
                                        <h4>あなたの生理を家族やパートナー、気の許せる友達に共有して知ってもらいませんか？</h4>


                                        <div class="ex">
                                            <h5 class="exHead">例文</h5>


                                            <div class="excontent">

                                                <div class="exBox">
                                                    <h6>生理中はのんびりしたいAさん</h6>
                                                    <p>だいたい○○日周期で生理がきます。<br>
                                                        生理中は特に腹痛と頭痛が辛い時が多くて横になると少し落ち着きます。<br>
                                                        それでも辛い時はロキソニンSplusを飲んで寝ます。<br>
                                                        だから生理中は家でのんびり過ごすのが理想的です。
                                                    </p>
                                                </div>

                                                <div class="exBox">
                                                    <h6>生理不順のBさん</h6>
                                                    <p>私は生理の周期が不安定で遅くても2~3ヶ月に1回くらいの頻度です。<br>
                                                        生理痛はわりと軽めで腰が痛かったり重く感じる時があります。<br>
                                                        生理1週間前から生理4日目くらいまでメンタルが不安定になることが多くて、いつもなら気にしないことが不安になったり涙脆くなります。自分に「気にしない気にしない」と落ち着かせて対策してるけど、それでもしんどくなる時もあります。そういう時はなるべく1人か安心できる人と過ごしたいです。
                                                    </p>
                                                </div>

                                                <div class="exBox">
                                                    <h6>生理痛重めピル服用中のCさん</h6>
                                                    <p>私はピルを服用していて生理周期はだいたい予定通りに管理しています。<br>
                                                        ただ、生理痛が重めで特に寒い時期は腹痛や特に重い時は吐いてしまう時もあります。そういう時はとりあえず寝ます。<br>
                                                        生理2~3日前から3日目くらいまで身体の不快感からイライラすることも多くて八つ当たりしないように気をつけているけど、いつもより言葉が強かったらごめんなさい。
                                                    </p>
                                                </div>

                                                <div class="exBox">
                                                    <h6>彼氏と同棲中のDさん</h6>
                                                    <p>私は生理中お腹が痛くなることが多くて、お手洗いに行くことが増えてしまいます。同じタイミングでお手洗い使っていたらごめん。<br>
                                                        生理用品はふだん『ロリエ スリムガード昼用』と『ロリエ 朝までブロック340』を使っています。<br>
                                                        生理周期アプリを見て生理前に生理用品をちゃんと買っているけれど、もし急遽生理がきたら買ってきてくれるととっても助かります。<br>
                                                        生理中イライラしやすい時もあるけど、そんな時はわがままかもしれないけど放っておいて欲しいです。<br>
                                                        いつも支えてくれてありがとう。
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="textBox">
                                                <form>
                                                    <label for="name">あなたのだけの生理教科書</label>
                                                    <textarea class="mytextbook" name="Mytextbook" id="message"></textarea>

                                                    <button id="sendLine" class="linebutton">LINEで送る</button>
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </div>
                </section>

        
            </div>
        </div>
    </main>


<?php get_footer(); ?>