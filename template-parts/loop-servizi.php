<section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
			<?php 
				$loop = new WP_Query( array( 
					'post_type'         => 'post',
					'post_status'       => 'publish',
					'orderby'           => 'count',
					'order'             => 'DESC',
				) );
			while($loop->have_posts()) : $loop->the_post(); ?>	

				<li class="splide__slide">
					<article>
						<img src="<?php echo get_the_post_thumbnail_url();?>" loading=lazy alt="">
						<h4><?php echo the_title();?></h4>
						<p><?php echo the_content();?></p>
					</article>
				</li>
			<?php endwhile; ?>
		</ul>
  </div>
</section>