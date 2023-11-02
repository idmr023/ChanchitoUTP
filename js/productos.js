function rotateImage(idimagen) {
    var img = document.getElementById(idimagen);
    img.classList.toggle("rotate");
  }
/*-------------------- PESTAÑAS --------------------*/
const tabs = document.querySelectorAll(".tabs li");
const contents = document.querySelectorAll(".prod-tab-content");

tabs.forEach((tab, index) => {
    tab.addEventListener("click",()=>{
        //Remover active del anterior tab
        tabs.forEach((tab) => tab.classList.remove("active"))
        //Añadiendo active al tab cliqueado
        tab.classList.add("active");

        //Para ocultar contenido del anterior tab
        contents.forEach(c => c.classList.remove("active"));

        contents[index].classList.add("active");
    });
});
//animando la animacion al iniciar la pagina
tabs[0].click();
/*------------------ FIN PESTAÑAS ------------------*/