      <footer class="footer">
        <div class="container footer__container">
          <a href="" class="logo footer__logo"
            ><img
              src="/wp-content/themes/Big-Conference/img/logo.svg"
              alt="Big Conference logo"
              class="logo__image"
          /></a>
          <nav class="nav footer__nav" title="Footer Navigation">
            <ul class="list-reset nav__list">
              <li class="nav__item">
                <a href="https://confbig.com/wp-content/uploads/2024/05/Terms-and-Conditions.pdf" target="_blank" class="nav__link"><?php echo asl()->translate('terms');?></a>
              </li>
              <li class="nav__item">
                <a href="https://confbig.com/wp-content/uploads/2024/05/Privacy-Policy.pdf" target="_blank" class="nav__link"><?php echo asl()->translate('privacy');?></a>
              </li>
            </ul>
          </nav>
          <span class="footer__copyright"
            >© All rights reserved <?php echo date("Y"); ?> confbig.com</span
          >
        </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>