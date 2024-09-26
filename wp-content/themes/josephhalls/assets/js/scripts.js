const experienceImageElement = document.getElementById("experience-image");
// window.addEventListener("scroll", updateProgressBar);

let progressBarStarted = false;

window.addEventListener("scroll", function() {
    const certifiedExperienceElement = document.getElementById("certifications");
    const rect = certifiedExperienceElement.getBoundingClientRect();

    if (rect.top < 0 && !progressBarStarted) {
        progressBarStarted = true;
        updateProgressBar();
    }
});

// Behind the code - image carousel array
const images = [
  "http://josephhalls.local/wp-content/themes/josephhalls/assets/images/image-joe.png",
    "http://josephhalls.local/wp-content/themes/josephhalls/assets/images/nephew.jpeg",
    "http://josephhalls.local/wp-content/themes/josephhalls/assets/images/fizz.jpeg",
];

experienceImageElement.src = images[0];

// Setting the image carousel array to 0.
let currentImageIndex = 0;

// Setting the click event listener for the image carousel
experienceImageElement.addEventListener("click", updateExperienceImage);

// Function that updates the image carousel upon click

function updateExperienceImage() {
    // Update the image index
    currentImageIndex = (currentImageIndex + 1) % images.length; 

    if (currentImageIndex === images.length) {
      currentImageIndex = 0;
    }
  
    // Set the image source based on the updated index
    experienceImageElement.src = images[currentImageIndex];
    console.log(currentImageIndex);
  }

  const progressBarFill = document.querySelector(".progress-bar-fill");
  let progress = 0;
  let currentQuoteIndex = 0;
  
  function updateProgressBar() {
    // Update progress bar
    progress += 1;
    progressBarFill.style.width = `${progress}%`;
  
    if (progress < 100) {
      setTimeout(updateProgressBar, 150); // Update progress bar every 100ms
      
    }
    if(progress >= 100){
      const technologyQuotesElement = document.getElementById("technology-quotes");
      technologyQuotesElement.textContent = "Rebooting complete 🚀";
      updateExperienceImage();
    }

    

  
    // Update quote every 3 seconds
    if (progress % 30 === 0) { 
      // progresss % 30 calculates the remainder of the progress divided by 30 without leaving a remainder.
      const learningQuotes = ["Learning HTML DOM manipulation 💻", "Learning CSS libraries 📚", "Learning React state system 👨🏼‍💻"];

      currentQuoteIndex = (currentQuoteIndex + 1) % learningQuotes.length; 
      // Incrementing currentQuoteIndex by one, then dividing learningQuotes by length, this resets the array after reaching the array length
  
      const randomQuote = learningQuotes[currentQuoteIndex];
      // assigning the current quote to be shown with the current quote from the array.
  
      const technologyQuotesElement = document.getElementById("technology-quotes");
      technologyQuotesElement.textContent = randomQuote;
    }
  }
