<?php

class Model_CategoryAssociation extends SQL_Model{
	public $table = "category_restaurant_asso";

	function init(){
		parent::init();

		$this->hasOne('Restaurant','restaurant_id');
		$this->hasOne('Category','cat_id');
		

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}