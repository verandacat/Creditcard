<?php
get_header();
?>


<!-- πΉ η·εγ©γ³γ­γ³γ° πΉ -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- β¨β¨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>


    <!-- πΉ FV πΉ -->

    <!-- β¨π PC/SP -->
    <section id="fv__sub__box">
        <div class="img__wrap pc">
            <img src="<?php bloginfo('template_url'); ?>/images/campaign/campaign__fv.png" alt="">
        </div>
        <div class="img__wrap sp">
            <img src="<?php bloginfo('template_url'); ?>/images/campaign/campaign__fv__sp.png" alt="">
        </div>
        <!-- <div class="text__wrap">θͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζθͺ¬ζζ</div> -->
    </section>


    <!-- β¨π PC/SP -->
    <section id="page__title__box" class="pc">

        <h2>γ­γ£γ³γγΌγ³</h2>

    </section>


    <!-- β¨π PC/SP -->
    <div id="contents__box">

        <!-- πΉ Main ContentsπΉ -->

        <section id="section__box">

            <!-- η·εγ©γ³γ­γ³γ° -->


            <?php if(!is_mobile()) : ?>

            <!-- β¨β¨ PC -->
            <article id="campaign__sub__items__box" class="pc">

                <div class="campaign__sub__wrap">
                    <?php wp_reset_postdata();

                $args = array(
                    'posts_per_page' => '-1',
                    'category_name' => 'campaign',
                    'post_type' => 'card',
                    'meta_key' => 'hyouka',
                    'orderby' => 'meta_value_num',
                    'order' => 'desc',
                );
                ?>
                    <?php 
                 $the_query = new WP_Query( $args );
                 $i = 1;
                 if ( $the_query->have_posts() ) :
                     while ( $the_query->have_posts() ) : $the_query->the_post();
                    $hyouka = get_field('hyouka');
                    $star = get_field('star');
                    $campaign = get_field('campaign-descript');   
                    $image_id = get_post_thumbnail_id ();
                    $image_url = wp_get_attachment_image_src ($image_id, true);
                    $priceFirst = get_field('price-first');
                    $priceSecond = get_field('price-second');
                    $pointKangen = get_field('point-kangen');
                    $issueSpeed = get_field('issue-speed');
                    $descript = get_field('description');
                ?>

                    <!-- loop -->
                    <div class="campaign__sub__item__wrap item<?php echo $i; ?>">

                        <div class="campaign__item__content__wrap">

                            <div class="img__wrap">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url[0]; ?>" alt=""></a>
                            </div>

                            <div class="title__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <ul class="text__wrap">
                                <?php echo $campaign; ?>
                            </ul>

                            <div class="link__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    γγγ«θ©³γγθ¦γ
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- loop end -->
                    <?php $i++; endwhile; endif; wp_reset_query(); ?>


                </div>

            </article>


            <?php else : ?>

            <article id="campaign__sub__items__box" class="sp">

                <div class="campaign__sub__wrap">

                    <?php wp_reset_postdata();

                $args = array(
                    'posts_per_page' => '-1',
                    'category_name' => 'campaign',
                    'post_type' => 'card',
                    'meta_key' => 'hyouka',
                    'orderby' => 'meta_value_num',
                    'order' => 'desc',
                );
                ?>
                    <?php 
                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $hyouka = get_field('hyouka');
                    $star = get_field('star');
                    $campaign = get_field('campaign-descript');   
                    $image_id = get_post_thumbnail_id ();
                    $image_url = wp_get_attachment_image_src ($image_id, true);
                    $url = get_field('url');
                    $priceFirst = get_field('price-first');
                    $priceSecond = get_field('price-second');
                    $pointKangen = get_field('point-kangen');
                    $issueSpeed = get_field('issue-speed');
                    $descript = get_field('description');
                    $brand = get_field('brand');
                    
                    ?>

                    <div class="campaign__sub__item__wrap item1">

                        <div class="campaign__descript">
                            <div class="campaign__title">
                                <span>ιε?γ­γ£γ³γγΌγ³</span>
                            </div>
                            <ul class="campaign__text">
                                <?php echo $campaign; ?>
                            </ul>
                            <div class="campaign__date"></div>
                        </div>

                        <div class="campaign__item__title__wrap">
                            <div class="title__wrap">
                                <?php the_title(); ?>
                            </div>

                            <div class="star__wrap">
                                    <div class="star">
                                        <img src="<?php echo $star; ?>" alt="">
                                    </div>
                                    <span class="number">
                                        <?php echo $hyouka; ?><span class="ss">ηΉ</span>
                                    </span>
                                </div>
                        </div>

                        <div class="campaign__item__content__wrap">

                            <div class="campaign__item__left">
                                <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank" class="prrrr">
                                    <img src="<?php echo $image_url[0]; ?>" alt="">
                                </a>

                                
                            </div>

                        </div>

                       

                        <div class="campaign__card__points">

                            <ul class="points__list list1">
                                <li class="points__title">εΉ΄δΌθ²»εεΉ΄εΊ¦</li>
                                <li class="points__content"><?php echo $priceFirst; ?></li>

                            </ul>
                            <ul class="points__list list2">
                                <li class="points__title">εΉ΄δΌθ²»2εΉ΄η?~</li>
                                <li class="points__content"><?php echo $priceSecond; ?></li>
                            </ul>
                            <ul class="points__list list3">
                                <li class="points__title">γγ€γ³γιεη</li>
                                <li class="points__content"><?php echo $pointKangen; ?></li>
                            </ul>
                            <ul class="points__list list4">
                                <li class="points__title">ε½ιγγ©γ³γ</li>
                                <li class="points__content">
                                    <div class="brand__box">
                                        <?php foreach ($brand as $b) : ?>
                                        <?php if($b == "VISA") {
                                            $b = "/images/contents/brand__visa.png";
                                        }elseif($b == "Mastercard") {
                                            $b = "/images/contents/brand__master.png";
                                        }elseif($b == "JCB") {
                                            $b = "/images/contents/brand__jcb.png";
                                        }elseif($b == "American Express") {
                                            $b = "/images/contents/brand__american.png";
                                        }
                                    ?>
                                        <img class="brand__icon" src="<?php bloginfo('template_url'); ?><?php 
                                                                        echo $b; ?>" alt="">

                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="text__wrap">
                                <?php the_content(); ?>
                            </div>

                        <div class="campaign__btn__wrap">

                            <a class="koushiki__btn prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                                target="_blank">η³γθΎΌγΏγ―γγ‘γ</a>

                            <a class="syousai__btn" href="<?php the_permalink(); ?>">θ©³η΄°γθ¦γ</a>


                        </div>

                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>

            </article>

            <?php endif; ?>



            <!-- ππ SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- ππ SP -->
            <?php include 'components/sp-feature.php'; ?>




            <!-- ππ SP -->
            <?php include 'components/sp-banner.php'; ?>


        </section>




        <!-- Sidebar -->
        <!-- β¨β¨ PC -->
        <?php get_sidebar(); ?>


    </div>

    <?php get_search_form(); ?>

</div>


<?php get_footer(); ?>