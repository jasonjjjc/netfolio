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

let menuWrapper = document.getElementById('menu-wrapper');
let header = document.getElementById('header');

menuWrapper.addEventListener('click', () => {
  // Toggle the "nav-active" class on the "navBar" element
  header.classList.toggle('is-active');
});

// JavaScript code to toggle the 'is-active' class when the screen width is large or wider
function toggleIsActiveClass() {
  const header = document.getElementById('header');
  const screenWidth = window.innerWidth;

  // Replace 'largeScreenWidth' with your desired screen width breakpoint in pixels
  const largeScreenWidth = 992;

  if (screenWidth >= largeScreenWidth && !header.classList.contains('is-active')) {
    header.classList.add('is-active');
  }
}

// Initially, call the function to set the class based on the current screen width
toggleIsActiveClass();

// Listen for the 'resize' event on the 'window' object and update the class accordingly
window.addEventListener('resize', toggleIsActiveClass);



