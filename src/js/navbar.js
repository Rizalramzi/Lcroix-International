window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  const logo = document.getElementById("logo");

  if (window.scrollY > 0) {
    navbar.classList.add("bg-white", "text-dark");
    logo.src = "assets/logo-dark.png";
  } else {
    navbar.classList.remove("bg-white", "text-dark");
    logo.src = "assets/logo.png";
  }
});
