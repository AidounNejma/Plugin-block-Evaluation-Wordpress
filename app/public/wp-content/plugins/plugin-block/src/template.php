<?php

	if($_GET['radAnswer']){
		$radio = $_GET['radAnswer'];
	}
	else{
		$radio = 'primary';
	}

	if($_GET['alertText']){
		$text = $_GET['alertText'];
	}
	else{
		$text = 'Ecrivez ici votre texte';
	}

	$alert= ``;
	$alert .= '<div class="alert alert-'. $radio .' alert-dismissible fade show text-center myAlert" role="alert">';
	$alert .= $text;
	$alert .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
	$alert .= '</div>';
?>



<section <?php echo get_block_wrapper_attributes(); ?>>

	<div class="container d-flex flex-column justify-content-center m-auto">

		<?= $alert ?>

		<form>
			<input type="text" placeholder="Écrivez ici votre alerte" class="w-100" name="alertText">

			<div class="containerColors d-flex justify-content-evenly align-items-center py-4">

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Danger</label>
					<input type="radio" name="radAnswer" value="danger"/>
				</div>

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Secondary</label>
					<input type="radio" name="radAnswer" value="secondary"/>
				</div>

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Success</label>
					<input type="radio" name="radAnswer" value="success"/>
				</div>

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Primary</label>
					<input type="radio" name="radAnswer" value="primary"/>
				</div>

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Warning</label>
					<input type="radio" name="radAnswer" value="warning"/>
				</div>

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Info</label>
					<input type="radio" name="radAnswer" value="info"/>
				</div>

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Light</label>
					<input type="radio" name="radAnswer" value="light"/>
				</div>

				<div class="choiceColor d-flex flex-row-reverse">
					<label for="radAnswer">Dark</label>
					<input type="radio" name="radAnswer" value="dark"/>
				</div>

			</div>

			<button type="submit" class="btn btn-dark w-50 submit">
				Envoyer
			</button>
		</form>

	</div>

</section>

