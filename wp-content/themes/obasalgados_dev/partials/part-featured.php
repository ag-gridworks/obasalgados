<section id="featured">
	<div class="featured-container">
		<!-- About US -->
		<article class="about-us">
			<div class="block block-about-us" style="
				background-image: url('<?php the_field("icon") ?>');
			">
				<div class="title">
					<?php the_field("title") ?>
				</div>

				<div class="divider"></div>

				<div class="text">
					<?php the_field("text") ?>
				</div>
			</div>

			<figure class="block img">
				<img src="<?php the_field("featured_image") ?>">
			</figure>
		</article>

		<!-- Order -->
		
		<article class="order" style="
			background-image: url('<?php the_field("price_icon") ?>');
		">
			<div class="box price">
				R$40 <br> <span>O CENTO</span>
			</div>

			<div class="box button">
				<div class="go-button">
					COMO PEDIR OS SEUS SALGADOS?
				</div>
			</div>
		</article>

		<!-- Steps -->

		<article class="steps">
			<div class="box" style="
				background-image: url('<?php the_field("box-1-icon") ?>');
			">
				<div class="title">
					<?php the_field("box-1-title") ?>
				</div>

				<div class="text">
					<?php the_field("box-1-text") ?>
				</div>
			</div>

			<div class="box" style="
				background-image: url('<?php the_field("box-2-icon") ?>');
			">
				<div class="title">
					<?php the_field("box-2-title") ?>
				</div>

				<div class="text">
					<?php the_field("box-2-text") ?>
				</div>
			</div>

			<div class="box" style="
				background-image: url('<?php the_field("box-3-icon") ?>');
			">
				<div class="title">
					<?php the_field("box-3-title") ?>
				</div>

				<div class="text">
					<?php the_field("box-3-text") ?>
				</div>
			</div>

		
		</article>
	</div>
</section>