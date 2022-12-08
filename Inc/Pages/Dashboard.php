<?php 

namespace Inc\Pages;

// use Inc\Api\SettingsApi;
 use Inc\Base\BaseController;
// use Inc\Api\Callbacks\AdminCallbacks;
// use Inc\Api\Callbacks\ManagerCallbacks;

class Dashboard extends BaseController
{
	// public $settings;

	// public $callbacks;

	// public $callbacks_mngr;

	// public $pages = array();

	public function register() 
	{

        $this->setPages();
        $this->setSettings();
		$this->setSections();
		$this->setFields();
	}

	public function setPages() 
	{
		$this->pages = array(
			array(
				'page_title' => 'Movies teSi', 
				'menu_title' => 'movies', 
				'capability' => 'manage_options', 
				'menu_slug' => 'movies_plugin', 
				'callback' => array( $this->callbacks, 'adminDashboard' ), 
				'icon_url' => 'dashicons-store', 
				'position' => 110
			)
		);
	}

	public function setSettings()
	{
		$args = array(
			array(
				'option_group' => 'movies_plugin_settings',
				'option_name' => 'movies_plugin',
				//'callback' => array( $this->callbacks_mngr, 'checkboxSanitize' )
			)
		);

	//	$this->settings->setSettings( $args );
	}

	public function setSections()
	{
		$args = array(
			array(
				'id' => 'movies_admin_index',
				'title' => 'Settings Manager',
				'callback' => array( $this->callbacks_mngr, 'adminSectionManager' ),
				'page' => 'movies_plugin'
			)
		);

	//	$this->settings->setSections( $args );
	}

	public function setFields()
	{
		$args = array();

		foreach ( $this->managers as $key => $value ) {
			$args[] = array(
				'id' => $key,
				'title' => $value,
			//	'callback' => array( $this->callbacks_mngr, 'checkboxField' ),
				'page' => 'movies_plugin',
				'section' => 'movies_admin_index',
				'args' => array(
					'option_name' => 'movies_plugin',
					'label_for' => $key,
					'class' => 'ui-toggle'
				)
			);
		}

	//	$this->settings->setFields( $args );
	 }
}