<article id="search__box" class="sp">
<?php if(!is_page('mitsui-numle') || is_page('mitsui-numle2')) : ?>
    <h2 class="title__wrap">絞り込み検索</h2>
    <?php endif; ?>
    <div class="search__wrap">

        <form role="search" method="get" id="searchform" action="<?php  echo esc_url(home_url( '/' )); ?>">
            <input type="hidden" name="s" />
            <?php if(!is_page('mitsui-numle') || is_page('mitsui-numle2')) : ?>
            <div class="search__area__top sp">

                <div class="search__items">

                    <div class="search__item">

                        <label for="type">
                            <div class="title__wrap">カードタイプ</div>
                            <select name="type" id="type">
                                <option value="">指定なし</option>
                                <option value="一般カード">一般カード</option>
                                <option value="ステータスカード">ステータスカード</option>
                                <option value="学生がお得なカード">学生がお得なカード</option>
                                <option value="法人・個人事業主">法人・個人事業主</option>
                                <option value="リボ専用">リボ専用</option>
                            </select>
                        </label>

                        <label for="price">
                            <div class="title__wrap">年会費</div>
                            <select name="price" id="price">
                                <option value="">指定なし</option>
                                <option value="1">初年無料</option>
                                <option value="2">永年無料</option>
                                <option value="3">5,000円以下</option>
                                <option value="4">10,000円以下</option>
                                <option value="5">10,000円以上</option>
                            </select>
                        </label>

                        <label for="point1">
                            <div class="title__wrap">ポイント還元率</div>
                            <select name="point1" id="point1">
                                <option value="">指定なし</option>
                                <option value="50">0.5%以上</option>
                                <option value="100">1.0%以上</option>
                                <option value="200">2.0%以上</option>
                            </select>
                        </label>

                        <label for="point2">
                            <div class="title__wrap">ポイント交換先</div>
                            <select name="point2[]" id="point2">
                                <option value="">指定なし</option>
                                <option value="ANAマイレージ">ANAマイレージ</option>
                                <option value="JALマイレージ">JALマイレージ</option>
                                <option value="キャッシュバック">キャッシュバック</option>
                                <option value="Tポイント">Tポイント</option>
                                <option value="Amazon券">Amazon券</option>
                                <option value="楽天スーパーポイント">楽天スーパーポイント</option>

                            </select>
                        </label>

                        <label for="emoney">
                            <div class="title__wrap">電子マネー</div>
                            <select name="emoney" id="emoney">
                                <option value="">指定なし</option>
                                <option value="Suica">Suica</option>
                                <option value="PASMO">PASMO</option>
                                <option value="QUICPay">QUICPay</option>
                                <option value="iD">iD</option>
                                <option value="楽天Edy">楽天Edy</option>
                                <option value="nanaco">nanaco</option>
                                <option value="WAON">WAON</option>
                            </select>
                        </label>

                        <label for="speed">
                            <div class="title__wrap">発行スピード</div>
                            <select name="speed" id="speed">
                                <option value="">指定なし</option>
                                <option value="1">最短翌営業日</option>
                                <option value="2">3営業日以内</option>
                                <option value="3">1週間以内</option>
                                <option value="4">2週間以内</option>
                            </select>
                        </label>

                        <label for="insurance">
                            <div class="title__wrap">付帯保険</div>
                            <select name="insurance" id="insurance">
                                <option value="">指定なし</option>
                                <option value="海外旅行保険">海外旅行保険</option>
                                <option value="国内旅行保険">国内旅行保険</option>
                                <option value="盗難保険">盗難保険</option>
                                <option value="ショッピング保険">ショッピング保険</option>
                            </select>
                        </label>
                    </div>



                </div>

            </div>
            <?php endif; ?>
            <!-- .search__area__top END -->

            <div class="search__area__bottom sp">
                <?php if(!is_page('mitsui-numle') || is_page('mitsui-numle2')) : ?>
                <h3>ブランド</h3>

                <div class="search__items brand__wrap">

                    <div class="search__item 1">
                        <label for="brand__01">
                            <input type="checkbox" name="brand[]" id="brand__01" value="VISA" />
                            <span></span>
                            <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__visa.jpg" alt="">
                        </label>
                    </div>

                    <div class="search__item 2">
                        <label for="brand__02">
                            <input type="checkbox" name="brand[]" id="brand__02" value="JCB" />
                            <span></span>
                            <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__jcb.jpg" alt="">
                        </label>
                    </div>

                    <div class="search__item 3">
                        <label for="brand__03">
                            <input type="checkbox" name="brand[]" id="brand__03" value="Mastercard" />
                            <span></span>
                            <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__master.jpg" alt="">
                        </label>
                    </div>

                    <div class="search__item 4">
                        <label for="brand__04">
                            <input type="checkbox" name="brand[]" id="brand__04" value="American Express" />
                            <span></span>
                            <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__american.jpg" alt="">
                        </label>
                    </div>

                    <div class="search__item 5">
                        <label for="brand__05">
                            <input type="checkbox" name="brand[]" id="brand__05" value="Diners Club" />
                            <span></span>
                            <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__diners.jpg" alt="">
                        </label>
                    </div>

                </div>

                <h3>人気条件</h3>

                <?php endif; ?>

                <div class="search__items kodawari__wrap">

                    <div class="search__item 1">
                        <label for="radio1">
                            <input type="checkbox" name="ninki" id="radio1" value="年会費無料" />
                            <span></span>
                            年会費無料
                        </label>
                    </div>

                    <div class="search__item 2">
                        <label for="radio2">
                            <input type="checkbox" name="ninki" id="radio2" value="高還元率・ポイント貯めたい人" />
                            <span></span>
                            高還元率・ポイント貯めたい人
                        </label>
                    </div>

                    <div class="search__item 3">
                        <label for="radio3">
                            <input type="checkbox" name="ninki" id="radio3" value="発行スピードが早い・審査も早い" />
                            <span></span>
                            発行スピード・審査も早い
                        </label>
                    </div>

                    <div class="search__item 4">
                        <label for="radio4">
                            <input type="checkbox" name="ninki" id="radio4" value="ETCカード対応・車によく乗る人" />
                            <span></span>
                            ETCカード対応・車によく乗る人
                        </label>
                    </div>

                    <div class="search__item 5">
                        <label for="radio5">
                            <input type="checkbox" name="ninki" id="radio5" value="マイルが貯まる・旅行や海外出張で" />
                            <span></span>
                            マイルが貯まる・旅行や海外出張が多い
                        </label>
                    </div>

                    <div class="search__item 6">
                        <label for="radio6">
                            <input type="checkbox" name="ninki" id="radio6" value="利用限度額が高い・カード支払い多い人" />
                            <span></span>
                            利用限度額が高い人・カード支払いが多い人
                        </label>
                    </div>
                </div>

            </div>
                <!-- .search__area__bottom END -->

                <div class="search__area__button">
                    <div class="search__button">
                        <input type="submit" class="submit" value="この条件で検索する" form="searchform" />
                    </div>
                </div>
        </form>

    </div>

</article>