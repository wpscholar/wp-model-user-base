<?php

namespace wpscholar\WordPress;

/**
 * Class UserModelBase
 *
 * @package wpscholar\WordPress
 */
abstract class UserModelBase {

	/**
	 * @var \WP_User
	 */
	public $user;

	/**
	 * User model constructor.
	 *
	 * @param \WP_User $user
	 */
	public function __construct( \WP_User $user ) {
		$this->user = $user;
	}

	/**
	 * Create a new instance
	 *
	 * @param \WP_User $user
	 *
	 * @return static
	 */
	public static function create( \WP_User $user ) {
		return new static( $user );
	}

}
