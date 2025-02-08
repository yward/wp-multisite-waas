<?php
/**
 * Schema for email@update.
 *
 * @package WP_Ultimo\API\Schemas
 * @since 2.0.11
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Schema for email@update.
 *
 * @since 2.0.11
 * @internal last-generated in 2022-12
 * @generated class generated by our build scripts, do not change!
 *
 * @since 2.0.11
 */
return [
	'style'               => [
		'description' => __("The email style. Can be 'html' or 'plain-text'.", 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
		'enum'        => [
			'html',
			'plain-text',
		],
	],
	'schedule'            => [
		'description' => __('Whether or not this is a scheduled email.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
	'type'                => [
		'description' => __('The type being set.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'event'               => [
		'description' => __('The event that needs to be fired for this email to be sent.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'send_hours'          => [
		'description' => __('The amount of hours that the email will wait before is sent.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'send_days'           => [
		'description' => __('The amount of days that the email will wait before is sent.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'schedule_type'       => [
		'description' => __("The type of schedule. Can be 'days' or 'hours'.", 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
		'enum'        => [
			'days',
			'hours',
		],
	],
	'name'                => [
		'description' => __('The name being set as title.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'custom_sender'       => [
		'description' => __('If has a custom sender.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
	'custom_sender_name'  => [
		'description' => __('The name of the custom sender. E.g. From: John Doe.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'custom_sender_email' => [
		'description' => __('The email of the custom sender. E.g. From: johndoe@gmail.com.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'target'              => [
		'description' => __("If we should send this to a customer or to the network admin. Can be 'customer' or 'admin'.", 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
		'enum'        => [
			'customer',
			'admin',
		],
	],
	'send_copy_to_admin'  => [
		'description' => __('Checks if we should send a copy of the email to the admin.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
	'active'              => [
		'description' => __('Set this email as active (true), which means available will fire when the event occur, or inactive (false).', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
	'legacy'              => [
		'description' => __('Whether or not this is a legacy email.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
	'title'               => [
		'description' => __('Post title.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'content'             => [
		'description' => __('Post content.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'excerpt'             => [
		'description' => __('Post excerpt.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'date_created'        => [
		'description' => __('Post creation date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'date_modified'       => [
		'description' => __('Post last modification date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	],
	'migrated_from_id'    => [
		'description' => __('The ID of the original 1.X model that was used to generate this item on migration.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	],
	'skip_validation'     => [
		'description' => __('Set true to have field information validation bypassed when saving this event.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	],
];
