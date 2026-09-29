<footer>

        <div class="wave">
            <canvas id="waveCanvas"></canvas>
        </div>
        
        <div class="footer">

            <div class="footerMenubar">
                <h1 class="footericon">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="">
                    Strawberry Week
                    </a>
                </h1>

                <div class="footernav">
                    <nav>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>message/">Message</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/">Text book</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>mytextbook/">My Text book</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>lounge/">Lounge</a></li>
                        </ul>
                    </nav>
                </div>
            </div>


            <div class="footer_foot">
                <p><a href="<?php echo esc_url(home_url('/')); ?>privacypolicy/">プライバシーポリシー</a></p>
                <p><small>copy right &copy; StrawberryWeek.</small></p>
            </div>


        </div>
    </footer>


    <script src="<?php echo get_template_directory_uri(); ?>/js/wave.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script>
      $(".hamburger").click(function () {
        $(".hamburger").toggleClass("is-active");
        $(".activemenu").toggleClass("is-active");
      });
    </script>

    <script>
        document.getElementById("sendLine").addEventListener("click", () => {
            // テキストエリアの内容とページURLを取得
            const message = document.getElementById("message").value.trim();
            const pageUrl = window.location.href;

            // メッセージが空なら警告を表示
            if (!message) {
            alert("メッセージを入力してください！");
            return;
            }

            // LINE共有用のリンクを生成 (メッセージ + ページURL)
            const fullMessage = `${message}\n${pageUrl}`;
            const lineUrl = `https://line.me/R/msg/text/?${encodeURIComponent(fullMessage)}`;

            // LINEを開く
            window.open(lineUrl, "_blank");
        });
    </script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fadethis.min.js" type="text/javascript"></script>
    <script>
        $(window).fadeThis();
    </script>
    
</body>


</html>