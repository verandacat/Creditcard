<!-- ✨✨ PC -->
<footer class="pc">

    <article id="footer__top__box">

        <!-- <div class="footer__content__wrap">

            <div class="brand__wrap">
                <h3>ブランド一覧</h3>
                <ul>
                    <li>
                        <a href="#">VISA</a>
                    </li>
                    <li>
                        <a href="#">MasterCard</a>
                    </li>
                    <li>
                        <a href="#">JCB</a>
                    </li>
                    <li>
                        <a href="#">アメリカン・エキスプレス</a>
                    </li>
                    <li>
                        <a href="#">ダイナースクラブ</a>
                    </li>
                </ul>
            </div>


            <div class="company__wrap">
                <h3>発行会社一覧</h3>
                <ul>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                    <li>
                        <a href="#">株式会社ジェーシービー</a>
                    </li>
                </ul>
            </div>

        </div> -->

    </article>

    <article id="footer__bottom__box">
        <div class="footer__content__wrap">
            <div class="links__wrap">
                <?php if(!$_GET['f'] == "on") : ?>
                <ul>
                    <li>
                        <a href="<?php echo home_url('/office'); ?>">運営者情報</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/survey'); ?>">ランキング調査概要</a>
                    </li>
                </ul>
                <?php endif; ?>
                <p class="copyright">
                    @ 2020 おすすめクレジットカード比較ナビ
                </p>
            </div>

            <!-- <a href="#container" id="top__btn">
                TOPへ
            </a> -->
        </div>
    </article>

</footer>

<!-- 💎💎 SP -->
<footer class="sp">

    <article id="footer__top__box" class="sp">

        <div class="footer__content__wrap">
            @ 2020 おすすめクレジットカード比較ナビ

        </div>
        <!-- <a href="" id="top__btn"></a> -->
    </article>
    <?php if(!$_GET['f'] == "on") : ?>
    <article id="footer__bottom__box" class="sp">

        <div class="footer__content__wrap">

            <div class="links__wrap">
                <ul>
                    <li>
                        <a href="<?php echo home_url('/office'); ?>">運営者情報</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/survey'); ?>">ランキング調査概要</a>
                    </li>
                </ul>
            </div>
        </div>

    </article>
    <?php endif; ?>
</footer>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

var swiperCampaign = new Swiper('.swiper-container-cam', {
    slidesPerView: 4,
    spaceBetween: -4,
    breakpoints: {
        300: {
            slidesPerView: 2,
        },
        340: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 4,
        },
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
});

var swiperFeature = new Swiper('.swiper-container-feature', {
    slidesPerView: 4,
    spaceBetween: -4,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var swiperSpTop = new Swiper('.swiper-container-3d', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: '2',
    coverflowEffect: {
        rotate: 40,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // pagination: {
    //     el: '.swiper-pagination',
    // },
});


var swiperRankTop = new Swiper('.swiper-container-ranktop', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // autoplay: {
    //     delay: 3500,
    //     disableOnInteraction: false,
    // },
});
</script>

<script src="<?php bloginfo('template_url'); ?>/js/modernizr-custom.js"></script>
<script src="https://kit.fontawesome.com/339539da33.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/storage.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js?<?php echo time() ?>">
</script>

<?php if(!is_mobile()) : ?>
<script>
$('.search__area__top input[type="checkbox"]').change(function() {
    var $this = $(this);
    var $parentBox = $this.closest('div');
    var $parentLabel = $this.next();

    if ($this.is(':checked')) {
        $parentBox.css('backgroundColor', 'aliceblue');
    } else {
        $parentBox.css('backgroundColor', '#fff');
    }
});
</script>

<?php else : ?>
<script>
$('.search__area__top select').change(function() {
    var $this = $(this);
    var $parentBox = $this.closest('label');
    if ($this.val() == '') {
        $parentBox.css('backgroundColor', '#fff');
    } else {
        $parentBox.css('backgroundColor', 'aliceblue');
    }

});

$('.search__area__bottom input[type="checkbox"]').change(function() {
    var $this = $(this);
    var $parentBox = $this.closest('div');
    if ($this.is(':checked')) {
        $parentBox.css('backgroundColor', 'aliceblue');
    } else {
        $parentBox.css('backgroundColor', '#fff');
    }
});
</script>
<?php endif; ?>
<script>
$(function() {
    function device() {
        const windowWidth = $(window).width();
        if (windowWidth < 1030) {
            $('.pc').remove();
            $('.sp').show();
        } else {
            $('.sp').remove();
            $('.pc').show();
        }
        console.log('resize');
    }

    $(window).resize(device());
})
</script>

<?php if(is_page('rankingall')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-ilkzidfl.js"></script>

<?php elseif(is_page('rankingprice')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-hbkaakyh.js"></script>

<?php elseif(is_page('rankingpoint')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-qpsbcdeb.js"></script>

<?php elseif(is_page('rankingbusiness')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-smcglpub.js"></script>

<?php elseif(is_page('rankingetc')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-usqlpmqd.js"></script>

<?php elseif(is_page('rankingspeed')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-prolisci.js"></script>

<?php elseif(is_page('rankinglady')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-iqruwcht.js"></script>

<?php elseif(is_page('rankingstudent')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-xeyabtnc.js"></script>

<?php elseif(is_page('rankingvisa')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-lesphmpq.js"></script>

<?php elseif(is_page('rankingmaster')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-gzhnanhm.js"></script>

<?php elseif(is_page('rankingjcb')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-avdprhzh.js"></script>

<?php elseif(is_page('rankinggold')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-qvswddsx.js"></script>

<?php elseif(is_page('rankingmil')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-wxxvdvyj.js"></script>

<?php elseif(is_page('rankingstatus')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-rupuoocj.js"></script>

<?php endif; ?>

<script>
<?php if(is_mobile()) : ?>


$('.js__review__link').click(function() {
    $(this).parent().parent().children('.js__review').slideToggle();
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $(this).html('<i class="fas fa-sort-up"></i>口コミ');
    } else {
        $(this).html('<i class="fas fa-sort-down"></i>口コミ');
    }
});


<?php else : ?>

$('.js__review__link').click(function() {
    $(this).parent().parent().parent().parent().children('.js__review').slideToggle();
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $(this).html('<i class="fas fa-sort-up"></i>口コミ');
    } else {
        $(this).html('<i class="fas fa-sort-down"></i>口コミ');
    }
});

<?php endif; ?>
</script>
</body>

</html>