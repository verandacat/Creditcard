<?php 
$s = $_GET['s'];
// $ninki = $_GET['ninki'];
$type = $_GET['type'];
$price = $_GET['price'];
$point1 = $_GET['point1'];
$point2 = $_GET['point2'];
$emoney = $_GET['emoney'];
$speed = $_GET['speed'];
$speed_s = $_GET['speed_sort'];

$insurance = $_GET['insurance'];
if(isset($_GET['brand'])){
    $brand = $_GET['brand'];
    }
get_header();
?>

<!-- 🌹 検索結果 🌹 -->
<div id="container">


    <?php include('mobileNav.php'); ?>

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
            'value'=>'1',
            'compare'=>'<=',
            'type' => 'NUMERIC',
            );
        }elseif($price == "2"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'2',
            'compare'=>'<=',
            'type' => 'NUMERIC',
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
            'orderby' =>'meta_value_num',
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
                'key'=>'point1',
                'value'=> 1,
                'compare'=>'>=',
                'type'=>'NUMERIC'
                );
        }elseif($point1 == "200"){
            $metaquerysp[] = array(
                'key'=>'point1',
                'value'=> 2,
                'compare' => '=',
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

            
        if($speed == "1"){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=> '最短翌営業日',
                'compare'=>'LIKE',
            );
        }elseif($speed == "3"){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=> '3営業日以内',
                'compare'=>'LIKE',
                );
        }elseif($speed == "7"){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=>'1週間以内',
                'compare'=>'LIKE',
                );
        } elseif($speed == "14"){
            $metaquerysp[] = array(
                'key'=>'speed',
                'value'=>'2週間以内',
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
                // 'category_name' => 'search',
                'meta_query' => array($metaquerysp),
                'orderby' =>'meta_value',
                'order' => $order,
                'meta_key' => $metakey,
                's' => $s,
                'post_status' => 'publish',
            );
            }
            else{
            $args = array(
                'posts_per_page' => '-1',
                'post_type' => 'card',
                'meta_query' => array($metaquerysp),
                'orderby' =>'meta_value',
                'order' => 'asc',
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

            <?php //echo $s; ?>

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
                            } elseif($speed == 3) {
                                echo '3営業日以内';
                            } elseif($speed == 7) {
                                echo '1週間以内';
                            } elseif($speed == 14) {
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
            <input type="hidden"
                value="<?php if($order == "desc"){ echo "asc"; }elseif($order == "asc"){ echo "desc"; } ?>"
                name="order">
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
            <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
            <?php     }
                                }
                                }
        } ?>
            <input type="hidden" value="point1" name="metakey">
            <input type="hidden"
                value="<?php if($order == "asc"){ echo "desc"; }elseif($order == "desc"){ echo "asc"; } ?>"
                name="order">
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
            <input type="hidden"
                value="<?php if($order == "asc"){ echo "desc"; }elseif($order == "desc"){ echo "asc"; } ?>"
                name="order">
        </form>
        <form class="table" id="sort_form4" action="<?php echo home_url( '/' ); ?>" method="get">
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
            <input type="hidden" value="speed" name="metakey">
            <input type="hidden"
                value="<?php if($order == "asc"){ echo "desc"; }elseif($order == "desc"){ echo "asc"; } ?>"
                name="order">
        </form>


        <article class="sort__choice__wrap">
            <ul class="sort__list">
                <li>評価順</li>
                <ul class="sort__open__list">
                    <li class="hyouka__btn">評価順</li>
                    <li class="point__btn">ポイント還元率順</li>
                    <li class="price__btn">年会費(初年度)順</li>
                    <li class="speed__btn">発行スピード順</li>

                </ul>

            </ul>
        </article>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script>
        $hyoukaTxt = $(".hyouka__btn").text();
        $pointTxt = $(".point__btn").text();
        $priceTxt = $(".price__btn").text();
        $speedTxt = $(".speed__btn").text();


        $(".hyouka__btn").on('click', function() {
            $("#sort_form1").submit();
            $(".sort__list > li").text($hyoukaTxt);

        });
        $(".point__btn").on('click', function() {
            $("#sort_form2").submit();
            $(".sort__list > li").text($pointTxt);

        });
        $(".price__btn").on('click', function() {
            $("#sort_form3").submit();
            $(".sort__list > li").text($priceTxt1);
        })
        $(".speed__btn").on('click', function() {
            $("#sort_form4").submit();
            $(".sort__list > li").text($speedTxt);
        })
        </script>

    </section>





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
               
                ?>

                <div class="result__item__wrap pc rank_<?php echo $i; ?>">

                    <div class="result__content__wrap pc">

                        <div class="item__left">

                            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                                <img src="<?php echo $image_url[0]; ?>" alt="">
                            </a>

                            <div class="star__wrap">
                                <div class="star"><img src="<?php echo $star; ?>" alt=""></div>
                                <span class="number">
                                    <?php echo $hyouka; ?>
                                </span>
                            </div>

                        </div>



                        <div class="item__right">

                            <h2 class="title__wrap">
                                <a href="<?php bloginfo('template_url'); ?><?php echo $url; ?>" class="prrrr">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="campaign__wrap">
                                <span class="campaign__title">限定キャンペーン</span>
                                <ul class="campaign__descript"><?php echo $campaign; ?></ul>
                            </div>

                            <div class="points__wrap">
                                <table>
                                    <tr>
                                        <th>年会費初年度</th>
                                        <td><?php echo $price; ?></td>
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
                                        echo $speed;
                                        ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="discript__wrap">
                                <?php the_content(); ?>
                            </div>

                        </div>

                    </div>

                    <div class="result__button__wrap">

                        <div class="search__button">
                            <a class="syousai__btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                            <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                target="_blank">公式サイトを見る</a>
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



<?php get_footer(); ?>