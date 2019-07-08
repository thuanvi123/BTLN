@extends('frontend.layouts.shopping')
@section('title')
    Trang chủ
@endsection

@section('content')
    <style type="text/css">
        .product1{
            height: 800px;
            border: 2px solid whitesmoke;
        }
        .product2{
            height: 800px;
            border: 2px solid whitesmoke;

        }
        .product3{
            height: 800px;
            border: 2px solid whitesmoke;
            margin-bottom: 20px;
        }
        .product4{
            height: 800px;
            border: 2px solid whitesmoke;
            margin-bottom: 20px;
        }
        .category{
            height: 20px;
        }
        .category span{
            font-size: 20px;
            font-weight: bold;
            padding-top: 10px;
            margin-left: 30px;

        }
        .category ul li {
         float: right;
            margin-right: 40px;
                  }
        .category ul li a {
            font-size: 16px;
        }
        /*--top products--*/
        /*--SAP--*/
        .sap_tabs{
            clear:both;
            padding: 0;
        }
        .tab_box{
            background:#fd926d;
            padding: 2em;
        }
        .top1{
            margin-top: 2%;
        }
        .resp-tabs-list {
            list-style: none;
            padding: 0 0 3em;
            margin: 0 auto;
            text-align: center;
        }
        .resp-tab-item {
            font-size: 1.1em;
            font-weight: 500;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            list-style: none;
            outline: none;
            transition: all 0.3s;
            text-transform: uppercase;
            color: #999;
            padding: 7px 15px;
        }

        .resp-tab-active {
            color: #000;
            border-color: #000;
        }
        .resp-tabs-container {
            padding: 0px;
            clear: left;
        }
        h2 {
            cursor: pointer;
            padding: 5px;
            display: none;
        }
        .resp-tab-content {
            display: none;
        }
        .resp-content-active, .resp-accordion-active {
            display: block;
        }

        .tab_img{
            padding:2em 0 0;
            display: inline-block;
        }
        /*--//SAP--*/
        ul.resp-tabs-list{
            position:relative;
        }
        ul.resp-tabs-list li:nth-child(2):before {
            content: '';
            background: #999;
            width: 3.7%;
            height: 1px;
            position: absolute;
            top: 24%;
            left: 33.8%;
        }
        ul.resp-tabs-list li:nth-child(2):after{
            content: '';
            background: #999;
            width: 3.7%;
            height: 1px;
            position: absolute;
            top: 24%;
            left: 45.5%;
        }
        ul.resp-tabs-list li:nth-child(3):after{
            content: '';
            background: #999;
            width: 3.7%;
            height: 1px;
            position: absolute;
            top: 24%;
            left: 59.1%;
        }
        .top-product-grids,.women-grids{
            text-align:center;
        }
        .product-img{
            position:relative;
            box-shadow:0 0 1px #bbb;
            padding:10px;
        }
        .product-img .p-mask, .row .product .vm-product-media-container .p-mask {
            opacity: 0;
            visibility: hidden;
            background:rgba(0, 229, 139, 0.52);
            bottom: 0%;
            left:0;
            position: absolute;
            width: 100%;
            transform: translate3d( 0px, 100%, 0px );
            transition: all .5s ease 0s;
            text-align: left;
        }
        .product-img .p-mask .p-desc{
            color: #a3a3a3;
            position: relative;
            display: block;
            margin-bottom: 10px;
            padding-bottom: 10px;
            font-size: 1em;
        }
        .product-img:hover .p-mask, .row .product:hover .p-mask {
            opacity: 1;
            visibility: visible;
            transform: translate3d( 0px, 0px, 0px );
            left:0;
        }
        .top-product-grids .fa-star{
            margin-top:15px;
        }
        i.yellow-star{
            color:#ffac00;
        }
        i.gray-star{
            color:#808080;
        }
        .top-product-grids h4,.women-grids h4{
            font-size: 18px;
            color: #484848;
            margin:10px 0;
        }
        .top-product-grids h5,.women-grids h5{
            font-size: 18px;
            font-weight: 700;
        }
        button.w3ls-cart.pw3ls-cart {
            background: transparent;
            border: none;
            font-size:16px;
            color:#fff;
            width:100%;
            padding:1em;
        }
        button.w3ls-cart.pw3ls-cart:focus{
            outline:none;
        }
        button.w3ls-cart.pw3ls-cart .fa{
            margin-right:10px;
        }
        .top-products-set2{
            margin-top:40px;
        }
        .resp-tab-item{
            border: 1px solid black;

        }
        /*--//top products--*/
    </style>
    <?php $banner_main_image = isset($banner_main->image) ? asset($banner_main->image) : ''; ?>
    <div id="maincontent">
        <div class="container">
            <div class="row">
            <div class="col-md-3  fixside" >
                <div class="box-left box-menu" >
                    <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
                    <ul>
                        <li>
                            <a href="{{url('/shop/category/1')}}">LapTop </a>
                        </li>
                        <li>
                            <a href="{{url('/shop/category/3')}}">Camera</a>
                        </li>
                        <li>
                            <a href="{{url('/shop/category/2')}}">Phụ kiện LapTop</a>
                        </li>
                        <li>
                            <a href="{{url('/shop/category/4')}}"> Phụ kiện Camera </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 bor">
                <div  style="background-image: url({{ $banner_main_image }});height: 400px" id="slide" class="text-center" >
                </div>

                </div>
                <section class="box-main1">
                    <h3 class="title-main" style="text-align: center;"><a href=""> Máy Canong </a> </h3>
                </section>
                <div class=" top-products">
                    <div class="container">
                        <h3>Sản phẩm nổi bật </h3>
                        <div class="sap_tabs">
                            <div id="horizontalTab">
                                <ul  class="resp-tabs-list">
                                    @foreach($homepage_category as $category)
                                        <li class="resp-tab-item"><span>{{$category->name}}</span></li>
                                    @endforeach
                                </ul>
                                <div class="clearfix"> </div>
                                <div class="resp-tabs-container">
                                    @foreach($homepage_category as $category)
                                        <div class="tab-1 resp-tab-content">
                                            @if(isset($category['products']))
                                                @foreach($category['products'] as $product)
                                                    <div class="col-md-3 top-product-grids tp2">

                                                        <a href="{{ url('shop/product/'.$product->id)  }}"><div class="product-img">
                                                                <?php
                                                                $images = (isset($product->images) && $product->images) ? json_decode($product->images) : array();
                                                                ?>
                                                                @foreach($images as $image)
                                                                    <img src="{{ asset($image) }}" alt="" />
                                                                    @break
                                                                @endforeach

                                                                <div class="p-mask">

                                                                    <form action="<?php echo url('shop/cart/add') ?> " method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="cmd" value="_cart" />
                                                                        <input type="hidden" name="add" value="1" />
                                                                        <input type="hidden" name="w3ls1_item" value="{{ $product->id }}" />
                                                                        <input type="hidden" name="amount" value="{{ $product->priceSale }}" />
                                                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                    </form>
                                                                </div>
                                                            </div></a>
                                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                        <h4>{{ $product->name }}</h4>
                                                        <h5>${{ $product->priceSale }}</h5>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>

                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <script src="{{ asset('frontend_assets/js') }}/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
                </script>

        </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="top-brands">

        <div class="container">
            <h3>Top Brands</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">
                    @foreach($brands as $brand)
                        <li>
                            <img src="{{ asset($brand->image) }}"  class="img-responsive" />
                        </li>
                    @endforeach
                </ul>
            </div>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: false,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems:2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ asset('frontend_assets/js') }}/jquery.flexisel.js"></script>
        </div>
    </div>
@endsection