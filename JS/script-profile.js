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
const page1 = document.querySelectorAll(".card-article1");

function moveslider() {

    bullets.forEach((bull) => bull.classList.remove("active"));
    this.classList.add("active").getAtribute('value');

    switch (bullets.value) {
        case '1':
            // por algum motivo ou ele não puxa o valor ou a operação não ta correta.
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

    }
}

bullets.forEach(bullet => {
    bullet.addEventListener("click", moveslider);
});