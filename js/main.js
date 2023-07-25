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
let navBar = document.getElementById('nav');

menuWrapper.addEventListener('click', () => {
  console.log('clicked');
  // Toggle the "nav-active" class on the "navBar" element
  navBar.classList.toggle('nav-active');
});
