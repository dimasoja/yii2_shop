<?php

namespace app\components;

use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget {

    public $tpl;
    public $ul_class;
    public $data;
    public $tree;
    public $menuHtml;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run() {

        //get cache
//        $menu = \Yii::$app->cache->get('menu');
//        if ($menu) {
//            return $menu;
//        }
        $this->data = Category::find()->select('id, parent_id, title')->indexBy('id')
                        ->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = '<ul class="' . $this->ul_class . '">';
        $this->menuHtml .= $this->getMenuHtml($this->tree);
        $this->menuHtml .= '</ul>';
        // debug($this->tree);


     //   \Yii::$app->cache->set('menu', $this->menuHtml);
        return $this->menuHtml;
    }

    protected function getTree() {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['children'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree) {
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTamplate($category);
        }
        return $str;
    }

    protected function catToTamplate($category) {
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}
