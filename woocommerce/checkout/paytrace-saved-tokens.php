<?php
/**
 * PayTrace Payment Form Saved Tokens Template
 *
 * Override this template by copying it to yourtheme/woocommerce/checkout/paytrace-saved-tokens.php
 *
 * @var array  $tokens
 * @var array  $gateway_id
 * @var string $token_type 'card' or 'check' The type of the tokens
 *
 * @version 1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Make sure we have the vital variables
$tokens = isset( $tokens ) && is_array( $tokens ) ? $tokens : array();

// The token type will differentiate between the two types payment forms 'card' and 'check'
$token_type = isset( $token_type ) ? $token_type : 'card';

?>
<div class="woocommerce-paytrace-SavedPaymentMethods-wrapper <?php echo esc_attr( $token_type ); ?>">
	<?php if ( ! empty( $tokens ) ) { ?>
		<span class="paytrace_manage_tokens help" style="text-align: right; display: block;">
			<a href="<?php echo esc_url( WC_Paytrace_Manage_Cards::manage_tokens_url( $token_type ) ); ?>" class="button">
				<?php echo esc_html( sprintf( __( 'Manage %s', WC_Paytrace::TEXT_DOMAIN ), 'card' == $token_type ? _x( 'Cards', 'token manage button', WC_Paytrace::TEXT_DOMAIN ) : _x( 'Checks', 'token manage button', WC_Paytrace::TEXT_DOMAIN ) ) ); ?>
			</a>
		</span>
	<?php } ?>
	<ul class="woocommerce-paytrace-SavedPaymentMethods-<?php echo esc_attr( $token_type ); ?> wc-saved-payment-methods" data-count="<?php echo esc_attr( count( $tokens ) ) ?>">
		<?php
		/**
		 * @var \WC_Paytrace_Token $card
		 */
		$keys        = array_keys( $tokens );
		$set_checked = false;
		foreach ( $tokens as $n => $card ) { ?>
			<li class="woocommerce-paytrace-SavedPaymentMethods-token">
				<label for="wc-<?php echo esc_attr( $gateway_id ); ?>-payment-token-<?php echo esc_attr( $token_type ); ?>-<?php echo $card->get_id(); ?>">
					<input id="wc-<?php echo esc_attr( $gateway_id ); ?>-payment-token-<?php echo esc_attr( $token_type ); ?>-<?php echo $card->get_id(); ?>"
					       type="radio"
					       name="wc-<?php echo esc_attr( $gateway_id ); ?>-payment-<?php echo esc_attr( $token_type ); ?>-token"
					       value="<?php echo $card->get_id(); ?>"
					       style="width:auto;"
					       class="woocommerce-paytrace-SavedPaymentMethods-tokenInput"
						<?php
						// Needed some solution for legacy tokens because we did not previously have is_default
						if ( $card->get_is_default() || ( end( $keys ) == $n && ! $set_checked ) ) {
							$set_checked = true;
							checked( true );
						} ?>
					/>
					<?php echo wp_kses( $card->get_display_name(), apply_filters( 'wc_paytrace_label_allowed_elements', array(
						'strong' => array(),
						'em'     => array(),
						'b'      => array(),
						'i'      => array( 'class' => array() ),
						'span'   => array( 'class' => array() ),
						'img'    => array(
							'src' => array(),
							'alt' => array(),
						),
					) ) ) ?>
				</label>
			</li>
		<?php } ?>
		<li class="woocommerce-paytrace-SavedPaymentMethods-<?php echo esc_attr( $token_type ); ?>-new">
			<label for="wc-<?php echo esc_attr( $gateway_id ); ?>-payment-token-<?php echo esc_attr( $token_type ); ?>-new">
				<input id="wc-<?php echo esc_attr( $gateway_id ); ?>-payment-token-<?php echo esc_attr( $token_type ); ?>-new"
				       type="radio"
				       name="wc-<?php echo esc_attr( $gateway_id ); ?>-payment-<?php echo esc_attr( $token_type ); ?>-token"
				       value="new"
				       style="width:auto;"
				       class="woocommerce-paytrace-SavedPaymentMethods-tokenInput"
					<?php checked( $set_checked, false ); ?>
				/>
				<?php echo esc_html( __( 'Use a new payment method', WC_Paytrace::TEXT_DOMAIN ) ); ?>
			</label>
		</li>
	</ul>

	<div class="clear"></div>
</div>