<?php

class Model_Area extends SQL_Model{
	public $table = "area";

	function init(){
		parent::init();

		$this->addField('name')->mandatory(true);
		$this->hasOne('City')->mandatory(true);

		$this->addExpression('state',function($m){
			return $m->refSQL('city_id')->fieldQuery('state');
		});

		$this->addExpression('country',function($m){
			return $m->refSQL('city_id')->fieldQuery('country');
		});

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}