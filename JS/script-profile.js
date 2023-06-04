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

function moveslider() {
    bullets.forEach(bull => bull.classList.remove("active"));
    this.classList.add("active");
    
    const activeBullet = document.querySelector(".stats.active");
    const value = activeBullet.getAttribute('value');

     if (value === '1') {
         page1.style.display = "block";
         page2.style.display = "none";
         page3.style.display = "none";
         page4.style.display = "none";
         page5.style.display = "none";
         // Aqui ele puxa o "main-home-box4 e 5 juntos"
     } else {
         page1.style.display = "none"; }
     if (value === '2') {
         page1.style.display = "none";
         page2.style.display = "block";
         page3.style.display = "none";
         page4.style.display = "none";
         page5.style.display = "none";
         // Aqui ele puxa o "main-home-box4 e 5 juntos"
     } else {
         page2.style.display = "none"; }
     if (value === '3') {
         page1.style.display = "none";
         page2.style.display = "none";
         page3.style.display = "block";
         page4.style.display = "none";
         page5.style.display = "none";
         // Aqui ele puxa o "main-home-box4 e 5 juntos"
     } else {
         page3.style.display = "none"; }
     if (value === '4') {
         page1.style.display = "none";
         page2.style.display = "none";
         page3.style.display = "none";
         page4.style.display = "block";
         page5.style.display = "none";
         // Aqui ele puxa apenas o "main-home-box4 e 5 juntos"
     } else {
         page4.style.display = "none"; }
     if (value === '5') {
         page1.style.display = "none";
         page2.style.display = "none";
         page3.style.display = "none";
         page4.style.display = "none";
         page5.style.display = "block";
         // Aqui ele puxa apenas o "main-home-box4 e 5 juntos"
     } else {
         page5.style.display = "none"; }
}

bullets.forEach(bullet => {
    bullet.addEventListener("click", moveslider);
});
