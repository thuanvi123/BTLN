@extends('frontend.layouts.shopping')
@section('title')
    Danh mục {{ $category->name }}

@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/t.css') }}">

<style type="text/css">

    .w3ls_dresses_grid_left_grid h3 {
        font-size: 1.5em;
        color: #212121;
        padding-left: 2em;
        position: relative;
        margin: 1em;
        text-align:left;
    }
    .w3ls_dresses_grid_left_grid h3:before {
        content: '';
        background: #00e58b;
        width: 10%;
        height: 2px;
        position: absolute;
        top: 50%;
        left: 0%;
    }
    .w3ls_dresses_grid_left_grid_sub {
        border: 1px solid #E1E1E1;
        width: 70%;
        margin: 0 auto;
        padding: 2em 1.5em 1em;
    }
    .ecommerce_color ul li a,.ecommerce_dres-type ul li a{
        font-size: .95em;
        color: #212121;
        text-decoration: none;
    }
    .ecommerce_color ul li a i {
        width: 10px;
        height: 10px;
        display: inline-block;
        margin-right: 1em;
        border-radius: 20px;
        background: red;
    }
    .ecommerce_color ul li,.ecommerce_dres-type ul li {
        list-style-type: none;
        margin-bottom: 1em;
    }
    .ecommerce_color ul li:nth-child(2) a i {
        background: brown;
    }
    .ecommerce_color ul li:nth-child(3) a i {
        background: #ffd400;
    }
    .ecommerce_color ul li:nth-child(4) a i {
        background: #d382ee;
    }
    .ecommerce_color ul li:nth-child(5) a i {
        background: #ff5e00;
    }
    .ecommerce_color ul li:nth-child(6) a i {
        background: #0000ff;
    }
    .dresses_img_hover {
        margin-top: 40px;
        position: relative;
    }
    .dresses_img_hover_pos {
        position: absolute;
        top: 26%;
        left: 24px;
    }
    .dresses_img_hover_pos h4 {
        color: #fff;
        font-size: 25px;
    }
    .dresses_img_hover_pos h4 span {
        display: block;
        font-weight: 700;
        margin: 10px 0;
        font-size: 45px;
    }

    .women-set2{
        margin:75px 0;
    }
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    aside.sidebar-content {
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    aside.sidebar-content ul li {
        padding: 5px 0;
        font-size: 12px;
        text-transform: uppercase;
        line-height: 22px;
        color: #6d6d6d;
    }
    aside.sidebar-content ul li a {
        font-size: 14px;
        text-transform: capitalize;
        color: #797979;
        line-height: 22px;
        display: inline-block;
    }
    .sidebar-content h6 {
        color: #3f3f3f;
        font-weight: 700;
        text-transform: uppercase;
        display: inline-block;
        font-size: 12px;
    }
    .sidebar-content  {
        margin-left: 60px;
        margin-top: 50px;
    }
    aside.sidebar-content ul li a:hover{color: #c2a476;}

</style>
<div class="banner banner2">
    <img src="{{asset('frontend_assets/images')}}/b1.jpg">
</div>


<div class="content">
    <div class="container">
        <div class="col-md-4 w3ls_dresses_grid_left">
                <div class="w3ls_dresses_grid_left_grid">
                    <aside class="sidebar-content">
                        <div class="sidebar-title">
                            <h6>Khoảng giá</h6>
                        </div>
                        <ul>
                            <li><a href="?price=1">300000-500000</a></li>
                            <li><a href="?price=2">500000-700000</a></li>
                            <li><a href="?price=3">700000-1000000</a></li>
                            <li><a href="?price=4">1200000-2000000</a></li>
                            <li><a href="?price=5">2000000-5000000</a></li>
                        </ul>
                    </aside>
                </div>

        </div>
        <script type="text/javascript">

        </script>
        <div class="col-md-4 w3ls_dresses_grid_left">
            <div class="w3ls_dresses_grid_left_grid">
            </div>

        </div>
        <div class="col-md-8  women-dresses">
            <div class="shop-content-area">
                <div class="shop-toolbar">
                    <div class="nopadding-left text-left">
                        <form class="tree-most" id="form_oder" method="get">
                            <div class="orderby-wrapper pull-right">
                                <label>Sắp xếp</label>
                                <select name="orderby" class="orderby">
                                    <option value="md" selected="selected">Mặc định </option>
                                    <option value="new_product"> New Product</option>
                                    <option value="asc">Gia tăng dần</option>
                                    <option value="desc">Gia giảm dần</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('.orderby').change(function () {
                        $("#form_oder").submit();
                    })

                })
            </script>

            <?php $i = 0; ?>
                <div class="women-set1">
            @foreach($products as $product)
                    <?php
                            // 0 . 3 . 6. 9. 12
                    if (($i % 3) == 0 ) {
                        ?>
                        <div class="clearfix"></div>
                </div>
                <div class="women-set{{ $i }}">
                        <?php
                    }
                    ?>

                    <?php
                    $images = (isset($product->images) && $product->images) ? json_decode($product->images) : array();
                    ?>

                        <div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="{{ url('shop/product/'.$product->id)  }}"><div class="product-img">

                                    <?php if (count($images)) : ?>
                                    @foreach($images as $image)
                                        <img src="{{ asset($image) }}" alt="" />
                                        @break
                                    @endforeach
                                    <?php endif; ?>

                                    <div class="p-mask">
                                        <form action="<?php echo url('shop/cart/add') ?>" method="post">
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
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>{{ $product->name }}</h4>
                            <h5>VND {{ $product->priceSale }}</h5>
                        </div>

                    <?php $i++; ?>
            @endforeach
                </div>

                <div class="clearfix"></div>
                {{--{{ $products->links() }}--}}


        </div>
    </div>
</div>
    <script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/active.js') }}"></script>


@endsection