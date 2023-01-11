let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginform.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginform.classList.remove('active');

}

let loginform = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = () => {

    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginform.classList.toggle('active');
}

let navbar = document.querySelector('.nav-bar');
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}


var swiper = new Swiper(".product-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        0: {
            slidesPerView: 1,

        },
        768: {
            slidesPerView: 2,

        },
        1020: {
            slidesPerView: 3,

        },

    },
});