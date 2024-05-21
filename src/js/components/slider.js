import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
Swiper.use([Navigation, Pagination]);
// const swiper = new Swiper(el, {
//   slidesPerView: "auto",
// });

window.addEventListener("DOMContentLoaded", () => {
  const resizableSwiper = (
    breakpoint,
    swiperClass,
    swiperSettings,
    callback
  ) => {
    let swiper;

    breakpoint = window.matchMedia(breakpoint);

    const enableSwiper = function (className, settings) {
      swiper = new Swiper(className, settings);

      if (callback) {
        callback(swiper);
      }
    };

    const checker = function () {
      if (breakpoint.matches) {
        return enableSwiper(swiperClass, swiperSettings);
      } else {
        if (swiper !== undefined) swiper.destroy(true, true);
        return;
      }
    };

    breakpoint.addEventListener("change", checker);
    checker();
  };

  const someFunc = (instance) => {
    if (instance) {
      instance.on("slideChange", function (e) {
        // console.log('*** mySwiper.activeIndex', instance.activeIndex);
      });
    }
  };

  resizableSwiper("(max-width: 576px)", ".gallery", Swiper1, someFunc);

  resizableSwiper("(max-width: 576px)", ".tickets", Swiper2, someFunc);

  // resizableSwiper("", ".blog__swiper", Swiper3, someFunc);

  // resizableSwiper("", ".industry__swiper", Swiper4, someFunc);
});

let Swiper1 = {
  centeredSlides: true,
  slideToClickedSlide: true,
  slidesPerView: 1.5,
  initialSlide: 0,
  spaceBetween: 16,
  direction: "horizontal",
  loop: true,
  breakpoints: {
    // 1220: {
    //   centeredSlides: false,
    //   slidesPerView: 5,
    //   spaceBetween: 25,
    // },
    // 1100: {
    //   centeredSlides: false,
    //   slidesPerView: 5,
    //   spaceBetween: 20,
    // },
    // 670: {
    //   centeredSlides: false,
    //   slidesPerView: 3,
    //   spaceBetween: 17,
    // },
    450: {
      // centeredSlides: true,
      // loop: true,
      // initialSlide: 1,
      slidesPerView: 2,
      // spaceBetween: 13,
    },
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   dynamicBullets: true,
  // },
};

let Swiper2 = {
  centeredSlides: true,
  slideToClickedSlide: true,
  slidesPerView: 1.5,
  initialSlide: 0,
  spaceBetween: 16,
  direction: "horizontal",
  loop: true,
  breakpoints: {
    // 1220: {
    //   centeredSlides: false,
    //   slidesPerView: 5,
    //   spaceBetween: 25,
    // },
    // 1100: {
    //   centeredSlides: false,
    //   slidesPerView: 5,
    //   spaceBetween: 20,
    // },
    // 670: {
    //   centeredSlides: false,
    //   slidesPerView: 3,
    //   spaceBetween: 17,
    // },
    450: {
      // centeredSlides: true,
      // loop: true,
      // initialSlide: 1,
      slidesPerView: 1.8,
      // spaceBetween: 13,
    },
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   dynamicBullets: true,
  // },
};

// let Swiper2 = {
//   centeredSlides: true,
//   updateOnWindowResize: true,
//   slideToClickedSlide: true,
//   slidesPerView: 2.15,
//   initialSlide: 1,
//   direction: "horizontal",
//   loop: false,
//   breakpoints: {
//     470: {
//       slidesPerView: 3,
//     },
//     430: {
//       slidesPerView: 2.6,
//     },
//     390: {
//       slidesPerView: 2.5,
//     },
//     350: {
//       slidesPerView: 2.3,
//     },
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     dynamicBullets: true,
//   },
// };
