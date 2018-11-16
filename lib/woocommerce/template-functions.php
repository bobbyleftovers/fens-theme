<?php
/**
 * Show notice if cart is empty.
 *
 * @since 3.1.0
 */
function bpc_empty_cart_message() {
	echo '<p class="cart-empty">' . wp_kses_post( apply_filters( 'wc_empty_cart_message', __( 'YWeel, your cart is currently empty.', 'woocommerce' ) ) ) . '</p>';
}