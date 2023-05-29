// Slider e formulário que troca indo de um lado para o outro =>

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