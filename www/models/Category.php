<?php

use yii\db\ActiveRecord;

class Category extends ActiveRecord{
    
    public static function tableName() {
        
        return 'category';
    }
}

