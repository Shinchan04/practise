@extends('includes/master')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/downloads.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Downloads</li>
            </ul>
            <h2>Downloads</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Content-->
<section class="services-details downloads">
    <div class="container">
        <div class="row">
            <!--Start Services Details Sidebar-->
            <div class="col-xl-4 col-lg-4">
                <div class="services-details__sidebar">
                    <!--Start Services Details Sidebar Single-->
                    <div class="services-details__sidebar-single">
                        <div class="services-details__sidebar-single-services " data-wow-delay="0.1s" data-wow-duration="1200m">
                            <!-- <div class="title">
                                <h3>Downloads</h3>
                            </div> -->
                            <ul class="nav" id="nav-tab" role="tablist">
                                @php $i=0; @endphp
                                @foreach($result as $section=>$item)
                                <li><a class="nav-link {{$i == 0 ? 'active' : ''}}" id="{{$section}}-tab" data-bs-toggle="tab" data-bs-target="#{{$section}}" role="tab" aria-controls="{{$section}}" aria-selected="true">{{$section}}<i class="fa fa-angle-right"></i></a></li>
                                @php $i++; @endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar Single-->
                </div>
            <!--End Services Details Sidebar-->

            <!--Start Services Details Content-->
            <div class="col-xl-8 col-lg-8">
                <div class="tab-content" id="nav-tabContent">
                    @php $j=0; @endphp
                    @foreach($result as $section=>$data)


                    <div class="tab-pane fade {{$j == 0 ? 'show active' : ''}} " id="{{$section}}" role="tabpanel" aria-labelledby="{{$section}}-tab">
                        <div class="services-details__content">
                                <div class="sec-title">
                                    <div class="icon">
                                        <img src="assets/images/resources/sec-title-icon3.png" alt="">
                                    </div>
                                    <span class="sec-title__tagline">you can download {{$section}} here</span>
                                    <h2 class="sec-title__title">Download {{$section}}</h2>
                                </div>
                                <div class="services-details__sidebar-single">
                                    @foreach($data as $item)
                                    <div class="services-details__sidebar-single-btn download-btn-outer text-center " data-wow-delay="0.2s" data-wow-duration="100m">
                                        <a href="{{$item->file}}" target="_blank" class="thm-btn download-btn">
                                            <div><span class="icon-pdf"></span> {{$item->title}}</div>
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                    @endforeach

                                </div>
                        </div>
                    </div>

                    @php $j++; @endphp
                    @endforeach
                    <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
                    <div class="services-details__content">
                                <div class="sec-title">
                                    <div class="icon">
                                        <img src="assets/images/resources/sec-title-icon3.png" alt="">
                                    </div>
                                    <span class="sec-title__tagline">you can download company brochure</span>
                                    <h2 class="sec-title__title">Company Downloads</h2>
                                </div>
                                <div class="services-details__sidebar-single">
                                    <div class="services-details__sidebar-single-btn download-btn-outer text-center">
                                        <a href="#!" target="_blank" class="thm-btn download-btn">
                                            <div><span class="icon-pdf"></span> Balance Sheet</div>
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                    <div class="services-details__sidebar-single-btn download-btn-outer text-center">
                                        <a href="#!" target="_blank" class="thm-btn download-btn">
                                            <div><span class="icon-pdf"></span> Financial Statements</div>
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Content-->




@endsection
