/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({attributes, setAttributes}) {

	const options = [
		{
			label: "Danger",
			value: "danger",
		},
		{
			label: "Secondary",
			value: "secondary",
		},
		{
			label: "Success",
			value: "success",
		},
		{
			label: "Primary",
			value: "primary",
		},
		{
			label: "Warning",
			value: "warning",
		},
		{
			label: "Info",
			value: "info",
		},
		{
			label: "Light",
			value: "light",
		},
		{
			label: "Dark",
			value: "dark",
		},
	];


	const EditRadio = event => {
		setAttributes( {radio: event.target.value });
	}

	const EditAlert = event => {
		setAttributes({content : event.target.value});
	}

	return (
		<div class="container d-flex flex-column justify-content-center m-auto">

			<div className={"alert alert-" + attributes.radio + " alert-dismissible fade show text-center myAlert"} role="alert">
				<p class="contentAlert">{attributes.content}</p>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

			<form>
				<input type="text" onChange={EditAlert} value={attributes.content} class="w-100" name="alertText"/>

				<div class="containerColors d-flex justify-content-evenly align-items-center py-4">
				{options.map((option) => (
					<div class="choiceColor d-flex flex-row-reverse">
						<label for="radAnswer">{option.label}</label>
						<input type="radio" name="radAnswer" className={option.value} onChange={EditRadio}  value={option.value}/>
				  	</div>
            	))}

				</div>
			</form>

		</div>
	);
}

