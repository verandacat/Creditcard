<?php get_header(); 
/*
Template Name: クレジットカード作り方
*/
?>


<div id="container">

    <!-- ✨✨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>

    <article id="head__box">
        <h2>クレジットカードの作り方</h2>

        <!-- content1 Start-->

        <div class="flex__wrap">
            <div class="cards__wrap">

                <?php wp_reset_postdata();
            $args = array(
                'posts_per_page' => '3',
                'post_type' => 'card',
                'category_name' => 'rankall',
                'meta_key' => 'rankall-number',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );
        ?>
                <?php
        $the_query = new WP_Query( $args );
        $i = 1;
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
            $catch = get_field('catch');
        ?>

                <!-- Loop1 Start -->
                <div class="card">

                    <p class="single__catch__wrap">
                        <?php echo $catch; ?>
                    </p>

                    <a href="<?php the_permalink(); ?>" class="img__wrap">
                        <img src="<?php echo $image_url[0]; ?>" alt="">
                    </a>

                    <a href="<?php the_permalink(); ?>" class="name__wrap"><i
                            class="fas fa-caret-right"></i><?php the_title(); ?></a>

                </div>

                <?php $i++; endwhile; endif; wp_reset_query(); ?>
                <!-- Loop1 End -->
                <?php wp_reset_postdata();
            $args1 = array(
            'posts_per_page' => '1',
            'post_type' => 'card',
            'category_name' => 'rankstudent',
            'meta_key' => 'rankstudent-number',
            'orderby' => 'meta_value_num',
            'order' => 'asc',
            );
        ?>
                <?php
        $the_query = new WP_Query( $args1 );
        $i = 1;
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
            $catch = get_field('catch');
        ?>
                <!-- Loop2 Start -->
                <div class="card">

                    <p class="single__catch__wrap">
                        <?php echo $catch; ?>
                    </p>

                    <a href="<?php the_permalink(); ?>" class="img__wrap">
                        <img src="<?php echo $image_url[0]; ?>" alt="">
                    </a>

                    <a href="<?php the_permalink(); ?>" class="name__wrap"><i
                            class="fas fa-caret-right"></i><?php the_title(); ?></a>

                </div>

                <?php $i++; endwhile; endif; wp_reset_query(); ?>
                <!-- Loop2 End -->

            </div>
        </div>

        <!-- content1 End-->
    </article>

    <div id="contents__box">



        <section id="section__box">

            <article id="con__box">





                <!-- content2 Start-->

                <div class="content">

                    <h3 class="con__h3">クレジットカードを申し込むときに準備するもの</h3>

                    <div class="text__wrap">
                        <span class="bold">「クレジットカードの申込みってめんどくさそう」</span><br>
                        そんなイメージがあるかもしれません。<br>でも<span class="red">意外と簡単で用意するものも少ない</span>って知っていましたか？
                    </div>

                    <div class="text__wrap"><span
                            class="big bold">基本的に必要なモノは２つ！</span><br>未成年の場合でもたった３つです。<br>その必要なものは以下の通り。
                    </div>

                    <h4>1.クレジットカードを選ぶ</h4>
                    <div class="line"></div>

                    <img src="<?php bloginfo('template_url'); ?>/images/contents/0122_001.jpg" alt="">

                    <div class="text__wrap">
                        <span class="red">クレジットカードの特徴を比較･検討</span>して、<br>作りたいクレジットカードを選びましょう。
                    </div>

                    <div class="text__wrap">
                        クレジットカードを選ぶ際に確認しいといけないことは、
                        <ul>
                            <li>・ブランド</li>
                            <li>・年会費</li>
                            <li>・ポイント還元率</li>
                            <li>・旅行傷害保険</li>
                            <li>・ショッピング保険の有無</li>
                        </ul>
                    </div>

                    <h4>2.本人確認書類</h4>
                    <div class="line"></div>

                    <img src="<?php bloginfo('template_url'); ?>/images/contents/0122_002.jpg" alt="">

                    <div class="text__wrap">
                        <span class="red big">運転免許証</span>があればそれでOKです。それ以外だと･･･
                        <ul>
                            <li class="big red">・パスポート</li>
                            <li class="big red">・健康保険証</li>
                            <li class="big red">・住民票</li>
                        </ul>
                        この3つのうち一つがあれば大丈夫。
                    </div>

                    <div class="text__wrap">
                        ただし、<span class="big red">住民票は発行から6ヶ月以内</span>など有効期限に注意です。
                    </div>

                    <div class="text__wrap">ちなみに、<span
                            class="under">上記の本人確認書類に記載されている住所が現住所と違う場合は、公共料金の領収書が必要なので要確認。</span></div>

                    <h4>3.口座情報が分かるもの</h4>
                    <div class="line"></div>

                    <br>
                    <div class="text__wrap">具体的には、キャッシュカードや通帳ですね。
                    </div>

                    <img src="<?php bloginfo('template_url'); ?>/images/contents/0122_003.png" alt="">

                    <div class="text__wrap"><span class="under">クレジットカードで使用した金額を引き落としたい口座のものを用意してください。</span>大抵のカード会社ではWEBサイトで申し込む際に登録します。<span class="red">同時に本人確認手続きも行えるため、後日確認書類を郵送しなくてOK。</span>手間が省けますね。
                    </div>

                    <h4>4.(未成年の場合)親権者の同意書</h4>
                    <div class="line"></div>

                    <img src="<?php bloginfo('template_url'); ?>/images/contents/0122_004.jpg" alt="">

                    <div class="text__wrap"><span class="red big">申込者が未成年だった場合、親権者の同意が必要です。</span><br>
                    書面での同意書か電話確認が必要なので、申し込む際には事前に相談、了承を得ておきましょう。
                    </div>

                </div>
                <!-- content2 End-->



                <!-- content3 Start-->

                <div class="content">

                    <h3 class="con__h3">クレジットカードの申し込みから発行までの手順</h3>

                    <div class="text__wrap">
                        大抵のクレジットカードはWEBで申し込めます。<br>その際の細かい手順は違うこともありますが、大まかな流れは一緒です。<br>ココではネット申込から発行までを解説していきます。
                    </div>

                    <h4>1.必要事項の記入</h4>
                    <div class="line"></div>

                    <div class="text__wrap">
                        まず、カード会社の申し込みページを表示。すると利用規約などが表示されるので、しっかりと読んで納得したら「同意する」のボタンを押します。
                    </div>

                    <div class="text__wrap">
                        すると次に申込者情報の入力ページに切り替わるので、上から順番に記入していきます。
                    </div>

                    <div class="text__wrap">
                        ココでは、
                        <ul>
                            <li>・住所</li>
                            <li>・氏名</li>
                            <li>・生年月日</li>
                            <li>・職業、役職の有無、</li>
                            <li>・勤務先の規模</li>
                            <li>・家族や住まいの状況</li>
                        </ul>
                        など様々な情報を入力していきます。
                    </div>

                    <div class="text__wrap">少し手間かもしれませんが、しっかりと記入してください。ただし、勤務先の従業員数などの項目もありますがわからない場合は「不明」にすることも可能です。
                    </div>

                    <div class="text__wrap pink__wrap">
                        <h5><i class="fas fa-question-circle"></i>キャッシング枠って？</h5>
                        <p>
                            ココまで記入した際に出てくる<span class="red">『キャッシング枠』をどうするかという問題。</span><br>
                            キャッシング枠は現金を引き出せる限度額のこと。<br>
                            多くのクレジットカードには
                        </p>

                        <ul>
                            <li class="big">・買物の支払いで利用できる「ショッピング枠」</li>
                            <li class="big">・簡単に言うとお金が借りられる「キャッシング枠」</li>
                        </ul>

                        <p>
                            この２つがあります。
                            キャッシング枠が最初から目的ではない場合は、
                            設定しなくてもいいでしょう。
                        </p>

                        <p>
                            もしあとから必要になった、という場合でもクレジットカード行後に変更することは可能です。
                        </p>

                        <p>
                            支払い方法の一種である<span class="red">『リボ払い』</span>についても同様に後ほど変更が可能です。
                        </p>

                    </div>

                    <div class="text__wrap pink__wrap">

                        <h5><i class="fas fa-question-circle"></i>ショッピング取引目的はどれを選択するべき？</h5>

                        <p>個人カードとして自分の生活のために使うなら</p>

                        <ul>
                            <li class="big">・生計費決済</li>
                            <li class="big">・生計費</li>
                        </ul>

                        <p>といった項目を選択すればOK。</p>

                        <p>会社の経費を支払うため使うのならば</p>

                        <ul>
                            <li class="big">・事業費決済</li>
                            <li class="big">・事業費</li>
                        </ul>

                        <p>といった項目を選択。</p>

                        <p><span class="big red">「カードを何に使うのか？」</span><br>とシンプルに考えて選択すれば大丈夫です。</p>

                    </div>

                    <h4>2.本人確認書類の送付</h4>
                    <div class="line"></div>

                    <div class="text__wrap">
                        先程あげた運転免許証などの本人確認書類を送付します。方法としては、
                    </div>

                    <ul>
                        <li class="big">・必要な部分を撮影してデータをアップロード</li>
                        <li class="big">・コピーを取って郵送</li>
                    </ul>

                    <div class="text__wrap">
                        この2つです。
                        大抵はこの2つのどちらか。<br>
                        <span class="red">どちらになるかはカード会社によって異なる</span>ので、指示された対応をしてください。
                    </div>

                    <div class="text__wrap">
                        どちらかの方法で本人確認書類を送付したら、作業は終了です。申込後、内容についての確認電話がかかってくる可能性もあります。　　
                    </div>

                    <div class="text__wrap pink__wrap">
                        <h5><i class="fas fa-question-circle"></i>コレをしておけば更に楽に！</h5>
                        <p>クレジットカードの利用代金を引き落とす銀行口座を<span class="red">「オンライン口座振替」</span>や<span class="red">「ネット口座振替」</span>の対象である金融機関を選択。そうすることで、カード会社と銀行が連携して情報を共有！
                        <span class="under">本人確認作業が不要になって素早く手続きができます。</span></p>
                    </div>

                    <h4>3.カード会社による審査</h4>
                    <div class="line"></div>

                    <div class="text__wrap">
                        申し込みや本人確認書類の送付が終われば後は待つだけです。<br>
                        カード会社の審査が通れば、クレジットカードが発行されます。<br>
                        <span class="big red">本人確認書類送付から大体1週間ほど</span>が目安。
                    </div>

                    <div class="text__wrap">
                        その間、送付した書類や申し込み内容に不備が合った場合
                        確認が入るため時間がかかります。
                    </div>

                    <div class="text__wrap">
                        <span class="under">申し込みの際、入力ミスや送付書類の漏れには十分注意です。</span>
                        ※WEBサイトでカード発行までの進捗状況を確認できるカード会社もあります。
                        その際はぜひ確認してみてください。
                    </div>

                    <div class="text__wrap pink__wrap">
                        <h5><i class="fas fa-question-circle"></i>審査って何を調べているの？</h5>
                        　 <p>カード会社によって違いますが、
                            一般的には申込者の<span class="red big">『信用情報』</span>を調べています。</p>

                        <p>信用情報とは、</p>
                        <ul>
                            <li>・クレジットやローンはあるか</li>
                            <li>・利用額</li>
                            <li>・支払状況</li>
                            <li>・支払い遅延の有無</li>
                        </ul>
                        <p>などです。</p>

                        <p>
                            「<span class="bold">初めてクレジットカードを持つから遅延とかは関係ない」という方もいるかも知れません</span>。
                        </p>

                        <p>ですが例えば家賃を遅れて支払いもせず61日間が経過すると、信用情報に記録されます。
                        </p>

                        <p>そもそも信用情報とは、個人の信用にもとづく<span class="red big">「信用取引」の履歴を記録したもの</span>。</p>

                        <p><span class="under">信用情報機関という政府の指定を受けた組織が管理しています。</span></p>

                        <p>なのでカード会社にとってこの信用情報は重要。<br>
                        <span class="red big">申込者本人の信用度を測る貴重な参考情報</span>としています。</p>


                        <p>ただ、あくまでも<span class="red">『参考』</span>でしかなく、審査に通るかは、カード会社それぞれに基準が違います。<br>
                        <span class="bg-y red">「申し込んでみないとわからない」</span>というのが正直なところです。もし審査に通らなかった場合でも、その理由は開示されません。
                        </p>

                    </div>

                    <h4>4.カードを受け取る</h4>
                    <div class="line"></div>

                    <div class="text__wrap">
                        無事にカードを受け取ったら確認することは以下の通り。

                        <p class="bold">・記載項目に間違いがないかチェックする</p>
                        <p>特にクレジットカードに記載された名前のローマ字をチェック。<br>
                        間違っていた、という話は聞いたことはありませんが<br>
                        <span class="bold big">「100％大丈夫」</span><br>
                        <span class="under">ということはありませんので要確認です</span>。</p>

                        <p class="bold">・裏面に直筆サインをする</p>
                        <p>
                            ココに記載しないと使用できない店舗もあります。
                            なので、記載のミスがないかチェックが終わったら即サインしましょう。<br>
                            この際に注意しなければいけないことは<br>
                            <span class="red">「店舗で利用時にする署名」</span>であることです。
                            署名のスタイルに決まりはないですが、あまり変わったものはおすすめしません。海外で利用することを考えると、漢字のサインが良いでしょう。
                        </p>
                    </div>
                </div>

                <!-- content3 End-->



                <!-- content4 Start-->

                <h3 class="con__h3">作っておくべきクレジットカードベスト10</h3>

                <?php if(!is_mobile()) 
                : ?>
                <!-- ✨✨ PC -->
                <article id="ranking__sub__items__box" class="pc">

                    <div class="ranking__sub__wrap">

                        <?php wp_reset_postdata();
                            $args = array(
                                'posts_per_page' => '-1',
                                'post_type' => 'card',
                                'category_name' => 'rankall',
                                'meta_key' => 'rankall-number',
                                'orderby' => 'meta_value_num',
                                'order' => 'asc',
                            );
                        ?>
                        <?php
                        $the_query = new WP_Query( $args );
                        $i = 1;
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            $image_id = get_post_thumbnail_id ();
                            $image_url = wp_get_attachment_image_src ($image_id, true);
                            $type = get_field('type');
                            $price = get_field('price');
                            $brand = get_field('brand');
                            $point1 = get_field('point1');
                            $point2 = get_field('point2');
                            $emoney = get_field('emoney');
                            $insurance = get_field('insurance');  
                            $service = get_field('insurance-service'); 
                            $campaign = get_field('campaign-descript');   
                            $points1 = get_field('points1'); 
                            $points2 = get_field('points2'); 
                            $points3 = get_field('points3'); 
                            $url = get_field('url');
                            $rankText = "";
                            $starImg = "";
                            $priceFirst = get_field('price-first');
                            $priceSecond = get_field('price-second');
                            $pointKangen = get_field('point-kangen');
                            $issueSpeed = get_field('issue-speed');
                            $descript = get_field('description');
                            $catch = get_field('catch');
                            $ex = get_field('rankall-number');
                        ?>
                        <?php
                        if($ex == 1) {
                            $rankText = "4.9";
                            $starImg = "/images/ranking/star-1.png";
                        } elseif($ex==2) {
                            $rankText = "4.8";
                            $starImg = "/images/ranking/star-1.png";
                        } elseif($ex==3) {
                            $rankText = "4.7";
                            $starImg = "/images/ranking/star-2.png";
                        } elseif($ex==4) {
                            $rankText = "4.5";
                            $starImg = "/images/ranking/star-2.png";
                        } elseif($ex==5) {
                            $rankText = "4.4";
                            $starImg = "/images/ranking/star-2.png";
                        } elseif($ex==6) {
                            $rankText = "4.2";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==7) {
                            $rankText = "4.1";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==8) {
                            $rankText = "4.0";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==9) {
                            $rankText = "3.9";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==10) {
                            $rankText = "3.8";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==11) {
                            $rankText = "3.6";
                            $starImg = "/images/ranking/star-4.png";
                        } elseif($ex==12) {
                            $rankText = "3.5";
                            $starImg = "/images/ranking/star-4.png";
                        } else {
                            $rankText = "3.0";
                            $starImg = "/images/ranking/star-5.png";
                        }
                        ?>
                        <!-- Loop -->
                        <div class="ranking__sub__item__wrap rank<?php echo $i; ?>">

                            <img src="<?php bloginfo('template_url'); ?>/images/medal_<?php echo $i; ?>.png" alt=""
                                class="medal">

                            <div class="flex__wrap">

                                <div class="bar"></div>

                                <div class="item__left">
                                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr"
                                        target="_blank">
                                        <img src="<?php echo $image_url[0]; ?>" alt="">
                                    </a>
                                    <a class="koushiki__btn prrrr"
                                        href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                        target="_blank">申し込みはこちら</a>
                                </div>

                                <div class="item__right">

                                    <h2 class="title__wrap">
                                        <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr"
                                            target="_blank">
                                            <?php the_title(); ?>
                                        </a>

                                        <div class="star__wrap">
                                            <div class="star"><img
                                                    src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>"
                                                    alt="">
                                            </div>
                                            <span class="number">
                                                <?php echo $rankText; ?>
                                            </span>
                                        </div>
                                        <!-- <span class="review__btn">口コミ<span class="span review__count">20</span>件</span> -->
                                    </h2>

                                    <div class="catch__wrap">
                                        <?php echo $catch ; ?>
                                    </div>

                                    <div class="info__wrap">
                                        <ul>
                                            <li><?php echo $points1; ?></li>
                                            <li><?php echo $points2; ?></li>
                                            <li><?php echo $points3; ?></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="contents__wrap">
                                <?php include 'components/pc-points.php'; ?>

                                <div class="flex__wrap">
                                    <div class="hutai__wrap">
                                        <h3>付帯保険</h3>
                                        <ul class="insurance__list">
                                            <?php 
                                                $insuranceList = array("国内旅行保険", "海外旅行保険");
                                                $insuranceInter = array_intersect($insuranceList, $insurance);
                                                $insuranceDiff = array_diff($insuranceList, $insurance);
                                                foreach ($insuranceInter as $in) {
                                                    if($in == "国内旅行保険") {
                                                        $in = "国内旅行";
                                                    } elseif($in == "海外旅行保険") {
                                                        $in = "海外旅行";
                                                    } 
                                                    echo '<li>'.$in.'</li>';
                                                }
                                                foreach ($insuranceDiff as $in) {
                                                    if($in == "国内旅行保険") {
                                                        $in = "国内旅行";
                                                    } elseif($in == "海外旅行保険") {
                                                        $in = "海外旅行";
                                                    } 
                                                    echo '<li class="grey">'.$in.'</li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="service__wrap">
                                        <h3>付帯サービス</h3>
                                        <ul class="service__list">
                                            <?php 
                                                $serviceList = array("家族カード", "分割払い", "ETC");
                                                
                                                if(!empty($service)) {
                                                    $serviceInter = array_intersect($serviceList, $service);
                                                $serviceDiff = array_diff($serviceList, $service);
                                                    foreach ($serviceInter as $val) {
                                                        echo '<li>'.$val.'</li>';
                                                    }
                                                    foreach ($serviceDiff as $val) {
                                                        echo '<li class="grey">'.$val.'</li>';
                                                    }
                                                    
                                                } else {
                                                    foreach ($serviceList as $val) {
                                                        echo '<li class="grey">'.$val.'</li>';
                                                    }
                                                }
                                                
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                                <?php if(!empty($campaign)) : ?>
                                <div class="campaign__wrap">
                                    <span class="campaign__title">限定キャンペーン</span>
                                    <ul class="campaign__descript">
                                        <?php echo $campaign; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="result__button__wrap">

                                <div class="search__button">

                                    <a class="syousai__btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                                    <a class="koushiki__btn prrrr"
                                        href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                        target="_blank">公式サイトでお得に申し込む
                                        <p class="koushiki__text">最短5分で申込完了</p>
                                    </a>

                                </div>

                            </div>

                        </div>
                        <!-- Loop -->

                        <?php $i++; endwhile; endif; wp_reset_query(); ?>

                    </div>


                </article>


                <?php else : ?>

                <article id="ranking__sub__items__box" class="sp">

                    <div class="ranking__sub__wrap">

                        <?php wp_reset_postdata();
                            $args = array(
                                'posts_per_page' => '-1',
                                'post_type' => 'card',
                                'category_name' => 'rankall',
                                'meta_key' => 'rankall-number',
                                'orderby' => 'meta_value_num',
                                'order' => 'asc',
                            );
                        ?>
                        <?php
                        $the_query = new WP_Query( $args );
                        $i = 1;
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            $image_id = get_post_thumbnail_id ();
                            $image_url = wp_get_attachment_image_src ($image_id, true);
                            $type = get_field('type');
                            $price = get_field('price');
                            $brand = get_field('brand');
                            $point1 = get_field('point1');
                            $point2 = get_field('point2');
                            $emoney = get_field('emoney');
                            $insurance = get_field('insurance');  
                            $service = get_field('insurance-service'); 
                            $campaign = get_field('campaign-descript');   
                            $points1 = get_field('points1'); 
                            $points2 = get_field('points2'); 
                            $points3 = get_field('points3'); 
                            $url = get_field('url');
                            $rankText = "";
                            $starImg = "";
                            $priceFirst = get_field('price-first');
                            $priceSecond = get_field('price-second');
                            $pointKangen = get_field('point-kangen');
                            $issueSpeed = get_field('issue-speed');
                            $descript = get_field('description');
                            $catch = get_field('catch');
                            $etcCatch = get_field('etc-catch');
                            $rankText = "";
                            $starImg = "";
                            $ex = get_field('rankall-number');
                        ?>
                        <?php
                        if($ex == 1) {
                            $rankText = "4.9";
                            $starImg = "/images/ranking/star-1.png";
                        } elseif($ex==2) {
                            $rankText = "4.8";
                            $starImg = "/images/ranking/star-1.png";
                        } elseif($ex==3) {
                            $rankText = "4.7";
                            $starImg = "/images/ranking/star-2.png";
                        } elseif($ex==4) {
                            $rankText = "4.5";
                            $starImg = "/images/ranking/star-2.png";
                        } elseif($ex==5) {
                            $rankText = "4.4";
                            $starImg = "/images/ranking/star-2.png";
                        } elseif($ex==6) {
                            $rankText = "4.2";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==7) {
                            $rankText = "4.1";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==8) {
                            $rankText = "4.0";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==9) {
                            $rankText = "3.9";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==10) {
                            $rankText = "3.8";
                            $starImg = "/images/ranking/star-3.png";
                        } elseif($ex==11) {
                            $rankText = "3.6";
                            $starImg = "/images/ranking/star-4.png";
                        } elseif($ex==12) {
                            $rankText = "3.5";
                            $starImg = "/images/ranking/star-4.png";
                        } else {
                            $rankText = "3.0";
                            $starImg = "/images/ranking/star-5.png";
                        }
                        ?>

                        <!-- loop -->
                        <div class="ranking__sub__item__wrap rank<?php echo $i; ?>">

                            <div class="title__wrap">
                                <h3><a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr"
                                        target="_blank"><?php the_title(); ?></a>
                                </h3>
                                <img src="<?php bloginfo('template_url'); ?>/images/medal_<?php echo $i; ?>.png" alt=""
                                    class="medal">
                            </div>

                            <div class="star__wrap">
                                <div class="star"><img
                                        src="<?php bloginfo('template_url'); ?><?php echo $starImg ?>"" alt=""></div>
                                <span class=" number">
                                    <?php echo $rankText; ?>
                                    </span>
                                    <!-- <span class="review__btn">口コミ<span class="span review__count">10</span>件</span> -->
                                </div>

                                <div class="catch__wrap">
                                    <?php if(is_page('rankingetc')) : ?>
                                    <?php echo $etcCatch; ?>
                                    <?php else : ?>
                                    <?php echo $catch ; ?>
                                    <?php endif; ?>
                                </div>

                                <div class="img__wrap">
                                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr"
                                        target="_blank">
                                        <img src="<?php echo $image_url[0]; ?>" alt="">
                                    </a>
                                    <a class="koushiki__btn prrrr"
                                        href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                        target="_blank">申し込みはこちら</a>
                                </div>

                                <div class="info__wrap">
                                    <ul>
                                        <li><?php echo $points1; ?></li>
                                        <li><?php echo $points2; ?></li>
                                        <li><?php echo $points3; ?></li>
                                    </ul>
                                </div>

                                <?php include 'components/sp-points.php'; ?>

                                <div class="flex__wrap ranking__insurance" style="padding: 5px 10px 0">
                                    <div class="hutai__wrap">
                                        <h3>付帯保険</h3>
                                        <ul class="insurance__list">
                                            <?php 
                                                $insuranceList = array("国内旅行保険", "海外旅行保険");
                                                $insuranceInter = array_intersect($insuranceList, $insurance);
                                                $insuranceDiff = array_diff($insuranceList, $insurance);
                                                foreach ($insuranceInter as $in) {
                                                    if($in == "国内旅行保険") {
                                                        $in = "国内旅行";
                                                    } elseif($in == "海外旅行保険") {
                                                        $in = "海外旅行";
                                                    } 
                                                    echo '<li>'.$in.'</li>';
                                                }
                                                foreach ($insuranceDiff as $in) {
                                                    if($in == "国内旅行保険") {
                                                        $in = "国内旅行";
                                                    } elseif($in == "海外旅行保険") {
                                                        $in = "海外旅行";
                                                    } 
                                                    echo '<li class="grey">'.$in.'</li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="service__wrap">
                                        <h3>付帯サービス</h3>
                                        <ul class="service__list">
                                            <?php 
                                            $serviceList = array("家族カード", "分割払い", "ETC");
                                            
                                            if(!empty($service)) {
                                                $serviceInter = array_intersect($serviceList, $service);
                                            $serviceDiff = array_diff($serviceList, $service);
                                                foreach ($serviceInter as $val) {
                                                    echo '<li>'.$val.'</li>';
                                                }
                                                foreach ($serviceDiff as $val) {
                                                    echo '<li class="grey">'.$val.'</li>';
                                                }
                                                
                                            } else {
                                                foreach ($serviceList as $val) {
                                                    echo '<li class="grey">'.$val.'</li>';
                                                }
                                            }
                                            
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php if(!empty($campaign)) : ?>
                                <div class="campaign__wrap">

                                    <div class="cam__title">
                                        <p>限定</p>
                                        <span>キャンペーン</span>
                                        <!-- <div class="date">~12月31日</div> -->
                                    </div>

                                    <ul class="cam__text">
                                        <?php echo $campaign; ?>
                                    </ul>

                                </div>
                                <?php endif; ?>
                                <div class="result__button__wrap">

                                    <div class="search__button">

                                        <a class="koushiki__btn prrrr"
                                            href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                            target="_blank">公式サイトでお得に申し込む
                                            <p class="koushiki__text">最短5分で申込完了</p>
                                        </a>

                                        <a class="syousai__btn" href="<?php the_permalink(); ?>">詳細を見る</a>

                                    </div>

                                </div>


                            </div>
                            <!-- loop -->
                            <?php $i++; endwhile; endif; wp_reset_query(); ?>
                        </div>

                    </div>

                </article>

                <?php endif; ?>

                <!-- content4 End-->

            </article>

        </section>

        <?php get_sidebar(); ?>

    </div>

</div>

<?php get_footer(); ?>