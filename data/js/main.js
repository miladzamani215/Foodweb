//search box
let searchbox= document.querySelector(".serch-box-contaner");
let searchicon = document.querySelector("#search-btn");

searchicon.addEventListener("click",()=>{
   searchbox.classList.toggle("active");
   shopingcart.classList.remove("active");
   logincart.classList.remove("active");
   navbar.classList.remove("active");
})
//shpong cart 
let shopingcart =document.querySelector(".shoping-cart-contaner");
let carticon =document.querySelector("#cart-btn");

carticon.addEventListener("click",()=>{
   shopingcart.classList.toggle("active");
   searchbox.classList.remove("active");
   logincart.classList.remove("active");
   navbar.classList.remove("active");
})

//login form
let logincart =document.querySelector(".login-form-contaner");
let loginicon =document.querySelector("#login-btn");

loginicon.addEventListener("click",()=>{
   logincart.classList.toggle("active");
   shopingcart.classList.remove("active");
   searchbox.classList.remove("active");
   navbar.classList.remove("active");
})
//mobile menu
let navbar =document.querySelector(".header .navbar");
let menuicon =document.querySelector("#menu-btn");

menuicon.addEventListener("click",()=>{
   navbar.classList.toggle("active");
   shopingcart.classList.remove("active");
   logincart.classList.remove("active");
   searchbox.classList.remove("active");
})
window.onscroll = ()=>{
   navbar.classList.remove("active");
}

//home slide moving js
let homecontaner = document.querySelector(".home-section-contaner")
homecontaner.addEventListener("mousemove",(e)=>{
   let x = (window.innerWidth - e.pageX * 2) / 90;
   let y = (window.innerHeight - e.pageY * 2) / 90;
   let home = document.querySelector(".home-section-contaner .image .homeimg2");
   
   home.style.transform = `translateX(${y}px) translateY(${x}px)`;
})
homecontaner.addEventListener("mouseleave",()=>{
   let home = document.querySelector(".home-section-contaner .image .homeimg2");
   home.style.transform = `translateX(0px) translateY(0px)`;
})