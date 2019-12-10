<!DOCTYPE html>
<html>
<head>
    <title>Resort a Hotel Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
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



<div class="w3_content_agilleinfo_inner">
    <div class="container">
        <div class="inner-agile-w3l-part-head">
            <h2 class="w3l-inner-h-title">Contact</h2>

        </div>
        <div class="w3_mail_grids">
            <form action="" method="POST">
                @csrf
                <div class="col-md-6 w3_agile_mail_grid">
                    <input type="text" name="name" placeholder="Your Name"  required="">
                    <input type="email" placeholder="Your Email" name="email" required="">
                    <input type="text" placeholder="Your Phone Number" name="phonenumber" required="">


                </div>
                <div class="col-md-6 w3_agile_mail_grid">
                    <textarea name="message" placeholder="Your Message"  required=""></textarea>
                    <input type="submit" value="Submit">
                </div>
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
    <div class=" map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833"></iframe>
    </div>
</div>
<!--//content-inner-section-->
<div class="w3l_contact-bottom">
    <div class="container">

        <div class="w3ls_con_grids">

            <div class="w3ls_footer_grid">
                <div class="col-md-4 con-ions-left">
                    <div class="con-ions-left-w3l">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="con-grid-w3l-leftr">
                        <h4>Location</h4>
                        <p>1229-Dhaka, Bashundhara R/A</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 con-ions-left">
                    <div class="con-ions-left-w3l">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="con-grid-w3l-leftr">
                        <h4>Email</h4>
                        <a href="mailto:info@example.com">hotel@gmail.com</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 con-ions-left">
                    <div class="con-ions-left-w3l">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="con-grid-w3l-leftr">
                        <h4>Call Us</h4>
                        <p>+880-1775100846</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>


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