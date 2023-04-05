const changerPseudo = document.getElementById("changerPseudo");
const changerEmail = document.getElementById("changerEmail");
const changerMdp = document.getElementsByClassName("changerMdp")
let confirm;
const pseudo = changerPseudo.value;

const inputHandler = function (e) {
    console.log(this.value);
    confirm = this.parentNode.parentNode.querySelector(".sign-in_btn");
    if ((this.id == changerPseudo.id && pseudo != this.value) ||
        (this.id == changerEmail.id)||
        !!(changerMdp[0].value && changerMdp[1].value && changerMdp[2].value) && changerMdp[1].value == changerMdp[2].value) {
        confirm.style.background = "#3d75ea";
        confirm.style.color = "white";
        confirm.style.transition = "all 0.3s cubic-bezier(0.45, 0.05, 0.55, 0.95)";
        confirm.style.cursor = "pointer";
        confirm.setAttribute('type', 'sumbit')
    } else {
        confirm.setAttribute('type', 'button')
        confirm.style.background = "none";
        confirm.style.cursor = "not-allowed";
        confirm.style.color = "rgba(53, 53, 53, 0.3)";
        confirm.style.transition = "all 0.3s cubic-bezier(0.45, 0.05, 0.55, 0.95)";
    }
}

changerPseudo.addEventListener('input', inputHandler);
changerPseudo.addEventListener('propertychange', inputHandler); // for IE8

changerEmail.addEventListener('input', inputHandler);
changerEmail.addEventListener('propertychange', inputHandler); // for IE8

for (let $i = 0; $i < changerMdp.length; $i++) {
    changerMdp[$i].addEventListener('input', inputHandler);
    changerMdp[$i].addEventListener('propertychange', inputHandler);
}