const langButton = document.querySelector(".language-nav__icon");
const langList = document.querySelector(".language-nav__list");

function hasTouchScreen() {
  return (
    "ontouchstart" in window ||
    navigator.maxTouchPoints > 0 ||
    navigator.msmaxTouchPoints > 0
  );
}

if (hasTouchScreen()) {
  langButton.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    langList.classList.toggle("language-nav__list--active");
    window.addEventListener("click", () => {
      langList.classList.remove("language-nav__list--active");
    });
    langList.addEventListener("click", (e) => {
      e.stopPropagation();
    });
  });
} else {
  langButton.addEventListener("click", (e) => {
    e.preventDefault();
  });
}
