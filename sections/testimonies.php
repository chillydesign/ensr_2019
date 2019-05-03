<?php $titre = get_sub_field('titre'); ?>
<?php $testimonials = get_sub_field('testimonials'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-push-2">

            <h2><?php echo $titre; ?></h2>

            <div class="testimonials">


                <?php foreach ($testimonials as $testimonial): ?>

                    <div class="testimonial">
                        <?php $content = $testimonial['content']; ?>
                        <?php $client = $testimonial['client']; ?>

                        <blockquote>
                            <?php echo $content; ?>
                        </blockquote>
                        <cite>
                            <?php echo $client; ?>
                        </cite>

                    </div>
                <?php endforeach; ?>


            </div>


        </div>
    </div>
</div>
