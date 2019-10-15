
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
            <?php $end_date = get_field('end_date'); ?>
            <?php $post_classes = array(); ?>
            <?php $has_pic = (($p + floor($p / 4)) % 2);   // 4 is number of cols  same as in_array( $p, array(1,3,4,6)?>
            <?php
            if ($has_pic) {
                array_push($post_classes, 'event_with_picture');
            }
            if ($p >= 4) {
                array_push($post_classes, 'hide_on_mobile');
            }
            ?>
            <?php $style = ($has_pic) ? 'style="background-image:url(' . thumbnail_of_post_url(get_the_ID(), 'medium') . ')"' : ''; ?>
            <li class="ensr_event <?php echo implode($post_classes, ' ');  ?>"  <?php echo $style; ?>>
                <a href="<?php echo get_the_permalink(); ?>">
<div class="dates_container">
                  <?php if ($date) : ?>
                      <div class="date_container <?php if ($end_date) : ?>side_date_container<?php endif; ?>">
                          <?php
                          $event_date  = new DateTime($date);
                          // $event_date->format('l')
                          $day =  strftime("%A", $event_date->getTimestamp());
                          $date =  strftime("%d", $event_date->getTimestamp());
                          $month =  strftime("%B", $event_date->getTimestamp());
                          ?>
                          <div class="day"><?php echo $day ; ?></div>
                          <div class="date"><?php echo $date; ?></div>
                          <div class="month"><?php echo $month; ?></div>
                      </div>
                  <?php endif; ?>

                  <?php if ($end_date ) : ?>
                      <div class="date_container side_date_container">
                          <?php
                          $end_event_date  = new DateTime($end_date);
                          // $event_date->format('l')
                          $end_day =  strftime("%A", $end_event_date->getTimestamp());
                          $end_date =  strftime("%d", $end_event_date->getTimestamp());
                          $end_month =  strftime("%B", $end_event_date->getTimestamp());
                          ?>
                          <div class="day"><?php echo $end_day ; ?></div>
                          <div class="date"><?php echo $end_date; ?></div>
                          <div class="month"><?php echo $end_month; ?></div>
                      </div>
                  <?php endif; ?>
                  </div>

                    <div class="event_content">
                        <p><?php echo get_the_excerpt(); ?> </p>
                    </div>
                </a>
            </li>
            <?php $p++; endwhile; // end while of news loop?>

        </ul>
        <?php else: ?>
        <p><?php echo translateString("Pas encore d'évènements"); ?></p>
        <?php endif;  // end if have news ?>



    </div><!--  END OF .container -->
    <div class="shield_background"></div>

<?php wp_reset_query(); ?>
