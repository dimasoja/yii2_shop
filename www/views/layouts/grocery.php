<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from p.w3layouts.com/demos/bigshope/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 May 2020 13:35:12 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!--fonts-->


        <!--script-->
    </head>
    <body>
        <?php $this->beginBody() ?>


        <meta name="robots" content="noindex">
    <body>
        <!-- Demo bar start -->

        <!--header-->
        <div class="header">
            <div class="top-header">
                <div class="container">
                    <div class="top-header-left">
                        <ul class="support">
                            <li><a href="#"><label> </label></a></li>
                            <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                        </ul>
                        <ul class="support">
                            <li class="van"><a href="#"><label> </label></a></li>
                            <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="top-header-right">
                        <div class="down-top">		
                            <select class="in-drop">
                                <option value="volvo" class="in-of">English</option>
                                <option value="saab" class="in-of">Japanese</option>
                                <option value="opel" class="in-of">French</option>
                                <option value="audi" class="in-of">German</option>
                            </select>
                        </div>
                        <div class="down-top top-down">
                            <select class="in-drop">

                                <option value="saab" class="in-of">Dollar</option>
                                <option value="saab" class="in-of">Yen</option>
                                <option value="opel" class="in-of">Euro</option>
                            </select>
                        </div>

                        <!---->
                        <div class="clearfix"> </div>	
                    </div>
                    <div class="clearfix"> </div>		
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="header-bottom-left">
                        <div class="logo">
                            <a href="<?= \yii\helpers\Url::home() ?>"><img src="images/logo.png" alt=" " /></a>
                        </div>
                        <div class="search" >
                            <form action = "<?= \yii\helpers\Url::to(['category/search'])?>" method="get">
                                <input type="text" name="q" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = '';
                                        }" >
                                <input type="submit"  value="SEARCH">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-bottom-right">					
                        <div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
                        <ul class="login">
                            <li><a href="login.html"><span> </span>LOGIN</a></li> |
                            <li ><a href="register.html">SIGNUP</a></li>
                        </ul>
                        <div class="cart">
                            <!-- Button trigger modal -->
                            <button onclick="getCart()" type="button" class="button" data-toggle="modal" data-target="#modal-cart">
  <span class="cart-img"></span> CART <span class="cart-sum"> $<?=isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum']: '0'?></span>
</button>

<!-- Modal -->
<div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Корзина</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупку</button>
        <a href="<?=\yii\helpers\Url::to(['cart/view'])?>" class="btn btn-success">Оформить заказ</a>
        <button type="button" class="btn btn-danger">Очистить</button>
      </div>
    </div>
  </div>
</div>
                          
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>	
                </div>
            </div>
        </div>
        <!---->
        <!---728x90--->

        <?= $content ?>

        <!---->
        <!---728x90--->

        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="latter">
                        <h6>NEWS-LETTER</h6>
                        <div class="sub-left-right">
                            <form>
                                <input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Enter email here';
                                        }" />
                                <input type="submit" value="SUBSCRIBE" />
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="latter-right">
                        <p>FOLLOW US</p>
                        <ul class="face-in-to">
                            <li><a href="#"><span> </span></a></li>
                            <li><a href="#"><span class="facebook-in"> </span></a></li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-cate">
                        <h6>CATEGORIES</h6>
                        <ul>
                            <li><a href="#">Curabitur sapien</a></li>
                            <li><a href="#">Dignissim purus</a></li>
                            <li><a href="#">Tempus pretium</a></li>
                            <li ><a href="#">Dignissim neque</a></li>
                            <li ><a href="#">Ornared id aliquet</a></li>
                            <li><a href="#">Ultrices id du</a></li>
                            <li><a href="#">Commodo sit</a></li>
                            <li ><a href="#">Urna ac tortor sc</a></li>
                            <li><a href="#">Ornared id aliquet</a></li>
                            <li><a href="#">Urna ac tortor sc</a></li>
                            <li ><a href="#">Eget nisi laoreet</a></li>
                            <li ><a href="#">Faciisis ornare</a></li>
                        </ul>
                    </div>
                    <div class="footer-bottom-cate bottom-grid-cat">
                        <h6>FEATURE PROJECTS</h6>
                        <ul>
                            <li><a href="#">Curabitur sapien</a></li>
                            <li><a href="#">Dignissim purus</a></li>
                            <li><a href="#">Tempus pretium</a></li>
                            <li ><a href="#">Dignissim neque</a></li>
                            <li ><a href="#">Ornared id aliquet</a></li>
                            <li><a href="#">Ultrices id du</a></li>
                            <li><a href="#">Commodo sit</a></li>
                        </ul>
                    </div>
                    <div class="footer-bottom-cate">
                        <h6>TOP BRANDS</h6>
                        <ul>
                            <li><a href="#">Curabitur sapien</a></li>
                            <li><a href="#">Dignissim purus</a></li>
                            <li><a href="#">Tempus pretium</a></li>
                            <li ><a href="#">Dignissim neque</a></li>
                            <li ><a href="#">Ornared id aliquet</a></li>
                            <li><a href="#">Ultrices id du</a></li>
                            <li><a href="#">Commodo sit</a></li>
                            <li ><a href="#">Urna ac tortor sc</a></li>
                            <li><a href="#">Ornared id aliquet</a></li>
                            <li><a href="#">Urna ac tortor sc</a></li>
                            <li ><a href="#">Eget nisi laoreet</a></li>
                            <li ><a href="#">Faciisis ornare</a></li>
                        </ul>
                    </div>
                    <div class="footer-bottom-cate cate-bottom">
                        <h6>OUR ADDRESS</h6>
                        <ul>
                            <li>Aliquam metus  dui. </li>
                            <li>orci, ornareidquet</li>
                            <li> ut,DUI.</li>
                            <li >nisi, dignissim</li>
                            <li >gravida at.</li>
                            <li class="phone">PH : 6985792466</li>
                            <li class="temp"><p>&copy 2015 Bigshope. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>

    <!-- Mirrored from p.w3layouts.com/demos/bigshope/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 May 2020 13:35:33 GMT -->
</html>
<?php $this->endPage() ?>