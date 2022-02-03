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


window.onscroll = function () {
  if (window.scrollY >= 54) {
    document.querySelector(".navbar").classList.add("bg-black");
  } else {
    document.querySelector(".navbar").classList.remove("bg-black");
  }
};

function removePreload() {
  document.querySelector("#preload").remove();
  document.querySelector("body").classList.remove("hidden");
  document.querySelector(".navbar").classList.remove("hidden");
}
