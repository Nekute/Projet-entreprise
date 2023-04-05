const source = document.getElementById("email_field");
const confirm = document.querySelector(".sign-in_btn");
const pseudo = source.value;

const inputHandler = function(e) {
    if (e.target.value != pseudo){
        confirm.style.background = "#3d75ea";
        confirm.style.color = "white";
        confirm.style.transition = "all 0.3s cubic-bezier(0.45, 0.05, 0.55, 0.95)";
        confirm.setAttribute('type', 'button')
    } else {
        confirm.setAttribute('type', 'none')
        confirm.style.background = "none";
        confirm.style.color = "rgba(53, 53, 53, 0.3)";
        confirm.style.transition = "all 0.3s cubic-bezier(0.45, 0.05, 0.55, 0.95)";
    }
}

source.addEventListener('input', inputHandler);
source.addEventListener('propertychange', inputHandler); // for IE8