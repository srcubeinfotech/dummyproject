<?php
class page_index extends Page
{
    function init(){
        parent::init();

    }
    
    function defaultTemplate(){
        return ['page/home'];
    }
}

class Form_Test extends Form {
    function init() {
        parent::init();
//        $this->add('\\rvadym\\x_tinymce\\Controller_TinyMCE');


        $this->addField('Text','text');
    }
}
