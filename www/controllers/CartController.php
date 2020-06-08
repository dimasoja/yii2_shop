<?php

namespace app\controllers;

use app\models\Cart;
use app\models\Product;

class CartController extends AppController{
    
    public function actionAdd($id){
        
        $product = Product::findOne($id);
        if (empty($product)){
            
            return false;
            
        }
        $session = \Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
        if (\Yii::$app->request->isAjax){
            
            return $this->renderPartial('cart-modal', compact('session'));
            
        }
        return $this->redirect(\Yii::$app->request->referrer);
        
        
    }
    
}

