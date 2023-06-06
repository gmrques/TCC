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
 const page1 = document.querySelector(".main-home-box1");
 const page2 = document.querySelector(".main-home-box2");
 const page3 = document.querySelector(".main-home-box3");
 const page4 = document.querySelector(".main-home-box4");
 const page5 = document.querySelector(".main-home-box5");

 page2.style.display = "none";
 page3.style.display = "none";
 page4.style.display = "none";
 page5.style.display = "none";

function moveslider() {
    bullets.forEach(bull => bull.classList.remove("active"));
    this.classList.add("active");
    
    const activeBullet = document.querySelector(".stats.active");
    const value = activeBullet.getAttribute('value');

    page1.style.display = "none";
    page2.style.display = "none";
    page3.style.display = "none";
    page4.style.display = "none";
    page5.style.display = "none";
  
    if (value === "1") {
      page1.style.display = "flex";
    } else if (value === "2") {
      page2.style.display = "flex";
    } else if (value === "3") {
      page3.style.display = "flex";
    } else if (value === "4") {
      page4.style.display = "flex";
    } else if (value === "5") {
      page5.style.display = "flex";
    }
  }
  
  bullets[0].classList.add("active");
  page1.style.display = "flex";

bullets.forEach(bullet => {
    bullet.addEventListener("click", moveslider);
});

// Popup

const body = document.querySelector("body");
const popup1 = document.querySelector(".popup-card-article1");
const popup2 = document.querySelector(".popup-card-article2");
const popup3 = document.querySelector(".popup-card-article3");
const popup4 = document.querySelector(".popup-card-article4");
const popup5 = document.querySelector(".popup-card-article5");
const popup6 = document.querySelector(".popup-card-article6");
const popup7 = document.querySelector(".popup-card-article7");
const popup8 = document.querySelector(".popup-card-article8");
const popup9 = document.querySelector(".popup-card-article9");
const popup10 = document.querySelector(".popup-card-article10");
const popup11 = document.querySelector(".popup-card-article11");
const popup12 = document.querySelector(".popup-card-article12");
const popup13 = document.querySelector(".popup-card-article13");
const popup14 = document.querySelector(".popup-card-article14");
const popup15 = document.querySelector(".popup-card-article15");

document.querySelectorAll('.read_more').forEach(function(button) {
  button.addEventListener("click", function (event) {
    const value = event.target.getAttribute('value');
    
    switch (value) {
      case '1':
        popup1.classList.add("active");
        body.classList.add("active-popup");
        break;
      case '2':
        popup2.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '3':
        popup3.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '4':
        popup4.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '5':
        popup5.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '6':
        popup6.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '7':
        popup7.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '8':
        popup8.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '9':
        popup9.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '10':
        popup10.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '11':
        popup11.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '12':
        popup12.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '13':
        popup13.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '14':
        popup14.classList.add("active");
        body.classList.add("active-popup")
        break;
      case '15':
        popup15.classList.add("active");
        body.classList.add("active-popup")
        break;

      default:
        
        break;
    }
  });
});

document.querySelectorAll('.remove').forEach(function(i) {
  i.addEventListener("click", function (event) {
    const value = event.target.getAttribute('value');

    switch (value) {
      case '1':
        popup1.classList.remove("active");
        body.classList.remove("active-popup");
        break;
      case '2':
        popup2.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '3':
        popup3.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '4':
        popup4.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '5':
        popup5.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '6':
        popup6.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '7':
        popup7.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '8':
        popup8.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '9':
        popup9.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '10':
        popup10.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '11':
        popup11.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '12':
        popup12.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '13':
        popup13.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '14':
        popup14.classList.remove("active");
        body.classList.remove("active-popup")
        break;
      case '15':
        popup15.classList.remove("active");
        body.classList.remove("active-popup")
        break;
        
      default:
        
        break;
    }
  });
});





