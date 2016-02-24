<?php

class Model_Keyword extends SQL_Model{
	public $table = "keyword";
	function init(){
		parent::init();

		$this->addField('name')->caption('keyword')->mandatory(true);

		$this->add('dynamic_model/Controller_AutoCreator');
	}	
}