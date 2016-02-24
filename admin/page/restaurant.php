<?php

/**
 * Created by Rakesh Sinha
 * Date: 21.2.15
 * Time: 14:57
 */
class page_restaurant extends Page {

    public $title='Restaurant';

    function init() {
        parent::init();

        $c = $this->add('CRUD');
        $rst_model = $this->add('Model_Restaurant');

        $f = $c->grid->add('Form',null,'grid_buttons',['form/rempty'])->addClass('atk-col-6 atk-align-right')->setStyle('margin-top','10px');
        $f->addField('DropDown','country')->setEmptyText('Select Country')->setModel('Country');
        $f->addField('DropDown','state')->setEmptyText('Select State')->setModel('State');
        $f->addField('DropDown','city')->setEmptyText('Select City')->setModel('City');
        $f->addField('DropDown','area')->setEmptyText('Select Area')->setModel('Area');
        $f->addSubmit('search')->addClass('atk-swatch-green');

         $f->onSubmit(function($f)use($c){
            return $c->js()->reload(
                                [
                                    'country'=>$f['country'],
                                    'state'=>$f['state'],
                                    'city'=>$f['city'],
                                    'area'=>$f['area']
                                ]);        
        });

        if($_GET['country']){
            $rst_model->addCondition('country_id',$_GET['country']);
        }

        $c->setModel($rst_model,
                        ['country_id','state_id','city_id','area_id','logo_image_id','banner_image_id','display_image_id','name','owner_name','about_restaurat','address','mobile_no','phone_no','email','website','facebook_page_url','rating','avg_cost_per_person','credit_card_accepted','reservation_needed','monday','tuesday','wednesday','thursday','friday','saturday','sunday','url_slug','discount','discount_subtract'],
                        ['name','owner_name','address','mobile_no','email']
                    );
        $c->grid->addQuickSearch(['name']);

        $c->grid->add('VirtualPage')
            ->addColumn('Actions')
            ->set(function($page){
                $id = $_GET[$page->short_name.'_id'];
                
                $t = $page->add('Tabs');
                $iamge_tab = $t->addTab('Image Gallery');
                $menu_tab = $t->addTab('Menu');
                $tag_tab = $t->addTab('Tags');
                $discount_tab = $t->addTab('Discount');
        });

    }

}
