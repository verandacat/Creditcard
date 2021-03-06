<!DOCTYPE html>
<html lang="en">

<head>
<!-- Re:roots連携 -->
<script>
  const reroots = function() {
    function getParam(p) {
      let match = RegExp('[?&]' + p + '=([^&]*)').exec(location.search);
      return match && match[1];
    }
    function addClid() {
      let clids = [{param:'gclid',name:'g'},{param:'yclid',name:'y'}];
      let name = 'reroots_clid';
      clids.forEach(function(clid) {
          let clidParam = getParam(clid.param);
          if (clidParam) {localStorage.setItem(name, clid.name+'_'+clidParam);}
      });
    }
    addClid();
  }
  addEventListener('load', reroots);
</script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TRT84R9');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="initial-scale=1.0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>おすすめクレジットカード比較ナビ</title>
    <meta name="description"
        content="おすすめクレジットカード比較ナビでは、様々な切り口からクレジットカードを徹底比較！年会費・ポイント還元率・発行スピードなどのカテゴリ別でわかりやすくクレジットカードを紹介。絞り込み検索やランキングで比較し、あなたに合うクレジットカードを見つけよう。">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="apple-touch-icon" sizes="57x57"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php bloginfo('template_url'); ?>/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
        content="<?php bloginfo('template_url'); ?>/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- 三井LP LINE用 -->
    <?php if(is_page('mitsui-numle-l')) : ?>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/numberless.css?<?php echo time(); ?>" />
    <!-- Global site tag (gtag.js) - Google Ads: 453046627 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-453046627"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-453046627');
    </script>

    <!-- LINE Tag Base Code -->
    <!-- Do Not Modify -->
    <script>
    (function(g, d, o) {
        g._ltq = g._ltq || [];
        g._lt = g._lt || function() {
            g._ltq.push(arguments)
        };
        var h = location.protocol === 'https:' ? 'https://d.line-scdn.net' : 'http://d.line-cdn.net';
        var s = d.createElement('script');
        s.async = 1;
        s.src = o || h + '/n/line_tag/public/release/v1/lt.js';
        var t = d.getElementsByTagName('script')[0];
        t.parentNode.insertBefore(s, t);
    })(window, document);
    _lt('init', {
        customerType: 'lap',
        sharedCookieDomain: 'xn--t8j4aa4n2hxa7duezbll2iyozhz284frwre.com',
        tagId: '48a5e5fb-3810-49c4-8ee1-4cb4c2eaa05c'
    });
    _lt('send', 'pv', ['48a5e5fb-3810-49c4-8ee1-4cb4c2eaa05c']);
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://tr.line.me/tag.gif?c_t=lap&t_id=48a5e5fb-3810-49c4-8ee1-4cb4c2eaa05c&e=pv&noscript=1" />
    </noscript>
    <!-- End LINE Tag Base Code -->

    <script>
    _lt('send', 'cv', {
        type: 'CustomEvent'
    }, ['48a5e5fb-3810-49c4-8ee1-4cb4c2eaa05c']);
    </script>

    <script language="javascript">
        (function () {
        var _lgy     = document.createElement('script');
        var _lgy_adv = 9015;
        window._lgy_advs = window._lgy_advs || {};
        window._lgy_advs[_lgy_adv] = false;
        window._lgy_options = window._lgy_options || {};
        window._lgy_options[_lgy_adv] = {};
        _lgy.async = true;
        _lgy.src = 'https://dsp.logly.co.jp/seg.js';
        var _lgy0 = document.getElementsByTagName('script')[0];
        _lgy0.parentNode.insertBefore(_lgy, _lgy0);
        })();
    </script>

    <style>
    .list li {
        list-style-type: disc!important;
    }
    </style>

    <?php endif; ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRT84R9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- ✨💎 PC/SP -->
    <header>

        <div class="nav__bg"></div>

        <h1 class="logo__box">
            <a href="<?php echo home_url('/'); ?>">
                <img class="pc" src="<?php bloginfo('template_url'); ?>/images/nav/SVG/logo__pc.png" alt="">
                <?php if($_GET['f']=="on") : ?>
                <img class="sp" src="<?php bloginfo('template_url'); ?>/images/nav/SVG/logo__sp.png" alt=""
                    style="width:60%">
                <?php else : ?>
                <img class="sp" src="<?php bloginfo('template_url'); ?>/images/nav/SVG/logo__sp.png" alt="">
                <?php endif; ?>
            </a>

            <?php if(!$_GET['f']=="on") : ?>
            <div class="toggle__box sp">
                <img src="<?php bloginfo('template_url'); ?>/images/nav/toggle__icons.png" alt="">
            </div>
            <?php endif; ?>
        </h1>


        <?php if(!$_GET['f']=="on") : ?>

        <?php if (is_mobile()) : ?>
        <nav class="scroll">
            <article>

                <div class="rank__menu__wrap open__box">
                    <a href="<?php echo home_url('/rankingall'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/nav/icon__medal.png" alt="">
                        <p>ランキング</p>
                    </a>

                    <ul>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__01.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingall'); ?>">総合ランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__02.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingprice'); ?>">年会費無料ランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__03.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingpoint'); ?>">ポイント還元率ランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__06.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingspeed'); ?>">発行スピードランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/ranking/icon__07.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingetc'); ?>">ETCカードランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/ranking/icon__08.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingbusiness'); ?>">個人事業主・法人ランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__lady.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankinglady'); ?>">女性用ランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__student.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingstudent'); ?>">学生用ランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__visa.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingvisa'); ?>">VISAランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__master.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingmaster'); ?>">Mastercardランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/contents/brand__jcb.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingjcb'); ?>">JCBランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/icons/gold.jpg" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankinggold'); ?>">ゴールドカードランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__04.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingmil'); ?>">マイルが貯まるランキング</a>
                            </div>
                        </li>

                        <li>
                            <div class="img__wrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar/icon__status.png" alt="">
                            </div>
                            <div class="text__wrap">
                                <a href="<?php echo home_url('/rankingstatus'); ?>">ステータスカードランキング</a>
                            </div>
                        </li>
                    </ul>

                    <div class="open__menu__wrap">
                        <a href="<?php echo home_url('/campaign'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/nav/icon__campaign.png" alt="">
                            <p>キャンペーン</p>
                        </a>
                    </div>
                </div>

            </article>

            <?php else : ?>
            <nav class="scroll pc">


                <ul>
                    <li>
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/nav/icon__top.png" alt="">
                            <p>top</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/rankingall'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/nav/icon__medal.png" alt="">
                            <p>ランキング</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/campaign'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/nav/icon__campaign.png" alt="">
                            <p>キャンペーン</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/feature'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/nav/icon__ribbon.png" alt="">
                            <p>特集</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo home_url('/qna'); ?>"><img
                                src="<?php bloginfo('template_url'); ?>/images/nav/icon__qna.png" alt="">
                            <p>Q&A</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/shindan'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/nav/icon__shindan.png" alt="">
                            <p>診断</p>
                        </a>
                    </li> -->
                </ul>
                <?php endif; ?>
            </nav>
            <?php endif; ?>
    </header>