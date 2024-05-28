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

  resizableSwiper("(max-width: 576px)", ".gallery", Swiper1, someFunc);
  resizableSwiper("(max-width: 576px)", ".tickets", Swiper2, someFunc);
  resizableSwiper("", ".speakers-list", Swiper3, someFunc);
  // resizableSwiper("", ".sponsors-list-exclusive", SwiperExclusive, someFunc);
  // resizableSwiper("", ".sponsors-list-general", SwiperGeneral, someFunc);
  resizableSwiper("(max-width: 480px)", ".sponsors-list-platinum", SwiperPlatinum, someFunc);
  // resizableSwiper("", ".sponsors-list-gold", SwiperGold, someFunc);
  // resizableSwiper("", ".sponsors-list-silver", SwiperSilver, someFunc);
  // resizableSwiper("", ".sponsors-list-key-media", SwiperKey, someFunc);
  resizableSwiper("", ".sponsors-list-media", SwiperMedia, someFunc);
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

let Swiper3 = {
  // centeredSlides: true,
  // slideToClickedSlide: true,
  slidesPerView: 1,
  initialSlide: 0,
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
  freeMode: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  slidesPerView: 2,
  speed: 1500,
  grabCursor: true,
  breakpoints: {
    1025: {
      slidesPerView: 4,
      speed: 3000,
    },
    577: {
      slidesPerView: 3,
      speed: 2500,
    },
    481: {
      slidesPerView: 3,
      speed: 2000,
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
