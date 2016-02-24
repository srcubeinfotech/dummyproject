<?php

class Model_Category extends SQL_Model{
	public $table = "category";

	function init(){
		parent::init();

		$this->addField('name')->mandatory(true);

		$this->hasMany('CategoryAssociation','cat_asso_id');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}