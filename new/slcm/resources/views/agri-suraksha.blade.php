@extends('includes/master')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/agri-suraksha1.jpg);">
  <div class="container">
    <div class="page-header__inner">
      <ul class="thm-breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li>AGRI SURAKSHA</li>
      </ul>
      <h2>AGRI SURAKSHA</h2>
    </div>
  </div>
</section>
<!--Page Header End-->

<section class="about-three company-overview">
    <div class="container">
        <div class="row align-items-center">
            <!--Start About Three Img Box-->
            <div class="col-lg-4">
                <div class="about-three__img-box">
                    <div class="about-three__img-box-img">
                        <div class="about-three__img-box-img-inner">
                            <img src="assets/images/project/agrisec.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--End About Three Img Box-->
            <!--Start About Three Content Box-->
            <div class="col-lg-8">
                <div class="about-three__content-box overlap-section">
                    <div class="sec-title">
                        <div class="icon">
                        <img src="assets/images/resources/as.jpg" alt="">
                        </div>
                    </div>
                    <div class="about-two__content-box-list">
                    <ul class="about-one__content-list custom_list">
                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>Digital real-time Warehouse Surveillance 24x7x365.</p>
                  </div>
                </li>

                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>Centrally Controlled &amp; Monitored.</p>
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
            </div>
            <!--End About Three Content Box-->
        </div>
    </div>
</section>

<section class="innerPage_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
              <div class="mb-20">
              <h5>Stringent monitoring</h5>
              <p class="title_desc">Video cameras and 24 / 7 call centre is used while also geotagging all Warehouses</p>
              </div>
          <div>
          <img src="assets/images/resources/digitised/suraksha/stringent.jpg" class="img-thumbnail" alt="">
          </div>
        </div>
        <div class="col-lg-6">
        <div class="mb-20">
              <h5>Software Implementation</h5>
              <p class="title_desc">Details on where a  particular commodity is  stored can be traced to  the exact stack in the  warehouse
</p>
              </div>
          <div>
          <img src="assets/images/resources/digitised/suraksha/software-implementation.jpg" width="94%" class="img-thumbnail" alt="">
          </div>
        </div>
      </div>
    </div>
</section>

<section class="bg-grey innerPage_section">
    <div class="container">
    <div class="sec-title text-center">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
            <h2 class="sec-title__title">Agri Suraksha: CCTV Monitoring 24 X 7</h2>
        </div>
      <div class="row">
        <div class="col-lg-6">
          <img src="assets/images/resources/digitised/suraksha/cctv1.jpg" class="img-thumbnail" alt="">
        </div>
        <div class="col-lg-6">
          <img src="assets/images/resources/digitised/suraksha/cctv2.jpg" width="100%" style="max-height:406px;" class="img-thumbnail" alt="">
        </div>
      </div>
    </div>
</section>

<section class="innerPage_section">
    <div class="container">
    <div class="sec-title text-center">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
            <h2 class="sec-title__title">Centralized CCTV Surveillance System</h2>
            <p class="title_desc">SLCM managing centralized  CCTV surveillance system from live streaming of <br />all warehouse and branch office in India & Myanmar (abroad) 
</p>
        </div>
        <div class="text-center">
        <img src="assets/images/resources/digitised/suraksha/centerlised cctv.jpg" width="80%" class="img-thumbnail" alt="">
        </div>
    </div>
</section>

<section class="bg-grey innerPage_section">
    <div class="container">
    <div class="sec-title text-center">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
            <h2 class="sec-title__title">CCTV Surveillance NABL LAB</h2>
        </div>
        <div class="text-center">
        <img src="assets/images/resources/digitised/suraksha/cctv.jpg" width="80%" class="img-thumbnail" alt="">
        </div>
    </div>
</section>



@endsection