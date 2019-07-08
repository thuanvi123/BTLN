
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- head-->
@include('frontend.partials.head')
<!-- end head-->

<body>

@include('frontend.partials.header')
@yield('content')
@include('frontend.partials.newsletter')
@include('frontend.partials.footer')

</body>
</html>