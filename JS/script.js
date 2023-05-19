// CADASTRO E LOGIN->

const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });
    inp.addEventListener("blur", () => {
        if(inp.value != "") return;
        inp.classList.remove("active");
    });
});

toggle_btn.forEach(btn => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sing-up-mode");
    })
})

function moveslider() {
    let index = this.dataset.value;

    let currentimg = document.querySelector(`.img-${index}`);
    images.forEach((img) => img.classList.remove("show"));
    currentimg.classList.add("show");

    const textslider = document.querySelector(".text-group");
    textslider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

    bullets.forEach((bull) => bull.classList.remove("active"));
    this.classList.add("active");
}

bullets.forEach(bullet => {
    bullet.addEventListener("click", moveslider);
});

// //////////////////////////////////////////////////////////////////////

// SEARCH ANIMATION->

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

let close = document.querySelector(".close");
close.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

// //////////////////////////////////////////////////////////////////////

// CARROSSEL ->

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

let close = document.querySelector(".close");
close.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

const carousel = document.querySelector(".carousel");
firstImg = carousel.querySelectorAll("img")[0];
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 10;
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60);
    });
});

const autoslide = () => {
    positionDiff = Math.abs(positionDiff);
    let firstImgWidth = firstImg.clientWidth + 10;
    let valDiff = firstImgWidth - positionDiff
    
    if(carousel.scrollLeft > prevScrollLeft) {
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDiff : -positionDiff
    }
    console.log("o usuário está arrastando para esquerda");
}

const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragStart) return;
    e.preventDefault();
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
    autoslide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

carousel.addEventListener("mouseup", dragStop);
carousel.addEventListener("mouseleave", dragStop);
carousel.addEventListener("touchend", dragStop);

// //////////////////////////////////////////////////////////////////////

// DROPDOWN MENU->

const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown=> {
    const select = dropdown.querySelector('.select');
    const arrow = dropdown.querySelector('.dropdown i');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelector('.menu li');
    const selected = dropdown.querySelector('.selected');


    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        arrow.classList.toggle('dropdown i-rotate');
        menu.classList.toggle('menu-open');
    })

    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked');
            arrow.classList.remove('dropdown i-rotate');
            menu.classList.remove('menu-open');
            options.forEach(option => {
                option.classList.remove('active');
            });
            option.classList.add('active');
        });
    });
});

// //////////////////////////////////////////////////////////////////////