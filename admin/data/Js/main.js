let list = document.querySelectorAll('.navigation li');

function activeLink(){
    list.forEach((item) => {
        item.classList.remove("hoverd");
        this.classList.add("hoverd");
    });
}
list.forEach((item) => {
    item.addEventListener("mouseover",activeLink);
})


//togle menu js
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let toogle = document.querySelector(".toogle");

toogle.addEventListener("click",()=>{
    navigation.classList.toggle("active");
    main.classList.toggle("active");
})