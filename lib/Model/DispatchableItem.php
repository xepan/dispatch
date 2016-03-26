<?php

namespace xepan\dispatch;

class Model_DispatchableItem extends \xepan\base\Model_Document{

	public $status = ['ToReceive', 'Received', 'PartialComplete', 'Complete','Rejected', 'Cancel'];
	public $actions = [
				'ToReceive'=>['view','edit','delete','received','cancel'],
				'Received'=>['view','edit','delete','approve','edit','delete'],
				'Approved'=>['view','reject','email','edit','delete'],
				'Rejected'=>['view','edit','delete','submit']
				];

	function init(){
		parent::init();


	}
}