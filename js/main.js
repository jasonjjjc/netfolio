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

let menuWrapper = document.getElementById('menu-wrapper');
let header = document.getElementById('header');

menuWrapper.addEventListener('click', () => {
  // Toggle the "nav-active" class on the "navBar" element
  header.classList.toggle('is-active');
});





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



