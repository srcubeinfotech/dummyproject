<?php

/**
 * Created by Rakesh Sinha
 * Date: 21.2.15
 * Time: 14:57
 */
class page_city extends Page {

    public $title='City';

    function init() {
        parent::init();

        $this->add('CRUD')->setModel('City');
    }

}
