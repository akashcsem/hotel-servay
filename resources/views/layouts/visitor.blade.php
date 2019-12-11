<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('frontEnd')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/flexslider.css" type="text/css" media="screen" property="" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/style.css" />
    <link href="{{asset('frontEnd')}}/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href="{{asset('frontEnd')}}///fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
    <link href="{{asset('frontEnd')}}///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!--//web-fonts-->
</head>
<body>





@include('visitor.inc.banner_header_for_other_pages_not_for_homepage')

      @yield('content')


@include('visitor.inc.footer')




<script type="text/javascript" src="{{asset('frontEnd')}}/js/jquery-2.1.4.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
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
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="{{asset('frontEnd')}}/js/jquery.zoomslider.min.js"></script>
<!-- search-jQuery -->
<script src="{{asset('frontEnd')}}/js/main.js"></script>

<!--/script-->
<!-- flexSlider -->
<script defer src="{{asset('frontEnd')}}/js/jquery.flexslider.js"></script>
<script type="{{asset('frontEnd')}}/text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- Calendar -->
<link rel="stylesheet" href="{{asset('frontEnd')}}/css/jquery-ui.css" />
<script src="{{asset('frontEnd')}}/js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
<!-- //Calendar -->
<script type="text/javascript" src="{{asset('frontEnd')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('frontEnd')}}/js/easing.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
<script src="{{asset('frontEnd')}}/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>