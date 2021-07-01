// mobile nav toggle
let toggle = document.querySelector('.burger');
let menu = document.querySelector('.topnav');

function toggleMenu() {
    if (menu.classList.contains("active")) {
        menu.classList.remove("active");
        toggle.innerHTML = "<i class='fas fa-bars'></i>";
    } else {
        menu.classList.add("active");
        toggle.innerHTML = "<i class='fas fa-times'></i>";
        
    }
}
toggle.addEventListener('click', toggleMenu, false);