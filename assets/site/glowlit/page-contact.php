<?php get_header("contact"); ?>
        <main>
            <div class="mainContainer">

                <section class="contactForm">
                    <h2>お問い合わせフォーム</h2>
                    <p class="contactp">
                        お問い合わせはこちらのフォームから気軽にお尋ねください
                    </p>
                    
                    <form>	
                        <div class="form">
                            <p class="name formlabel"><span class="must">必須</span><span class="labelTitle">お名前</span></p>
                            <input type="text" name="name" id="name" placeholder="例）山田 太郎">
                        </div>
                        <div class="form">
                            <p class="mail formlabel"><span class="must">必須</span><span class="labelTitle">メールアドレス</span></p>
                            <input type="text" name="mail" id="mail" placeholder="例）yamada@sample.com">
                        </div>
                        <div class="form">
                            <p class="title formlabel"><span class="must">必須</span><span class="labelTitle">お問い合わせ表題</span></p>
                            <input type="text" name="title" id="title">
                        </div>
                        <div class="form">
                            <p class="textarea formlabel"><span class="must">必須</span><span class="labelTitle">お問い合わせ内容</span></p>
                            <textarea name="message" id="message" cols="" rows="10"></textarea>
                        </div>
                        
                        
                        <p class="contactp">
                            お送りいただいた、お名前やメールアドレスは、<br>
                            こちらの連絡用以外には使用いたしません。
                        </p>
                        
                        <div class="btn">
                            <input type="submit" value="送信">
                            <div class="resetbtn">
                                <input type="reset" value="やり直し">
                            </div>
                        </div>
                            
                    </form>
                </section>

                <section class="baseContact">
                    <h2 class="title contactTitle">CONTACT</h2>
                    <p class="contactp">
                        当社へのご案内は下記よりお電話、<br>
                        もしくはお問い合わせフォームよりお気軽にお問い合わせください。
                    </p>
                    <div class="button">
                    <!--
                        <div class="telButton">
                            a href=tel:000-0000-0000>
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
            </div>
        </main>

        <?php get_footer(); ?>