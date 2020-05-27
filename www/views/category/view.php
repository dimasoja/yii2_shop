<div class="container">
    <div class="women-product">
        <div class=" w_content">
            <div class="women">
                <a href="#"><h4><?=$category->title?> </h4></a>
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
            <h6>Здесь пока нет товаров!</h6>
        </div>
        <?php endif;?>
        
        <!---728x90--->


        <div class="clearfix"> </div>
    </div>

    <div class="sub-cate">
        <?= $this->render('//layouts/inc/sidebar'); ?>
        <!--initiate accordion-->

        <div class=" chain-grid menu-chain">
            <a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid">300$</span>
                <span class="reducedfrom">500$</span>  
                <h6><a href="single.html">Lorem ipsum dolor</a></h6>  		     			   		     										
            </div>
        </div>
        <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
    </div>
    <div class="clearfix"> </div>        	         
</div>

