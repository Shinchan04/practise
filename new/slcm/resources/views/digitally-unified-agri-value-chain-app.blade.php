@extends('includes/master')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/Group-companies.jpg);">
  <div class="container">
    <div class="page-header__inner">
      <ul class="thm-breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li>AGRI VALUE CHAIN</li>
      </ul>
      <h2>AGRI VALUE CHAIN</h2>
    </div>
  </div>
</section>
<!--Page Header End-->

<!--Company Logos One Start-->
<section class="company-logos-one">
  <div class="container">
    <h2 class="sec-title__title" style="padding-bottom: 20px;">Integrated Unified Agri Value Chain</h2>
    <br />
    <img src="assets/images/feauters/agrichain.gif" style="width:100%" loading="lazy" />
  </div>
</section>
<!--Unified Agrichaing  End-->

<section class="about-three company-overview">
    <div class="container">
        <div class="row align-items-center">
            <!--Start About Three Img Box-->
            <div class="col-lg-4">
                <div class="about-three__img-box">
                    <div class="about-three__img-box-img">
                        <div class="about-three__img-box-img-inner">
                            <img src="assets/images/project/digitalUnified.jpg" alt="">
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
                            <img src="assets/images/resources/sec-title-icon3.png" alt="">
                        </div>
                        <span class="sec-title__tagline">DIGITALLY UNIFIED AGRI VALUE CHAIN - APP</span>
                    </div>
                    <div class="about-two__content-box-list">
          <ul class="about-one__content-list custom_list">
                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>Digitally Unifed Agri Eco System.</p>
                  </div>
                </li>

                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>Unified Post Harvest AgriValue Chain.</p>
                  </div>
                </li>

                <li>
                  <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>Mobile APP based Solution.</p>
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

<section class="company-logos-one">
  <div class="container">
    <h2 class="sec-title__title text-center" style="padding-bottom: 20px;">Global Solution : 1 Nation – 1 Agri Market</h2>
    <br />
    <img src="assets/images/infographics/process.jpg" style="width:100%" loading="lazy" />
  </div>
</section>


@endsection