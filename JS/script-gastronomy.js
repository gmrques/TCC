// Barra de pesquisa =>

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

let close = document.querySelector(".close");
close.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

// Selecionar a culinária da região

var gastronomy_select = document.getElementsByClassName('.top_gastronomy_box');
gastronomy_select.addEventListener('change', function(){
    switch (top_gastronomy_box) {
        case '1':

        break
        case '2':

        break
        case '3':

        break
        case '4':

        break
        case '5':

        break

        default:

    };
});