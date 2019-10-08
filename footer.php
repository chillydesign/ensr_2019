<!-- footer -->
<?php $tdu = get_template_directory_uri(); ?>


<footer role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3><?php echo translateString('Liens utiles'); ?></h3>
                <ul>
                    <?php chilly_nav('footer-navigation'); ?>
                </ul>

                <?php get_template_part('social_links'); ?>

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
                    <strong>Email :</strong>  info(at)ensr.ch
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


</main>


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
