const header = document.querySelector('header');
const nav = document.querySelector('nav.scroll');
const navSp = document.querySelector('nav.sp');
const container = document.querySelector('#container');
const openBtn = document.querySelector('.toggle__box');
const toggleImg = document.querySelector('.toggle__box img');
const navBg = document.querySelector('.nav__bg');

function autoHeight() {
    if (window.innerWidth <= 1024) {
        window.addEventListener('load', function() {
            console.log(header.offsetHeight);
            container.style.marginTop = header.offsetHeight + "px";
        });
    };
}

function toggleClass() {
    nav.classList.remove('pc');
    nav.classList.toggle('active');
    if (nav.classList.contains('active')) {
        toggleImg.src = "http://haircare-box.com/card/wp-content/themes/card/images/nav/close__icons.png";
        navBg.classList.add('open');
        navBg.addEventListener('click', function() {
            nav.classList.remove('active');
            navBg.classList.remove('open');
        });
    } else {
        toggleImg.src = "http://haircare-box.com/card/wp-content/themes/card/images/nav/toggle__icons.png";
        navBg.classList.remove('open');
    }
}

openBtn.addEventListener('click', toggleClass);



// autoHeight();