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
const page1 = document.querySelector(".search-article");
const page2 = document.querySelector(".search-roadmap");
const page3 = document.querySelector(".search-gastronomy");

page1.style.display = "none";
page2.style.display = "none";
page3.style.display = "none";

let previousOption = null; // Armazena a opção anteriormente selecionada

select_search.addEventListener('change', function() {
  const selectedOption = select_search.options[select_search.selectedIndex];
  const value = selectedOption.getAttribute('value');

  // Remover classe "active" de todas as opções
  const options = select_search.querySelectorAll('option');
  options.forEach(option => option.classList.remove('active'));

  // Adicionar classe "active" à opção selecionada
  selectedOption.classList.add('active');

  // Ocultar a página da opção anteriormente selecionada
  if (previousOption !== null) {
    const previousValue = previousOption.getAttribute('value');
    if (previousValue === "1") {
      page1.style.display = "none";
    } else if (previousValue === "2") {
      page2.style.display = "none";
    } else if (previousValue === "3") {
      page3.style.display = "none";
    }
  }

  // Exibir a página correspondente com base no valor selecionado
  if (value === "1") {
    page1.style.display = "block";
  } else if (value === "2") {
    page2.style.display = "block";
  } else if (value === "3") {
    page3.style.display = "block";
  }

  previousOption = selectedOption; // Atualizar a opção anteriormente selecionada
});


