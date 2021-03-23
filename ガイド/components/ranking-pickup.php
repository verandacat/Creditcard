<section id="pickup__box">

    <article id="pickup__content__box" class="pickup__content__top">

        <div class="pickup__title__wrap">
            <h2><span class="point">絶対</span><span class="p-small">に</span>失敗しない<br>
                クレジットカード<span class="p-small">の</span><span class="p-color p-big">選び方</span>！
            </h2>
        </div>

        <div class="pickup__descript__wrap">
            <p>
            「クレジットカードは種類が多すぎてどうやって選べばいいか分からない…」とお悩みの方へ。<br>
            以下の<span class="bold">3つのポイントを押さえておけば、カード選びで失敗することはありません。</span>
            </p>
        </div>

        <div class="pickup__icon__wrap">
            <!--flex-->
            <div class="icon__wrap" data-icon="1">
                <div class="background">
                    <div class="number__wrap">
                        <img src="<?php bloginfo('template_url'); ?>/images/ranking/1__number.png" alt="">
                    </div>
                    <div class="img__wrap">
                        <img src="<?php bloginfo('template_url'); ?>/images/ranking/1__icon.png" alt="">
                    </div>
                    
                </div>
                <div class="text__wrap">
                    <p>年会費<span class="red">永年無料</span>
                    </p>
                </div>
            </div>

            <div class="icon__wrap" data-icon="2">
                <div class="background">
                    <div class="number__wrap">
                        <img src="<?php bloginfo('template_url'); ?>/images/ranking/2__number.png" alt="">
                    </div>
                    <div class="img__wrap">
                        <img src="<?php bloginfo('template_url'); ?>/images/ranking/2__icon.png" alt="">
                    </div>
                    
                </div>
                <div class="text__wrap">
                <p>ポイント還元率<br><span class="red">0.5%以上</span>
            </p></div>
            </div>

            <div class="icon__wrap" data-icon="3">
                <div class="background">
                    <div class="number__wrap">
                        <img src="<?php bloginfo('template_url'); ?>/images/ranking/3__number.png" alt="">
                    </div>
                    <div class="img__wrap">
                        <img src="<?php bloginfo('template_url'); ?>/images/ranking/3__icon.png" alt="">
                    </div>
                    
                </div>
                <div class="text__wrap"><p>自分の<span class="red">ライフスタイル</span>に<br>合っている</p></div>
            </div>

        </div>

    </article>

    <?php
         $args = array(
            'posts_per_page' => '1',
            'post_type' => 'card',
            'category_name' => 'pickup',
            'meta_key' => 'pickup',
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); 
        $image_id = get_post_thumbnail_id ();
        $image_url = wp_get_attachment_image_src ($image_id, true);
        $type = get_field('type');
        $price = get_field('price');
        $brand = get_field('brand');
        $point1 = get_field('point1');
        $point2 = get_field('point2');
        $emoney = get_field('emoney');
        $speed = get_field('speed');
        $insurance = get_field('insurance');  
        $insuranceService = get_field('insurance-service');  
        $service = get_field('insurance-service');
        $campaign = get_field('campaign-descript');   
        $points1 = get_field('points1'); 
        $points2 = get_field('points2'); 
        $points3 = get_field('points3'); 
        $points4 = get_field('points4'); 
        $points5 = get_field('points5'); 
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
        $pickupPoint = get_field('pickup-points');
        ?>
    <article id="pickup__content__box" class="pickup__content__bottom">

        <div class="pickup__title__wrap">
            <h2>
            全ての条件を満たした<br>
            <span class="p-color p-big">No.1クレジットカード</span>は…
            </h2>
        </div>

        
       

        <div class="pinkup__item__wrap">
            <div class="card__item__wrap">

                <img class="ab" src="<?php bloginfo('template_url'); ?>/images/ranking/mitusi__crown.png" alt="">
                <h3><a href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_black" class="prrrr"><?php the_title(); ?></a></h3>

                <div class="card__img">
                    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_black" class="prrrr">
                        <img src="<?php echo $image_url[0]; ?>" alt="">
                    </a>
                </div>

                <ul>
                    <?php echo $pickupPoint; ?>
                </ul>
            </div>
        </div>

        <div class="result__button__wrap">
            <div class="koushiki__wrap">
                <p class="koushiki__text">＼最短5分で申込完了／</p>
                <a class="koushiki__btn prrrr" style="margin:0 auto"
                    href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">キャンペーンでお得に申し込む</a>
            </div>
        </div>
        

    </article>
    <?php endwhile; endif; wp_reset_query(); ?>
</section>