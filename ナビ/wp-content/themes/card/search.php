<?php 
$s = $_GET['s'];
$type = $_GET['type'];
$price = $_GET['price'];
$point1 = $_GET['point1'];
$point2 = $_GET['point2'];
$emoney = $_GET['emoney'];
$mspeed = $_GET['speed'];
$insurance = $_GET['insurance'];
$brand = $_GET['brand'];
$ninki = $_GET['ninki'];
get_header();
?>

<!-- 🌹 検索結果 🌹 -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <section id="bread"></section>

    <?php wp_reset_query();
        if(!empty($_GET['metakey'])){
        $metakey = $_GET['metakey'];
        }
        else{
        $metakey = "hyouka";
        }

        if(empty($_GET['order'])){
        $order = "desc";
        }
        

        
        if(is_array($ninki)){
            foreach($ninki as $val){
                $metaquerysp[] = array(
                        'key'=>'brand',
                        'value'=> $val,
                        'compare'=>'LIKE'
                        );
            }
        }else{
            $metaquerysp[] = array(
                    'key'=>'ninki',
                    'value'=> $ninki,
                    'compare'=>'LIKE'
                    );
        }
        
        if($type){
            $metaquerysp[] = array(
            'key'=>'type',
            'value'=>$type,
            'compare'=>'LIKE',
            'type'=>'CHAR'
            );
        }
        
        if($price == "1"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'初年無料',
            'compare'=>'LIKE',
            );
        }elseif($price == "2"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'永年無料',
            'compare'=>'LIKE',
            );
        }elseif($price == "3"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'3',
            'compare'=>'<=',
            'type' => 'NUMERIC',
            );
        }elseif($price == "4"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'4',
            'compare'=>'<=',
            'type' => 'NUMERIC',
            );
        }elseif($price == "5"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value' =>'5',
            'compare'=>'>=',
            'type' => 'NUMERIC',
            );
        }



        if(is_array($brand)){
            foreach($brand as $val){
                $metaquerysp[] = array(
                        'key'=>'brand',
                        'value'=> $val,
                        'compare'=>'LIKE'
                        );
            }
        }else{
            $metaquerysp[] = array(
                    'key'=>'brand',
                    'value'=> $brand,
                    'compare'=>'LIKE'
                    );
        }
    
        if($point1 == "50"){
            $metaquerysp[] = array(
                'key'=>'point1',
                'value'=> 0,
                'compare'=>'>=',
                'type'=>'NUMERIC'
            );
            
        }elseif($point1 == "100"){
            $metaquerysp[] = array(
                'key'=> 'point1',
                'value'=> 1,
                'compare'=>'>=',
                'type'=>'NUMERIC'
            );
        }elseif($point1 == "200"){
            $metaquerysp[] = array(
                'key'=>'point1',
                'value'=> 2,
                'compare'=>'=',
                'type'=>'NUMERIC'
            );
        }
        
        if(is_array($point2)){
            foreach($point2 as $val){
                $metaquerysp[] = array(
                    'key'=>'point2',
                    'value'=> $val,
                    'compare'=>'LIKE',
                    );
            }
        }else{
            $metaquerysp[] = array(
                'key'=>'point2',
                'value'=> $point2,
                'compare'=>'LIKE',
                );
        }

            
        if($mspeed == 1){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=> '最短翌営業日',
                'compare'=>'LIKE',
            );
        }elseif($mspeed == 2){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=> '3営業日以内',
                'compare'=>'LIKE',
                );
        }elseif($mspeed == 3){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=> '1週間以内',
                'compare'=>'LIKE',
                );
        } elseif($mspeed == 4){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=> '2週間以内',
                'compare'=>'LIKE',
                );
        } 
        if(is_array($emoney)){
            foreach($emoney as $val){
                $metaquerysp[] = array(
                        'key'=>'emoney',
                        'value'=> $val,
                        'compare'=>'LIKE',
                        );
            }
        }else{
                $metaquerysp[] = array(
                        'key'=>'emoney',
                        'value'=> $emoney,
                        'compare'=>'LIKE',
                        );
        }
        if(is_array($insurance)){
            foreach($insurance as $val){
                $metaquerysp[] = array(
                        'key'=>'insurance',
                        'value'=> $val,
                        'compare'=>'LIKE',
                        );
            }
        }else{
                $metaquerysp[] = array(
                        'key'=>'insurance',
                        'value'=> $insurance,
                        'compare'=>'LIKE',
                        );
        }
        $metaquerysp['relation'] = 'AND';
        ?>
    <?php
            if(!empty($order) || !empty($metakey)){
            $args = array(
                'posts_per_page' => '-1',
                'post_type' => 'card',
                'meta_query' => array($metaquerysp),
                'orderby' => 'meta_value_num',
                'order' => $order,
                'meta_key' => $metakey,
                's' => $s,
                'post_status' => 'publish',
            );
            } else {
            $args = array(
                'posts_per_page' => '-1',
                'post_type' => 'card',
                'meta_query' => array($metaquerysp),
                'orderby' => 'meta_value_num',
                'order' => 'desc',
                'meta_key' => 'hyouka',
                's' => $s,
                'post_status' => 'publish',
            );
            }
            $args1 = array(
                'posts_per_page'=>'1',
                'post_type' => 'card',
                'category_name' => 'pickup',
                'meta_key' =>'pickup',
             );
           
            $query = new WP_Query($args);
            $query1 = new WP_Query($args1);

            $get_num = $query->post_count;
            ?>

    <!-- ✨💎 PC/SP -->
    <section id="result__text__box">

        <h2 class="pc">検索結果</h2>

        <div class="jyouken__wrap">

            <h3>選択した条件</h3>


            <div class="result__text__wrap">

                <p class="jyouken__1">人気の条件 :<span class="mainColor">
                        <?php if($ninki) {echo $ninki;} else {echo '指定なし';} ?></span></p>

                <p class="jyouken__2">
                    カードタイプ :<span class="mainColor">
                        <?php if(is_mobile()) : ?>
                        <?php 
                        if($_GET['type']){
                        if(is_array($_GET['type'])){
                            foreach($_GET['type'] as $value){
                                    echo $value;
                            } 
                        }else{
                        echo $_GET['type'];
                        }
                        }else {echo '指定なし';} 
                        ?>
                        <?php else :?>

                        <?php if($type) {echo $type;} else {echo '指定なし';} ?>
                        <?php endif; ?>
                    </span></p>

                <p class="jyouken__3">年会費 :<span class="mainColor">
                        <?php if($price) {
                            if($price == "1") {
                                echo '初年無料';
                            } elseif($price == "2") {
                                echo '永年無料';
                            } elseif($price == "3") {
                                echo '5,000円以下';
                            } elseif($price == "4") {
                                echo '10,000円以下';
                            } elseif($price == "5") {
                                echo '10,000円以上';
                            } 
                            } else {
                                echo '指定なし';} 
                                ?></span></p>

                <p class="jyouken__4">国際ブランド :
                    <span class="mainColor">
                        <?php 
                        if($_GET['brand']){
                        if(is_array($_GET['brand'])){
                            foreach($_GET['brand'] as $value){
                                if(count($_GET['brand']) > 1){
                                    echo $value.",";
                                } else {
                                    echo $value;
                                }
                            } 
                        }else{
                        echo $_GET['brand'];
                        }
                        }else {echo '指定なし';} 
                        ?>
                    </span>
                </p>

                <p class="jyouken__5">ポイント還元率 :<span class="mainColor">
                        <?php if($point1) {
                            if($point1 == "50") {
                                echo '0.5%以上';
                            } elseif($point1 == "100") {
                                echo '1.0%以上';
                            } elseif($point1 == "200") {
                                echo '2.0%以上';
                            } 
                            } else {
                                echo '指定なし';} 
                                ?></span></p>


                <p class="jyouken__6">ポイント交換先 :
                    <span class="mainColor">
                        <?php 
                        if($_GET['point2']){
                        if(is_array($_GET['point2'])){
                            foreach($_GET['point2'] as $value){
                                if(count($_GET['point2']) > 1){
                                echo $value.",";
                                } else {
                                    echo $value;
                                }
                            }
                        }else{
                        echo $_GET['point2'];
                        }
                        }else {echo '指定なし';} 
                        ?>
                    </span>
                    </span>
                </p>

                <p class="jyouken__7">対応電子マネー :<span class="mainColor">
                        <?php if($emoney) {echo $emoney;} else {echo '指定なし';} ?></span></p>

                <p class="jyouken__8">発行スピード :<span class="mainColor">
                        <?php if($speed) {
                            if($speed == 1) {
                                echo '最短翌営業日';
                            } elseif($speed == 2) {
                                echo '3営業日以内';
                            } elseif($speed == 3) {
                                echo '1週間以内';
                            } elseif($speed == 4) {
                                echo '2週間以内';
                            } 
                            } else {
                            echo '指定なし';} 
                                ?></span></p>

                <p class="jyouken__9">付帯保険 :<span class="mainColor">
                        <?php 
                        if($_GET['insurance']){
                        if(is_array($_GET['insurance'])){
                            foreach($_GET['insurance'] as $value){
                            if(count($_GET['insurance']) > 1){
                                echo $value.",";
                                } else {
                                    echo $value;
                                }
                            } 
                        }else{
                        echo $_GET['insurance'];
                        }
                        }else {echo '指定なし';}  
                        ?>
                    </span>
                </p>

            </div>

            <div class="re__search__wrap sp">
                <a href="#search__box" class="re__search__btn">検索結果を変更</a>
            </div>
        </div>

    </section>




    <section id="result__items__count">
        <p>該当<span><?php echo $get_num; ?></span>件</p>

        <div class="sort__list__box">
            <span class="sort__name">並び替え順を選択</span>
            <article class="sort__choice__wrap">
                <ul class="sort__list">
                    <li>
                        <?php if($metakey == "point1") : ?>
                        <?php $metakey = "ポイント還元率順"; ?>
                        <?php elseif($metakey == "price") : ?>
                        <?php $metakey = "年会費(初年度)順"; ?>
                        <?php elseif($metakey == "hyouka") : ?>
                        <?php $metakey = "評価順"; ?>
                        <?php else : ?>
                        <?php echo "並び替え順を選択"; ?>
                        <?php endif; ?>
                        <?php echo $metakey; ?>
                    </li>
                    <ul class="sort__open__list">
                        <li class="hyouka__btn" onclick="text()">評価順</li>
                        <li class="point__btn" onclick="text()">ポイント還元率順</li>
                        <li class="price__btn" onclick="text()">年会費(初年度)順</li>
                        <!-- <li class="speed__btn">発行スピード順</li> -->
                    </ul>

                </ul>
            </article>
        </div>


    </section>


    <form class="table" id="sort_form1" action="<?php echo home_url( '/' ); ?>" method="get">
        <?php foreach ($_GET as $k => $v){
                   if($k != "order") {
                   if($k != "metakey") {
                             if(is_array($v)){ 
                                  foreach ($v as $n) { ?>
        <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
        <?php } ?>
        <?php }else{ ?>
        <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
        <?php     }
                         }
                         }
        } ?>
        <input type="hidden" value="hyouka" name="metakey">
        <input type="hidden" value="<?php echo "desc"; ?>" name="order">
    </form>
    <form class="table" id="sort_form2" action="<?php echo home_url( '/' ); ?>" method="get">
        <?php foreach ($_GET as $k => $v){
                        if($k != "order") {
                        if($k != "metakey") {
                                    if(is_array($v)){ 
                                        foreach ($v as $n) { ?>
        <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
        <?php } ?>
        <?php }else{ ?>
        <input type="hidden" value="hyouka" name="metakey">
        <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">


        <?php     }
                                }
                                }
        } ?>
        <input type="hidden" value="point1" name="metakey">
        <input type="hidden" value="<?php echo "desc"; ?>" name="order">
    </form>

    <form class="table" id="sort_form3" action="<?php echo home_url( '/' ); ?>" method="get">
        <?php foreach ($_GET as $k => $v){
                        if($k != "order") {
                        if($k != "metakey") {
                                    if(is_array($v)){ 
                                        foreach ($v as $n) { ?>
        <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
        <?php } ?>
        <?php }else{ ?>
        <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
        <?php     }
                                }
                                }
        } ?>
        <input type="hidden" value="price" name="metakey">
        <input type="hidden" value="<?php echo "asc"; ?>" name="order">
    </form>





    <!-- ✨💎 PC/SP -->
    <div id="contents__box">

        <!-- 🌹 Main Contents🌹 -->

        <section id="section__box">

            <!-- 検索結果内容 -->

            <article id="result__items__box">

                <?php if(is_mobile()) : ?>

                <?php include 'searchItem-sp.php'; ?>

                <?php else : ?>

                <!-- ✨✨ PC -->
                <?php include 'pickup.php'; ?>


                <?php 
                $i = 0;
                if($query->have_posts()): ?>

                <?php while ($query->have_posts()) : $query->the_post(); 
                $i++;
                
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
                $type = get_field('type');
                $price = get_field('price');
                $brand = get_field('brand');
                $point1 = number_format((int)get_field('point1'));
                $point2 = get_field('point2');
                $emoney = get_field('emoney');
                $speed = get_field('speed');
                $insurance = get_field('insurance');  
                $service = get_field('insurance-service');
                $campaign = get_field('campaign-descript');   
                $points1 = get_field('points1'); 
                $points2 = get_field('points2'); 
                $points3 = get_field('points3'); 
                $url = get_field('url');
                $priceFirst = get_field('price-first');
                $priceSecond = get_field('price-second');
                $pointKangen = get_field('point-kangen');
                $descript = get_field('description');
                $hyouka = get_field('hyouka');
                $star = get_field('star');
                $catch = get_field('catch');
                $issueSpeed = get_field('issue-speed');
                $touch = get_field('touch'); 
                $webp = get_field('img-webp');
                ?>
                <div class="result__item__wrap pc rank_<?php echo $i; ?>">

                    <div class="result__content__wrap pc">

                        <div class="item__left">

                            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                            <picture>
                                <source type="image/webp" srcset="<?php echo $webp; ?>">
                                <img src="<?php echo $image_url[0]; ?>" alt="">
                            </picture>
                            </a>

                            <div class="star__wrap">
                                <div class="star"><img src="<?php echo $star; ?>" alt=""></div>
                                <span class="number">
                                    <?php echo $hyouka; ?><span class="ss">点</span>
                                </span>
                            </div>
                        </div>



                        <div class="item__right">

                            <h2 class="title__wrap">
                                <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="catch__wrap">
                                <?php echo $catch ; ?>
                            </div>

                            <?php if(!empty($campaign)) : ?>
                            <div class="campaign__wrap">
                                <span class="campaign__title">限定キャンペーン</span>
                                <ul class="campaign__descript"><?php echo $campaign; ?></ul>
                            </div>
                            <?php endif; ?>

                            <div class="points__wrap">
                                <table>
                                    <tr>
                                        <th>年会費初年度</th>
                                        <td><?php echo $priceFirst; ?></td>
                                        <th>年会費2年目</th>
                                        <td><?php echo $priceSecond; ?></td>
                                    </tr>
                                    <tr>
                                        <th>ポイント還元率</th>
                                        <td><?php 
                                        if($point1 == 0) {
                                            echo "0.5%以上";
                                        }elseif($point1 == 1) {
                                            echo "1.0%以上";
                                        }elseif($point1==2) {
                                            echo "2.0%以上";
                                        }else {
                                            echo $point1;
                                        }
                                        ?></td>
                                        <th>発行スピード</th>
                                        <td>
                                            <?php 
                                        echo $issueSpeed;
                                        ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>国際ブランド</th>
                                        <td class="brand__box"><?php foreach ($brand as $b) : ?>
                                            <?php 
                                            if($b == "VISA") {
                                                $b = "/images/contents/brand__visa.png";
                                               
                                            }elseif($b == "Mastercard") {
                                                $b = "/images/contents/brand__master.png";
                                            }elseif($b == "JCB") {
                                                $b = "/images/contents/brand__jcb.png";
                                            }elseif($b == "American Express") {
                                                $b = "/images/contents/brand__american.png";
                                            }elseif($b == "Diners Club") {
                                                $b = "/images/contents/brand__diners.png";
                                            }
                                            ?>
                                            <img class="brand__icon" src="<?php bloginfo('template_url'); ?><?php 
                                            echo $b; ?>" alt="">

                                            <?php endforeach; ?>
                                        </td>
                                        <th>電子マネー</th>
                                        <td class="emoney__box"><?php foreach ($emoney as $e) : ?>
                                            <?php 
                                            if($e == "Suica") {
                                                $e = "/images/icons/suica.png";
                                               
                                            }elseif($e == "PASMO") {
                                                $e = "/images/icons/pasmo.png";
                                                
                                            }elseif($e == "QUICPay") {
                                                $e = "/images/icons/quic.png";
                                                
                                            }elseif($e == "iD") {
                                                $e = "/images/icons/id.png";
                                                
                                            }elseif($e == "楽天Edy") {
                                                $e = "/images/icons/edy.png";
                                                
                                            }elseif($e == "nanaco") {
                                                $e = "/images/icons/nanaco.png";
                                               
                                            }elseif($e == "WAON") {
                                                $e = "/images/icons/waon.png";
                                                
                                            }elseif($e == "Apple Pay") {
                                                $e = "/images/icons/apple.png";
                                               
                                            }elseif($e == "Google Pay") {
                                                $e = "/images/icons/gpay.png";
                                                
                                            } ?>
                                            <img class="emoney__icon" src="<?php bloginfo('template_url'); ?><?php 
                                            echo $e; ?>" alt="">

                                            <?php endforeach; ?>

                                        </td>
                                    </tr>

                                </table>


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
                                    <div class="touch__wrap">
                                        <h3>タッチ決済</h3>
                                        <ul class="touch__list">
                                            <?php 
                                            $touchList = array("あり");
                                            
                                            if(!empty($touch)) {
                                                foreach ($touch as $val) {
                                                    echo '<li>'.$val.'</li>';
                                                }
                                            } else {
                                                echo '<li class="grey">あり</li>';
                                            }
                                        ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="discript__wrap">
                                <?php the_content(); ?>
                            </div>

                        </div>

                    </div>

                    <div class="result__button__wrap">

                        <div class="search__button">

                            <a class="syousai__btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                            <div class="koushiki__wrap">
                                <p class="koushiki__text">＼ 最短5分で申込完了 ／</p>
                                <a class="koushiki__btn prrrr" style="margin:0 auto"
                                    href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                    target="_blank">公式サイトでお得に申し込む</a>
                            </div>
                            
                        </div>

                    </div>

                </div>
                <!-- ✨✨ PC -->
                <?php endwhile; endif; wp_reset_query(); ?>


            </article>

            <?php endif; ?>



            <?php get_search_form(); ?>




            <!-- 💎💎 SP -->
            <!-- <article id="banner__box" class="sp">
                <a href="">
                    <img src="<?php bloginfo('template_url'); ?>/images/qna_sp.jpg" alt="">
                </a>
            </article> -->

        </section>




        <!-- Sidebar -->
        <!-- ✨✨ PC -->
        <?php get_sidebar(); ?>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$hyoukaTxt = $(".hyouka__btn").text();
$pointTxt = $(".point__btn").text();
$priceTxt = $(".price__btn").text();
$speedTxt = $(".speed__btn").text();

function text() {
    $("#sort_form1").submit();
    $(".sort__list > li").text($hyoukaTxt);
};

$(".point__btn").on('click', function() {
    $("#sort_form2").submit();
    $(".sort__list > li").text($pointTxt);

});
$(".price__btn").on('click', function() {
    $("#sort_form3").submit();
    $(".sort__list > li").text($priceTxt);
});
$(".speed__btn").on('click', function() {
    $("#sort_form4").submit();
    $(".sort__list > li").text($speedTxt);
});
</script>


<?php get_footer(); ?>