@extends('includes/master')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/get-media-coverage-India.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>News & Updates</li>
            </ul>
            <h2>News & Updates</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Content-->
<!--News Details Start-->
<section class="media innerPage_section">
    <div class="container">
        <div class="row">
            <!--Start News Details Laft-->
            <div class="col-xl-8 col-lg-7">
             {{--    <div class="media__left">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="assets/images/backgrounds/get-media-coverage-India.jpg" alt="" />
                        </div>

                        <div class="blog-one__single-content">
                            <h4>SLCM to launch mobile app to test crop quality to month-end</h4>
                            <ul class="meta-info d-flex justify-content-between align-items-center m-0">
                                <li><a href="#"><i class="fa fa-clock"></i>16 July, 2019</a></li>
                                <li><a href="#">READ MORE <i class="fa fa-chevron-right ml-5"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

                @foreach ($news as $month=>$n)
                <h4 id="{{$requested_year}}-{{$month}}" class="mb-20 year_title">{{$month}}</h4>

                <div class="row">
                    @foreach ($n as $news_item)
                    <!--Start Single Blog One-->
                    <div class="col-xl-6 col-lg-6  wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="blog-one__single mediaOnly">
                            <div class="blog-one__single-img">
                                <img src="{{$news_item->image}}" loading="lazy" alt="" />
                                <div class="date-box">
                                    <span>{{date("d F, Y", strtotime($news_item->date))}}</span>
                                </div>
                                <div class="overlay-icon">
                                    @if(!empty($news_item->file))
                                     <a target="_blank" href="{{$news_item->file}}"><span class="icon-pdf"></span></a>
                                    @else
                                    <a target="_blank" href="{{$news_item->link}}"><span class="fa fa-link"></span></a>
                                    @endif
                                </div>
                            </div>

                            <div class="blog-one__single-content">
                                @if(!empty($news_item->file))
                                    <h5><a target="_blank"  href="{{$news_item->file}}">{{$news_item->name}}</a></h5>
                                @else
                                     <h5><a target="_blank"  href="{{$news_item->link}}">{{$news_item->name}}</a></h5>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                    @endforeach
                </div>
                @endforeach
            </div>
            <!--End News Sidebar Laft-->



            <!--Start News Sidebar Sidebar-->
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">

                    <div class="sidebar__single sidebar__categories wow fadeInUp animated animated animated" data-wow-delay="0.3s" data-wow-duration="1200m">
                        <div class="title">
                            <h2>Archives</h2>
                        </div>
                        <ul class="sidebar__categories-list" id="accordionExample">

                            @foreach($result as $year=>$item)
                            <li><a href="{{$year == $requested_year ? '#!' : url('media.html?year='.$year)}}" id="heading{{$year}}" class="{{$year == $requested_year ? 'active' : ''}}"  aria-expanded="true" aria-controls="collapse{{$year}}">{{$year}}<span class="icon-right-arrow-angle"></span></a>
                            <ul class="sidebar__categories-list pl-30 accordion-collapse collapse {{$year == $requested_year ? 'show' : ''}}" id="collapse{{$year}}" aria-labelledby="heading{{$year}}" data-bs-parent="#accordionExample">
                                @foreach ($item as $month)
                                     <li><a href="#{{$year}}-{{$month->month}}">{{$month->month}} {{$month->year}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__tag wow fadeInUp animated animated animated" data-wow-delay="0.4s" data-wow-duration="1200m">
                        <div class="title">
                            <h2>Awards &amp; Recognition</h2>
                        </div>
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="assets/images/achievment/1.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/2.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/3.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/4.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/5.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/6.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/7.jpg"  loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/8.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/9.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/10.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/11.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/12.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/images/achievment/13.jpg" loading="lazy" class="d-block w-100 img-thumbnail img-responsive" alt="...">
                                </div>
                            </div>
                        </div>
                        <!-- <img src="assets/images/achievment/1.jpg" class="img-thumbnail img-responsive" alt=""> -->
                    </div>
                    <div class="sidebar__single sidebar__latest-posts wow fadeInUp animated animated animated" data-wow-delay="0.2s" data-wow-duration="1200m">
                        <div class="title">
                            <h2>Top News</h2>
                        </div>
                        <ul class="sidebar__latest-posts-list recent_news">
                            @foreach($recent as $item)
                            <li class="sidebar__latest-posts-list-item">
                                <div class="img-box">
                                    <img loading="lazy" src="{{$item->image}}" alt="" />
                                </div>
                                <div class="title">
                                    <p><i class="fa fa-clock"></i>{{date("d F, Y", strtotime($item->date))}}</p>
                                    <h4><a target="_blank" href="{{$item->file ?? $item->link}}">{{$item->name}}</a></h4>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>

                </div>
            </div>
            <!--End News Details Sidebar-->
        </div>
    </div>
</section>
<!--News Details End-->
<!--End Content-->
<!--Cta One Start-->
<section class="cta-one wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1000ms" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="cta-one__wrapper">
          <div class="cta-one__left">
            <div class="cta-one__left-icon">
              <span class="icon-farm"></span>
            </div>
            <div class="cta-one__left-title">
              <h2>Modernising India’s post-harvest agricultural value chain </h2>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--Cta One End-->
@endsection
