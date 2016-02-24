<?php

class page_keyword extends Page{

	 public $title='Keyword';

	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Keyword');
	}
}