//UI

//toggle
const menu = document.querySelector(".menu");
const openMenuBtn = document.querySelector(".open-menu-btn");
const closeMenuBtn = document.querySelector(".close-menu-btn");

[openMenuBtn, closeMenuBtn].forEach((btn) => {
    btn.addEventListener("click",() => {
        menu.classList.toggle("open");
        menu.style.transition = "transform 0.3s ease";
    });
});

menu.addEventListener("transitioned",function(){
    this.removeAttribute("style");
});

menu.querySelectorAll(".dropdown > i").forEach((arrow) =>{
    arrow.addEventListener("click",function(){
        this.closest(".dropdown").classList.toggle("active");
    });
});

// console.log("hi");
// Copy Right Date
const getyear = document.getElementById('getyear');
const getfullyear = new Date().getFullYear();
getyear.textContent = getfullyear;


