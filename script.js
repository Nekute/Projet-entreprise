var width;
var bushes = Array.from(
    document.getElementsByClassName('bush')
);
var temps = 0.1;
var left = 0;
function createBush(){
    const bush = document.createElement("div");
    bush.classList.add("bush");
    bush.style.animationName = "pop";
    bush.style.animationDuration = "0.5s";
    bush.style.animationDelay = temps+"s";
    bush.style.animationFillMode = "forwards";
    bush.style.left = left +"px";
    left += 70;
    temps += 0.05;
    document.querySelector(".test").appendChild(bush);
}



window.onresize = window.onload = function () {
    width = document.body.clientWidth;
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

function test() {
    bushes = Array.from(
        document.getElementsByClassName('bush')
    );
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
function createElementInGround(){

}

function createSimpleTree(){

}