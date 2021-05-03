<div class="left card__img">
    <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
        <picture>
            <source type="image/webp" srcset="<?php echo $webp; ?>" alt="<?php the_title(); ?>">
            <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
        </picture>
    </a>
</div>

<div class="right card__info">

    <div class="card__title">

        <div class="card__name">
            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                <?php the_title(); ?>
            </a>
        </div>

        <div class="card__eval">
            <div class="star__wrap">
                <div class="star"><img src="<?php echo $star; ?>" alt="">
                </div>

                <span class="number">
                    <?php echo $number; ?><span class="ss">点</span>
                </span>
            </div>
        </div>

    </div>

    <div class="card__points">
        <!-- GRID -->
        <div class="point__box">
            <div class="point__word1">年会費初年度</div>
            <div class="point__word2"><?php echo $priceFirst; ?></div>
        </div>
        <div class="point__box">
            <div class="point__word1">年会費2年目~</div>
            <div class="point__word2"><?php echo $priceSecond; ?></div>
        </div>
        <div class="point__box">
            <div class="point__word1">ポイント還元率</div>
            <div class="point__word2"><?php echo $pointKangen; ?></div>
        </div>
        <div class="point__box">
            <div class="point__word1">発行スピード</div>
            <div class="point__word2"><?php echo $issueSpeed; ?></div>
        </div>
    </div>

    <div class="card__btn">
        <div class="btn__syousai new__btn">
            <a href="<?php the_permalink(); ?>">詳細を見る</a>
        </div>
        <div class="btn__koushiki new__btn">
            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>">申し込みはこちら</a>
            <i class="fas fa-arrow-alt-circle-right"></i>
        </div>
    </div>
</div>