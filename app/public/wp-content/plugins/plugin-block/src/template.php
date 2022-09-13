{# Pour gérer l'affichage de mon plugin sur le site #}
<div <?php echo get_block_wrapper_attributes(); ?>>

		<div class="alert alert-<?= $attributes['radio']?> alert-dismissible fade show text-center myAlert" role="alert">
			<p class="contentAlert text-center"><?= $attributes['content']?></p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

</div>
