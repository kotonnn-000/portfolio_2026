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
                    <p><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookfirst/">身体と生理</a></p>
                </div>


                <section id="pageTextbookFirstpage">
                    <div class="pageTextbook">


                        <div class="pageTextbookMenu">

                            <div class="pageTextbookMenuBox">
                                <h3><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbookfirst/" class="textbookMenuhead">身体と生理</a></h3>
                                <ul class="pageTextbookMenuList">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/#first_first/">女性の身体と生理のしくみ</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/#first_second/">人生における身体の変化</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/#first_third/">生理周期と身体の変化</a></li>
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
                        <h4>身体と生理</h4>

                        <article class="pageTextbookpageArticle" id="first_first">
                            <h5>女性の身体と生理のしくみ</h5>
                            
                            <img src="<?php echo get_template_directory_uri(); ?>/images/textbook1_1.png" class="slide-right">

                            <div class="textbookpageTopdown">
                                <h6>身体の仕組みってどうなっているの？</h6>
                                <p>私たちの体は多くの臓器や組織で構成されており、それらの仕組みを理解することは健康を考える上で重要です。特に「乳房」「子宮」「卵巣」などの女性特有の臓器は、互いに連携しながら体の健康を支えています。<br>
                                    この働きを調整する重要な役割を担うのが「ホルモン」です。ホルモンは内分泌腺で作られ、血液を通じて全身に運ばれ、臓器や組織の働きを促します。内分泌腺ごとに異なるホルモンが分泌され、それぞれが体の機能を整えたり調子を保つ役割を果たしています。<br>
                                    このようにホルモンは私たちの健康に欠かせない存在です。
                                </p>
                            </div>

                            <img src="<?php echo get_template_directory_uri(); ?>/images/textbook1_2.jpeg">

                            <div class="textbookpageTopdown">
                                <div class="textbookFlexPbox">
                                    
                                    <p>脳（視床下部・下垂体）：ホルモン分泌の指令塔で、体全体のホルモンを調整。<br>
                                        甲状腺：新陳代謝を活発にし、成長を助けるホルモンを生成。<br>
                                        腎臓（副腎）：血圧調整や血液・骨の健康を支えるホルモンを生成。<br>
                                        膵臓：血糖値を下げるホルモン「インスリン」を作る。<br>
                                        子宮（卵巣）女性ホルモン「エストロゲン」と「プロゲステロン」を生成し、妊娠・出産に関与。<br>
                                        乳房：出産時に母乳を作るための機能を持つ。
                                    </p>
                                    <p>ホルモンは体の働きを支える重要な役割を担っています。その調整は脳の「視床下部」が指示を出し、「下垂体」がその指令を受け取って、全身の内分泌腺にホルモン分泌を促す仕組みになっています。</p>

                                    <h6>毎月いらなくなった子宮内膜を体外に排出するための『生理』</h6>
                                    <p>
                                        女性の体では約1ヵ月ごとに「排卵」と「生理」が起こります。このサイクルは脳からのホルモンの指示によって進行します。まず、脳の視床下部から「GnRH」が分泌され、下垂体が「FSH（卵胞刺激ホルモン）」を放出します。これが卵巣を刺激し、卵胞が成熟して「エストロゲン」を分泌、子宮内膜を厚くして受精卵を迎える準備を進めます。<br>
                                        次に、「LH（黄体化ホルモン）」が分泌されると排卵が起こり、卵胞は「黄体」に変化して「プロゲステロン」を分泌。子宮内膜をさらに整えます。妊娠が成立しない場合、ホルモン分泌が止まり、子宮内膜がはがれ生理として排出されます。<br>
                                        このサイクルを繰り返すことで、体は妊娠の準備を整え、健康を保っています。
                                    </p>
                                </div>
                            </div>


                        </article>

                        <article class="pageTextbookpageArticle" id="first_second">
                            <h5>人生における身体の変化</h5>

                            <p>女性の体は一生の間に、ホルモンの影響を受けてさまざまに変化します。平均的に初潮は12.3歳頃に始まり、閉経は50.5歳頃に起こります。これらの体の変化は、女性ホルモンが深く関わっています。</p>
                            
                            <img src="<?php echo get_template_directory_uri(); ?>/images/textbook1_3.jpeg">

                            <div class="textbookpageTopdown">
                                <h6>初潮と閉経について</h6>
                                <p>女性ホルモンは7～8歳頃から分泌が増え始め、初潮を迎えます。20代で最も分泌量が多くなり、妊娠・出産に適した時期となります。30代後半から徐々に減少し、閉経が近づくと分泌が止まり、10年ほどかけて閉経に向かいます。</p>

                                <h6>初潮の前ぶれ</h6>
                                <p>初潮が近づくと胸がふくらみ、体に丸みが出て女性らしい体つきになります。体毛が生え始め、おりものが出るようになります。同時に思春期が訪れ、心の不安や悩みが増える時期です。</p>

                                <h6>閉経の前ぶれ</h6>
                                <p>閉経は徐々に起こり、月経周期が乱れたり、出血量が増減します。これはホルモン分泌が不安定になるためで、イライラや不安感といった精神的変化も現れることがあります。</p>
                            </div>



                            <img src="<?php echo get_template_directory_uri(); ?>/images/textbook1_4.jpeg">

                            <div class="textbookpageWrap">

                                <div class="textbookWrapPbox">
                                    <h6>幼年期（0～8歳頃）</h6>
                                    <p>卵巣には数百万個の原始卵胞が作られていますが、女性ホルモンはほとんど分泌されていません。外性器の発達は「第一次性徴」と呼ばれます。</p>
                                </div>

                                <div class="textbookWrapPbox">
                                    <h6>思春期（8～18歳頃）</h6>
                                    <p>ホルモン分泌が増え、体が丸みを帯び女性らしくなります。11～14歳頃に初経を迎え、15～18歳頃には排卵や月経が安定します。この変化を「第二次性徴」と言います。</p>
                                </div>

                                <div class="textbookWrapPbox">
                                    <h6>性成熟期（18～40代半ば）</h6>
                                    <p>ホルモンが順調に働き、20～30代は妊娠・出産に最適な時期。女性として最も充実した期間です。</p>
                                </div>

                                <div class="textbookWrapPbox">
                                    <h6>更年期（40代半ば～50代半ば）</h6>
                                    <p>卵巣の働きが衰え、女性ホルモンが減少。ホルモンバランスが崩れ、更年期障害が起こることがありますが、やがて閉経を迎えます。</p>
                                </div>

                                <div class="textbookWrapPbox">
                                    <h6>老年期（60歳頃～）</h6>
                                    <p>ホルモン分泌は止まり、体の丸みが減ります。しかし、脳や神経は衰えにくく、判断力や創造力を保つことが可能です。</p>
                                </div>
                            </div>

                            <p>女性の体はホルモンの影響を受けながら生涯を通じて変化を続けます。</p>


                        </article>



                        <article class="pageTextbookpageArticle" id="first_third">
                            <h5>生理周期と身体の変化</h5>


                            <p>生理中、子宮は経血を押し出すために伸び縮みしています（絵の具をチューブから絞り出すようなイメージ）。しかし、子宮の出入り口はとても小さいため、経血が排出されるのに数日かかります。</p>
                                
                            <p>また、血液の出方は子宮の位置にも影響されます。通常はスムーズに流れる位置ですが、子宮が前後に傾き過ぎていると血液が出にくくなり、生理が長引いたり出血量が変化することがあります。</p>
                            
                            <img src="<?php echo get_template_directory_uri(); ?>/images/textbook1_5.jpeg">


                            <div class="textbookpageWrap">

                                <div class="textbookWrapPbox">
                                    <h6>月経期</h6>
                                    <p>妊娠しない場合、黄体ホルモンと卵胞ホルモンが減少し、不要になった子宮内膜が血液とともに排出されます。これが「生理」です。この時期はホルモン分泌が少なく、腹痛や頭痛、だるさ、むくみなど不調が起こりやすいです。症状が重い場合は病院を受診しましょう。</p>
                                </div>

                                <div class="textbookWrapPbox">
                                    <h6>増殖期（卵胞期）</h6>
                                    <p>卵胞刺激ホルモンの働きで卵胞が成長し、卵胞ホルモンの分泌が増加。子宮内膜が厚くなります。この時期は肌や髪が美しく、気分もリラックス。ダイエットにも最適です。</p>
                                </div>

                                <div class="textbookWrapPbox">
                                    <h6>排卵期</h6>
                                    <p>卵胞ホルモンがピークに達すると黄体化ホルモンが分泌され、卵胞から卵子が放出されます。これが「排卵」です。</p>
                                </div>

                                <div class="textbookWrapPbox">
                                    <h6>分泌期（黄体期）</h6>
                                    <p>排卵後、卵胞が黄体に変化し、黄体ホルモンを分泌。子宮内膜がやわらかくなり、受精卵の着床に備えます。</p>
                                </div>

                            </div>

                            <div class="textbookpageTopdown">
                                <h6>生理と生理の中間（排卵期）におこりやすい変化</h6>
                                <p>女性の体は生理周期に合わせて変化し、排卵期（生理と生理の中間の2～3日間）はおりものの量が増えます。 <br> 
                                    この時期、一部の人には「排卵痛」が起こることがあります。原因は、成長した卵胞が腹膜を刺激したり、卵子が卵巣から飛び出す際の傷や出血などです。痛みが軽ければ心配ありませんが、生理痛と同じくらい強い場合は治療が必要なこともあります。基礎体温を記録し、婦人科を受診しましょう。<br>
                                    また、排卵時には一時的にホルモンが低下し、少量の出血（中間期出血）が起こることもあります。
                                </p>
                            </div>

                            


                        </article>
                        
                    </div>


                    <div class="pageTextbookpageButton">
                        <div class="backButton">
                            <p></p>
                        </div>
                        <div class="nextButton">
                            <p><a href="<?php echo esc_url(home_url('/')); ?>textbook/textbooksecond/" class="nextButtonUrl">Next 生理について &rarr;</a></p>
                        </div>
                    </div>
                </section>
            
                
            </div>
        </div>
    </main>


<?php get_footer(); ?>