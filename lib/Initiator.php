<?php

namespace xepan\dispatch;

class Initiator extends \Controller_Addon {
	public $addon_name = 'xepan_dispatch';

	function init(){
		parent::init();

		
		$this->routePages('xepan_dispatch');
		$this->addLocation(array('template'=>'templates','js'=>'templates/js'))
			->setBaseURL('../vendor/xepan/dispatch/');

		if($this->app->is_admin){
			$m = $this->app->top_menu->addMenu('Dispatch');
	        $m->addItem('Dispatch','xepan_dispatch_dispatchrequest');
			// $this->app->side_menu->addItem('Dispatch','jkj');
		}
		
	}
}
