window.addEventListener("load", (e) => {
    
const btnSubmit = document.querySelector('#btn_submit');
const btnClose = document.querySelector(".btn-close");
const listaLi = document.querySelectorAll(".nav-item.px-4");
const aContact = listaLi[2];
const modalContent = document.querySelector(".modal");

btnSubmit.addEventListener('click', (e) => {
    e.preventDefault();
});

btnClose.addEventListener('click', (e)=>{
  e.preventDefault();
console.log("click");
});

aContact.addEventListener("click", ()=>{
  modalContent.style.display = "none";
})

  });


