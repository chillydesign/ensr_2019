<!-- footer -->



<footer role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3><?php echo translateString('Liens utiles'); ?></h3>
                <ul>
                    <?php chilly_nav('footer-navigation'); ?>
                </ul>

                <?php get_template_part('social_links'); ?>
                <a href="<?php echo get_template_directory_uri(); ?>/images/accreditation.pdf" target="_blank" style="display:block;" alt="accreditation"><img alt="accreditation" src="<?php echo get_template_directory_uri(); ?>/images/accreditation-ensr.png" style="box-shadow:none; margin:-8px 0 0"/></a>

            </div>
            <div class="col-sm-4">
                <h3><?php echo translateString('Nous trouver'); ?></h3>
                <p>
                    Ecole Nouvelle de la Suisse Romande <br>
                    Ch. de Rovéréaz 20  <br>
                    C.P. 161 CH – 1000 Lausanne 12   <br>
                    Suisse
                </p>
            </div>
            <div class="col-sm-4">
                <h3><?php echo translateString('Nous contacter'); ?></h3>
                <p>
                    <strong>Tel :</strong> +41 21 654 65 00 <br>
                    <strong>Fax :</strong> +41 21 654 65 05 <br>
                    <strong>Email :</strong><a href="mailto:info@ensr.ch" target="_blank">
                      <?php if (site_language() == 'en') : ?>
                        General enquiries
                      <?php else : ?>
                        Demandes générales
                      <?php endif; ?>
                    </a> | <a href="mailto:admissions@ensr.ch" target="_blank">
                      <?php if (site_language() == 'en') : ?>
                        Admissions
                      <?php else : ?>
                        Admissions
                      <?php endif; ?>
                    </a>
                </p>




            </div>
        </div>
    </div><!--  END OF .container -->




    <div id="copyright_notice">
        <div class="container">
            <p>&copy; Ecole Nouvelle de la Suisse Romande |  <a href="https://webfactor.ch" target="_blank">Website by Webfactor</a></p>
        </div>
    </div>

    <div class="footer_background"></div>
</footer>

<?php if(false) :?>
<?php if (site_language() == 'en') { ?>
  <div id="popupportesouvertes" style="display:none; position: fixed; top: 0; left: 0; right: 0; background: rgba(0,0,0,0.8); z-index: 9999;">
  <div style="display:table; width: calc(100vw - 60px); margin: 30px auto; height: calc(100vh - 60px); background-image: url(<?php echo get_template_directory_uri();?>/images/ENSR-open-house.jpg); background-size: contain; background-position: center; background-repeat: no-repeat;">
    <div style="display: table-cell;vertical-align: middle;padding-top: 160px;">
      <div style="width: 300px;margin: auto;text-align: center;padding: 20px;background: rgba(34, 46, 105, 0.95);color: white;">
          <h2 style="color: #7aa2d6;border-bottom: solid 1px white;padding-bottom: 5px;margin: 5px -20px 15px;">Kindly note:</h2>
          <p>This event has been postponed until further notice. <br>To arrange a school tour please contact us on:<br> <a href="mailto:admissions@ensr.ch" style="color: #7aa2d6;">admissions@ensr.ch</a>
          </p>
      </div>
    </div>
  </div>
</div>
<?php } else { ?>
  <div id="popupportesouvertes" style="display:none; position: fixed; top: 0; left: 0; right: 0; background: rgba(0,0,0,0.8); z-index: 9999;">
    <div style="display:table; width: calc(100vw - 60px); margin: 30px auto; height: calc(100vh - 60px); background-image: url(<?php echo get_template_directory_uri();?>/images/ENSR-portes-ouvertes.jpg); background-size: contain; background-position: center; background-repeat: no-repeat;">
      <div style="display: table-cell;vertical-align: middle;padding-top: 160px;">
        <div style="width: 300px;margin: auto;text-align: center;padding: 20px;background: rgba(34, 46, 105, 0.95);color: white;">
            <h2 style="color: #7aa2d6;border-bottom: solid 1px white;padding-bottom: 5px;margin: 5px -20px 15px;">Veuillez noter :</h2>
            <p>Cet événement a été reporté jusqu’à nouvel ordre. <br>Pour organiser une visite de l’école, veuillez nous contacter à l’adresse suivante :<br> <a href="mailto:admissions@ensr.ch" style="color: #7aa2d6;">admissions@ensr.ch</a>
            </p>
        </div>
      </div>
    </div>
  </div>
<?php } ?>



<?php $show_popup = get_field('show_popup', 'option'); ?>
<?php if ($show_popup): ?>
<div class="popup"  id="home_page_message">
    <div class="popup_message">
        <div class="popup_content">
        <?php if (site_language() == 'en') {
            echo get_field('texte_en', 'option');
            } else {
            echo get_field('texte_fr', 'option');
            } ?>
            <a href="#" class="cancel_message">X</a>
        </div>
    </div>
</div>
<style>
/* .popup_message:after {
background-image:url('<?php // echo get_field('image', 'option')['sizes']['large']; ?>');
}  */
</style>
<?php endif; ?>
<?php endif; ?>

<?php get_template_part('partial_ib_banner'); ?>
<?php get_template_part('partial_side_contact'); ?>

</main>


<?php wp_footer(); ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93933334-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93933334-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-93933334-1');
</script>

</body>
</html>
