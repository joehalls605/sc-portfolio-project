console.log("script loaded!");

const experienceImageElement = document.getElementById("experience-image");

experienceImageElement.addEventListener("click", updateExperienceImage);

function updateExperienceImage(){
console.log("image clicked!");
experienceImageElement.src = "http://josephhalls.local/wp-content/themes/josephhalls/assets/images/nature.jpg";
}




// JOE SORT IMAGE TO TOGGLE BETWEEN