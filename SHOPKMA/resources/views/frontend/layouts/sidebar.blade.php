
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- head-->
@include('frontend.partials.head')
<!-- end head-->

<body>
@include('frontend.partials.header')
<div class="sub-banner my-banner2">
</div>
<div class="content">
    <div class="container">
        @include('frontend.partials.sidebar')
        @yield('content')
    </div>
</div>
@include('frontend.partials.newsletter')
@include('frontend.partials.footer')

</body>
</html>