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

// Filtrar os resultados de busca =>

var select_search = document.getElementById('menu');
select_search.addEventListener('change', function() {

    const ActiveSpan = document.querySelector(".bullets-home span.active");
    const value = ActiveSpan.getAttribute('value');

    switch (value) {
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