
<?php $category_id =  get_sub_field('categorie'); ?>
<?php $titre =  get_sub_field('title'); ?>

<?php  $news_loop = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => -1 ,
    'meta_key' => 'date',
    'orderby' => 'meta_value', // ORDER BY DATE FROM  OLDEST TO NEWEST
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => $category_id,
        ),
    )
)); ?>




<div class="container" id="section_actualites">
    <div class="row title_row">
        <div class="col-sm-6 col-sm-push-3" >
            <h2><?php echo $titre; ?></h2>
        </div>

        <div class="col-sm-3 col-sm-pull-6">
            <!-- <a href="#" class="button">Toute l'actualité </a> -->
        </div>

        <div class="col-sm-3">
            <!-- <a href="#" class="button">Calendrier</a> -->
        </div>
    </div><!--  END OF ROW -->


    <?php if ($news_loop->have_posts()) : ?>

    <ul>
        <?php $p = 0; while ($news_loop->have_posts()) : $news_loop->the_post(); ?>
            <?php $date = get_field('date'); ?>
            <?php $end_date = get_field('end_date');  ?>
            <?php $read_more = get_field('read_more');  ?>
            <?php $post_classes = array(); ?>
            <?php $has_pic = (($p + floor($p / 4)) % 2);   // 4 is number of cols  same as in_array( $p, array(1,3,4,6)?>
            <?php
            if ($has_pic) {
                array_push($post_classes, 'event_with_picture');
            }
            ?>
            <?php $style = ($has_pic) ? 'style="background-image:url(' . thumbnail_of_post_url(get_the_ID(), 'medium') . ')"' : ''; ?>
            <li class="ensr_event <?php echo implode($post_classes, ' ');  ?>"  <?php echo $style; ?>>
            <div class="ensr_event_inner">
        <?php if ($read_more): ?>  <a href="<?php echo get_the_permalink(); ?>"> <?php endif; ?>
                <div class="dates_container">
                  <?php if ($date) : ?>
                  <?php echo dateToEventDate($date, ''); ?>
                  <?php endif; ?>

                  <?php if ($end_date ) : ?>
                  <?php echo dateToEventDate($end_date, 'end_date_container'); ?>
                  <?php endif; ?>
                  </div>

                    <div class="event_content">
                        <p><?php echo get_the_excerpt(); ?> </p>
                        <?php if ($read_more): ?>
                        <p class="button"> <?php echo translateString('Lire plus'); ?></p>
                 <?php endif; ?>
              </div>
        <?php if ($read_more): ?> </a> <?php endif; ?>
            </div>
               
            </li>
            <?php $p++; endwhile; // end while of news loop?>

        </ul>
        <?php else: ?>
        <p><?php echo translateString("Pas encore d'évènements"); ?></p>
        <?php endif;  // end if have news ?>



    </div><!--  END OF .container -->
    <div class="shield_background"></div>

<?php wp_reset_query(); ?>
