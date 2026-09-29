<?php get_header("company"); ?>
        <main>

            <div class="backgroundContainer">

                <section class="companyDetail">
                    <table>
                        <tr class="tablerow">
                            <td class="left">事業所名</td>
                            <td class="right">株式会社グローリット</td>
                        </tr>

                        <tr class="tablerow">
                            <td class="left">代表取締役</td>
                            <td class="right">秋本　渚</td>
                        </tr>

                    <!--
                        <tr class="tablerow">
                            <td class="left">設立</td>
                            <td class="right"></td>
                        </tr>
                    -->

                        <tr class="tablerow">
                            <td class="left">所在地</td>
                            <td class="right">〒636-0061<br>
                                奈良県北葛城郡河合町山坊４５９−１
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.281100940051!2d135.7335424!3d34.571753199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60012e36047d3dd7%3A0xbd824b0c836ddfce!2z44CSNjM2LTAwNjEg5aWI6Imv55yM5YyX6JGb5Z-O6YOh5rKz5ZCI55S65bGx5Z2K77yU77yV77yZ4oiS77yR!5e0!3m2!1sja!2sjp!4v1716005020628!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </td>
                        </tr>

                        <tr class="tablerow">
                            <td class="left">事業内容</td>
                            <td class="right">インフルエンサーマーケティング事業<br>
                                広告代理／アフィリエイト事業<br>
                                広告コンサル事業</td>
                        </tr>
                    </table>
                </section>

                <section class="achieves">
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