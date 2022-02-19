/* Functions */
function showMenu() {
    console.log('Bouton fonctionne');
    let show;
    show = document.querySelector('.burger-menu');
    show.classList.toggle('burger-menu-open');    
}

function closeMenu() {

    let close;
    close = document.querySelector('.burger-menu');
    close.classList.toggle('burger-menu-open');    
}

/* Main Code */
document.addEventListener('DOMContentLoaded', function() {    
    
    let btnMenu = document.getElementById('menuClosed');

    let btnCloseMenu = document.getElementById('closeMenu');
    
    btnMenu.addEventListener('click',showMenu);

    btnCloseMenu.addEventListener('click', closeMenu);
    
});