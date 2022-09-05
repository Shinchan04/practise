@extends('includes/master')
@section('title', 'Sohan Lal Commodity Management Pvt. Ltd')

@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/collateral-management.jpg);">
            <div class="container">
                <div class="page-header__inner">
                 <div class="btn-group language_switcher">
                    <a href="{{url('slcm-collateral.html')}}" class="btn thm-btn active" aria-current="page">English</a>
                    <a href="{{url('myan-slcm-collateral.html')}}" class="btn thm-btn ">Burmese</a>
                </div> 
                    {{-- <ul class="thm-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>SLCM COLLATERAL</li>
                    </ul> --}}
                    <h2>SLCM COLLATERAL</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        
<!--Start Content-->
<section class="about-two">
            <div class="about-two__bg"><img src="assets/images/backgrounds/about-v2-bg.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <!--Start About Two Img Box-->
                    <div class="col-xl-5 col-lg-5">
                        <div class="about-two__img-box clearfix">
                            <div class="about-two__img-box-img1">
                                <div class="about-two__img-box-img1-inner">
                                    <img src="assets/images/about/about-v2-img1.jpg" alt="">
                                </div>
                            </div>
                            <div class="about-two__img-box-img2">
                                <!-- <div class="logo"><img src="assets/images/resources/about-v2-logo.png" alt="" /></div> -->
                                <div class="about-two__img-box-img2-inner">
                                    <img src="assets/images/about/about-v2-img2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About Two Img Box-->

                    <!--Start About Two Content Box-->
                    <div class="col-xl-7 col-lg-7">
                        <div class="about-two__content-box">
                        <div class="sec-title" style="margin-bottom: 20px;">
                                    <div class="icon">
                                    <span class="icon-farm font-50"></span>
                                    </div>
                                    <h2 class="sec-title__title">FINANCING</h2>
                                </div>
                                <p>SLCM is currently working with multiple banks as their Collateral Manager for Warehouse Receipt Financing. The company provides best-in-class audit and security services as part of collateral management services to the banks &amp; other financial institutions.</p>
                                    <p class="mt-20">In this kind of warehousing service, Banks approach SLCM to be the custodian of given commodity in a particular warehouse. Agriculture commodities are stored in SLCM warehouse which actually is the security of the loan for the respective bank. These commodities pertain to identified client by bank in the form of collateral securities. Collateral Financing allows lenders to immediately sell off a liquid asset i.e. agriculture commodity, if a farmer defaults on the loan. The underlying collateral is usually a soft commodity like guar, chana, mentha, mustard, etc. The company manages the quantity &amp; quality of the collateral to mitigate the risk for the bank/ financial institution. The commodities are stored in licensed &amp; non-licensed warehouse that issues a receipt proving that the commodities are physically in the warehouse.</p>
                                    <p class="mt-20">The rate matrix is mutually agreed upon by both parties including other terms &amp; conditions as per the agreement.</p>
                        </div>
                    </div>
                    <!--End About Two Content Box-->
                </div>
            </div>
        </section>
<section class="services-details innerPage_section commodity">
    <div class="container">
        <div class="row">
            <div class="services-details__content no_close">
                <div class="faq-one__accordions faq-one__accordions--services-details">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                        <!--Start Single-->
                        <div class="accrodion active  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="accrodion-title">
                                <h4>RISK MITIGATION OF GOODS</h4>
                                <h4 class="mt-20">SLCM undertakes insurances to mitigate the risk for the commodity stored in their location:</h4>
                            </div>
                            <div class="accrodion-content" style="">
                                <div class="services-details__content-text3 m-0">
                                    <div class="text-box p-0 w-100">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Goods Insurance as per the stock held at different locations</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Building Insurance for the Corporate &amp; Head Office</p>
                                                </div>
                                            </li>


                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Fidelity Insurance</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Accidental Insurance</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner mt-20">
                                    <p>The company monitors all its insurances on real time basis with the help of dedicated Risk Management Team. To ensure compliances over and above an electronic check there are Insurance Audit conducted regularly to avoid any collapse in the system.</p>
                                </div>
                            </div>

                        </div>
                        <!-- End Single-->
                    </div>

                </div>

            </div>
            <!--End Content-->
        </div>
    </div>
</section>
        <!--End Content-->

@endsection
