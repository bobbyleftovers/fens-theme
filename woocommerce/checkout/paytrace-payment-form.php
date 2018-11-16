<?php
/**
 * Paytrace Payment Form Template
 *
 * Override this template by copying it to yourtheme/woocommerce/checkout/paytrace-payment-form.php
 *
 * @var string $gateway            (Deprecated) The gateway ID. The variable will be removed or will not hold only the ID
 * @var string $gateway_id         The gateway ID
 * @var string $save_card_text     The text chosen for the save cards prompt
 * @var bool   $show_save_customer Should we show the customer save card prompt
 * @var bool   $show_cvc           Should we show the CVC field
 * @var bool   $use_encrypted      Are we using encrypted values
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$show_cvc          = isset( $show_cvc ) ? $show_cvc : true;
$show_name_on_card = isset( $show_name_on_card ) ? $show_name_on_card : false;
$card_exp_class    = $show_cvc ? 'form-row-first' : 'form-row-wide';

wp_enqueue_script( 'wc-credit-card-form' );

// Name on Card field
if ( $show_name_on_card ) {
	$fields['name-on-card'] = '<p class="form-row form-row-wide paytrace-name-on-card-wrapper">
		<label for="' . esc_attr( $gateway_id ) . '-name-on-card">' . __( "Name on Card", WC_Paytrace::TEXT_DOMAIN ) . ' <span class="required">*</span></label>
		<input id="' . esc_attr( $gateway_id ) . '-name-on-card" class="input-text wc-credit-card-form-name-on-card" type="text" autocomplete="cc-name" inputmode="verbatim" autocorrect="no" autocapitalize="no" spellcheck="no" placeholder="' . __( "Name on Card", WC_Paytrace::TEXT_DOMAIN ) . '" name="' . $gateway_id . '-name-on-card" />
	</p>';
}

// Number field
$fields['card-number-field'] = '<p class="form-row form-row-wide paytrace-number-wrapper">
		<label for="' . esc_attr( $gateway_id ) . '-card-number">' . __( "Card Number", WC_Paytrace::TEXT_DOMAIN ) . ' <span class="required">*</span></label>
		<input id="' . esc_attr( $gateway_id ) . '-card-number" class="input-text wc-credit-card-form-card-number" type="tel" maxlength="20" autocomplete="cc-number" inputmode="numeric" autocorrect="no" autocapitalize="no" spellcheck="no" placeholder="•••• •••• •••• ••••"';
$fields['card-number-field'] .= $use_encrypted ? '' : 'name="' . $gateway_id . '-card-number"';
$fields['card-number-field'] .= '/> </p>';

// Encrypted number field
if ( $use_encrypted ) {
	$fields['card-number-encrypted-field'] = '<input id="' . esc_attr( $gateway_id ) . '-card-number-encrypted" class="input-text wc-credit-card-form-card-number-encrypted" type="hidden" name="' . $gateway_id . '-card-number-encrypted" />';
}

// Expiry field
$fields['card-expiry-field'] = '<p class="form-row ' . $card_exp_class . ' paytrace-expiry-wrapper">
		<label for="' . esc_attr( $gateway_id ) . '-card-expiry">' . __( "Expiry (MM/YY)", WC_Paytrace::TEXT_DOMAIN ) . ' <span class="required">*</span></label>
		<input id="' . esc_attr( $gateway_id ) . '-card-expiry" class="input-text wc-credit-card-form-card-expiry" type="tel" inputmode="numeric" autocomplete="cc-exp" autocorrect="no" autocapitalize="no" spellcheck="no" placeholder="' . esc_attr( __( 'MM / YY', WC_Paytrace::TEXT_DOMAIN ) ) . '" name="' . esc_attr( $gateway_id ) . '-card-expiry" />
	</p>';

if ( $show_cvc ) {
	// CVC field
	$fields['card-cvc-field'] = '<p class="form-row form-row-last paytrace-cvc-wrapper">
		<label for="' . esc_attr( $gateway_id ) . '-card-cvc">' . __( "Card Code", WC_Paytrace::TEXT_DOMAIN ) . ' <span class="required">*</span></label>
		<input id="' . esc_attr( $gateway_id ) . '-card-cvc" class="input-text wc-credit-card-form-card-cvc" type="tel" inputmode="numeric" autocomplete="off" autocorrect="no" autocapitalize="no" spellcheck="no" maxlength="4" placeholder="' . esc_attr( __( 'CVC', WC_Paytrace::TEXT_DOMAIN ) ) . '" ';
	$fields['card-cvc-field'] .= $use_encrypted ? '' : 'name="' . esc_attr( $gateway_id ) . '-card-cvc"';
	$fields['card-cvc-field'] .= ' /></p>';

	// CVC encrypted field
	if ( $use_encrypted ) {
		$fields['card-cvc-encrypted-field'] = '<input id="' . esc_attr( $gateway_id ) . '-card-cvc-encrypted" type="hidden" class="input-text wc-credit-card-form-card-cvc-encrypted" name="' . esc_attr( $gateway_id ) . '-card-cvc-encrypted" />';
	}
}

//  Save details field
$save_card_fields['save-card-field'] =
	'<div class="create-account ' . esc_attr( $gateway_id ) . '-create-account">
	<p class="form-row form-row-wide">
		<input id="' . esc_attr( $gateway_id ) . '-save-card" style="width:auto;" checked="checked" class="paytrace_save_card" value="1" type="checkbox" name="' . esc_attr( $gateway_id ) . '-save-card" />
		<label for="' . esc_attr( $gateway_id ) . '-save-card" style="display:inline;">' . $save_card_text . ' <span class="required">*</span></label>
	</p></div>';

// Allow fields to be modified
$fields           = apply_filters( 'wc_paytrace_card_fields', $fields, $gateway_id, $show_save_customer, $show_cvc, $show_name_on_card );
$save_card_fields = apply_filters( 'wc_paytrace_save_card_fields', $save_card_fields, $gateway_id, $show_save_customer );

?>
<fieldset id="<?php echo $gateway_id; ?>-cards-form">
	<?php do_action( 'wc_paytrace_form_before', $gateway_id ); ?>
	<?php
	foreach ( $fields as $field ) {
		echo $field;
	}
	?>
	<div class="clear"></div>
	<?php do_action( 'wc_paytrace_form_after', $gateway_id ); ?>
</fieldset>
<?php // Cards are always saved when processing Subscriptions
if ( $show_save_customer ) {
	echo $save_card_fields['save-card-field'];
} ?>
<div class="clear"></div>