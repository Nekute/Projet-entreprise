var width;
const bushes = Array.from(
    document.getElementsByClassName('bush')
);
window.onresize = window.onload = function () {
    width = this.innerWidth;
    if (width > 600) {
        document.querySelector('.subMenu').classList.remove('sousmenu');
        document.getElementById("onClickMenu").removeEventListener("click", menu);
    } else {
        document.getElementById("onClickMenu").addEventListener("click", menu);
    }
}

function menu() {
    document.querySelector('.subMenu').classList.toggle('sousmenu');
}


var temps = 0.1;
var left = 0;
for (var i = 0; i < bushes.length; i++) {
    bushes[i].style.animationName = "pop";
    bushes[i].style.animationDuration = "0.5s";
    bushes[i].style.animationDelay = temps+"s";
    bushes[i].style.animationFillMode = "forwards";
    bushes[i].style.left = left +"px"
    left += 70;
    temps += 0.05;
    console.log(temps);
}

function test() {
    bushes.forEach(bush => {
        if (bush.style.animationName == "reversePop") {
            bush.style.transform = "scale(0)";
            bush.style.animationName = "pop";
        } else {
            bush.style.transform = "scale(1)";
            bush.style.animationName = "reversePop";
        }

    });
}