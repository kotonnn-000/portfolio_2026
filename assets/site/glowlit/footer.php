<footer class="baseFooter">
            <p class="footerLogoImg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">
            </p>

            <p class="footerAbout">
                株式会社グローリット<br>
                <!--住所-->
            </p>

            <nav>
                <ul class="footerNav">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>service/">SERVICE</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>company/">COMPANY</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>vision/">VISION</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>contact/">CONTACT</a></li>
                </ul>
            </nav>

            <div class="copyright">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')) ;?>/#">プライバシーポリシー</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')) ;?>/#">利用規約</a></li>
                    <li><small>&copy; 株式会社グローリット 2023. All rights reserved.</small></li>
                </ul>
            </div>
            
        </footer>

        <script>
            {
                /*スクロールイベントの設定*/
                window.addEventListener('scroll',function(){
                    let scrollValue = document.documentElement.scrollTop;
                    console.log(scrollValue);
                    let position = 'center' + -(scrollValue/20) + 'px';
                    for(i = 0; i < conteClassObject.length ; i++){
                        conteClassObject[i].style.backgroundPosition = position;
                    }
                });
            }
        </script>
        
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/hamburger.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fadethis.min.js"></script>

        <script>
            $(function(){
                $(window).fadeThis({
                    speed:1000
                });
            });
        </script>
    </div>
    <?php wp_footer(); ?>
</body>
</html>