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

let sliderList = document.querySelector('.slider-gastronomy .list-img');
let items = document.querySelectorAll('.slider-gastronomy .list-img .item');
let dots = document.querySelectorAll('.slider-gastronomy .ul-dots li');
let active = 0;

function reloadSlider() {
  items.forEach((item, index) => {
    if (index === active) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });

  dots.forEach((dot, index) => {
    dot.classList.remove('active');
    if (index === active) {
      dot.classList.add('active');
    }
  });
}

dots.forEach((dot, index) => {
  dot.addEventListener('click', function () {
    active = index;
    reloadSlider();
  });
});

reloadSlider();






