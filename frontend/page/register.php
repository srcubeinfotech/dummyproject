<?php
class page_signin extends Page
{
    function init()
    {
        parent::init();

        // $f = $this->add('Form',null,'signin',['form/stacked']);
        // $f->addField('email');
        // $f->addField('password');
        // $f->addSubmit('Sign in');

        // $f->onSubmit(function($f){
        //     return $f->js()->univ()->successMessage('Form Submitted');
        // });
    }

    function defaultTemplate(){
    	return ['page/register'];
    }
}