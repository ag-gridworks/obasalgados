<?php 
$args = array(
'post_type' => 'produtos',
'posts_per_page' => -1
);
?>

<?php $the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<section class="go-products animated">

	<div class="title">
		Nossos Salgados
	</div>

	<div class="divider center"></div>

		<div class="products">

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
			<figure class="product" style="
			background-image: url('<?php the_field("product_image") ?>');
			">
				<figcaption>
					<div class="title">
						<?php the_title(); ?>
					</div>

					<?php $id = get_the_ID(); ?>

					<button class="hide" id="<?php echo $id ?>" class="add-to-cart">
					<input class="product_id" type="hidden" id="<?php echo $id ?>" data-name="<?php the_title() ?>">
						Adicionar a cesta
					</button>
				</figcaption>
			</figure>

		<?php endwhile; ?>

		</div>
	</section>
<?php endif; ?>