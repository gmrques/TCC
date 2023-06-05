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

// Slider nos artigos do perfil

const bullets = document.querySelectorAll(".stats");
 const page1 = document.querySelector(".main-home-box1");
 const page2 = document.querySelector(".main-home-box2");
 const page3 = document.querySelector(".main-home-box3");
 const page4 = document.querySelector(".main-home-box4");
 const page5 = document.querySelector(".main-home-box5");

 page2.style.display = "none";
 page3.style.display = "none";
 page4.style.display = "none";
 page5.style.display = "none";

function moveslider() {
    bullets.forEach(bull => bull.classList.remove("active"));
    this.classList.add("active");
    
    const activeBullet = document.querySelector(".stats.active");
    const value = activeBullet.getAttribute('value');

    page1.style.display = "none";
    page2.style.display = "none";
    page3.style.display = "none";
    page4.style.display = "none";
    page5.style.display = "none";
  
    if (value === "1") {
      page1.style.display = "flex";
    } else if (value === "2") {
      page2.style.display = "flex";
    } else if (value === "3") {
      page3.style.display = "flex";
    } else if (value === "4") {
      page4.style.display = "flex";
    } else if (value === "5") {
      page5.style.display = "flex";
    }
  }
  
  bullets[0].classList.add("active");
  page1.style.display = "flex";

bullets.forEach(bullet => {
    bullet.addEventListener("click", moveslider);
});

// Popup
const popup = document.querySelectorAll(".popup-card-article");
const body = document.querySelector("body");

document.querySelectorAll('.read_more').addEventListener("click", function () {
  popup.classList.add("active");
  body.classList.add("active-popup");
});

document.querySelectorAll('.remove').addEventListener("click", function () {
  popup.classList.remove("active");
  body.classList.remove("active-popup");
});

