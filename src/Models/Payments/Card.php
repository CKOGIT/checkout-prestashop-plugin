<?php

namespace CheckoutCom\PrestaShop\Models\Payments;

use CheckoutCom\PrestaShop\Helpers\Debug;
use CheckoutCom\PrestaShop\Models\Config;
use Checkout\Models\Payments\TokenSource;

class Card extends Method {

	/**
	 * Process payment.
	 *
	 * @param      array    $params  The parameters
	 *
	 * @return     Response  ( description_of_the_return_value )
	 */
	public static function pay(array $params) {

		$source = new TokenSource($params['token']);
		$payment = static::makePayment($source);

		return static::request($payment);

	}

	/**
	 * Get Meta information.
	 *
	 * @param      \Context  $context  The context
	 *
	 * @return     Metadata  The metadata.
	 */
	protected static function getMetadata(\Context $context) {

		$metadata = parent::getMetadata($context);

		//@todo add mada

		return $metadata;

	}

}
