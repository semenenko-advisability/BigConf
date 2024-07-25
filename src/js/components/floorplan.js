document.addEventListener("DOMContentLoaded", () => {
  const historyItems = document.querySelectorAll(".history__item");
  // const el = document.getElementById("1");
  const stands = document.querySelectorAll(".stand");
  const svg = document
    .querySelector(".floorplan__map-wrapper")
    .getElementsByTagName("svg");
  // console.log(svg[0]);
  // console.log(el);

  // el.addEventListener("mouseenter", (e) => {
  //   console.log(e.target);
  //   document.body.style.cursor = "pointer";
  // });
  // window.addEventListener("click", () => {
  //   document.querySelectorAll(".stand--active").forEach((el) => {
  //     el.classList.remove("stand--active");
  //   });
  // });

  // document.querySelector(".floorplan__sidebar-wrapper").style.height =
  //   "calc(100% - " +
  //   document.querySelector(".history").clientHeight +
  //   "px)";

  initializeFloorplan(svg);

  stands.forEach((elem) => {
    elem.addEventListener("click", (e) => {
      // e.stopPropagation();
      document.querySelectorAll(".stand--active").forEach((el) => {
        el.classList.remove("stand--active");
      });

      e.currentTarget.classList.add("stand--active");

      // console.log(e.currentTarget.id);
      addCode(e.currentTarget.id);

      // document
      //   .querySelector(".stand--active")
      //   .addEventListener("click", (e) => {
      //     e.stopImmediatePropagation();
      //   });
      // console.log(e.target.getElementsByTagName("path")[1]);
      // console.log(e.currentTarget.querySelector(".stand__image"));
      // e.currentTarget
      //   .querySelector(".stand__image")
      //   .setAttribute("stroke", "white");
      // e.currentTarget
      //   .querySelector(".stand__image")
      //   .setAttribute("stroke-width", "2px");
    });
  });

  function addCode(id) {
    // console.log(document.querySelector(".floorplan__sidebar").innerHTML);

    fetch("./data/data.json")
      .then((res) => {
        if (!res.ok) {
          throw new Error(`HTTP error! Status: ${res.status}`);
        }
        return res.json();
      })
      .then((json) => {
        // let stands = JSON.parse(json);
        // console.log(json.stands[id].number);

        let stand = json.stands[id - 1];
        let image = "";
        if (stand.stand === "silver") {
          image = "stand-1";
        } else if (stand.stand === "gold") {
          image = "stand-2";
        } else if (stand.stand === "platinum") {
          image = "stand-3";
        } else {
          document.querySelector(".floorplan__sidebar").innerHTML =
            `<div class="sidebar__title-wrapper">
            <span class="sidebar__title">` +
            stand.stand +
            `</span>
            <span class="sidebar__number sidebar__number--silver">` +
            stand.number +
            `</span>
          </div>`;
          return;
        }
        if (stand.booked) {
          document.querySelector(".floorplan__sidebar").innerHTML =
            `<div class="sidebar__title-wrapper">
            <span class="sidebar__title">` +
            stand.stand +
            `</span>
            <span class="sidebar__number sidebar__number--silver">` +
            stand.number +
            `</span>
          </div>
          <div class="sidebar__image-wrapper">
            <picture>
              <source srcset="img/` +
            image +
            `.webp" type="image/webp">
              <img loading="lazy" src="img/` +
            image +
            `.png" class="sidebar__image sidebar__image--booked" width="82" height="88" alt="silver stand photo">
            </picture>
          </div>
          <div class="sidebar__text-wrapper">
            <p class="sidebar__text">This booth is booked. Please, choose another booth.</p>
          </div>`;
        } else {
          document.querySelector(".floorplan__sidebar").innerHTML =
            `<div class="sidebar__title-wrapper">
            <span class="sidebar__title">` +
            stand.stand +
            `</span>
            <span class="sidebar__number sidebar__number--silver">` +
            stand.number +
            `</span>
          </div>
          <div class="sidebar__image-wrapper">
            <picture>
              <source srcset="img/` +
            image +
            `.webp" type="image/webp">
              <img loading="lazy" src="img/` +
            image +
            `.png" class="sidebar__image" width="82" height="88" alt="silver stand photo">
            </picture>
          </div>
          <div class="sidebar__text-wrapper">
            <div class="sidebar__text-wrapper-inner">
              <a href="https://big.confbig.com/tickets_support" class="btn accent-btn sidebar__btn">BOOK now</a>
              <span class="sidebar__size">` +
            stand.size +
            `&nbsp;m²</span>
            </div>
          </div>`;
        }
      })
      .catch((error) => console.error("Unable to fetch data:", error));
  }
});

function initializeFloorplan() {
  fetch("./data/data.json")
    .then((res) => {
      if (!res.ok) {
        throw new Error(`HTTP error! Status: ${res.status}`);
      }
      return res.json();
    })
    .then((json) => {
      const bookedStandsId = [];
      const svg = document
        .querySelector(".floorplan__map-wrapper")
        .getElementsByTagName("svg");

      json.stands.filter((item) => {
        if (item.booked) {
          // bookedStandsId.push(item.id);
          document.getElementById(`${item.id}`).classList.add("stand--booked");
        }
        // return item.booked !== true;
      });
      // console.log(bookedStandsId);

      // bookedStandsId.forEach((id) => {
        //   document.getElementById(`${id}`).classList.add("stand--active");
        // });
        document.querySelector(".floorplan__loader").classList.remove("floorplan__loader--loading");
        document.querySelector(".floorplan__loader");
    })
    .catch((error) => console.error("Unable to fetch data:", error));
}
