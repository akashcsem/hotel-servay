<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Resort a Hotel Category @yield('title_area')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- //for-mobile-apps -->
    @yield('css_link')
    <!--//web-fonts-->

</head>
<body>
<!--/main-header-->
<!--banner-section-->
@include('visitor.inc.banner')
<!--/banner-section-->

<!--menu_slide-->
@include('visitor.inc.menu_slide')
<!--/menu_slide-->


<!-- feature and body -->
@yield('content')
<!--/feature and body -->

<!-- Footer -->
@include('visitor.inc.footer')
<!--/footer -->

@yield('js_jquery')
</body>
</html>