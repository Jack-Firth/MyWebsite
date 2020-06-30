function toggleDropDown() {
  let navbarToggle = document.getElementById("navbar-toggle");
  if (navbarToggle.className === "nav-menu-list") {
    navbarToggle.className += "-responsive";
  } else {
    navbarToggle.className = "nav-menu-list";
  }
}
