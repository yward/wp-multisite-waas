<?php
/**
 * Checkout_Form schema class
 *
 * @package WP_Ultimo
 * @subpackage Database\Checkout_Forms
 * @since 2.0.0
 */

namespace WP_Ultimo\Database\Checkout_Forms;

use WP_Ultimo\Database\Engine\Schema;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Checkout_Forms Schema Class.
 *
 * @since 2.0.0
 */
class Checkout_Forms_Schema extends Schema {

	/**
	 * Array of database column objects
	 *
	 * @since  2.0.0
	 * @access public
	 * @var array
	 */
	public $columns = [

		[
			'name'     => 'id',
			'type'     => 'bigint',
			'length'   => '20',
			'unsigned' => true,
			'extra'    => 'auto_increment',
			'primary'  => true,
			'sortable' => true,
		],

		[
			'name'       => 'name',
			'type'       => 'varchar',
			'searchable' => true,
			'sortable'   => true,
			'transition' => true,
		],

		[
			'name'       => 'slug',
			'type'       => 'tinytext',
			'default'    => '',
			'searchable' => true,
			'sortable'   => true,
			'transition' => true,
		],

		[
			'name'       => 'active',
			'type'       => 'tinyint',
			'length'     => '4',
			'unsigned'   => true,
			'default'    => 1,
			'transition' => true,
			'sortable'   => true,
		],

		[
			'name'       => 'settings',
			'type'       => 'longtext',
			'default'    => '',
			'transition' => true,
			'allow_null' => false,
		],

		[
			'name'       => 'custom_css',
			'type'       => 'longtext',
			'default'    => '',
			'allow_null' => true,
		],

		[
			'name'       => 'allowed_countries',
			'type'       => 'text',
			'default'    => '',
			'allow_null' => true,
		],

		[
			'name'       => 'date_created',
			'type'       => 'datetime',
			'default'    => null,
			'created'    => true,
			'date_query' => true,
			'sortable'   => true,
			'allow_null' => true,
		],

		[
			'name'       => 'date_modified',
			'type'       => 'datetime',
			'default'    => null,
			'modified'   => true,
			'date_query' => true,
			'sortable'   => true,
			'allow_null' => true,
		],

	];
}
