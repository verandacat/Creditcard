<?php
get_header();
?>


<!-- ð¹ ç·åã©ã³ã­ã³ã° ð¹ -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- â¨â¨ PC -->
    <?php if(!is_mobile()) : ?>
    <?php include('bread.php'); ?>
    <?php endif; ?>

    <?php if(is_page('office') || is_page('survey')) : ?>

    <div id="contents__box">


        <section id="section__box">

            <?php
    if (have_posts()) :  
    while (have_posts()) :  
        the_post();?>

            <article id="footer__menu__box">

                <h2><?php the_title(); ?></h2>
                <div class="text__wrap">
                    <?php the_content(); ?>
                </div>

            </article>

            <?php endwhile; 
        else:
        endif; 
        ?>

        </section>
        
    </div>

    <?php else : ?>

    <!-- ð¹ FV ð¹ -->

    <!-- â¨ð PC/SP -->
    <?php include 'header/header-page.php'; ?>

    <?php if(is_page('rankingall')) : ?>

    <div class="page__descirpt__wrap">
        <p>
        ãã®ãã¼ã¸ã§ã¯<span class="red">å¹´ä¼è²»ããã¤ã³ãéåçãä»å¸¯ãµã¼ãã¹ãã­ã£ã³ãã¼ã³æå ±</span>ãªã©ãåºæºã«é¸ã°ãã<span class="red bg-y">äººæ°ã®ã¯ã¬ã¸ããã«ã¼ããã©ã³ã­ã³ã°ã§ãç´¹ä»</span>ãã¦ãã¾ãã
        ã©ã®ã«ã¼ããããããã§ãããåã«ã¼ããæ¯ã¹ã¦ããã²ããªãã«åã£ã1æãè¦ã¤ãã¦ãã ããã­ï¼
        </p>
    </div>

    <?php elseif(is_page('rankingetc')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        ETCã«ã¼ãã¯ãæ°ããã¯ã¬ã¸ããã«ã¼ããç³ãè¾¼ãéã«ãã§ãã¯ãå¥ããã ãã§ã«ã³ã¿ã³ã«ä½ããã¨ãã§ãã¾ãã
        ãã®ãã¼ã¸ã§ã¯<span class="red">å¹´ä¼è²»ï¼çºè¡ææ°æç¡æ</span>ã§ä½ããETCä»ãã¯ã¬ã¸ããã«ã¼ããã©ã³ã­ã³ã°ã§ãç´¹ä»ãã¦ãã¾ãã
        ä½¿ããã³ã«ãã¤ã³ããè²¯ã¾ãã®ã§ã<span class="red bg-y bold">ETCã«ã¼ãã¯ã¯ã¬ã¸ããã«ã¼ãã¨ã®åæç³ãè¾¼ã¿ã1çªãå¾</span>ã§ãã
        </p>
    </div>
    
    <?php elseif(is_page('rankingspeed')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        <span class="red bg-y bold">ãæç­5åãã«ã¼ãã®å°çãå¾ããã«ä»ããä½¿ããï¼</span>çºè¡ã¹ãã¼ããæ©ãã¯ã¬ã«ã®äººæ°ã©ã³ã­ã³ã°ï¼
        </p>
    </div>
        
    <?php elseif(is_page('rankingbusiness')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        <span class="red bold">æ³äººä»£è¡¨èã»åäººäºæ¥­ä¸»ã®æ¹åã</span>ã®ããããæ³äººã»ãã¸ãã¹ã«ã¼ãããç´¹ä»ãã¾ããçµçç®¡çã»è³ééç¨ã®å¹çåã«å½¹ç«ã¡ããã¸ãã¹ãå éããæ§ããªç¹å¸ã»ãµã¼ãã¹ãä»ãã¦ãããã«ããã¤ã³ããè²¯ã¾ãã¾ãã<span class="bg-y bold red">æ±ºç®æ¸ã»ç»è¨ç°¿è¬æ¬ä¸è¦ã§è¨­ç«1å¹´ã§ãä½ãã¾ã</span>ã®ã§ããã²ãç³ãè¾¼ã¿ãã ããï¼
        </p>
    </div>

    <?php elseif(is_page('rankingstudent')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        <span class="red bg-y bold">å­¦çã«ãããã</span>ã®å¹´ä¼è²»ç¡æï¼ãã¤ã³ããè²¯ã¾ãããããå¾ãªã«ã¼ãããç´¹ä»ï¼
        </p>
    </div>

    <?php endif; ?>

    <?php if(is_page('rankingall')) : ?>
    <?php //the_content(); ?>
    <?php endif; ?>

    <!-- â¨ð PC/SP -->
    <div id="contents__box">

        <!-- ð¹ Main Contentsð¹ -->

        <section id="section__box">

            <!-- ç·åã©ã³ã­ã³ã° -->


            <!-- â¨â¨ PC -->
            <article id="ranking__sub__items__box" class="pc">

                <div class="ranking__sub__wrap">
                    <?php if(is_page('rankingall')) : ?>
                        <div class="page__title__wrap">
                            <h2>ã<?php echo date('Y'); ?>å¹´<?php echo date('n'); ?>æãææ°ã©ã³ã­ã³ã°BEST10ï¼</h2>
                        </div>
                    <?php endif; ?>
                    <?php include 'components/pc-ranking-args.php'; ?>

                </div>

            </article>

           
            <article id="ranking__sub__items__box" class="sp">
            <?php if(is_page('rankingall')) : ?>
                <div class="page__title__wrap">
                <span class="small">ã<?php echo date('Y'); ?>å¹´<?php echo date('n'); ?>æã</span>
                    <h2>ææ°ã©ã³ã­ã³ã°BEST10ï¼</h2>
                </div>
            <?php endif; ?>
                <div class="ranking__sub__wrap">
                   
                    <?php include 'components/sp-ranking-args.php'; ?>

                </div>

            </article>


            <!-- ðð SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- ðð SP -->
            <?php include 'components/sp-feature.php'; ?>



            <!-- ðð SP -->
            <?php include 'components/sp-banner.php'; ?>


        </section>


       

        <!-- Sidebar -->
        <!-- â¨â¨ PC -->
        <?php get_sidebar(); ?>


    </div>

    

    <?php endif; ?>

    


    <?php if(!(is_page('survey') || is_page('office'))) : ?>
        
        <?php get_search_form(); ?>

    <?php endif; ?>

</div>


<?php get_footer(); ?>