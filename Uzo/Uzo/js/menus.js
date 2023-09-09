document.addEventListener("DOMContentLoaded", function () {
 

// Update data attributes and class names
const allNavbars = document.querySelectorAll(".home-navbar-interactive");
const allBurgerMenus = document.querySelectorAll(".home-burger-menu");
const allMobileMenus = document.querySelectorAll(".home-mobile-menu");

// Loop through navbars and add event listeners
allNavbars.forEach((navbar) => {
  const burgerBtn = navbar.querySelector(".home-work-with-us1");
  const mobileMenu = navbar.querySelector(".home-mobile-menu");
  const closeBtn = mobileMenu.querySelector(".home-menu-close");

  if (!burgerBtn || !mobileMenu || !closeBtn) {
    return;
  }

  burgerBtn.addEventListener("click", () => {
    console.log("Burger button clicked");
    mobileMenu.classList.toggle("teleport-show");
  });

  closeBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("teleport-show");
  });
});

});
