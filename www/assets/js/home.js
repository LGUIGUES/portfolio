/* Functions */
function displayBoxMap() {
    
    let display;
    display = document.querySelector('.box-map');
    display.classList.toggle('display-map');
}

function onSubmit(token) {

    document.getElementById("demo-form").submit();

}

/* Main Code */
document.addEventListener('DOMContentLoaded', function() {    
    
    let btnMap = document.getElementById('displayMap');  

    btnMap.addEventListener('click',displayBoxMap);    
    
});