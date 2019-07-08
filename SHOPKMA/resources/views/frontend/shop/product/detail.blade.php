@extends('frontend.layouts.shopping')
@section('title')
    Sản phẩm {{ $product->name }}
@endsection

@section('content')
<style type="text/css">
    .products {
        background: url(../images/a.jpg)no-repeat center 0px;
        background-size: cover;
    }
    .products .title h3 {
        text-align: left;
    }
    .products .title p{
        text-align: left;
    }
    .products .title p {
        margin: 1em 0;
        color: #EAEAEA;
        text-align: left;
    }
    .single-top-left {
        margin-left:5%;
        width: 34%;
    }
    .single-top-right h3 {
        text-transform: capitalize;
        font-size: 2em;
        color: #00e58b;
        margin-bottom: .3em;
        text-align: left;
    }
    .single-top-right ul li {
        display: inline-block;
        margin-left: 3px;
        color: #0280e1;
    }
    .single-top-right {
        padding-left: 5em;
    }
    .single-rating {
        margin: 1em 0;
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 1em;
    }
    .single-top-right ul li.rating {
        margin: 0 1.5em;
        color: #999;
        font-size: 1em;
    }
    .single-top-right ul li a{
        color: #999;
    }
    .single-top-right ul li a:hover{
        color: #0280e1;
    }
    .single-price ul li {
        margin-right: 1em;
        font-size: 1em;
        color: #999;
    }
    .single-price ul li:nth-child(1) {
        font-size: 2.8em;
        font-weight: 300;
        margin-right: 0.5em;
    }
    .single-price ul li span.w3off {
        font-size: 1.5em;
        color: #0280e1;
    }
    .single-price.price ul li a {
        color: #f44336;
    }
    .single-price.price ul li a:hover{
        color: #999;
    }
    p.single-price-text {
        margin: 1.5em 0;
    }
    .single-top-right form {
        display: inline;
    }
    .single-top-right .w3ls-cart {
        width: 28%;
        font-weight: 300;
        padding: 0.6em 0;
        -webkit-transition: .5s all;
        -moz-transition: .5s all;
        -o-transition: .5s all;
        -ms-transition: .5s all;
        transition: .5s all;
        display: inline-block;
        background: #00e58b;
        outline: none;
        border: 1px solid #00e58b;
        color: #fff;
    }
    .single-top-right .w3ls-cart:hover{
        background: #00bdbd;
        border-color:#00bdbd;
    }
    .single-top-right .w3ls-cart i.fa {
        margin-right: 3px;
    }
    .single-top-right .w3ls-cart.w3ls-cart-like {
        margin-left: 1em;
        background: none;
        border: 1px solid  #00e58b;
        color: #00e58b;
    }
    .single-top-right .w3ls-cart.w3ls-cart-like:hover{
        background:  #00e58b;
        color: #fff;
    }
    .single-page-icons.social-icons {
        margin: 5em 5em;
    }
    .single-page-icons.social-icons ul li h4 {
        font-size: 1.1em;
        color: #999;
        margin-right: 1em;
    }
    .single-page-icons.social-icons ul li {
        vertical-align: middle;
    }
    .collpse{
        padding: 10px;
    }
    .collpse.tabs {
        padding-bottom:0;
    }
    .panel-group {
        margin-bottom: 0;
    }
    .collpse.tabs h4.panel-title a {
        font-size: 1em;
        text-transform: uppercase;
        color: #ffffff;
        display: block;
        text-decoration: none;
        padding: .8em 1.5em;
        font-weight: 300;
        position:relative;
    }
    .collpse.tabs .panel-default {
        border-color: #37a1f3;
    }
    .collpse.tabs .panel-body {
        padding: 15px;
        color: #999;
        line-height: 1.8em;
        font-size: 1em;
    }
    .collpse.tabs .panel-default > .panel-heading {
        padding: 0;
        background: #37a1f3;
    }
    .pa_italic span.fa-arrow{
        display: none;
    }
    .pa_italic i.fa-arrow, .collapsed span.fa-arrow{
        right: 3%;
        font-size: 1.8em;
        color: #ffffff;
        position: absolute;
        top: 20%;
    }
    .collapsed i.fa-arrow{
        display: none;
    }
    .collapsed span.fa-arrow{
        display: inline-block;
    }
    .pa_italic i.fa-icon {
        margin-right: 0.8em;
    }
    .products .panel-title {
        text-align: left;
    }


</style>
<?php
$images = (isset($product->images) && $product->images) ? json_decode($product->images) : array();
?>

<!--flex slider-->
<script defer src="{{ asset('frontend_assets/js/jquery.flexslider.js') }}"></script>
<link rel="stylesheet" href="{{ asset('frontend_assets/css/flexslider.css') }}" type="text/css" media="screen" />
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<div class="products">
    <div class="container">
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-left">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($images as $image)
                            <li data-thumb="{{ asset($image) }}">
                                <div class="thumb-image"> <img src="{{ asset($image) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 single-top-right">
                    <h3 class="item_name">{{ $product->name }}</h3>
                    <p>{{ $product->ship_info  }}</p>
                    <div class="single-rating">
                        <ul>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li class="rating">20 reviews</li>
                            <li><a href="#">Add your review</a></li>
                        </ul>
                    </div>
                    <div class="single-price">
                        <ul>
                            <li>VND {{ $product->priceSale  }}</li>
                            <li><del>VND {{ $product->priceCore  }}</del></li>
                            <?php
                            if ($product->priceCore > $product->priceSale) {
                                $discount = 100 - (($product->priceSale/$product->priceCore)*100);
                            }else{
                                $discount = 0;
                            }
                            ?>
                            <?php if ($discount > 0) : ?>
                            <li><span class="w3off">{{ $discount }}% OFF</span></li>
                            <?php endif; ?>
                            <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
                        </ul>
                    </div>
                    <p class="single-price-text">
                        <?php echo $product->intro ?></p>


                    <form action="<?php echo url('shop/cart/add') ?>" method="post">
                        @csrf
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="w3ls1_item" value="{{ $product->id }}" />
                        <input type="hidden" name="amount" value="{{ $product->priceSale }}" />
                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                    </form>
                    <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <!-- collapse-tabs -->
        <div class="collpse tabs">
            <h3 class="w3ls-title">About this item</h3>
            <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <?php echo $product->desc ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> additional information <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <?php echo $product->additional_information  ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (5) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <?php echo $product->review  ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> help <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <?php echo $product->help  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //collapse -->
    </div>
</div>

@endsection