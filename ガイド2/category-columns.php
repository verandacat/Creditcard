<?php get_header(); ?>


<!-- πΉ ζ€η΄’η΅ζ πΉ -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- β¨β¨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>
    

   

    <div id="contents__box">



        <section id="section__box">

           

            <article id="single__box">


                <div class="single__item__wrap">

                <ul class="columns__list">
                    <?php
                    $catquery = new WP_Query( 'cat=23&posts_per_page=-1' ); // μΉ΄νκ³ λ¦¬ ID, νμ κΈ κ°μ
                    while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink() ?>" rel="bookmark">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                    
                 </div>

                
            </article>


            <?php if(!is_mobile()) : ?>
            <!-- β¨π PC/SP -->
            <!-- PC : 4 SP : 3 -->
            <article id="top__campaign__box" class="swiper-container-cam">

                <h2 class="title__wrap">
                    γ­γ£γ³γγΌγ³
                </h2>

                <div class="slide__item__wrap swiper-wrapper">
                    <?php wp_reset_postdata();


                    $args = array(
                        'posts_per_page' => '-1',
                        'category_name' => 'campaign',
                        'post_type' => 'card',
                        'meta_key' => 'hyouka',
                        'orderby' => 'meta_value_num',
                        'order' => 'desc',
                    );

                    $the_query = new WP_Query( $args );
                        $i = 1;
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            $image_id = get_post_thumbnail_id ();
                            $image_url = wp_get_attachment_image_src ($image_id, true);
                            $url = get_field('url');
                            $hyouka = get_field('hyouka');
                            $campaign = get_field('campaign-descript'); 
                    ?>
                    <!-- loop -->
                    <div class="swiper-slide">
                        <div class="slide__item item<?php echo $i; ?>">
                            <div class="img__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $image_url[0]; ?>" alt="">
                                </a>
                            </div>

                            <div class="title__wrap">
                                <a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                                </a>
                            </div>

                            <ul class="text__wrap">
                                <?php echo $campaign; ?>
                            </ul>

                            <div class="data__wrap">
                                γ­γ£γ³γγΌγ³<span class="red">ε?ζ½δΈ­οΌ</span>
                                <!-- 2020εΉ΄<span class="red">12ζ31ζ₯</span> γΎγ§ -->
                            </div>

                            <div class="link__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    θ©³η΄°γθ¦γ
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- loop -->
                    <?php endwhile; endif; wp_reset_query(); ?>

                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="btn__wrap">
                    <a href="<?php echo home_url('/campaign'); ?>">
                        γ­γ£γ³γγΌγ³δΈθ¦§γΈ
                    </a>
                </div>

            </article>

            <?php endif; ?>

            <!-- ππ SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- ππ SP -->
            <?php include 'components/sp-feature.php'; ?>



            <!-- ππ SP -->
            <?php include 'components/sp-banner.php'; ?>


            <div style="margin-top: 30px">
                <?php get_search_form(); ?>
            </div>

        </section>

        <?php get_sidebar(); ?>

    </div>

</div>



<?php get_footer(); ?>