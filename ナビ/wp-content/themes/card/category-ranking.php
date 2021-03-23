<?php
/*
Template Name: ランキング一覧
*/
get_header();
?>


<!-- 🌹 ランキング一覧 🌹 -->
<div id="container">


    <?php include('mobileNav.php'); ?>


    <!-- ✨✨ PC -->
    <section id="bread"></section>



    <!-- ✨💎 PC/SP -->
    <section id="page__title__box" class="pc">

        <h2>ランキング</h2>

    </section>



    <!-- ✨💎 PC/SP -->
    <div id="contents__box">

        <!-- 🌹 Main Contents🌹 -->

        <section id="section__box">

            <!-- 総合ランキング -->

            <article id="ranking__title__box">
                <h3>総合ランキング</h3>
            </article>





            <?php if(is_mobile()) : ?>

            <!-- 💎💎 SP -->
            <article id="ranking__items__box" class="sp swiper-container-ranktop">

                <div class="ranking__wrap swiper-wrapper">

                    <div class="ranking__item__wrap rank1 swiper-slide">

                        <div class="title__wrap">
                            <a href="">ライフカード</a>
                        </div>

                        <div class="ranking__item__top">


                            <div class="image__wrap">
                                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/card/life_01.png"
                                        alt=""></a>
                            </div>



                            <div class="manzoku__wrap">

                                <div class="manzoku__content">

                                    <h4>総合満足度</h4>
                                    <div class="star__wrap">

                                        <div class="star"><img
                                                src="<?php bloginfo('template_url'); ?>/images/ranking/star-1.png"
                                                alt=""></div>

                                        <span class="number">
                                            4.9
                                        </span>

                                    </div>

                                    <div class="review__btn">
                                        <a href="">口コミを見る</a>

                                    </div>

                                </div>

                            </div>


                        </div>

                        <div class="ranking__item__middle">
                            <div class="points__wrap">
                                <h4>おすすめする3つのポイント</h4>
                                <ul class="points__list">
                                    <li>ポイントポイントポイントポイント</li>
                                    <li>ポイントポイントポイントポイント</li>
                                    <li>ポイントポイントポイントポイント</li>
                                </ul>
                            </div>
                        </div>

                        <div class="ranking__item__bottom">
                            <div class="date__wrap">2020年12月31日まで</div>
                            <div class="btn__wrap__sp">
                                <a class="koushiki__btn" href="">
                                    <p>キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報</p>
                                    <p>公式サイトを見る<img
                                            src="<?php bloginfo('template_url'); ?>/images/ranking/bx_bxs-right-arrow-circle-1.svg"
                                            alt="">
                                    </p>
                                </a>
                            </div>

                            <a href="" class="syousai__btn">
                                詳細を見る
                            </a>

                        </div>

                    </div>

                    <div class="ranking__item__wrap rank2 swiper-slide">

                        <div class="title__wrap">
                            <a href="">JCB CARD W</a>
                        </div>

                        <div class="ranking__item__top">


                            <div class="image__wrap">
                                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/card/jcb_01.png"
                                        alt=""></a>
                            </div>



                            <div class="manzoku__wrap">

                                <div class="manzoku__content">

                                    <h4>総合満足度</h4>
                                    <div class="star__wrap">

                                        <div class="star"><img
                                                src="<?php bloginfo('template_url'); ?>/images/ranking/star-1.png"
                                                alt=""></div>

                                        <span class="number">
                                            4.8
                                        </span>

                                    </div>

                                    <div class="review__btn">
                                        <a href="">口コミを見る</a>

                                    </div>

                                </div>

                            </div>


                        </div>

                        <div class="ranking__item__middle">
                            <div class="points__wrap">
                                <h4>おすすめする3つのポイント</h4>
                                <ul class="points__list">
                                    <li>ポイントポイントポイントポイント</li>
                                    <li>ポイントポイントポイントポイント</li>
                                    <li>ポイントポイントポイントポイント</li>
                                </ul>
                            </div>
                        </div>

                        <div class="ranking__item__bottom">
                            <div class="date__wrap">2020年12月31日まで</div>
                            <div class="btn__wrap__sp">
                                <a class="koushiki__btn" href="">
                                    <p>キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報</p>
                                    <p>公式サイトを見る<img
                                            src="<?php bloginfo('template_url'); ?>/images/ranking/bx_bxs-right-arrow-circle-1.svg"
                                            alt="">
                                    </p>
                                </a>
                            </div>

                            <a href="" class="syousai__btn">
                                詳細を見る
                            </a>

                        </div>

                    </div>

                    <div class="ranking__item__wrap rank3 swiper-slide">

                        <div class="title__wrap">
                            <a href="">三井住友カード</a>
                        </div>

                        <div class="ranking__item__top">


                            <div class="image__wrap">
                                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/card/smbc_01.png"
                                        alt=""></a>
                            </div>



                            <div class="manzoku__wrap">

                                <div class="manzoku__content">

                                    <h4>総合満足度</h4>
                                    <div class="star__wrap">

                                        <div class="star"><img
                                                src="<?php bloginfo('template_url'); ?>/images/ranking/star-2.png"
                                                alt=""></div>

                                        <span class="number">
                                            4.7
                                        </span>

                                    </div>

                                    <div class="review__btn">
                                        <a href="">口コミを見る</a>

                                    </div>

                                </div>

                            </div>


                        </div>

                        <div class="ranking__item__middle">
                            <div class="points__wrap">
                                <h4>おすすめする3つのポイント</h4>
                                <ul class="points__list">
                                    <li>ポイントポイントポイントポイント</li>
                                    <li>ポイントポイントポイントポイント</li>
                                    <li>ポイントポイントポイントポイント</li>
                                </ul>
                            </div>
                        </div>

                        <div class="ranking__item__bottom">
                            <div class="date__wrap">2020年12月31日まで</div>
                            <div class="btn__wrap__sp">
                                <a class="koushiki__btn" href="">
                                    <p>キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報キャンペーン情報</p>
                                    <p>公式サイトを見る<img
                                            src="<?php bloginfo('template_url'); ?>/images/ranking/bx_bxs-right-arrow-circle-1.svg"
                                            alt="">
                                    </p>
                                </a>
                            </div>

                            <a href="" class="syousai__btn">
                                詳細を見る
                            </a>

                        </div>

                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </article>

            <?php else : ?>
            <!-- ✨✨ PC -->
            <article id="ranking__items__box" class="pc">

                <div class="ranking__wrap">

                    <div class="ranking__item__wrap rank1">

                        <a href=""><img src="<?php bloginfo('template_url'); ?>/images/card/life_01.png" alt=""></a>

                        <div class="title__wrap">
                            <a href="">ライフカード</a>
                        </div>

                        <div class="star__wrap">
                            <div class="star"><img src="<?php bloginfo('template_url'); ?>/images/ranking/star-1.png"
                                    alt=""></div>
                            <span class="number">
                                4.8
                            </span>
                        </div>

                        <div class="text__wrap">
                            説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文 文説明文説明文説明文文説明文説明文説明文文説明文説明文説明文文説明文説明文説明文
                        </div>

                        <div class="rank__btn__wrap">

                            <a href="" class="koushiki__btn">申し込みはこちら</a>
                            <a href="" class="syousai__btn">詳細を見る</a>

                        </div>

                    </div>

                    <div class="ranking__item__wrap rank2">

                        <a href=""><img src="<?php bloginfo('template_url'); ?>/images/card/jcb_01.png" alt=""></a>

                        <div class="title__wrap">
                            <a href="">JCB CARD W</a>
                        </div>

                        <div class="star__wrap">
                            <div class="star"><img src="<?php bloginfo('template_url'); ?>/images/ranking/star-2.png"
                                    alt=""></div>
                            <span class="number">
                                4.5
                            </span>
                        </div>

                        <div class="text__wrap">
                            説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文 文説明文説明文説明文文説明文説明文説明文文説明文説明文説明文文説明文説明文説明文
                        </div>

                        <div class="rank__btn__wrap">

                            <a href="" class="koushiki__btn">申し込みはこちら</a>
                            <a href="" class="syousai__btn">詳細を見る</a>

                        </div>

                    </div>

                    <div class="ranking__item__wrap rank3">

                        <a href=""><img src="<?php bloginfo('template_url'); ?>/images/card/smbc_01.png" alt=""></a>

                        <div class="title__wrap">
                            <a href="">三井住友カード</a>
                        </div>

                        <div class="star__wrap">
                            <div class="star"><img src="<?php bloginfo('template_url'); ?>/images/ranking/star-3.png"
                                    alt=""></div>
                            <span class="number">
                                4.2
                            </span>
                        </div>

                        <div class="text__wrap">
                            説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文 文説明文説明文説明文文説明文説明文説明文文説明文説明文説明文文説明文説明文説明文
                        </div>

                        <div class="rank__btn__wrap">

                            <a href="" class="koushiki__btn">申し込みはこちら</a>
                            <a href="" class="syousai__btn">詳細を見る</a>

                        </div>

                    </div>

                </div>



                <a href="./ranking__all.html" class="link__wrap">
                    総合ランキング一覧へ
                </a>

            </article>
            <?php endif; ?>

            <article id="more__button__ranking" class="sp">
                <a href="<?php echo home_url('/rankingall'); ?>">
                    <span>総合ランキングをもっと見る</span>

                </a>
            </article>


            <article id="ranking__ninki__box">

                <h3 class="pc">人気ランキング</h3>
                <h3 class="sp">人気ランキングから探す</h3>

                <ul class="ranking__ninki__list__wrap">

                    <li><a href="">2021年人気ランキング</a></li>
                    <li><a href="">年会費無料ランキング</a></li>
                    <li><a href="">ポイント還元率ランキング</a></li>
                    <li><a href="">マイルが貯まるランキング</a></li>
                    <li><a href="">ステータスカードランキング</a></li>
                    <li><a href="">発行スピードランキング</a></li>
                    <li><a href="">ETCカードランキング</a></li>
                    <li><a href="">個人事業主・法人ランキング</a></li>

                </ul>

            </article>



            <!-- 💎💎 SP -->
            <article id="ranking__items__box sp">
            </article>



            <!-- 💎💎 SP -->
            <article id="top__feature__box" class="sp">

                <h2 class="title__wrap">
                    お得な特集
                </h2>

                <div class="top__feature__wrap">
                    <div class="top__feature__item item1">

                        <div class="img__wrap">

                        </div>

                        <div class="right__wrap">
                            <div class="title__wrap">
                                タイトル
                            </div>

                            <div class="text__wrap">
                                説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名
                            </div>
                        </div>

                    </div>
                    <div class="slide__item top__feature__item item2">

                        <div class="img__wrap">

                        </div>

                        <div class="right__wrap">
                            <div class="title__wrap">
                                タイトル
                            </div>

                            <div class="text__wrap">
                                説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名
                            </div>
                        </div>

                    </div>
                    <div class="slide__item top__feature__item item3">

                        <div class="img__wrap">

                        </div>

                        <div class="right__wrap">
                            <div class="title__wrap">
                                タイトル
                            </div>

                            <div class="text__wrap">
                                説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名
                            </div>
                        </div>

                    </div>
                    <div class="slide__item top__feature__item item4">

                        <div class="img__wrap">

                        </div>

                        <div class="right__wrap">
                            <div class="title__wrap">
                                タイトル
                            </div>

                            <div class="text__wrap">
                                説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名説名
                            </div>
                        </div>

                    </div>

                </div>

                <div class="btn__wrap">
                    <a href="">
                        特集一覧へ
                    </a>
                </div>

            </article>



            <!-- 💎💎 SP -->
            <article id="banner__box" class="sp">
                <a href="">
                    <img src="<?php bloginfo('template_url'); ?>/images/qna_sp.jpg" alt="">
                </a>
            </article>

        </section>




        <!-- Sidebar -->
        <!-- ✨✨ PC -->
        <?php get_sidebar(); ?>



        <?php get_footer(); ?>