/* Functions */
function displayLegalNotice() {    
    
    let bodyNoScroll;
    let displayModal;

    bodyNoScroll = document.querySelector('.scroll');
    bodyNoScroll.classList.toggle('no-scroll');

    displayModal = document.querySelector('.legal-notice-off');    
    displayModal.classList.toggle('legal-notice-on');
   
}

/* Main Code */
document.addEventListener('DOMContentLoaded', function() {

    let btnOpenLegalNotice = document.getElementById('openModal');

    let btnCloseLegalNotice = document.getElementById('closeModal');    

    btnOpenLegalNotice.addEventListener('click',displayLegalNotice);

    btnCloseLegalNotice.addEventListener('click',displayLegalNotice);      
    
});