window.addEventListener("load", (e) => {
    
const btnSubmit = document.querySelector('#btn_submit');
const btnClose = document.querySelector(".btn-close");
const aContact = document.querySelector("#a-contact");
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