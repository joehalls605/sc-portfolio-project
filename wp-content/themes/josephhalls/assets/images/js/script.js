console.log("script loaded!");

const dynamicImage = document.getElementById("dynamicImage");
const lineEffects = document.querySelectorAll(".line-effect");

// function to trigger line effects

function triggerLineEffects(){
    lineEffects.forEach( lineEffect => {
        lineEffect.style.opacity = 1;
        lineEffect.style.transform = "scaleX(1)";
    })
}

dynamicImage.addEventListener("load", triggerLineEffects);