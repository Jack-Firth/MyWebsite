function toggleDropDown() {
  let navbarToggle = document.getElementById("navbar-toggle");
  if (navbarToggle.className === "nav-menu-list") {
    navbarToggle.className += "-responsive";
  } else {
    navbarToggle.className = "nav-menu-list";
  }
}

function stickyNavBar() {
  let navigationBar = document.getElementById("navigation-bar");
  let stickyBar = navigationBar.offsetTop;
  if (window.pageYOffset >= stickyBar) {
    navigationBar.classList.add("-sticky");
  } else {
    navigationBar.classList.remove("-sticky");
  }
  console.log("sticky");
}

window.onscroll = function () {
  stickyNavBar();
};

function sendMessage() {
  let name = getElementById(contactForm - name);
  let email = getElementById(contactForm - email);
  let message = getElementById(contactForm - message);
}
