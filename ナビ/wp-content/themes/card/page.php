<?php
get_header();
?>


<!-- 🌹 総合ランキング 🌹 -->
<div id="container">


    <?php //include('mobileNav.php'); ?>

    <!-- ✨✨ PC -->
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

    <!-- 🌹 FV 🌹 -->

    <!-- ✨💎 PC/SP -->
    <?php include 'header/header-page.php'; ?>

    <?php if(is_page('rankingall')) : ?>

    <div class="page__descirpt__wrap">
        <p>
        このページでは<span class="red">年会費、ポイント還元率、付帯サービス、キャンペーン情報</span>などを基準に選ばれた<span class="red bg-y">人気のクレジットカードをランキングでご紹介</span>しています。
        どのカードもおすすめですが、各カードを比べて、ぜひあなたに合った1枚を見つけてくださいね！
        </p>
    </div>

    <?php elseif(is_page('rankingetc')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        ETCカードは、新しくクレジットカードを申し込む際にチェックを入れるだけでカンタンに作ることができます。
        このページでは<span class="red">年会費＆発行手数料無料</span>で作れるETC付きクレジットカードをランキングでご紹介しています。
        使うたびにポイントが貯まるので、<span class="red bg-y bold">ETCカードはクレジットカードとの同時申し込みが1番お得</span>です。
        </p>
    </div>
    
    <?php elseif(is_page('rankingspeed')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        <span class="red bg-y bold">【最短5分】カードの到着を待たずに今すぐ使える！</span>発行スピードが早いクレカの人気ランキング！
        </p>
    </div>
        
    <?php elseif(is_page('rankingbusiness')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        <span class="red bold">法人代表者・個人事業主の方向け</span>のおすすめ法人・ビジネスカードをご紹介します。経理管理・資金運用の効率化に役立ち、ビジネスを加速する様々な特典・サービスが付いて、さらに、ポイントも貯まります。<span class="bg-y bold red">決算書・登記簿謄本不要で設立1年でも作れます</span>ので、ぜひお申し込みください！
        </p>
    </div>

    <?php elseif(is_page('rankingstudent')) : ?>
    <div class="page__descirpt__wrap">
        <p>
        <span class="red bg-y bold">学生におすすめ</span>の年会費無料＆ポイントが貯まりやすいお得なカードをご紹介！
        </p>
    </div>
    
    <?php endif; ?>

    <?php if(is_page('rankingall')) : ?>
    <?php //the_content(); ?>
    <?php endif; ?>

    <!-- ✨💎 PC/SP -->
    <div id="contents__box">

        <!-- 🌹 Main Contents🌹 -->

        <section id="section__box">

            <!-- 総合ランキング -->


            <!-- ✨✨ PC -->
            <article id="ranking__sub__items__box" class="pc">

                <div class="ranking__sub__wrap">
                    <?php if(is_page('rankingall')) : ?>
                        <div class="page__title__wrap">
                            <h2>【<?php echo date('Y'); ?>年<?php echo date('n'); ?>月】最新ランキングBEST10！</h2>
                        </div>
                    <?php endif; ?>
                    <?php include 'components/pc-ranking-args.php'; ?>

                </div>

            </article>

           
            <article id="ranking__sub__items__box" class="sp">
            <?php if(is_page('rankingall')) : ?>
                <div class="page__title__wrap">
                <span class="small">【<?php echo date('Y'); ?>年<?php echo date('n'); ?>月】</span>
                    <h2>最新ランキングBEST10！</h2>
                </div>
            <?php endif; ?>
                <div class="ranking__sub__wrap">
                   
                    <?php include 'components/sp-ranking-args.php'; ?>

                </div>

            </article>


            <!-- 💎💎 SP -->
            <?php include 'components/sp-ranklist.php'; ?>



            <!-- 💎💎 SP -->
            <?php include 'components/sp-feature.php'; ?>



            <!-- 💎💎 SP -->
            <?php include 'components/sp-banner.php'; ?>


        </section>


       

        <!-- Sidebar -->
        <!-- ✨✨ PC -->
        <?php get_sidebar(); ?>


    </div>

    

    <?php endif; ?>

    


    <?php if(!(is_page('survey') || is_page('office'))) : ?>
        
        <?php get_search_form(); ?>

    <?php endif; ?>

</div>


<?php get_footer(); ?>