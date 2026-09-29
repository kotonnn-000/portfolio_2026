<?php get_header("vision"); ?>
        <main>

            <section class="message">
                <h2 class="messageTitle">CEO MESSAGE</h2>
                <p class="messageText"><span class="slide-bottom">グローリットは「広告業界の成長で日本社会の明るい未来を」というミッションを掲げて、日々成長をしていくように努力しております。人生において大きい壁に思いっきり当たってしまうことは少なからずあります。そんな中でも前を向いて歩み続けることによって人は成し遂げると考えています。<br>
                    私たちはこれからも広告業界に限らず日本社会の明るい未来を手助けできる事業をしていきます。</span></p>
            </section>


            <section class="companyVision">
                <article class="visionDetail" id="vision">
                    <h2 class="vision">VISION</h2>
                    <div class="pbox">
                        <p class="subtitle">明るい未来のチケットに</p>
                        <p class="pcontent">何事においても苦難は訪れる。日本がどんなに暗い社会になったとしても、人々がどんなに暗い顔になっても、未来を見据えられるそんな会社になっていく。</p>
                    </div>
                </article>

                <article class="visionDetail" id="mission">
                    <h2 class="mission">MISSION</h2>
                    <div class="pbox">
                        <p class="subtitle">広告業界の成長で日本社会の明るい未来を</p>
                        <p class="pcontent">人生は階段である。<br>
                            その中で”失敗”や”挫折”をしてしまうこともあるだろう。でも前に進めば何かが変わるかもしれない、何かが見つかるかもしれない。広告業界の成長＝人々の成長、暗いニュースばかりで”過去”を振り返るのではなく、明るい”未来”を見据えていこう。</p>
                    </div>
                </article>

                <article class="visionDetail" id="value">
                    <h2 class="value">VALUE</h2>
                    <div class="pbox">
                        <p class=subtitle>情熱をもって未来を変えていく</p>
                        <p class="pcontent">未来の主役は自分たちだ。変革をもたらしていく。</p>
                    </div>
                </article>
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