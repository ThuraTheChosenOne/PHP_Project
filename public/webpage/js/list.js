// console.log("hi");
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

//student search
const search = document.querySelector('.input-group input'),
tablerows = document.querySelectorAll('tbody tr');

search.addEventListener('input',function(){
    tablerows.forEach((row,i)=>{
        let tabledata = row.textContent.toLowerCase(),
        searchdata = search.value.toLowerCase();//input data which u enter in input

        row.classList.toggle('hide',tabledata.indexOf(searchdata) < 0);//show the particular word is in table or not and if thers is not the word u search it will hide
        row.style.setProperty('--delay',i / 25 + 's'); //for short transition delay
    })
    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row,i)=>{
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
});



lightbox.option({
    'resizeDuration': 50,
    'wrapAround': true
  })