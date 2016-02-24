<?php

class Model_Subscriber extends SQL_Model{
	public $table = "subscriber";

	function init(){
		parent::init();

		$this->addField('name')->caption('Email')->mandatory(true);
		$this->addField('created_at')->type('datetime')->defaultValue(date('Y-m-d h:i:s'));

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}