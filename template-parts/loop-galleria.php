<div class="splide" aria-labelledby="carousel-heading">
  <div class="splide__track">
		<ul class="splide__list">
			<?php 
				$loop = new WP_Query( array( 
					'post_type'         => 'galleria',
					'post_status'       => 'publish',
					'orderby'           => 'count',
					'order'             => 'DESC',
				) );
			while($loop->have_posts()) : $loop->the_post(); ?>	

				<li class="splide__slide">
                    <article>
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    </article>
				</li>
			<?php endwhile; ?>
		</ul>
  </div>
</div>