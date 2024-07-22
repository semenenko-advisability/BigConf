document.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth <= 576) {
    const notRichTickets = document.querySelectorAll(
      ".ticket:not(.ticket-rich)"
    );
    const richTicket = document.querySelector(".ticket-rich");

    notRichTickets.forEach((el) => {
      setTimeout(() => {
        el.style.height = richTicket.clientHeight + "px";
      }, 0);
    });
  }
});
