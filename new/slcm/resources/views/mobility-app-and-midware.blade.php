@extends('includes/master')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/mobility.jpg);">
  <div class="container">
    <div class="page-header__inner">
      <ul class="thm-breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li>MOBILITY APP & MIDDLEWARE</li>
      </ul>
      <h2>MOBILITY APP & MIDDLEWARE</h2>
    </div>
  </div>
</section>
<!--Page Header End-->

<section class="about-two innerPage_section app_section">
  <!-- <div class="about-two__bg"><img src="assets/images/backgrounds/about-v2-bg.png" alt=""></div> -->
  <div class="container">
    <div class="row">
      <!--Start About Two Img Box-->
      <div class="col-xl-4 col-lg-4 wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
              <img src="assets/images/resources/digitised/mobility/mobility.png" width="250px" alt="">
      </div>
      <!--End About Two Img Box-->

      <!--Start About Two Content Box-->
      <div class="col-xl-7 col-lg-7 wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;">
        <div class="about-two__content-box">
          <div class="sec-title mb-0">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
                                <h2 class="sec-title__title">MOBILITY APPLICATION</h2>
          </div>
          <p class="about-two__content-box-text mt-20">Mobile application development is a term used to denote the act or process by which application software is developed for handheld devices, such as personal digital assistants, enterprise digital assistants, mobile phone or tablets. These applications can be pre-installed on phones during manufacturing platforms, or delivered as web applications using server-side or client-side processing to provide an "application-like" experience within a Web browser or Mobile App.
</p>
<ul class="about-one__content-list custom_list">
                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>Mobility APP based solution</p>
                  </div>
                </li>

                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>Manpower, Business Process &amp; Operations Management, across SLCM’s managed Warehouse Network, all over India</p>
                  </div>
                </li>

                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>First in Industry.</p>
                  </div>
                </li>
              </ul>
        </div>
      </div>
      <!--End About Two Content Box-->
    </div>
  </div>
</section>

<section class="bg-grey innerPage_section">
    <div class="container">
        <div class="text-center">
        <img src="assets/images/resources/digitised/mobility/mobility-modules.jpg" width="100%" class="img-thumbnail" alt="">
        </div>
    </div>
</section>

<section class="innerPage_section">
    <div class="container">
    <div class="sec-title text-center">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
                                <h2 class="sec-title__title">Agri Reach Process</h2>
          </div>
            <img src="assets/images/resources/digitised/mobility/process.jpg" width="100%" class="" alt="">
    </div>
</section>


@endsection