<!-- WORKS -->
<section id="our-works" class="title-a works">
<div class="title">
  <h2>OUR WORKS</h2>
  <span>Works</span>
</div>
<p class="lorem">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
<!-- <div class="controls">
  <button class="filter" data-filter="all">ALL</button>
  <button class="filter" data-filter=".category-1">DESIGN</button>
  <button class="filter" data-filter=".category-2">DEVELOPMENT</button>
  <button class="filter" data-filter=".category-3">PRINT</button>
</div> -->


<div id="Container" class="container">
    <div class="row">
      <?php $args = array( 'post_type' => 'Gallery', 'posts_per_page' => 5); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-md-4 mix " >
        <div class="zoom">
          <i class="fa fa-search-plus" aria-hidden="true"></i>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          <div class="mask">
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    </div>



</div>

</section>
<!-- Fin WORKS -->
