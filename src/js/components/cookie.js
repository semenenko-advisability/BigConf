const modalButton = document.querySelector('[data-graph-path="modal-news"]');
let cookie;

setTimeout(() => {
  cookie = getCookie();
  if (!cookie.formViewed) {
    document.cookie = "formViewed=true";
    modalButton.click();
    // console.log("inn");
  }
}, 2000);

// console.log("cookie");

// Получить куки
function getCookie() {
  return document.cookie.split("; ").reduce((acc, item) => {
    const [name, value] = item.split("=");
    acc[name] = value;
    console.log(document.cookie);
    return acc;
  }, {});
}
