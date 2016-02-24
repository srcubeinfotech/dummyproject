<?php

class Model_Country extends SQL_Model{
	public $table = "country";

	function init(){
		parent::init();

		$this->addField('name')->mandatory(true);

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}