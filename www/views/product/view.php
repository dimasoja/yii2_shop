<div class="container"> 

    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <!-- FlexSlider -->
                   

                    <div class="clearfix"></div>
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <div class="col-md-4 agileinfo_single_left">
                <?= \yii\helpers\Html::img("@web/products/{$product->img}", ['alt' => $product->title, 'id' => 'example']) ?>
            </div>  
                    </div></div>	
            </div> 
            <div class="desc1 span_3_of_2">


                <h4><?=$product->title?></h4>
                <div class="cart-b">
                   <span class="actual dolor-left-grid"><?=$product->price?></span>
                     <?php if((float)$product->old_price): ?>
                                <span class="reducedfrom">$<?= $product->old_price ?></span>
                            <?php endif; ?>
                     
                    <a class="now-get get-cart-in" href="#">ADD TO CART</a> 
                    <div class="clearfix"></div>
                </div>
                <h6>100 items in stock</h6>
                <p><?=$product->content?></p>
                <div class="share">
                    <h5>Share Product :</h5>
                    <ul class="share_nav">
                        <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                        <li><a href="#"><img src="images/twitter.png" title="Twitter"></a></li>
                        <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                        <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
                    </ul>
                </div>


            </div>
            <div class="clearfix"> </div>
        </div>
       


    </div>

    <!---->
    <div class="sub-cate">
        
        <?= $this->render('//layouts/inc/sidebar'); ?>
        
        <div class=" chain-grid menu-chain">
            <a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" "></a>	   		     		
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid">300$</span>
                <span class="reducedfrom">500$</span>  
                <h6>Lorem ipsum dolor</h6>  		     			   		     										
            </div>
        </div>
        <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
    </div>
    <div class="clearfix"> </div>			
</div>