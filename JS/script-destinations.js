// Barra de pesquisa =>

let search = document.querySelector(".search");
search.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

let close = document.querySelector(".close");
close.onclick = function() {
    document.querySelector(".container1").classList.toggle("active");
}

// Selecionar a região =>

var location_select = document.getElementsByClassName('.location');
location_select.addEventListener('change', function(){
    switch (location) {
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

// Redirecionar para outra página e mostrar os artigos relativos a região =>

var select_sul = document.getElementsByClassName('.card_sul');
select_sul.addEventListener('change', function(){
    switch (card_sul) {
        case '1':

        break
        case '2':

        break
        case '3':

        break

        default:
    };
});
 
var select_sudeste = document.getElementsByClassName('.card_sudeste');
select_sudeste.addEventListener('change', function(){
    switch (card_sudeste) {
        case '4':

        break
        case '5':

        break
        case '6':

        break
        case '7':

        break

        default:
    };
});
 
var select_centro_oeste = document.getElementsByClassName('.card_centro_oeste');
select_centro_oeste.addEventListener('change', function(){
    switch (card_centro_oeste) {
        case '8':

        break
        case '9':

        break
        case '10':

        break
        case '11':

        break

        default:
    };
});
 
var select_norte = document.getElementsByClassName('.card_norte');
select_norte.addEventListener('change', function(){
    switch (card_norte) {
        case '12':

        break
        case '13':

        break
        case '14':

        break
        case '15':

        break
        case '16':

        break
        case '17':

        break
        case '18':

        break

        default:
    };
});
 
var select_nordeste = document.getElementsByClassName('.card_nordeste');
select_nordeste.addEventListener('change', function(){
    switch (card_sul) {
        case '19':

        break
        case '20':

        break
        case '21':

        break
        case '22':

        break
        case '23':

        break
        case '24':

        break
        case '25':

        break
        case '26':

        break

        default:
    };
});
 