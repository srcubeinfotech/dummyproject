<?php

class Model_City extends SQL_Model{
	public $table = "city";

	function init(){
		parent::init();

		$this->addField('name')->mandatory(true);
		$this->hasOne('State')->mandatory(true);

		$this->addExpression('country',function($m){
			return $m->refSQL('state_id')->fieldQuery('country');
		});
		$this->add('dynamic_model/Controller_AutoCreator');
	}
}