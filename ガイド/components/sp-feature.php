<article id="top__feature__box" class="sp">

    <h2 class="title__wrap">
        お得な特集
    </h2>

    <div class="top__feature__wrap">
        <?php wp_reset_postdata();

                    $args = array(
                        'posts_per_page' => '4',
                        'category_name' => 'feature',
                        'post_type' => 'post',
                        'meta_key' => 'feature-number',
                        'orderby' => 'date',
                        'order' => 'asc',
                        'post_parent' => 0,

                    );
                    ?>
        <?php
                    $the_query = new WP_Query( $args );
                    $i = 1;
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $featureImg = get_field('feature-img');
                        $featureName = get_field('feature-name');
                        $featureDes = get_field('feature-descript');
                    ?>

        <div class="top__feature__item item<?php echo $i; ?>">

            <div class="img__wrap">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featureImg; ?>" alt=""></a>
            </div>
            <a href="<?php the_permalink(); ?>">
                <div class="right__wrap">
                    <div class="title__wrap">
                        <?php the_title(); ?>
                    </div>

                    <div class="text__wrap">

                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </a>
        </div>
        <!-- loop end -->
        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>
    </div>


    <div class="btn__wrap">
        <a href="<?php echo home_url('/feature'); ?>">
            特集一覧へ
        </a>
    </div>

</article>