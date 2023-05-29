// Barra de pesquisa =>

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

let close = document.querySelector(".close");
close.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

// Ocultar e mostrar formulário para editar informações =>

function showU() {
    let user = document.querySelector('.update-user-form');
    user.classList.toggle('active');
}
function showP() {
    let palette = document.querySelector('.palette-form');
    palette.classList.toggle('active');
}
 