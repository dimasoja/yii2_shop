<div class="container">
    <div class="shoes-grid">

        <div class="wrap-in">
            <!---->
            <div class="slide-grid">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <a href="single.html">
                                    <div class="banner-matter">
                                        <div class="col-md-5 banner-bag">
                                            <img class="img-responsive " src="images/bag.jpg" alt=" " />
                                        </div>
                                        <div class="col-md-7 banner-off">							
                                            <h2>FLAT 50% 0FF</h2>
                                            <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					
                                            <span class="on-get">GET NOW</span>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="single.html">
                                    <div class="banner-matter">
                                        <div class="col-md-5 banner-bag">
                                            <img class="img-responsive " src="images/bag.jpg" alt=" " />
                                        </div>
                                        <div class="col-md-7 banner-off">							
                                            <h2>FLAT 50% 0FF</h2>
                                            <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					
                                            <span class="on-get">GET NOW</span>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="single.html">
                                    <div class="banner-matter">
                                        <div class="col-md-5 banner-bag">
                                            <img class="img-responsive " src="images/bag.jpg" alt=" " />
                                        </div>
                                        <div class="col-md-7 banner-off">							
                                            <h2>FLAT 50% 0FF</h2>
                                            <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					
                                            <span class="on-get">GET NOW</span>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <!----->

                </div>

            </div>
        </div>
        <!---->

        <div class="shoes-grid-left">
            <a href="single.html">				 
                <div class="col-md-6 con-sed-grid">

                    <div class=" elit-grid"> 

                        <h4>consectetur  elit</h4>
                        <label>FOR ALL PURCHASE VALUE</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                        <span class="on-get">GET NOW</span>						
                    </div>						
                    <img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />

                    <div class="clearfix"> </div>

                </div>
            </a>
            <a href="single.html">	
                <div class="col-md-6 con-sed-grid sed-left-top">
                    <div class=" elit-grid"> 
                        <h4>consectetur  elit</h4>
                        <label>FOR ALL PURCHASE VALUE</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                        <span class="on-get">GET NOW</span>
                    </div>		
                    <img class="img-responsive shoe-left" src="images/wa.jpg" alt=" " />

                    <div class="clearfix"> </div>
                </div>
            </a>
            <div class="clearfix"> </div>
        </div>
        <!---728x90--->
       
        <?php if(!empty($offers)):?>
        <div class="products">
            <h5 class="latest-product">LATEST PRODUCTS</h5>	
            <a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
            <div class="clearfix"> </div>
        </div>
        <div class="product-left">
            <?php foreach ($offers as $offer):?>
            <div class="col-md-4 chain-grid">
                <a href=<?= \yii\helpers\Url::to(['product/view', 'id'=>$offer->id])?>><?= \yii\helpers\Html::img("@web/products/{$offer->img}", ['alt'=>$offer->title])?></a>
                <span class="star"> </span>
                <div class="grid-chain-bottom">
                    <h6><a href=<?= \yii\helpers\Url::to(['product/view', 'id'=>$offer->id])?>>Lorem ipsum dolor</a></h6>
                    <div class="star-price">
                        <div class="dolor-grid"> 
                            <span class="actual"><?=$offer->price?></span>
                            <?php if((float)$offer->old_price):?>
                            <span class="reducedfrom"><?=$offer->old_price?></span>
                            <?php endif;?>
                            <span class="rating">
                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                <label for="rating-input-1-3" class="rating-star"> </label>
                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                <label for="rating-input-1-2" class="rating-star"> </label>
                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                <label for="rating-input-1-1" class="rating-star"> </label>
                            </span>
                        </div>
                        <a class="now-get get-cart" href="#">ADD TO CART</a> 
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="clearfix"> </div>

    
    <?php endif; ?>
    </div>
    <div class="sub-cate">
       <?= $this->render('//layouts/inc/sidebar');?>
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

