<?php

class Model_Restaurant extends SQL_Model{
	public $table = "restaurant";

	function init(){
		parent::init();

		$this->hasOne('Country','country_id')->mandatory(true);
		$this->hasOne('State','state_id')->mandatory(true);
		$this->hasOne('City','city_id')->mandatory(true);
		$this->hasOne('Area','area_id')->mandatory(true);

		$this->add('filestore/Field_File','logo_image_id');
		$this->add('filestore/Field_File','banner_image_id');
		$this->add('filestore/Field_File','display_image_id');

		$this->addField('name')->mandatory(true)->caption('Restaurant Name');
		$this->addField('owner_name')->mandatory(true);
		$this->addField('about_restaurat')->type('text')->mandatory(true);
		$this->addField('address')->type('text');
		$this->addField('mobile_no')->hint('Comma separated multiple value');
		$this->addField('phone_no');
		$this->addField('email')->hint('Comma separated multiple value');
		$this->addField('website');
		$this->addField('facebook_page_url');
		$this->addField('instagram_page_url');
		$this->addField('rating')->type('Number');
		$this->addField('avg_cost_per_person')->type('Number');
		$this->addField('credit_card_accepted')->type('boolean');
		$this->addField('reservation_needed')->type('boolean');
		
		//Restaurant Time Slot
		$this->addField('monday');
		$this->addField('tuesday');
		$this->addField('wednesday');
		$this->addField('thursday');
		$this->addField('friday');
		$this->addField('saturday');
		$this->addField('sunday');

		//slug URL
		$this->addField('url_slug');
		
		$this->addField('discount')->hint('Original Discount in Percentage');
		$this->addField('discount_subtract');

		$this->hasMany('CategoryAssociation','cat_asso_id');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}