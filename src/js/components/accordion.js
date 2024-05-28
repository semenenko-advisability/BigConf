document.addEventListener("DOMContentLoaded", () => {
  const accordions = document.querySelectorAll(".accordion");

  accordions.forEach((el) => {
    el.addEventListener("click", (e) => {
      const self = e.currentTarget;
      const control = self.querySelector(".accordion__control");
      const content = self.querySelector(".accordion__content");

      if (e.target.closest(".accordion__control") === control) {
        self.classList.toggle("accordion--open");
      }

      // если открыт аккордеон
      if (self.classList.contains("accordion--open")) {
        control.setAttribute("aria-expanded", true);
        content.setAttribute("aria-hidden", false);
        content.style.maxHeight = content.scrollHeight + "px";
        control.querySelector(".accordion__option").innerText = "show less";
      } else {
        control.setAttribute("aria-expanded", false);
        content.setAttribute("aria-hidden", true);
        content.style.maxHeight = null;
        control.querySelector(".accordion__option").innerText = "show more";
      }
    });
  });
});
