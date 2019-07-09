<section id="feature" class="title-a">
  <div class="title">
    <h2>WHY CHOOSE US</h2>
    <span>Why</span>
  </div>
  <p class="lorem">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</P>
      <div class="container">
        <div class="row ">
          <?php $args = array( 'post_type' => 'Why_choose', 'posts_per_page' => 8); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-md-4 item-why">
            <div class="row why">

                <div class="col-md-2 contend-icon2">
                  <?php $args = get_post_custom( $post_id); ?>
                  <i class="fa <?php echo $args['icon'][0]?>" aria-hidden="true"></i>
                  <span class="fondo"><i class="fa <?php echo $args['icon'][0]?>" aria-hidden="true"></i></span>
                </div>
                <div class="col-md-10">
                  <strong><?php the_title(); ?></strong>
                  <p><?php the_content(); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>




      </div>
    </div>
</section>
  <!-- FIN why -->
