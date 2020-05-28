<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\data\Pagination;

use yii\web\NotFoundHttpException;

class CategoryController extends AppController {
    
    public function actionView($id){
        $category = Category::findOne($id);
        if (empty($category)){
            throw new NotFoundHttpException('Такой категории нет...');
        }
        //$products = \app\models\Product::find()->where(['category_id'=>$id])->all();
        $query = Product::find()->where(['category_id'=>$id]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize'=>3,
            'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        
        return $this->render('view', compact('category','products', 'pages'));
    }
}

