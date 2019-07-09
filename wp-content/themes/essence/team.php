<!-- TEAM -->
<section id="our-team" class="team">
  <div class="container">
    <div class="title-a">
      <div class="title">
        <h2>OUR TEAM</h2>
        <span>Team</span>
      </div>
      <p class="lorem">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
    </div>
    <div class="row">
      <?php $args = array( 'post_type' => 'Team', 'posts_per_page' => 8); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-md-3">
        <div class="team-card">
          <div class="contend-img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
          <div class="contend-text text-center">
            <strong><?php the_title(); ?></strong>
            <p><?php the_content(); ?></p>
            <div class="team-red">
              <?php $args = get_post_custom( $post_id); ?>
              <?php if ($args['link_de_facebook'][0] == true ): ?>
                <a href="<?php echo $args['link_de_facebook'] [0]?>" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if ($args['link_de_twitter'][0] == true ): ?>
                <a href="<?php echo $args['link_de_twitter'] [0]?>" class="twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if ($args['link_de_google'][0] == true ): ?>
                <a href="<?php echo $args['link_de_google'] [0]?>" class="google-plus" ><i class="fa fa-google" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if ($args['link_de_ig'][0] == true ): ?>
                <a href="<?php echo $args['link_de_ig'] [0]?>" class="instagram" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<!-- FIN TEAM -->
