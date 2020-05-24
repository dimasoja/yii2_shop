<?php

namespace app\components;

use yii\base\Widget;

class MenuWidget extends Widget{
    
    public $tpl;
    public $ul_class;
    public $data;
    public $tree;
    public $menuHtml;
    
    public function init(){
        parent::init();
        if ($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }
    
}