@extends('includes/master')
@section('title', 'Best warehousing company, post agriculture services india,collateral management services in india,agri logistic warehouse - Sohan Lal Commodity Management Pvt. Ltd')

@section('content')
    <!--Page Header Start-->
    <section class="page-header clearfix innerPage_header"
        style="background-image: url(assets/images/backgrounds/management.jpg);">
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Management</li>
                </ul>
                <h2>Management</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Start Content-->
    <section class="meet-farmers-one meet-farmers-one--about innerPage_section">
        <div class="container">
            <div class="row">
                @foreach($result as $item)
                <!--Start Single Members One-->
                <div class="col-xl-12 col-lg-12  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="meet-farmers-one__single team_style2">
                        <div class="directors-info left_align">
                            <div class="meet-farmers-one__single-img">
                                <img loading="lazy" src="{{$item->file}}" alt="" />
                               {{--  <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="descrition">
                                <div class="meet-farmers-one__single-title">
                                    <p>{{$item->title}}</p>
                                    <h2>{{$item->name}}</h2>
                                </div>
                                <p>{!! nl2br($item->description) !!}</p>
                                <div class="readmore-button">
                                    <button data-bs-toggle="modal" data-bs-target="#b{{$item->id}}"
                                        class="p-0 text-decoration-none thm-btn">
                                        View More <i class="fas fa-chevron-down text-2 ms-1"></i>
                                    </button>
                                </div>
                                <div class="readmore-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Members One-->
                    @endforeach
                </div>
            </div>
    </section>

    @foreach($result as $item)
    <!-- team member Modal -->
    <div class="modal fade team-modal" id="b{{$item->id}}" tabindex="-1" aria-labelledby="teamModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModalLabel">Management Team</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="meet-farmers-one__single team_style2 full-content">
                        <div class="directors-info">
                            <div class="meet-farmers-one__single-img">
                                <img loading="lazy" src="{{$item->file}}" alt="">
                               {{--  <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
 --}}
                            </div>
                            <div class="descrition">
                                <div class="meet-farmers-one__single-title">
                                    <p>{{$item->title}}</p>
                                    <h2>{{$item->name}}</h2>
                                </div>
                                <p>{!! nl2br($item->description) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach



@endsection
