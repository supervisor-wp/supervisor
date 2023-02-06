<?php
namespace SUPV\Admin;

/**
 * The Loader class.
 *
 * @package supervisor
 * @since 1.0.0
 */
class Loader {
	/**
	 * The AJAX object.
	 *
	 * @since 1.0.0
	 *
	 * @var AJAX
	 */
	private $ajax;

	/**
	 * The Dashboard object.
	 *
	 * @since 1.0.0
	 *
	 * @var Dashboard
	 */
	private $dashboard;

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$this->setup();
	}

	/**
	 * Get the AJAX object.
	 *
	 * @since 1.0.0
	 *
	 * @return AJAX
	 */
	public function ajax() {

		return $this->ajax;
	}

	/**
	 * Get the Dashboard object.
	 *
	 * @since 1.0.0
	 *
	 * @return Dashboard
	 */
	public function dashboard() {

		return $this->dashboard;
	}

	/**
	 * Set all the things up.
	 *
	 * @since 1.0.0
	 */
	public function setup() {

		$this->ajax      = new AJAX();
		$this->dashboard = new Dashboard();
	}
}
