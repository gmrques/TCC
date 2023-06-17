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
 
// JS no form com label

const label_settings = document.querySelectorAll(".update-field");
label_settings.forEach((LS) => {
    LS.addEventListener("focus", () => {
        LS.classList.add("active");
    });
    LS.addEventListener("blur", () => {
        if(LS.value != "") return;
        LS.classList.remove("active");
    });
});

const text_area = document.querySelectorAll(".update-textarea");
text_area.forEach((TA) => {
    TA.addEventListener("focus", () => {
        TA.classList.add("active");
    });
    TA.addEventListener("blur", () => {
        if(TA.value != "") return;
        TA.classList.remove("active");
    });
});