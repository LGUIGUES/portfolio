/* Fonction Scroll vers haut de page */
function scrollToTop() {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
}

/** IMPORTANT --> DOMCONTENTLOADER **/
document.addEventListener('DOMContentLoaded', function() {
    
    /* on cherche les boutons à écouter que l'on met dans une variable */
    let btnScrollTop = document.getElementById('btnScrollTop');

    /* on met en écoute au click les boutons et on appel la fontion correspondante */
    window.addEventListener('scroll', function(e) {

        if(window.scrollY > 400) {           
                   
            btnScrollTop.classList.remove('hidden-btn-scroll');                    
        }
        else {
            btnScrollTop.classList.add('hidden-btn-scroll');
        }
        
    });
    
    btnScrollTop.addEventListener('click',scrollToTop); 
});