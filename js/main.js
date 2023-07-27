// jquery function for the home section background image effect

$(document).ready(function () {
  var mouseX, mouseY;
  var ww = $(window).width();
  var wh = $(window).height();
  var traX, traY;
  $(document).mousemove(function (e) {
    mouseX = e.pageX;
    mouseY = e.pageY;
    traX = ((4 * mouseX) / 570) + 40;
    traY = ((4 * mouseY) / 570) + 50;
    // console.log(traX);
    $(".title").css({ "background-position": traX + "%" + traY + "%" });
  });
});







// make the header menu appear and disappear when the menu button is clicked

// Get the elements by their IDs
const hidesNav = document.querySelectorAll('.hides-nav');
const nav = document.getElementById('nav');

// Add event listener to the menu-wrapper element
hidesNav.forEach((el) => {
  el.addEventListener('click', function () {
    // Check if the nav is currently visible
    const isNavVisible = parseInt(getComputedStyle(nav).left) >= 0;

    // Toggle the visibility of the nav with animation
    if (el.id === 'menu-wrapper') {
      // only the menu button can both open and close the nav
      if (isNavVisible) {
        hideNav();
      } else {
        showNav();
      }
    } else {

      // all others can only close the nav
      if (isNavVisible) {
        hideNav();
      }
    }
  });


})

// Function to animate showing the nav
function showNav() {
  nav.style.left = '0'; // Move the nav back to its original position
}

// Function to animate hiding the nav
function hideNav() {
  nav.style.left = '-200px'; // Move the nav off to the left
}


// listen to the screen width to reposition the nav when the screen width is large or wider

function handleResponsive() {
  const largeScreenWidth = 992; // Define the large screen width (replace with your desired value)
  const nav = document.getElementById('nav');

  // Get the current screen width
  const screenWidth = window.innerWidth;

  // Check if the screen width is greater than or equal to the large screen width
  if (screenWidth >= largeScreenWidth) {
    nav.style.left = '0'; // Apply the corresponding style when the condition is met
  } else {
    nav.style.left = ''; // Reset the style when the condition is not met
  }
}

// Call the function initially to set the style based on the initial screen width
handleResponsive();

// Listen for the 'resize' event on the 'window' object and call the function accordingly
window.addEventListener('resize', handleResponsive);










// toggle the is-active class on the header element when the screen width is large or wider

function toggleIsActiveClass() {
  const header = document.getElementById('header');
  const screenWidth = window.innerWidth;

  const largeScreenWidth = 992;

  // only add the is-active class if the screen width is greater than or equal to 992px and the is-active class is not already present
  if (screenWidth >= largeScreenWidth && !header.classList.contains('is-active')) {
    header.classList.add('is-active');
  }
}

// Initially, call the function to set the class based on the current screen width
toggleIsActiveClass();

// Listen for the 'resize' event on the 'window' object and update the class accordingly
window.addEventListener('resize', toggleIsActiveClass);










// Perform input validation on all contact form inputs and ensure that the email address is in a valid formatusing regex

// Get the form and submit button elements
const contactSection = document.getElementById('contact');
const contactForm = document.getElementById('contact-form');
const contactFormInputs = document.getElementById('contact-form-inputs');
const submitButton = document.getElementById('contact-form-submit');

// Regular expression for email validation
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Function to display validation error messages below the input fields
function showValidationError(message) {
  const errorDiv = document.createElement('div');
  errorDiv.className = 'validation-error';
  errorDiv.textContent = message;
  contactFormInputs.appendChild(errorDiv);
}

// Function to remove validation error messages
function removeValidationError(inputField) {
  const errorDiv = inputField.parentNode.querySelector('.validation-error');
  if (errorDiv) {
    errorDiv.remove();
  }
}

// Add event listener to the form's submit button
submitButton.addEventListener('click', function (event) {
  // Prevent the form from submitting by default
  event.preventDefault();

  // Get the values of the form fields
  const firstName = document.getElementById('first-name').value;
  const lastName = document.getElementById('last-name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('contact-form-inputs-message').value;

  // Remove any existing validation error messages
  const inputFields = [document.getElementById('first-name'), document.getElementById('last-name'), document.getElementById('email'), document.getElementById('contact-form-inputs-message')];
  inputFields.forEach(inputField => {
    removeValidationError(inputField);
  });

  // Perform basic validation
  if (firstName.trim() === '') {
    showValidationError('Please enter your first name.');
    return;
  }

  if (lastName.trim() === '') {
    showValidationError('Please enter your last name.');
    return;
  }

  if (email.trim() === '') {
    showValidationError('Please enter your email address.');
    return;
  }

  // Check if the email is in a valid format using the regex
  if (!emailRegex.test(email)) {
    showValidationError('Please enter a valid email address.');
    return;
  }

  if (message.trim() === '') {
    showValidationError('Please enter your message.');
    return;
  }

  // If all validation passes, submit the form
  // contactForm.submit();
  // append confirmation message to the form
  const confirmationMessage = document.createElement('p');
  confirmationMessage.className = 'confirmation-message';
  confirmationMessage.textContent = 'Thank you for your message. I will get back to you as soon as possible.';
  contactSection.appendChild(confirmationMessage);
  // remove the form
  contactForm.remove();

});
