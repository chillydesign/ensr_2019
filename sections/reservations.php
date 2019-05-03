<?php $content = get_sub_field('content'); ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php if ($content): ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-3">
                <?php echo $content; ?>
            </div>
        </div>


<ul class="reservation_things">
    <li class="plane">
        <a target="_blank" href="<?php echo site_url(); ?>/reserver-un-vol/"><span></span><em>Vols</em></a>
    </li>
    <li class="sun">
        <a target="_blank" href="https://www.kendros.com/fr/web2web.aspx?W2W=3571346"><span></span><em>Séjours</em></a>
    </li>
    <li class="bed">
        <a target="_blank" href="http://www.hotelpronto.com/?affiliateid=30123"><span></span><em>Hotels</em></a>
    </li>
    <li class="house">
        <a target="_blank" href="https://www2.interhome.ch/fr/recherche/?iniframe=1"><span></span><em>Appartements</em></a>
    </li>
    <li class="car">
        <a target="_blank" href="https://partner.sunnycars.ch/ak/452682/l/CHFR/setLang/chfr/"><span></span><em>Location de voiture</em></a>
    </li>
</ul>


    </div>
<?php endif; ?>
<div class="background_image" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
