const experienceImageElement = document.getElementById("experience-image");

const images = [
    "http://josephhalls.local/wp-content/themes/josephhalls/assets/images/nature.jpg",
    "http://josephhalls.local/wp-content/themes/josephhalls/assets/images/image-joe.png"

];

let currentImageIndex = 0;

experienceImageElement.addEventListener("click", updateExperienceImage);

function updateExperienceImage() {
    // Update the image index
    currentImageIndex = (currentImageIndex + 1) % images.length; 
  
    // Set the image source based on the updated index
    experienceImageElement.src = images[currentImageIndex];
  
    console.log(currentImageIndex);
  }