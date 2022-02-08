/* Controla el efecto de maquina de escribir */
const typed = new Typed(".typed", {
  stringsElement: "#cadenas-texto",
  typeSpeed: 75,
  startDelay: 300,
  backSpeed: 75,
  smartBackSpeed: true,
  shuffle: false,
  backDelay: 1500,
  loop: true,
  loopCount: false,
  showCursos: true,
  cursorChar: "|",
  contentType: "html",
});

const section_nosotros = document.querySelector("#nosotros");
const icon_up = document.querySelector(".contenedor-btn-up a");
const position_nosotros = section_nosotros.getBoundingClientRect();

if(window.scrollY == 0){
  icon_up.style = "display:none";
}

/* Cambiar fondo barra de navegación */
window.onscroll = function () {
  if (window.scrollY >= 54) {
    document.querySelector(".navbar").classList.add("bg-black");
  } else {
    document.querySelector(".navbar").classList.remove("bg-black");
  }

  if(window.scrollY < 100){
    icon_up.style = "display:none";
  } else {
    icon_up.style = "display:block";
  }
};

/* Quitar el preload */
function removePreload() {
  document.querySelector("#preload").remove();
  document.querySelector("body").classList.remove("hidden");
  document.querySelector(".navbar").classList.remove("hidden");
}

/* Controla envio de formulario de contacto */
document.querySelector("#formulario_contacto").addEventListener('submit',function(e){
  e.preventDefault();
  const data = new FormData(document.querySelector("#formulario_contacto"));
  const xhr = new XMLHttpRequest();

  xhr.open("post","mail_contacto.php");
  xhr.onload = function(){
    if(xhr.status == 200){
      const respuesta = JSON.parse(xhr.responseText);
      if(respuesta.status == 'ok'){
        Swal.fire(
          'Enviado',
          'Pronto nos pondremos en contacto',
          'success'
        );
        document.querySelector("#formulario_contacto").reset();
      } else {
        Swal.fire(
          'Ups',
          'Hubo un error al enviar el formulario',
          'error'
        )
      }
    }
  }
  xhr.send(data);

})

/* Controla el scroll */
const links = document.querySelectorAll(".nav-item .nav-link");
const btn_up = document.querySelector(".contenedor-btn-up a");

for (const link of links) {
  link.addEventListener("click", clickHandler);
}

btn_up.addEventListener("click",clickHandler);

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.querySelector(href).offsetTop;

  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
}