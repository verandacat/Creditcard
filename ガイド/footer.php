<!-- ✨✨ PC -->
<footer class="pc">

    <article id="footer__top__box">

    </article>

    <article id="footer__bottom__box">
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
                <p class="copyright">
                    @ 2020 おすすめクレジットカード比較ガイド
                </p>
            </div>
        </div>
    </article>

</footer>

<!-- 💎💎 SP -->
<footer class="sp">

    <article id="footer__top__box" class="sp">

        <div class="footer__content__wrap">
            @ 2020 おすすめクレジットカード比較ガイド
        </div>

    </article>

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

</footer>

<?php if(is_front_page()|| is_single()|| is_page('test')) : ?>
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
});
</script>
<?php endif; ?>

<script src="<?php bloginfo('template_url'); ?>/js/modernizr-custom.js"></script>
<script src="https://kit.fontawesome.com/339539da33.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/storage.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js?<?php echo time() ?>"></script>


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

<?php if(is_page('rankingall') ) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-hzepcoie.js"></script>

<?php elseif(is_page('rankingprice')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-jrfrwzkc.js"></script>

<?php elseif(is_page('rankingpoint')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-dczjxpmn.js"></script>

<?php elseif(is_page('rankingbusiness')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-hxttware.js"></script>

<?php elseif(is_page('rankingetc')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-qrwlweet.js"></script>

<?php elseif(is_page('rankingspeed')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-gofqbefk.js"></script>

<?php elseif(is_page('rankinglady')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-ycdrspff.js"></script>

<?php elseif(is_page('rankingstudent')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-sirojcwb.js"></script>

<?php elseif(is_page('rankingvisa')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-bynrsimr.js"></script>

<?php elseif(is_page('rankingmaster')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-xtxlyhfp.js"></script>

<?php elseif(is_page('rankingjcb')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-ycnzcoup.js"></script>

<?php elseif(is_page('rankinggold')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-yxcpidgw.js"></script>

<?php elseif(is_page('rankingmil')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-dcmjujnx.js"></script>

<?php elseif(is_page('rankingstatus')) : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-hicdetwj.js"></script>


<?php elseif(is_search()) : ?>

<script>
// search-sort
const sortBtn = document.querySelector('.sort__choice__wrap');
const openSortBtn = document.querySelector('.sort__open__list');

function sortMenuOpen() {
    openSortBtn.classList.toggle('open');
}

sortBtn.addEventListener('click', sortMenuOpen);
</script>


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