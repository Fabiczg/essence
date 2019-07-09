<!-- 	BANNER   -->
<section id="home-slide">
  <?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 5); ?>
  <?php $loop = new WP_Query( $args ); ?>
    <div class="single-item">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="box-slide-item">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <div class="box-slide-mask"><h1 class="textito"><?php the_title(); ?></h1>
        </div>
      </div>
    <?php endwhile; ?>

    </div>
  </div>
</section>

<!--  FIN	BANNER   -->
