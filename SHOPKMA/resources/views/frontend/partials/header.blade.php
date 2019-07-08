<style type="text/css">

    .navbar-fixed-top .nav {
        padding: 15px 0;
    }

    .navbar-fixed-top .navbar-brand {
        padding: 0 15px;
    }

    @media(min-width:768px) {
        body {
            padding-top: 10px;
        }

        .navbar-fixed-top .navbar-brand {
            padding: 15px 0;
        }
    }
    .glyphicon-log-in{margin-right: 2px}
</style>
<div  class="header-top-w3layouts">
    <div class="container">
        <div class="col-md-6 logo-w3">
            <a href="{{ url('/') }}"><img style="width: 100px" src="{{ asset($fe_global_settings['header_logo']) }}" alt=" " /><h1 style="margin-left: 80px"><?php echo $fe_global_settings['web_name'] ?></h1></a>
        </div>
        <div class="col-md-6 footer-grids fgd4">


            <ul class="nav navbar-nav navbar-right">

                @guest
                    <li>
                        <a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> {{ __('Đăng nhập') }}</a></a>
                    </li>
                    @if (Route::has('register'))
                        <li class="dropdown">
                            <a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span>{{ __('Đăng kí') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="{{ route('logout') }}">{{ Auth::user()->name }} {{  __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header-bottom-w3ls">


    <div class="container">
        <div class="col-md-7 navigation-agileits">
            <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">

                    <?php echo $fe_menus_items_header_html ?>
                </div>
            </nav>
        </div>
        <script>
            $(document).ready(function(){
                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });
        </script>
        <div class="col-md-4 search-agileinfo">
            <form action="{{ url('/search') }}" method="get">
                @csrf
                <input type="search" name="Search" placeholder="Search for a Product..." required="">
                <button type="sub" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
            </form>
        </div>
        <div class="col-md-1 cart-wthree">
            <div class="cart">
                <form action="{{ url('/shop/cart') }}" method="get" class="last">
                    <button class="w3view-cart" type="submit" name="submit" value="">
                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        <span id="num-cart">{{ \Cart::getTotalQuantity() }}</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<style type="text/css">
    .w3view-cart {
        position: relative;
    }
    #num-cart {
        position: absolute;
        right: 0;
        bottom: 0;
        padding: 2px 5px;
        font-size: 10px;
        font-weight: bold;
        background: orange;
        color: white;
        border-radius: 50%;
    }
</style>

<script type="text/javascript">
    $(document).ready(function () {

        var add_cart_url = '<?php echo url('shop/cart/add') ?>';
        $('.pw3ls-cart,.w3ls-cart').on('click', function (e) {
            e.preventDefault();

            var dataPost = $(this).closest('form').serializeArray();

            // post đến controller
            $.ajax({
                url: add_cart_url,
                dataType:'json',
                type:'POST',
                data: dataPost,
                success: function(result){
                    // bung popup
                    $('#myModal').modal('show');
                }
            });



        });
    });
</script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Bạn đã thêm sản phẩm vào giỏ hàng thành công</h4>
            </div>
            <div class="modal-body">
                <p style="text-align: center">
                    <a href="{{ url('/shop/cart') }}" class="btn btn-success">Thanh toán</a>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Tiếp tục mua sắm</button>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">đóng</button>
            </div>
        </div>

    </div>
</div>


