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
        <div class="hero__label"></div>
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
          <a href="#contacts" class="btn"><?php echo asl()->translate('sponsor');?></a>
        </div>
      </div>
      <div id="numbers" class="numbers__bottom-wrapper">
        <div class="numbers__item number">
          <span class="number__title">15,000 <?php echo asl()->translate('m');?>²</span>
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
  <section class="gallery">
    <div class="container gallery__container">
      <div class="gallery__item gallery-item gallery-item-1">
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
      <div class="gallery__item gallery-item gallery-item-2">
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
      <div class="gallery__item gallery-item gallery-item-3">
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
      <div class="gallery__item gallery-item gallery-item-4">
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
      <div class="gallery__item gallery-item gallery-item-5">
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
      <div class="gallery__item gallery-item gallery-item-6">
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
      <div class="gallery__item gallery-item gallery-item-7">
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
  <section class="tickets">
    <div id="tickets" class="container tickets__container">
      <div class="tickets__item ticket">
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
        <a href="#" class="btn ticket__btn" data-graph-path="modal-book-1"
          ><?php echo asl()->translate('book-now');?></a
        >
      </div>
      <div class="tickets__item ticket">
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
        <a href="#" class="btn ticket__btn" data-graph-path="modal-book-2"
          ><?php echo asl()->translate('book-now');?></a
        >
      </div>
      <div class="tickets__item ticket">
        <h3 class="ticket__title">VIP</h3>
        <span class="ticket__price-old">$1000</span>
        <span class="ticket__price-new">$639</span>
        <div class="ticket__benefits">
          <div class="ticket__benefits-wrapper">
            <span class="ticket__list-title">PREPARTY</span>
            <ul class="list-reset ticket__list">
              <li class="ticket__list-item">
                <?php echo asl()->translate('preparty-1');?>
              </li>
            </ul>
          </div>
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
        <a href="#" class="btn ticket__btn" data-graph-path="modal-book-3"
          ><?php echo asl()->translate('book-now');?></a
        >
      </div>
      <div class="tickets__item ticket ticket-rich">
        <h3 class="ticket__title">Rich Bitch</h3>
        <div class="ticket__benefits">
          <div class="ticket__benefits-wrapper">
            <span class="ticket__list-title">PREPARTY</span>
            <ul class="list-reset ticket__list">
              <li class="ticket__list-item">
                <?php echo asl()->translate('preparty-1');?>
              </li>
            </ul>
          </div>
          <div class="ticket__benefits-wrapper">
            <span class="ticket__list-title">EXPO</span>
            <ul class="list-reset ticket__list">
              <li class="ticket__list-item"><?php echo asl()->translate('expo-5');?></li>
              <li class="ticket__list-item"><?php echo asl()->translate('expo-6');?></li>
              <li class="ticket__list-item"><?php echo asl()->translate('expo-2');?></li>
              <li class="ticket__list-item"><?php echo asl()->translate('expo-3');?></li>
              <li class="ticket__list-item"><?php echo asl()->translate('expo-4');?></li>
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
          <div class="ticket__benefits-wrapper">
            <span class="ticket__list-title"
              >+ Concierge service<br />   & extra benefits</span
            >
          </div>
        </div>
        <a
          href="#"
          class="btn ticket__btn"
          data-graph-path="modal-book-rich"
          ><?php echo asl()->translate('find');?></a
        >
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
      <a href="#" class="contacts__link"><?php echo asl()->translate('contact-us');?></a>
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
          <div class="wpcf7 js" id="wpcf7-f6-o1" lang="ru-RU" dir="ltr">
            <!-- <div class="screen-reader-response">
      <p role="status" aria-live="polite" aria-atomic="true">One or more fields contain invalid data. Please check them and try again</p>
      <ul>
        <li id="wpcf7-f6-o1-ve-contactName">This field is required</li>
        <li id="wpcf7-f6-o1-ve-contactEmail">This field is required</li>
        <li id="wpcf7-f6-o1-ve-contactTextarea">This field is required</li>
      </ul>
    </div> -->
            <form
              action="/#wpcf7-f6-o1"
              method="post"
              class="wpcf7-form contact-form invalid"
              aria-label="Контактная форма"
              novalidate="novalidate"
              data-status="invalid"
            >
              <!-- <div style="display: none;">
        <input type="hidden" name="_wpcf7" value="6">
        <input type="hidden" name="_wpcf7_version" value="5.7.7">
        <input type="hidden" name="_wpcf7_locale" value="ru_RU">
        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-o1">
        <input type="hidden" name="_wpcf7_container_post" value="0">
        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
      </div> -->
              <p>
                <!-- <span class="wpcf7-form-control-wrap" data-name="contactName">
          <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contact-form__name wpcf7-not-valid" aria-required="true" aria-invalid="true" placeholder="Your name*" value="" type="text" name="contactName" aria-describedby="wpcf7-f6-o1-ve-contactName">
          <span class="wpcf7-not-valid-tip" aria-hidden="true">This field is required</span>
        </span> --><br /><span
                  class="wpcf7-form-control-wrap"
                  data-name="contactEmail"
                  ><input
                    size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email input-reset form__input form__email wpcf7-not-valid"
                    aria-required="true"
                    aria-invalid="true"
                    placeholder="E-mail*"
                    value=""
                    type="email"
                    name="contactEmail"
                    aria-describedby="wpcf7-f6-o1-ve-contactEmail"
                  />
                  <span class="wpcf7-not-valid-tip" aria-hidden="true"
                    >This field is required</span
                  ></span
                >
              </p>
              <!-- <p class="contact-form__textarea-wrapper">
        <span class="wpcf7-form-control-wrap" data-name="contactTextarea">
          <textarea cols="40" rows="10" maxlength="600" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required contact-form__textarea wpcf7-not-valid" aria-required="true" aria-invalid="true" placeholder="Message*" name="contactTextarea" aria-describedby="wpcf7-f6-o1-ve-contactTextarea"></textarea>
          <span class="wpcf7-not-valid-tip" aria-hidden="true">This field is required</span>
        </span>
      </p> -->
              <p>
                <!-- <label class="contact-form__checkbox check text"><br>
          <span class="wpcf7-form-control-wrap" data-name="contactAgreement">
            <span class="wpcf7-form-control wpcf7-acceptance">
              <span class="wpcf7-list-item">
                <label>
                  <input type="checkbox" name="contactAgreement" value="1" checked="checked" class="check__input" aria-invalid="false">
                  <span class="wpcf7-list-item-label">
                    <span class="check__box"></span>
                  </span>
                </label>
              </span>
            </span>
          </span>
          <br>
          By signing and clicking Send, you affirm you have read and agree to the <a href="https://network.appska.com/wp-content/uploads/2023/07/privacy.pdf" target="_blank">Privacy Policy</a> and <a href="https://network.appska.com/wp-content/uploads/2023/07/terms.pdf" target="_blank">Terms of Use</a> and want to receive news<br>
        </label> --><br /><input
                  class="wpcf7-form-control has-spinner wpcf7-submit input-reset form__btn btn"
                  type="submit"
                  value="book now"
                />
                <span class="wpcf7-spinner"></span>
              </p>
              <div class="wpcf7-response-output" aria-hidden="true">
                One or more fields contain invalid data. Please check them
                and try again
              </div>
            </form>
          </div>
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
      <div class="graph-modal__content"></div>
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
      <div class="graph-modal__content"></div>
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
      <div class="graph-modal__content"></div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
