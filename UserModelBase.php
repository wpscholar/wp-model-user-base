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

}