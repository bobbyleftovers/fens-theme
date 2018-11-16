<?php
/**
 * Template displaying the radio buttons to switch between Cards and Checks payment forms
 *
 * Override this template by copying it to yourtheme/woocommerce/checkout/paytrace-switch-forms.php
 *
 * @version 1.0.1
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="paytrace_payment_choices" class="paytrace_payment_choices">
	<div>
		<?php _e( 'How would you like to pay?', WC_Paytrace::TEXT_DOMAIN ); ?>
		<div class="wc_payment_choice_selection_wrapper">
			<label for="paytrace_card_choice">
				<input type="radio" id="paytrace_card_choice" checked="checked" value="card" name="paytrace_type_choice">
				<?php _e( 'Card', WC_Paytrace::TEXT_DOMAIN ); ?>
			</label>

			<label for="paytrace_check_choice">
				<input type="radio" id="paytrace_check_choice" value="check" name="paytrace_type_choice">
				<?php _e( 'Check', WC_Paytrace::TEXT_DOMAIN ); ?>
			</label>

		</div>
	</div>
</div>