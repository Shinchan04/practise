@extends('includes/master')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/Analytical-Central-Laboratory.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>LAB SERVICES</li>
                    </ul>
                    <h2>LAB SERVICES</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        
<!--Start Content-->
<section class="contact-page innerPage_section">
    <div class="container">
        <div class="row">
            <!--Start Contact Page Left-->
            <div class="col-xl-12 col-lg-12">
                <div class="contact-page__left other_contactpage">
                    <div class="sec-title mb-0">
                        <div class="icon">
                            <img src="assets/images/resources/sec-title-icon3.png" alt="">
                        </div>
                        <span class="sec-title__tagline">Contact now</span>
                        <h2 class="sec-title__title">Get in Touch with Us</h2>
                    </div>
                    <p class="contact-page__left-text mt-20">
                        <strong>For the lab services related queries, please contact:</strong><br />
                        Neeraj Kumar Jha<br />
E-mail: neeraj.j@slc-india.com<br />
Contact No: 9711065541</p>
                </div>
            </div>
            <!--End Contact Page Right-->
        </div>
        <div class="note alert alert-primary mt-20">
        <strong>NOTE:</strong>
        This number is provided for use by customers willing to use Lab services only.
We regret that we cannot respond to any recruitment or sales queries on this line.
If you are seeking work with SLCM India, please see the Careers section on the website.
        </div>
    </div>
</section>
        <!--End Content-->

@endsection
