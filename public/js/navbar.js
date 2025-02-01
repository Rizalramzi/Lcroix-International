window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  const logo = document.getElementById("logo");
  const menu = document.getElementById("open");
  const dropdown = document.getElementById('dropdownAboutDesk')
  const dropdownIcon = document.getElementById('dropdownIconDesk')

  if (window.scrollY > 0) {
    navbar.classList.add("bg-white", "text-dark", "shadow-xl");
    logo.src = "assets/logo-dark.png";
    menu.src = "assets/icons/menu-dark.svg";
    dropdownIcon.src = "assets/icons/dropdown-dark.svg";
    dropdown.classList.add('bg-white')
    dropdown.classList.remove('bg-main')
  } else {
    navbar.classList.remove("bg-white", "text-dark", "shadow-xl");
    logo.src = "assets/logo.png";
    menu.src = "assets/icons/menu.svg";
    dropdownIcon.src = "assets/icons/dropdown.svg";
    dropdown.classList.add('bg-main')
    dropdown.classList.remove('bg-white')
  }
});

