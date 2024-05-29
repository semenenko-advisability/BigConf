<?php get_header(); ?>

<main class="main">
  <section class="hero">
    <picture
      ><source srcset="/wp-content/themes/Big-Conference/img/bg.webp" type="image/webp" />
      <img
        src="/wp-content/themes/Big-Conference/img/bg.jpg"
        class="hero__bg-image"
        width=""
        height=""
        alt="Big Conference"
    /></picture>
    <div class="container hero__container">
      <div class="hero__image-wrapper">
        <picture
          ><source srcset="/wp-content/themes/Big-Conference/img/big.webp" type="image/webp" />
          <img
            loading="lazy"
            src="/wp-content/themes/Big-Conference/img/big.jpg"
            class="hero__image"
            width="928"
            height="443"
            alt="Big Conference"
        /></picture>
        <div class="hero__label label">
          <span class="hero__label-title"><?php echo asl()->translate('belgrad');?></span>
          <span class="hero__label-subtitle"><?php echo asl()->translate('serbia');?></span>
        </div>
        <span class="hero__postscript">Conference</span>
      </div>
    </div>
    <div class="hero__line">
      <span class="hero__line-text">BALKAN iGAMING CONFERENCE </span
      ><span class="hero__line-text" aria-hidden="true"
        >BALKAN iGAMING CONFERENCE </span
      ><span class="hero__line-text" aria-hidden="true"
        >BALKAN iGAMING CONFERENCE </span
      ><span class="hero__line-text" aria-hidden="true"
        >BALKAN iGAMING CONFERENCE </span
      ><span class="hero__line-text" aria-hidden="true"
        >BALKAN iGAMING CONFERENCE </span
      ><span class="hero__line-text" aria-hidden="true"
        >BALKAN iGAMING CONFERENCE </span
      ><span class="hero__line-text" aria-hidden="true"
        >BALKAN iGAMING CONFERENCE</span
      >
    </div>
  </section>
  <section class="numbers">
    <div class="container numbers__container">
      <div class="numbers__top-wrapper">
        <h1 class="numbers__title heading">
          <?php echo asl()->translate('format');?>
        </h1>
        <div class="btn-wrapper numbers__btn-wrapper">
          <a href="#tickets" class="btn accent-btn"><?php echo asl()->translate('book');?></a>
          <a href="https://t.me/bigconfsupport" target="_blank" class="btn"><?php echo asl()->translate('sponsor');?></a>
        </div>
      </div>
      <div id="numbers" class="numbers__bottom-wrapper">
        <div class="numbers__item number">
          <span class="number__title">15000 <?php echo asl()->translate('m');?>²</span>
          <span class="number__descr" style="max-width: 24em"
            ><?php echo asl()->translate('area');?></span
          >
        </div>
        <div class="numbers__item number">
          <span class="number__title">2000</span>
          <span class="number__descr" style="max-width: 13.5em"
            ><?php echo asl()->translate('participants');?></span
          >
        </div>
        <div class="numbers__item number">
          <span class="number__title">1</span>
          <span class="number__descr" style="max-width: 10em"
            ><?php echo asl()->translate('forget');?></span
          >
        </div>
        <div class="numbers__item number">
          <span class="number__title number__title-infinity">∞</span>
          <span class="number__descr" style="max-width: 11.8em"
            ><?php echo asl()->translate('possibilities');?></span
          >
        </div>
      </div>
    </div>
  </section>
  <section class="swiper gallery">
    <div class="swiper-wrapper container gallery__container">
      <div class="swiper-slide gallery__item gallery-item gallery-item-1">
        <div class="gallery-item__text-wrapper">
          <h2 class="gallery-item__title heading">BIG event</h2>
          <p class="gallery-item__descr">
            <?php echo asl()->translate('event');?>
          </p>
        </div>
        <div class="gallery-item__image-wrapper">
          <picture
            ><source srcset="/wp-content/themes/Big-Conference/img/1.webp" type="image/webp" />
            <img
              loading="lazy"
              src="/wp-content/themes/Big-Conference/img/1.png"
              class="gallery-item__image"
              width="478"
              height="405"
              alt=""
          /></picture>
        </div>
      </div>
      <div class="swiper-slide gallery__item gallery-item gallery-item-2">
        <div class="gallery-item__text-wrapper">
          <h2 class="gallery-item__title heading">Adrenaline boost</h2>
          <p class="gallery-item__descr">
            <?php echo asl()->translate('boost');?>
          </p>
        </div>
        <div class="gallery-item__image-wrapper">
          <picture
            ><source srcset="/wp-content/themes/Big-Conference/img/2.webp" type="image/webp" />
            <img
              loading="lazy"
              src="/wp-content/themes/Big-Conference/img/2.jpeg"
              class="gallery-item__image"
              width=""
              height=""
              alt=""
          /></picture>
        </div>
      </div>
      <div class="swiper-slide gallery__item gallery-item gallery-item-3">
        <div class="gallery-item__text-wrapper">
          <h2 class="gallery-item__title heading">Afterparty</h2>
          <p class="gallery-item__descr"><?php echo asl()->translate('afterparty');?></p>
        </div>
        <div class="gallery-item__image-wrapper">
          <picture
            ><source srcset="/wp-content/themes/Big-Conference/img/3.webp" type="image/webp" />
            <img
              loading="lazy"
              src="/wp-content/themes/Big-Conference/img/3.jpeg"
              class="gallery-item__image"
              width=""
              height=""
              alt=""
          /></picture>
        </div>
      </div>
      <div class="swiper-slide gallery__item gallery-item gallery-item-4">
        <div class="gallery-item__text-wrapper">
          <h2 class="gallery-item__title heading">Fashion<br />show</h2>
          <p class="gallery-item__descr">
            <?php echo asl()->translate('show');?>
          </p>
        </div>
        <div class="gallery-item__image-wrapper">
          <picture
            ><source srcset="/wp-content/themes/Big-Conference/img/4.webp" type="image/webp" />
            <img
              loading="lazy"
              src="/wp-content/themes/Big-Conference/img/4.jpeg"
              class="gallery-item__image"
              width=""
              height=""
              alt=""
          /></picture>
        </div>
      </div>
      <div class="swiper-slide gallery__item gallery-item gallery-item-5">
        <div class="gallery-item__text-wrapper">
          <h2 class="gallery-item__title heading"><?php echo asl()->translate('vip-title');?></h2>
          <p class="gallery-item__descr">
            <?php echo asl()->translate('vip');?>
          </p>
        </div>
        <div class="gallery-item__image-wrapper">
          <picture
            ><source srcset="/wp-content/themes/Big-Conference/img/5.webp" type="image/webp" />
            <img
              loading="lazy"
              src="/wp-content/themes/Big-Conference/img/5.jpeg"
              class="gallery-item__image"
              width=""
              height=""
              alt=""
          /></picture>
        </div>
      </div>
      <div class="swiper-slide gallery__item gallery-item gallery-item-6">
        <div class="gallery-item__text-wrapper">
          <h2 class="gallery-item__title heading"><?php echo asl()->translate('speakers-title');?></h2>
          <p class="gallery-item__descr">
            <?php echo asl()->translate('speakers');?>
          </p>
        </div>
        <div class="gallery-item__image-wrapper">
          <picture
            ><source srcset="/wp-content/themes/Big-Conference/img/6.webp" type="image/webp" />
            <img
              loading="lazy"
              src="/wp-content/themes/Big-Conference/img/6.png"
              class="gallery-item__image"
              width=""
              height=""
              alt=""
          /></picture>
        </div>
      </div>
      <div class="swiper-slide gallery__item gallery-item gallery-item-7">
        <div class="gallery-item__text-wrapper">
          <h2 class="gallery-item__title heading"><?php echo asl()->translate('audience-title');?></h2>
          <p class="gallery-item__descr">
            <?php echo asl()->translate('audience');?>
          </p>
        </div>
        <div class="gallery-item__image-wrapper">
          <picture
            ><source srcset="/wp-content/themes/Big-Conference/img/7.webp" type="image/webp" />
            <img
              loading="lazy"
              src="/wp-content/themes/Big-Conference/img/7.png"
              class="gallery-item__image"
              width=""
              height=""
              alt=""
          /></picture>
        </div>
      </div>
    </div>
  </section>
  <section class="swiper tickets">

    <h2 class="heading tickets__title"><?php echo asl()->translate('tickets-title');?></h2>

    <div id="tickets" class="swiper-wrapper container tickets__container">
      <div class="swiper-slide tickets__item">
        <div class="ticket__wrapper ticket">
          <h3 class="ticket__title">Basic</h3>
          <span class="ticket__price-old">$200</span>
          <span class="ticket__price-new">$139</span>
          <div class="ticket__benefits">
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">EXPO</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item"><?php echo asl()->translate('expo-1');?></li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-2');?></li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-3');?></li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-4');?></li>
              </ul>
            </div>
          </div>
          <a href="https://t.me/bigtickets" target="_blank" class="btn ticket__btn" data-graph-path="not-modal-book-1"
            ><?php echo asl()->translate('book-now');?></a
          >
        </div>
      </div>
      <div class="swiper-slide tickets__item">
        <div class="ticket__wrapper ticket">
          <h3 class="ticket__title">Pro</h3>
          <span class="ticket__price-old">$500</span>
          <span class="ticket__price-new">$299</span>
          <div class="ticket__benefits">
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">EXPO</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item">
                  <?php echo asl()->translate('expo-1');?>
                </li>
                <li class="ticket__list-item">
                  <?php echo asl()->translate('expo-2');?>
                </li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-3');?></li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-4');?></li>
              </ul>
            </div>
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">AFTERPARTY</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item"><?php echo asl()->translate('afterparty-1');?></li>
              </ul>
            </div>
          </div>
          <a href="https://t.me/bigtickets" target="_blank" class="btn ticket__btn" data-graph-path="not-modal-book-2"
            ><?php echo asl()->translate('book-now');?></a
          >
        </div>
      </div>
      <div class="swiper-slide tickets__item">
        <div class="ticket__wrapper ticket">
          <h3 class="ticket__title">VIP</h3>
          <span class="ticket__price-old">$1000</span>
          <span class="ticket__price-new">$639</span>
          <div class="ticket__benefits">
            <!-- <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">PREPARTY</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item">
                  <?php echo asl()->translate('preparty-1');?>
                </li>
              </ul>
            </div> -->
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">EXPO</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item">
                  <?php echo asl()->translate('expo-5');?>
                </li>
                <li class="ticket__list-item">
                  <?php echo asl()->translate('expo-6');?>
                </li>
                <li class="ticket__list-item">
                  <?php echo asl()->translate('expo-2');?>
                </li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-3');?></li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-4');?></li>
              </ul>
            </div>
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">AFTERPARTY</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item"><?php echo asl()->translate('afterparty-2');?></li>
              </ul>
            </div>
          </div>
          <a href="https://t.me/bigtickets" target="_blank" class="btn ticket__btn" data-graph-path="not-modal-book-3"
            ><?php echo asl()->translate('book-now');?></a
          >
        </div>
      </div>
      <div class="swiper-slide tickets__item">
        <div class="ticket__wrapper ticket ticket-rich">
          <h3 class="ticket__title">Rich Bitch</h3>
          <div class="ticket__benefits">
            <!-- <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">PREPARTY</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item">
                  <?php echo asl()->translate('preparty-1');?>
                </li>
              </ul>
            </div> -->
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">CONCIERGE SERVICE</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item"><?php echo asl()->translate('concierge-1');?></li>
                <li class="ticket__list-item"><?php echo asl()->translate('concierge-2');?></li>
              </ul>
            </div>
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">EXPO</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item"><?php echo asl()->translate('expo-5');?></li>
                <li class="ticket__list-item"><?php echo asl()->translate('expo-6');?></li>
              </ul>
            </div>
            <div class="ticket__benefits-wrapper">
              <span class="ticket__list-title">AFTERPARTY</span>
              <ul class="list-reset ticket__list">
                <li class="ticket__list-item">
                  <?php echo asl()->translate('afterparty-2');?>
                </li>
              </ul>
            </div>
            <div class="accordion ticket__accordion">
              <div class="accordion__content" aria-hidden="true">
                <div class="ticket__benefits-wrapper">
                  <span class="ticket__list-title">EXTRA BENEFITS</span>
                  <ul class="list-reset ticket__list">
                    <li class="ticket__list-item"><?php echo asl()->translate('benefits-1');?></li>
                    <li class="ticket__list-item"><?php echo asl()->translate('benefits-2');?></li>
                    <li class="ticket__list-item"><?php echo asl()->translate('benefits-3');?></li>
                  </ul>
                </div>
              </div>
              <button
                class="accordion__control btn-reset"
                aria-expanded="false"
              >
                <span class="accordion__icon">
                  <span class="accordion__option-more visually-hidden"><?php echo asl()->translate('show-more');?></span>
                  <span class="accordion__option-less visually-hidden"><?php echo asl()->translate('show-less');?></span>
                </span>
                <span class="accordion__option"><?php echo asl()->translate('show-more');?></span>
              </button>
            </div>
          </div>
          <a
            href="https://t.me/bigconfsupport" target="_blank"
            class="btn ticket__btn"
            ><?php echo asl()->translate('find');?></a
          >
        </div>
      </div>
    </div>

  </section>
  <section class="sponsors">
    <div class="container sponsors__container">
      <h2 class="heading sponsors__title" style="margin-bottom: 1em"><?php echo asl()->translate('sponsors-title');?></h2>
      <div class="sponsors__wrapper">
        <!-- <div class="sponsors-list sponsors-list-key-media swiper">
      <h3 class="sponsors-list__title">Key Media Partners</h3>
      <div class="sponsors-list__wrapper swiper-wrapper">
        <div class="sponsors-list__item swiper-slide">
          <div class="sponsors-list__image-wrapper">
            <img src="/wp-content/themes/Big-Conference/img/sponsor-8.svg" loading="lazy" alt="" class="sponsors-list__image">
          </div>
        </div>
      </div>
    </div> -->
        <div class="sponsors-list sponsors-list-media-temp swiper">
          <!-- <h3 class="sponsors-list__title">Media Partners</h3> -->
          <div class="sponsors-list__wrapper swiper-wrapper">
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-2.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-7.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-5.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-4.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-3.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-1.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-19.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-6.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-2.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-7.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-5.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-4.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-3.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-1.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-19.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-6.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sponsors">
    <div class="container sponsors__container">
      <h2 class="heading sponsors__title" style="margin-bottom: 1em"><?php echo asl()->translate('partners-title');?></h2>
      <div class="sponsors__wrapper">
        <!-- <div class="sponsors-list sponsors-list-key-media swiper">
      <h3 class="sponsors-list__title">Key Media Partners</h3>
      <div class="sponsors-list__wrapper swiper-wrapper">
        <div class="sponsors-list__item swiper-slide">
          <div class="sponsors-list__image-wrapper">
            <img src="/wp-content/themes/Big-Conference/img/sponsor-8.svg" loading="lazy" alt="" class="sponsors-list__image">
          </div>
        </div>
      </div>
    </div> -->
        <div class="sponsors-list sponsors-list-media swiper">
          <!-- <h3 class="sponsors-list__title">Media Partners</h3> -->
          <div class="sponsors-list__wrapper swiper-wrapper">
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-9.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-14.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-10.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-15.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-11.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-16.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-12.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-17.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-13.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-18.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-20.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper"></div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-9.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-14.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-10.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-15.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-11.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-16.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-12.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-17.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-13.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-18.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
            </div>
            <div class="sponsors-list__item swiper-slide">
              <div class="sponsors-list__image-wrapper">
                <img
                  src="/wp-content/themes/Big-Conference/img/sponsor-20.svg"
                  loading="lazy"
                  alt=""
                  class="sponsors-list__image"
                />
              </div>
              <div class="sponsors-list__image-wrapper"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="what">
    <div class="container what__container">
      <h2 class="what__title heading"><?php echo asl()->translate('what');?></h2>
      <div class="what__wrapper what__wrapper-left">
        <p class="what__paragraph">
          <?php echo asl()->translate('balkan-1');?><?php echo asl()->translate('balkan-2');?><?php echo asl()->translate('balkan-3');?>
        </p>
        <p class="what__paragraph">
          <?php echo asl()->translate('venue-1');?><?php echo asl()->translate('venue-2');?><?php echo asl()->translate('venue-3');?>
        </p>
      </div>
      <div class="what__wrapper what__wrapper-right">
        <p class="what__descr">
          <?php echo asl()->translate('subscribe');?>
        </p>
        <a href="#" class="btn what__btn" data-graph-path="modal-news"
          ><?php echo asl()->translate('receive');?></a
        >
      </div>
    </div>
  </section>
  <section id="contacts" class="contacts">
    <div class="container contacts__container">
      <h2 class="contacts__title heading">
        <span><?php echo asl()->translate('suggest');?></span>
        <span><?php echo asl()->translate('become');?></span>
        <span><?php echo asl()->translate('question');?></span>
      </h2>
      <a href="https://t.me/bigconfsupport" target="_blank" class="contacts__link"><?php echo asl()->translate('contact-us');?></a>
    </div>
  </section>
  <div class="graph-modal">
    <div
      class="graph-modal__container"
      role="dialog"
      aria-modal="true"
      data-graph-target="modal-book-1"
    >
      <button
        class="btn-reset js-modal-close graph-modal__close"
        aria-label="Close modal"
      ></button>
      <div class="graph-modal__content">
        <div class="popup">
          <h2 class="popup__title"><?php echo asl()->translate('');?>Book your ticket</h2>
          <p class="popup__paragraph">
            <?php echo asl()->translate('');?>To reserve your ticket, please enter your email.
          </p>
          <p class="popup__paragraph">
            <?php echo asl()->translate('');?>Enjoy a 5% early booking discount off the listed price.
          </p>
          <!-- <form action="#" class="form">
    <label class="form__label">
      <input type="email" name="email" class="input-reset form__input form__email" placeholder="Email*" required>
    </label>
    <button class="btn-reset btn form__btn">book now</button>
  </form> -->

          <?php echo do_shortcode( '[contact-form-7 id="c88cbcf" title="Basic ticket form" html_class="form"]' ); ?>

        </div>
      </div>
    </div>
    <div
      class="graph-modal__container"
      role="dialog"
      aria-modal="true"
      data-graph-target="modal-book-2"
    >
      <button
        class="btn-reset js-modal-close graph-modal__close"
        aria-label="Close modal"
      ></button>
      <div class="graph-modal__content">

        <div class="popup">
          <h2 class="popup__title"><?php echo asl()->translate('');?>Book your ticket</h2>
          <p class="popup__paragraph">
            <?php echo asl()->translate('');?>To reserve your ticket, please enter your email.
          </p>
          <p class="popup__paragraph">
            <?php echo asl()->translate('');?>Enjoy a 5% early booking discount off the listed price.
          </p>

          <?php echo do_shortcode( '[contact-form-7 id="182d5c4" title="Pro ticket form" html_class="form"]' ); ?>

        </div>

      </div>
    </div>
    <div
      class="graph-modal__container"
      role="dialog"
      aria-modal="true"
      data-graph-target="modal-book-3"
    >
      <button
        class="btn-reset js-modal-close graph-modal__close"
        aria-label="Close modal"
      ></button>
      <div class="graph-modal__content">

        <div class="popup">
          <h2 class="popup__title"><?php echo asl()->translate('popup-title');?></h2>
          <p class="popup__paragraph">
            <?php echo asl()->translate('popup-to-book');?>
          </p>
          <p class="popup__paragraph">
            <?php echo asl()->translate('popup-discount');?>
          </p>

          <?php echo do_shortcode( '[contact-form-7 id="1bca501" title="Vip ticket form" html_class="form"]' ); ?>

        </div>

	  </div>
    </div>
    <div
      class="graph-modal__container"
      role="dialog"
      aria-modal="true"
      data-graph-target="modal-book-rich"
    >
      <button
        class="btn-reset js-modal-close graph-modal__close"
        aria-label="Close modal"
      ></button>
      <div class="graph-modal__content"></div>
    </div>
    <div
      class="graph-modal__container"
      role="dialog"
      aria-modal="true"
      data-graph-target="modal-news"
    >
      <button
        class="btn-reset js-modal-close graph-modal__close"
        aria-label="Close modal"
      ></button>
      <div class="graph-modal__content">

        <div class="popup">
          <h2 class="popup__title"><?php echo asl()->translate('popup-title-news');?></h2>
          <p class="popup__paragraph">
            <?php echo asl()->translate('popup-newsletter');?>
          </p>

          <?php echo do_shortcode( '[contact-form-7 id="fee4d7b" title="News Subscription form" html_class="form"]' ); ?>

        </div>

	  </div>
    </div>

    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="modal-success">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Close modal"></button>
      <div class="graph-modal__content">
        <div class="popup">
          <p class="popup__paragraph"><?php echo asl()->translate('popup-received');?></p>
          <p class="popup__paragraph"><?php echo asl()->translate('popup-subscribe-to');?></p>
          <a href="https://t.me/confbig" target="_blank" class="btn form__btn"><?php echo asl()->translate('popup-subscribe');?></a>
        </div>
      </div>
    </div>

    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="modal-success-news">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Close modal"></button>
      <div class="graph-modal__content">
        <div class="popup">
          <p class="popup__paragraph"><?php echo asl()->translate('popup-received-news');?></p>
        </div>
      </div>
    </div>

  </div>
  <a href="#top" class="top-arrow-btn"></a>
</main>

<?php get_footer(); ?>
