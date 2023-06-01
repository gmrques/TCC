// Barra de pesquisa =>

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
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

// Animação com a label =>