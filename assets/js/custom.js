


// Get buttons
const blueButton = document.getElementById("blue");
const greenButton = document.getElementById("green");

// Function to change theme
function changeTheme(newTheme) {
  // Remove any existing theme class
  document.body.className = ""; // Clears all classes on <body>
  
  // Add the new theme class
  document.body.classList.add(newTheme);
}

// Event listeners
blueButton.addEventListener("click", () => changeTheme("blue"));
greenButton.addEventListener("click", () => changeTheme("green"));
