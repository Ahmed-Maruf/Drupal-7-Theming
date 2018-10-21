<?php
	/**
	 * Created by PhpStorm.
	 * User: htcm
	 * Date: 22-Oct-18
	 * Time: 2:59 AM
	 */

	function batoverrides_preprocess_link(&$variables){
		//var_dump($variables);
		if ($variables['path'] == 'user/logout')
			$variables['text'] = 'Log me out';
	}