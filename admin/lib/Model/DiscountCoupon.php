<?php

class Model_DiscountCoupon extends SQL_Model{
	public $table = "discount_coupon";

	function init(){
		parent::init();

		$this->hasOne('Restaurant','restaurant_id');

		$this->addField('name')->caption('username');
		$this->addField('email');
		$this->addField('mobile_no');
		$this->addField('created_at')->type('datetime')->defaultValue(date('Y-m-d H:i:s'));
		$this->addField('discount_coupon')->defaultValue(strtoupper(substr(md5(rand(111111,999999)),5,6)));

		$this->addExpression('discount_offered',function($m,$q){
			return '6';
		});
		
		$this->add('dynamic_model/Controller_AutoCreator');
	}
}