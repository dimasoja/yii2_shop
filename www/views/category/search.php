<div class="container">
    <div class="women-product">
        <div class=" w_content">
            <div class="women">
                <a href="#"><h4>Поиск <?= \yii\helpers\Html::encode($q)?> </h4></a>
                <ul class="w_nav">
                    <li>Sort : </li>
                    <li><a class="active" href="#">popular</a></li> |
                    <li><a href="#">new </a></li> |
                    <li><a href="#">discount</a></li> |
                    <li><a href="#">price: Low High </a></li> 
                    <div class="clearfix"> </div>	
                </ul>
                <div class="clearfix"> </div>	
            </div>
        </div>
        <!-- grids_of_4 -->
        <?php if(!empty($products)):?>
        <div class="grid-product">
            <?php foreach ($products as $product):?>
            <div class="  product-grid">
                <div class="content_box"><a href=<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->id])?>>
                        <div class="left-grid-view grid-view-left">
                            <?= \yii\helpers\Html::img("@web/products/{$product->img}", ['class'=>"img-responsive watch-right",'alt' => ""])?>
                            
                            <div class="mask">
                                <div class="info">Quick View</div>
                            </div>
                        </div>
                    </a>
                </div>
                <h4><a href="#"> <?=$product->title?></a></h4>
                <p>It is a long established fact that a reader</p>
                Rs. 499
            </div>
            <?php endforeach;?>
        </div>
        <?php else:?>
        <div class="grid-product">
            <h6>По запросу ничего не найдено...</h6>
        </div>
        <?php endif;?>
        
        <!---728x90--->


        <div class="clearfix"> </div>
        <div class = "col-md-12">
            <?=  \yii\widgets\LinkPager::widget([
                'pagination' => $pages,
            ])?>
        </div>
    </div>

    <div class="sub-cate">
        <?= $this->render('//layouts/inc/sidebar'); ?>
        <!--initiate accordion-->

        
        <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
    </div>
    <div class="clearfix"> </div>        	         
</div>

