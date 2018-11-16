<?php
/**
 * PayTrace Checks Form Template
 *
 * Override this template by copying it to yourtheme/woocommerce/checkout/paytrace-checks-form.php
 *
 * @var int $gateway    (Deprecated) Gateway ID. Will not hold only the ID in the future versions
 * @var int $gateway_id Gateway ID
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$show_name_on_echeck = isset( $show_name_on_echeck ) ? $show_name_on_echeck : false;

$fields = array(
	'name-on-echeck'      => '<p class="form-row form-row-wide">
		<label for="' . esc_attr( $gateway_id ) . '-name-on-echeck">' . __( "Name on eCheck", WC_Paytrace::TEXT_DOMAIN ) . ' <span class="required">*</span></label>
		<input id="' . esc_attr( $gateway_id ) . '-name-on-echeck" class="input-text wc-credit-card-form-name-on-echeck" type="text" autocomplete="name" inputmode="verbatim" autocorrect="no" autocapitalize="no" spellcheck="no" placeholder="' . __( "Name on eCheck", WC_Paytrace::TEXT_DOMAIN ) . '" name="' . $gateway_id . '-name-on-echeck" />
	</p>',
	'check-routing-field' => '<p class="form-row form-row-first">
		<label
			for="' . esc_attr( $gateway ) . '-echeck-routing-number">'
	                         . __( "eCheck Routing Number", WC_Paytrace::TEXT_DOMAIN ) . '
				<span class="required">*</span>
		</label>
		<input
			id="' . esc_attr( $gateway ) . '-echeck-routing-number"
			class="input-text paytrace-echeck-routing-number"
			type="tel"
			autocomplete="off"
			placeholder="Routing Number"
			name="' . esc_attr( $gateway ) . '-echeck-routing-number" />
	</p>',
	'check-account-field' => '<p class="form-row form-row-last">
		<label
			for="' . esc_attr( $gateway ) . '-echeck-account-number">'
	                         . __( "eCheck Account Number", WC_Paytrace::TEXT_DOMAIN ) . '
				<span class="required">*</span>
		</label>
		<input
			id="' . esc_attr( $gateway ) . '-echeck-account-number"
			class="input-text paytrace-echeck-account-number"
			type="text"
			autocomplete="off"
			placeholder="' . __( "Account Number", WC_Paytrace::TEXT_DOMAIN ) . '"
			name="' . esc_attr( $gateway ) . '-echeck-account-number" />
	</p>',
);

$fields = apply_filters( 'wc_paytrace_echeck_fields', $fields, $gateway_id, $show_name_on_echeck );

// Remove the name on card from the fields
if ( ! $show_name_on_echeck ) {
	unset( $fields['name-on-echeck'] );
}

?>
<div class="clear"></div>
<fieldset id="<?php echo $gateway; ?>-checks-form" style="display: none;">
	<?php do_action( 'wc_paytrace_echeck_form_before', $gateway_id ); ?>
	<?php
	foreach ( $fields as $field ) {
		echo $field;
	}
	?>
	<div class="clear"></div>
	<?php do_action( 'wc_paytrace_echeck_form_after', $gateway_id ); ?>
</fieldset>