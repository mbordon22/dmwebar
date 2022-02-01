const typed = new Typed('.typed',{
    stringsElement: '#cadenas-texto',
    typeSpeed: 75,
    startDelay: 300,
    backSpeed: 75,
    smartBackSpeed: true,
    shuffle: false,
    backDelay: 1500,
    loop: true,
    loopCount: false,
    showCursos: true,
    cursorChar: '|',
    contentType: 'html'
})

document.addEventListener("DOMContentLoaded",function(){

    document.querySelector("#preload").remove();
    document.querySelector("body").classList.remove("hidden");

});