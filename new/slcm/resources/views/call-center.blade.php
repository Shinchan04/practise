@extends('includes/master')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/support.jpg);">
  <div class="container">
    <div class="page-header__inner">
      <ul class="thm-breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li>CALL CENTER</li>
      </ul>
      <h2>CALL CENTER</h2>
    </div>
  </div>
</section>
<!--Page Header End-->
<section class="innerPage_section">
    <div class="container">
    <div class="sec-title text-center">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
                                <h2 class="sec-title__title">Objectives</h2>
          </div>
        <div class="text-center">
        <img src="assets/images/resources/digitised/call-center/objective.jpg" width="50%" class="img-thumbnail" alt="">
        </div>
    </div>
</section>
<section class="bg-grey about-two innerPage_section app_section">
  <!-- <div class="about-two__bg"><img src="assets/images/backgrounds/about-v2-bg.png" alt=""></div> -->
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <!--Start About Two Img Box-->
      <div class="col-xl-6 col-lg-6 wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
        <div class="about-two__img-box clearfix">
          <div class="about-two__img-box-img1 left-0">
            <div class="about-two__img-box-img1-inner">
              <img src="assets/images/resources/digitised/call-center/network-process.jpg" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>
      <!--End About Two Img Box-->

      <!--Start About Two Content Box-->
      <div class="col-xl-4 col-lg-4 wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;">
        <div class="about-two__content-box">
          <div class="sec-title mb-10">
            <h5>Back Office Executive on call</h5>
          </div>
          <img src="assets/images/resources/digitised/call-center/executive.png" width="100%" alt="">
        </div>
      </div>
      <!--End About Two Content Box-->
    </div>
  </div>
</section>

<section class="innerPage_section">
    <div class="container">
    <div class="sec-title text-center">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
                                <h2 class="sec-title__title">Call Center Management (CMS)</h2>
                                <p class="title_desc">CMS is a software product for businesses and organizations that receive a large volume of telephone calls processed through the Automatic Call Distribution (ACD) feature of the Communication Manager system. Call Management system record every single  Incoming/Outgoing calls  any hassle free interruption.</p>
          </div>
        <div class="text-center">
        <img src="assets/images/resources/digitised/call-center/cms.jpg" class="img-thumbnail" width="50%" alt="">
        </div>
    </div>
</section>





@endsection