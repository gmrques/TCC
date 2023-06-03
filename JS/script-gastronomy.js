// Barra de pesquisa =>

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
    if ($(".publish-options").hasClass("publish-options active")) {
       //impedir de clicar no plus
    }
}


let close = document.querySelector(".close");
close.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

// dropdown no Publish =>

const button = document.getElementById('btn');
const list = document.getElementById('publish-options');

button.addEventListener("click", () => {
    list.classList.toggle('active');
})

// Slider =>

// let list = document.querySelector('.slider-gastronomy .list-img');
// let items = document.querySelectorAll('.slider-gastronomy .list-img .item');
// let dots = document.querySelectorAll('.slider-gastronomy .ul-dots li');
// let active = 0;

// let refreshSlide = setInterval(()=> {next.click()}, 3000)
// function reloadSlider(){
//     let checkleft = items[active].offsetLeft;
//     list.style.left = -checkleft + 'em';

//     let lastActiveDot = document.querySelector('.slider-gastronomy .ul-dots li.active');
//     lastActiveDot.classList.remove('active');
//     dots[active].classList.add('active');
// }

// dots.forEach((li, key) => {
//     li.addEventListener('click', function(){
//         active = key;
//     })
// });