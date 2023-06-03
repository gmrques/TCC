// Barra de pesquisa =>

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
    if ($(".publish-options").hasClass("publish-options active")) {
       //impedir de clicar no plus
    }
}


let close = document.querySelector(".close");
close.addEventListener("click", () => {
    document.querySelector(".container1").classList.toggle("active");
})

// dropdown no Publish =>

const button = document.getElementById('btn');
const list = document.getElementById('publish-options');

button.addEventListener("click", () => {
    list.classList.toggle('active');
})

// Ocultar e mostrar formulário para editar informações =>

const userBtn = document.getElementById('update-user-btn');
const userForm = document.getElementById('update-user');

userBtn.addEventListener("click", () => {
    userForm.classList.toggle('active');
})
 
const paletteBtn = document.getElementById('udpate-palette-btn');
const paletteForm = document.getElementById('update-palette');

paletteBtn.addEventListener("click", () => {
    paletteForm.classList.toggle('active');
})
 
// JS no form com label

const inputs = document.querySelectorAll("update-wrap");
inputs.addEventListener("click", () => {
    inp.classList.add("active");
})