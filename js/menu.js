document.querySelector(".menu-phone")
document.querySelector(".button-phone")
document.querySelector(".overlay")

const menu = document.querySelector(".menu-phone");
const burger = document.querySelector(".button-phone");
const overlay = document.querySelector(".overlay")

burger.addEventListener("click", () => {
menu.classList.toggle("active");
overlay.classList.toggle("active");
});

overlay.addEventListener("click",() =>{
overlay.classList.remove("active");
menu.classList.remove("active");
});


