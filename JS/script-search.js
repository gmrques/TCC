// Barra de pesquisa =>

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

let close = document.querySelector(".close");
close.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

// Filtrar os resultados de busca =>

var select_search = document.getElementById('menu');
select_search.addEventListener('change', function(){
    switch (menu) {
        case '1':

        break
        case '2':

        break
        case '3':

        break
        case '4':

        break

        default:
    };
});