<?php

class Admin extends App_Admin {

    function init() {
        parent::init();

        $this->api->pathfinder
            ->addLocation(array(
                'addons' => array('addons', 'vendor'),
            ))
            ->setBasePath($this->pathfinder->base_location->getPath() . '/..')
        ;

        $this->dbConnect();

        $this->api->menu->addItem(['Country','icon'=>'ajust'],'/country');
        $this->api->menu->addItem(['State','icon'=>'ajust'],'/state');
        $this->api->menu->addItem(['City','icon'=>'ajust'],'/city');
        $this->api->menu->addItem(['Area','icon'=>'ajust'],'/area');
        $this->api->menu->addItem(['Keyword','icon'=>'ajust'],'/keyword');
        $this->api->menu->addItem(['Highlight','icon'=>'ajust'],'/highlight');
        $this->api->menu->addItem(['Restaurant','icon'=>'ajust'],'/restaurant');
        $this->api->menu->addItem(['Subscriber','icon'=>'ajust'],'/subscriber');
        $this->api->menu->addItem(['Discount Coupon','icon'=>'ajust'],'/discountcoupon');
    }
}



        // For improved compatibility with Older Toolkit. See Documentation.
        // $this->add('Controller_Compat42')
        //     ->useOldTemplateTags()
        //     ->useOldStyle()
        //     ->useSMLite();
