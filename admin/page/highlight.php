<?php

class page_Highlight extends Page{

	 public $title='Highlight';

	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Highlight');
	}
}