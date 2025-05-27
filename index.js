window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar-container');
  if (window.scrollY > 50) {
    navbar.classList.add('navbar-shadow');
  } else {
    navbar.classList.remove('navbar-shadow');
  }
});