window.addEventListener("load", (e) => {
    
const btnSubmit = document.querySelector('#btn_submit');
const btnClose = document.querySelector(".btn-close");
const listaLi = document.querySelectorAll(".nav-item.px-4");
const fullService = listaLi[0];
const worldWide = listaLi[1];
const aContact = listaLi[2];
const nido = listaLi[3];
const modalContent = document.querySelector(".modal");


btnSubmit.addEventListener('click', (e) => {
    e.preventDefault();
});

btnClose.addEventListener('click', (e)=>{
  e.preventDefault();
console.log("click");
});

listaLi.forEach((element) => {
        element.addEventListener("click", () => {

            modalContent.style.display = "none";
			
            const body = document.body;
			body.style.overflow = "auto";
    });
});

});


