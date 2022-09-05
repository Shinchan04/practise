@extends('includes/master')
@section('title', 'Sohan Lal Commodity Management Pvt. Ltd')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header language_switcher" style="background-image: url(assets/images/backgrounds/contact2.jpg);">
            <div class="container">
                <div class="page-header__inner">
                <!-- <div class="btn-group language_switcher">
                    <a href="{{url('slcm-contact.html')}}" class="btn thm-btn active" aria-current="page">English</a>
                    <a href="{{url('myan-slcm-contact.html')}}" class="btn thm-btn ">Burmese</a>
                </div> -->
                    <ul class="thm-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

<!--Start Content-->
<section class="contact-page innerPage_section">
    <div class="container">
        <div class="row">
            <!--Start Contact Page Left-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__left">
                    <div class="sec-title mb-0">
                        <div class="icon">
                            <img src="assets/images/resources/sec-title-icon3.png" alt="">
                        </div>
                        <span class="sec-title__tagline">Contact now</span>
                        <h2 class="sec-title__title">Get in Touch with Us</h2>
                    </div>
                    <p class="contact-page__left-text mt-20">
                        <strong>ANUBHAV KUMAR SENGAR <br />VICE PRESIDENT</strong><br />
                        SLCM Ltd.
                        Room No. 406 / 412,
                        La Pyayt Wun Plaza,
                        Alan Pya Pagoda Road,
                        Next to Hotel Park Royal Yangon,
                        Dagon Township, Yangon, Myanmar<br />
                        TEL : +95 9254414683</p>
                    <div class="contact-page__social-link">
                        <ul>
                            <li><a href="https://twitter.com/SLCM_Group" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://in.linkedin.com/company/sohan-lal-commodity-management-pvt-ltd-" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/slcmgroup/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/SLCMGroup" target="_blank"><i class="fab fa-facebook"></i></a></li>

                            <li><a href="https://www.youtube.com/channel/UCy9ugEadcj8mRqvHVZhdqyQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Contact Page Right-->
        </div>
    </div>
</section>
        <!--End Content-->

@endsection
