<?php
/**
 * Schema for payment@create.
 *
 * @package WP_Ultimo\API\Schemas
 * @since 2.0.11
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

use WP_Ultimo\Database\Payments\Payment_Status;

/**
 * Schema for payment@create.
 *
 * @since 2.0.11
 * @internal last-generated in 2022-12
 * @generated class generated by our build scripts, do not change!
 *
 * @since 2.0.11
 */
return [
	'customer_id'                 => [
		'description' => __('The ID of the customer attached to this payment.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => true,
	],
	'membership_id'               => [
		'description' => __('The ID of the membership attached to this payment.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => true,
	],
	'parent_id'                   => [
		'description' => __('The ID from another payment that this payment is related to.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	],
	'currency'                    => [
		'description' => __("The currency of this payment. It's a 3-letter code. E.g. 'USD'.", 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'subtotal'                    => [
		'description' => __('Value before taxes, discounts, fees and other changes.', 'wp-ultimo'),
		'type'        => 'number',
		'required'    => true,
	],
	'refund_total'                => [
		'description' => __('Total amount refunded.', 'wp-ultimo'),
		'type'        => 'number',
		'required'    => false,
	],
	'tax_total'                   => [
		'description' => __('The amount, in currency, of the tax.', 'wp-ultimo'),
		'type'        => 'number',
		'required'    => false,
	],
	'discount_code'               => [
		'description' => __('Discount code used.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'total'                       => [
		'description' => __('This takes into account fees, discounts and credits.', 'wp-ultimo'),
		'type'        => 'number',
		'required'    => true,
	],
	'status'                      => [
		'description' => __("The payment status: Can be 'pending', 'completed', 'refunded', 'partially-refunded', 'partially-paid', 'failed', 'cancelled' or other values added by third-party add-ons.", 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
		'enum'        => Payment_Status::get_allowed_list(),
	],
	'gateway'                     => [
		'description' => __('ID of the gateway being used on this payment.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'product_id'                  => [
		'description' => __('The ID of the product of this payment.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	],
	'gateway_payment_id'          => [
		'description' => __('The ID of the payment on the gateway, if it exists.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'discount_total'              => [
		'description' => __('The total value of the discounts applied to this payment.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	],
	'invoice_number'              => [
		'description' => __('Sequential invoice number assigned to this payment.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	],
	'cancel_membership_on_refund' => [
		'description' => __('Holds if we need to cancel the membership on refund.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
	'date_created'                => [
		'description' => __('Model creation date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'date_modified'               => [
		'description' => __('Model last modification date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'migrated_from_id'            => [
		'description' => __('The ID of the original 1.X model that was used to generate this item on migration.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	],
	'skip_validation'             => [
		'description' => __('Set true to have field information validation bypassed when saving this event.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
];
