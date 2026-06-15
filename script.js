const navigation = document.querySelector("#mainNavigation");
const navigationLinks = document.querySelectorAll(".nav-link");

navigationLinks.forEach((link) => {
  link.addEventListener("click", () => {
    if (navigation.classList.contains("show")) {
      bootstrap.Collapse.getOrCreateInstance(navigation).hide();
    }
  });
});
