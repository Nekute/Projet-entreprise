var width;
var bushes = Array.from(
    document.getElementsByClassName('bush')
);
var temps = 0.1;
var left = 0;
async function checkHeader() {
    let scrollPosition = window.scrollY;
    console.log(scrollPosition);
/*    if (scrollPosition > 100){
        document.querySelector("header").classList.add("reduced")
    } else {
        document.querySelector("header").classList.remove("reduced");
    }*/
}
window.addEventListener('scroll', checkHeader);
function createBush() {
    const bush = document.createElement("div");
    bush.classList.add("bush");
    bush.style.animationName = "pop";
    bush.style.animationDuration = "0.5s";
    bush.style.animationDelay = temps + "s";
    bush.style.animationFillMode = "forwards";
    bush.style.left = left + "px";
    left += 70;
    document.querySelector(".test").appendChild(bush);
}
function removeBush() {
    var ground = document.querySelector(".test");
    ground.removeChild(ground.lastChild);
    left -= 70;
    temps = 0.1;
}


window.onresize = window.onload = function () {
    width = document.body.clientWidth;
    if (width > 600) {
        document.querySelector('.subMenu').classList.remove('sousmenu');
        document.getElementById("onClickMenu").removeEventListener("click", menu);
    } else {
        document.getElementById("onClickMenu").addEventListener("click", menu);
    }
    if (left + 80 > width) {
        while (left + 80 > width) {
            removeBush();
        }
    } else if (left + 80 < width) {
        while (left + 80 < width) {
            createBush();
            temps += 0.05;
        }
    }
}
function menu() {
    document.querySelector('.subMenu').classList.toggle('sousmenu');
}

function test() {
    temps = 0.1;
    bushes = Array.from(
        document.getElementsByClassName('bush')
    );
    bushes.forEach(bush => {
        temps += 0.05;
        bush.style.animationDelay = temps + "s";
        if (bush.style.animationName == "reversePop") {
            bush.style.transform = "scale(0)";
            bush.style.animationName = "pop";
        } else {
            bush.style.transform = "scale(1)";
            bush.style.animationName = "reversePop";
        }

    });
}
var photos = document.getElementsByClassName('skrt');
var timeCaroussel;
function buttonNextCaroussel() {
    photos = document.getElementsByClassName('skrt');
    for (let i =0 ; i<photos.length ; i++){
        clearTimeout(timeCaroussel);
        timeCaroussel = setTimeout(() => buttonNextCaroussel(), 10000);
        if (photos[i].checked){
            photos[i].checked = false
            if (i===4){
                photos[0].checked = true
                break;
            } else {
                photos[i+1].checked = true
                break;
            }
        }
    }
}
function buttonPreviousCaroussel() {
    photos = document.getElementsByClassName('skrt');
    for (let i =0 ; i<photos.length ; i++){
        clearTimeout(timeCaroussel);
        timeCaroussel = setTimeout(() => buttonNextCaroussel(), 10000);
        if (photos[i].checked){
            photos[i].checked = false
            if (i===0){
                photos[4].checked = true
                break;
            } else {
                photos[i-1].checked = true
                break;
            }
        }
    }
}
clearTimeout(timeCaroussel);
timeCaroussel = setTimeout(() => buttonNextCaroussel(), 10000);
