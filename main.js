let mobileNav = document.querySelector(".main-mobile-nav");
let hamburgerMenu = document.getElementById("open");
let closeMenuIcon = document.getElementById("close");

let open = false;
let close = true;

function toggleMenu() {
    open = !open;
    close = !close;

    if (open) {
        mobileNav.classList.remove('hidden');
        hamburgerMenu.classList.add('hidden');
        closeMenuIcon.classList.remove('hidden');
    } else {

        mobileNav.classList.add('hidden');
        hamburgerMenu.classList.remove('hidden');
        closeMenuIcon.classList.add('hidden');
    }
    
};



