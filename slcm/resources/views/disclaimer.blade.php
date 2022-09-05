@extends('includes/master')
@section('title', 'Sohan Lal Commodity Management Pvt. Ltd')

@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/disclaimer.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Disclaimer</li>
                    </ul>
                    <h2>Disclaimer</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

<!--Start Content-->
<section class="services-details innerPage_section commodity">
    <div class="container">
            <!--Start Faq One Content-->
                <div class="faq-one__content">

                    <div class="faq-one__inner-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="faq-one__inner-content-left">
                                    <h5 class="mb-20">DISCLAIMER </h5>
                                    <p>The information appearing in this website is for general  information purposes only. The information is provided by <strong>Sohan Lal Commodity Management Private Limited</strong> and whilst it is our  endeavor to keep the information updated and factual, we make no  representations or warranties of any kind, express or implied, about the  completeness, accuracy, reliability, suitability or availability with respect  to the website or the information, products, services or related graphics  contained on the website for any purpose. Any reliance you place on such  information is therefore strictly at your own risk.</p>
                                    <p><br>
                                      In no event will we be liable for any loss or damage including  without limitation, indirect or consequential loss or damage, or any loss or  damage whatsoever arising from loss of data or profits arising out of, or in  connection with, the use of this website.</p>
                                    <p><br>
                                      Through this website you are able to link to other websites  which are not under the control of <strong>Sohan  Lal Commodity Management Private Limited</strong>, we have no control over the  nature, content and availability of those sites. The inclusion of any links  does not necessarily imply a recommendation or endorse the views expressed  within them.</p>
                                    <p><br>
                                      Every effort is made to keep the website up and running  smoothly. However, <strong>Sohan Lal Commodity  Management Private Limited</strong> takes no responsibility for, and will not be  liable for, the website being temporarily unavailable due to technical issues  beyond our control.</p>

<hr>
                                      <h5 class="mb-20">AGRIREACH BETA DISCLAIMER  </h5>
                                      <div class="disclaimerList">
                                        <ul>
                                            <li>This is a Beta version of the  Agrireach Mobile Quality Check APP which is still undergoing final testing  before its official release. Results may significantly vary in the Final  Official release. </li>
                                            <li>The  Report is issued solely for the purpose of information and not for Commercial  purpose. We are not liable to user or any third party for any action taken or  not taken on the basis of Agrireach reports.</li>
                                            <li>The  result pertains to the tested digital sample image only. This information  stated in this report is derived from the result of visual inspection and  testing procedure carried out in accordance to the quality of the image taken  by the user or assessment on the basis of technical standard, trade, custom or  practice.</li>
                                            <li>A Patent has been applied for the  Application. Any effort of duplicating the application may be treated as an  infringement of the rights of SLCM and may will be liable for legal action  from SLCM. SLCM reserves the right to alter / delete change the application at  any time. </li>
                                          </ul>
                                      </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <!--End Faq One Content-->
    </div>
</section>

<section class="features-one clearfix techs innerPage_section">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
              <img src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
            <h2 class="sec-title__title">OUR BRANDS            </h2>
          </div>
        <div class="row">
            <!--Start Single Features One-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="features-one__single style2 text-center">
                    <div class="features-one__single-bg" style="background-image: url(assets/images/backgrounds/features-one-single-bg.png);">
                    </div>
                    <div class="features-one__single-img">
                        <img src="assets/images/resources/agrireach.jpg" alt="">
                    </div>
                    <div class="features-one__single-title text-center">
                        <h3><a href="{{url('ai-ml-based-quality-check-app.html')}}">Agri Reach</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->
            <!--Start Single Features One-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="features-one__single style2 text-center">
                    <div class="features-one__single-bg" style="background-image: url(assets/images/backgrounds/features-one-single-bg.png);">
                    </div>
                    <div class="features-one__single-img">
                        <img src="assets/images/resources/kd.png" alt="">
                    </div>
                    <div class="features-one__single-title text-center">
                        <h3><a href="{{url('agri-finance.html')}}">Kissandhan</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->
            <!--Start Single Features One-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="features-one__single style2 text-center">
                    <div class="features-one__single-bg" style="background-image: url(assets/images/backgrounds/features-one-single-bg.png);">
                    </div>
                    <div class="features-one__single-img">
                        <img src="assets/images/resources/as.jpg" alt="">
                    </div>
                    <div class="features-one__single-title text-center">
                        <h3><a href="{{url('agri-suraksha.html')}}">Agri Suraksha</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->
        </div>
    </div>
</section>
@endsection
