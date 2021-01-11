<section id="<?php block_field( 'section-id' ); ?>" class="section <?php block_field( 'section-class' ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
				<h2 class="<?php block_field( 'section-title-class' ); ?>"><?php block_field( 'section-title' ); ?></h2>
            </div>
            <div class="col-md-8">
				<p class="lead"><?php block_field( 'section-text-lead' ); ?></p>
				<?php block_field( 'section-text' ); ?>
            </div>
        </div>
    </div>
</section>
