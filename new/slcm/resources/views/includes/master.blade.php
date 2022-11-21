<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>@yield('title','Leader in Warehouse Management, Agriculture Financing, Collateral Management & Procurement')</title>
    <meta name="keywords" content="@yield('keywords','Crop protection,cold storage delhi ncr,mentha warehousing, ministry of agriculture, leader in agriculture industry, leader in agri logistics')">
	<meta name="description" content="@yield('description','Sohan Lal Commodity Management Pvt. Ltd- An ISO certified cold storage Delhi NCR. We are leader in agriculture industry and know the value of ministry of agriculture.')">
	<meta name="author" content="pankajkapoor">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Accept-CH" content="DPR, Width, Viewport-Width, Downlink">
    <link rel="icon" type="image/x-icon" href="favicon.ico">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    @yield('critical_css')
    <link href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/icomoon-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/twentytwenty/twentytwenty.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/agriox.css?v=1" />
    <link rel="stylesheet" href="assets/css/agriox-responsive.css" />
    @yield('css')
<body>
<div class="page-wrapper">
@include('includes.header')

	@yield('content')

@include('includes.footer')
</div> <!-- page-wrapper -->
@section('script')
<script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/twentytwenty/twentytwenty.js"></script>
<script src="assets/vendors/twentytwenty/jquery.event.move.js"></script>
<script src="assets/vendors/parallax/parallax.min.js"></script>
<script src="assets/vendors/tilt.js/tilt.jquery.js"></script>
@yield('js')
<!-- template js -->
<script>
    if($('.language_switcher')[0]){
       const src =  $('.lll').attr('src');
       const newSrc  = src.replace('logo.png','logo-myn.png')
       $('.lll').attr('src',newSrc)

    }
    $('#newsletter').submit(function(e){
        e.preventDefault();
        $.post(
            $(this).attr("action"),
            $(this).serialize(),
            function(response) {
                $('#newsletterEmail').val("");
            }
        );
        $('.form-validation1').show();
    })
</script>
<script src="assets/js/agriox.js"></script>
<script src="//code-eu1.jivosite.com/widget/s01pRcqxPB" async></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SFB11BRYNM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SFB11BRYNM');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5J2QSKB');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J2QSKB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@show
</body>
</html>
