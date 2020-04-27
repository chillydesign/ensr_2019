<?php $tdu = get_template_directory_uri(); ?>


<div id="ib_english_banner">
<div class="container">
<a href="<?php echo   esc_url(get_permalink(4974));; ?>">
<img src="<?php echo $tdu; ?>/images/gb.png" alt="GB Flag" />
<img src="<?php echo $tdu; ?>/images/ib2.png" alt="IB Logo" />
<strong><?php echo translateString("Préférez-vous que la langue principale d'enseignement de votre enfant soit l'anglais?"); ?></strong>
<?php echo translateString("Découvrez notre programme en anglais >>"); ?>
</a>
<a href="#" id="cancel_ib_banner">+</a>
<div class="shield_background"></div>
</div>
<div class="cookie_policy">
  <div class="container">
    <?php if (site_language() == 'en') : ?>
      By using this website you are agreeing to our <a target="
      " href="https://ensr.ch/cookie-policy/">cookie policy</a>
    <?php else : ?>
      En utilisant ce site vous acceptez notre <a target="
      " href="https://ensr.ch/fr/politique-dutilisation-des-cookies/">politique d'utilisation des cookies</a>
    <?php endif; ?>
  </div>
</div>
</div>
