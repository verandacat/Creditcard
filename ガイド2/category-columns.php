<?php get_header(); ?>


<!-- 🌹 検索結果 🌹 -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- ✨✨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>
    

   

    <div id="contents__box">



        <section id="section__box">

           

            <article id="single__box">


                <div class="single__item__wrap">

                <ul class="columns__list">
                    <?php
                    $catquery = new WP_Query( 'cat=23&posts_per_page=-1' ); // 카테고리 ID, 표시 글 개수
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
            <!-- ✨💎 PC/SP -->
            <!-- PC : 4 SP : 3 -->
            <article id="top__campaign__box" class="swiper-container-cam">

                <h2 class="title__wrap">
                    キャンペーン
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
                                キャンペーン<span class="red">実施中！</span>
                                <!-- 2020年<span class="red">12月31日</span> まで -->
                            </div>

                            <div class="link__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    詳細を見る
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
                        キャンペーン一覧へ
                    </a>
                </div>

            </article>

            <?php endif; ?>

            <!-- 💎💎 SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- 💎💎 SP -->
            <?php include 'components/sp-feature.php'; ?>



            <!-- 💎💎 SP -->
            <?php include 'components/sp-banner.php'; ?>


            <div style="margin-top: 30px">
                <?php get_search_form(); ?>
            </div>

        </section>

        <?php get_sidebar(); ?>

    </div>

</div>



<?php get_footer(); ?>