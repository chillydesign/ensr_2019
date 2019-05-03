<!-- footer -->
<?php $tdu = get_template_directory_uri(); ?>
<footer class="footer" role="contentinfo">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Contactez-nous</h3>
          <p>Voyages d’affaires  <br>
            +41 (0)22 929 8 929 <br>
            <a href="mailto:business@e-travel.ch">business@e-travel.ch</a>
          </p>

          <p>Voyages d’agrément <br>
            +41 (0)22 707 73 10 <br>
            <a href="mailto:tourisme@e-travel.ch">tourisme@e-travel.ch</a>
          </p>
          <a target="_blank" href="
          https://www.facebook.com/executivetravelsa/?__tn__=%2Cd%2CP-R&eid=ARBxt-MXwp6WQzXa20F1xBpmDbwQs0rktKA252qvw22xBOJZmdRrAN7UdpuUT3vHZlyW-GxAi4uKZctj" class="social_icon fb_footer">Facebook</a>
          <a target="_blank"  href="https://www.instagram.com/executive_travel_geneve" class="social_icon insta_footer">Instagram</a>
          <div class="fb-like" data-href="https://www.facebook.com/executivetravelsa/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true" style="position: relative; top: 14px;"></div>
        </div>
        <div class="col-sm-8">
          <h3>Newsletter</h3>
          <p>Pour être tenu au courant de nos promotions et actualités vous pouvez vous inscrire à notre newsletter ici </p>
          <?php $form_widget = new \MailPoet\Form\Widget();
            echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
          ?>

          <div id="garantie_suisse">
              <img src="<?php echo $tdu; ?>/img/logo_garantie_suisse.jpg" alt="logo fond de garantie suisse" />
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="footer_bottom">
    <p class="container">
      &copy; <?php echo date('Y'); ?> Copyright ©<?php bloginfo('name'); ?> | Website by <a href="//webfactor.ch" title="Webfactor">Webfactor</a>
    </p>
  </div>

</footer>
<!-- /footer -->

</div><!-- END OF rest_of_page -->

<?php wp_footer(); ?>


<script>
// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
// ga('send', 'pageview');
</script>

</body>
</html>
