import Swiper from "swiper";
import { Autoplay, Navigation, Pagination, FreeMode } from "swiper/modules";
Swiper.use([Navigation, Pagination, Autoplay, FreeMode]);
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

  const resizeContainer = (instance) => {
    // let isAccordionClosed = true;

    // if (instance) {
    //   instance.on("transitionStart", function (e) {
    //     // console.log(
    //     //   "*** mySwiper.activeIndex",
    //     //   document.querySelector(".ticket-rich").offsetHeight
    //     // );
    //     instance.wrapperEl.style.height =
    //     document.querySelector(".ticket-rich").offsetHeight + "px";
    //     // instance.updateAutoHeight();
    //     // console.log(instance.wrapperEl.style.height);
    //   });

    //   instance.on("tap", function (e) {
    //     // console.log(
    //     //   "*** mySwiper.activeIndex",
    //     //   document.querySelector(".ticket-rich").offsetHeight
    //     // );
    //     // instance.wrapperEl.style.height =
    //     //   document.querySelector(".ticket-rich").offsetHeight + "px";
    //     // console.log(e);
    //     setTimeout(() => {
    //       // instance.wrapperEl.style.height = 900 + "px";
    //       // if (
    //       //   isAccordionClosed &&
    //       //   document
    //       //     .querySelector(".ticket__accordion")
    //       //     .classList.contains("accordion--open")
    //       // ) {
    //       //   isAccordionClosed = false;
    //       //   console.log(document.querySelector(".ticket-rich").offsetHeight);
    //       //   console.log(
    //       //     document.querySelector(".accordion__content").scrollHeight
    //       //   );
    //       //   console.log(instance.wrapperEl.style.height);

    //       //   instance.wrapperEl.style.height =
    //       //     document.querySelector(".ticket-rich").offsetHeight +
    //       //     document.querySelector(".accordion__content").scrollHeight +
    //       //     "px";
    //       //   console.log(instance.wrapperEl.style.height);
    //       //   // console.log(isAccordionClosed);
    //       // } else {
    //       //   // console.log(isAccordionClosed);
    //       // }
    //     }, "1");
    //     // if (
    //     //   document
    //     //     .querySelector(".ticket__accordion")
    //     //     .classList.contains("accordion--open")
    //     // ) {
    //     //   console.log("открыто");
    //     // } else {
    //     //   console.log("закрыто");
    //     // }
    //   });
    // }
  };

  resizableSwiper("(max-width: 576px)", ".gallery", Swiper1, someFunc);
  resizableSwiper("(max-width: 576px)", ".tickets", Swiper2, resizeContainer);
  resizableSwiper("", ".speakers-list", SwiperSpeakers, someFunc);
  // resizableSwiper("", ".sponsors-list-exclusive", SwiperExclusive, someFunc);
  // resizableSwiper("", ".sponsors-list-general", SwiperGeneral, someFunc);
  resizableSwiper(
    "(max-width: 480px)",
    ".sponsors-list-platinum",
    SwiperPlatinum,
    someFunc
  );
  // resizableSwiper("", ".sponsors-list-gold", SwiperGold, someFunc);
  // resizableSwiper("", ".sponsors-list-silver", SwiperSilver, someFunc);
  // resizableSwiper("", ".sponsors-list-key-media", SwiperKey, someFunc);
  resizableSwiper("", ".sponsors-list-media-temp", SwiperMediaTemp, someFunc);
  resizableSwiper("", ".sponsors-list-media", SwiperMedia, someFunc);
});

let Swiper1 = {
  centeredSlides: true,
  slideToClickedSlide: true,
  slidesPerView: 1.5,
  initialSlide: 0,
  // spaceBetween: 16,
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
  autoHeight: true,
  centeredSlides: true,
  slideToClickedSlide: true,
  slidesPerView: 1.5,
  initialSlide: 0,
  // spaceBetween: 16,
  direction: "horizontal",
  loop: true,
  observer: true,
  observeParents: true,
  calculateHeight: true,
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
  // onSlideChangeStart: function () {
  //   document
  //     .querySelector(".tickets__container")
  //     .height(Swiper2.activeSlide())
  //     .height();
  //   console.log("hi");
  // },
};

let SwiperSpeakers = {
  // centeredSlides: true,
  // slideToClickedSlide: true,
  slidesPerView: 1,
  initialSlide: 0,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 500,
  // spaceBetween: 16,
  direction: "horizontal",
  loop: true,
  breakpoints: {
    1220: {
      //   centeredSlides: false,
      slidesPerView: 4,
      //   spaceBetween: 25,
    },
    900: {
      //   centeredSlides: false,
      slidesPerView: 3,
      //   spaceBetween: 20,
    },
    670: {
      //   centeredSlides: false,
      slidesPerView: 2,
      //   spaceBetween: 17,
    },
    // 450: {
    // centeredSlides: true,
    // loop: true,
    // initialSlide: 1,
    // slidesPerView: 1.8,
    // spaceBetween: 13,
    // },
  },
  navigation: {
    nextEl: ".speakers__nav-right",
    prevEl: ".speakers__nav-left",
  },
};

let SwiperMedia = {
  loop: true,
  // freeMode: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  slidesPerView: 2,
  speed: 500,
  // grabCursor: true,
  breakpoints: {
    1025: {
      slidesPerView: 4,
      // speed: 3000,
    },
    577: {
      slidesPerView: 3,
      // speed: 2500,
    },
    481: {
      slidesPerView: 3,
      // speed: 2000,
    },
  },
};

let SwiperMediaTemp = {
  loop: true,
  // freeMode: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  slidesPerView: 2,
  speed: 500,
  // grabCursor: true,
  breakpoints: {
    1025: {
      slidesPerView: 4,
      // speed: 500,
    },
    577: {
      slidesPerView: 3,
      // speed: 2500,
    },
    481: {
      slidesPerView: 3,
      // speed: 2000,
    },
  },
};

// let SwiperExclusive = {};

// let SwiperGeneral = {};

let SwiperPlatinum = {
  loop: true,
  freeMode: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  slidesPerView: 2,
  speed: 1500,
  grabCursor: true,
  breakpoints: {
    // 1025: {
    //   slidesPerView: 3,
    //   speed: 3000,
    // },
    // 577: {
    //   speed: 2500,
    // },
    481: {
      slidesPerView: 3,
      // speed: 2000,
    },
  },
};

// let SwiperGold = {};

// let SwiperSilver = {};

// let SwiperKey = {};
