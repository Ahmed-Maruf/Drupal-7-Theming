<?php
	/**
	 * Created by PhpStorm.
	 * User: htcm
	 * Date: 12-Oct-18
	 * Time: 4:42 AM
	 */


	function bat_form_system_theme_settings_alter(&$form, $form_state) {
		$form['bat_subheading'] = array(
			'#type'          => 'textfield',
			'#title'         => t('Sub-heading'),
			'#default_value' => theme_get_setting('bat_subheading'),
			'#description'   => t("Place this text in the widget spot on your site."),
			'#weight'		 => -2
		);
	}
