let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>
{
    searchForm.classList.toggle('active');
   
} 

 let shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#cart-btn').onclick = () =>
{
   
     shoppingCart.classList.toggle('active');
     
}

let loginform = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = () =>
{
    
    
    loginform.classList.toggle('active');
     
}

let navbar = document.querySelector('.nav-bar');
document.querySelector('#menu-btn').onclick = () =>
{   
    navbar.classList.toggle('active');
}