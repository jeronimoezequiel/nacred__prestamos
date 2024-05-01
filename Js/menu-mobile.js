// let btnOpenMenu = document.querySelector("#open-menu");
// let btnCloseMenu = document.querySelector("#close-menu");
// let menu = document.querySelector("#mobile-menu");  

// btnOpenMenu.addEventListener("click", () => {
//     menu.classList.remove("disabled");
// });

// btnCloseMenu.addEventListener("click", () => {
//     menu.classList.add("disabled");
// });

const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownMenu = document.querySelector('.dropdown_menu');

toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open');
    const isOpen = dropDownMenu.classList.contains('open');

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}