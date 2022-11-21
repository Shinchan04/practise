@extends('includes/master')
@section('title', 'best warehousing company, post agriculture services india,collateral management services in india,agri logistic warehouse - Sohan Lal Commodity Management Pvt. Ltd')

@section('css')
<link rel="stylesheet" href="assets/vendors/nivo/nivo-lightbox.min.css" />
@endsection
@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/life.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>LIFE @ SLCM</li>
                    </ul>
                    <h2>LIFE @ SLCM</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

<!--Start Content-->
<section class="services-details innerPage_section commodity">
    <div class="container">
        <div class="row">
            <!--Start Faq One Content-->
            <div class="col-xl-12">
                <div class="faq-one__content">
                    <div class="faq-one__inner-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="faq-one__inner-content-left">
                                    <p class="mb-20">SLCM recognizes the importance of being an organized player in the Agri Sector. The Group has launched various initiatives to augment relations between employees and the management. SLCM believes in the philosophy that “If you expect your employees to have a heart for your business, you must have a heart for your employees.” And that’s the motive behind all the Employee Engagement Programs that are organized by the company.</p>

                                    <p class="mb-20">Festivals and celebrations are looked upon as an opportunities to engage our workforce proactively. We get thrilled to see the enthusiasm and excitement shared by each employee for the birthday celebrations, quiz, festival celebrations and team outings, etc.</p>

                                    <p>“We organize exciting games to boost competitiveness amongst the employees. We also give out equally interesting gifts which is a way to say that our employees are important to us. These celebrations further motivate employees to participate in the activities with much fervor” – opines Mr. Manish Mandan, Head of Human Resources & Admin.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Faq One Content-->


            <div class="services-details__content">
                <div class="faq-one__accordions faq-one__accordions--services-details">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                        @php $j=0; @endphp
                        @foreach($result as $section=>$item)
                            <h2 class="mt-50 mb-20">{{$section}}</h2>
                            <hr>
                            @foreach($item as $i=>$life)
                                <!--Start Faq One Single-->
                                <div class="accrodion {{$j == 0 && $i == 0 ? 'active' :'' }}  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                                    <div class="accrodion-title">
                                        <h4>{{$life->name}}</h4>
                                    </div>
                                    <div class="accrodion-content" style="">
                                        <div class="inner">
                                            <p class="mb-20">{!! nl2br($life->description) !!}</p>
                                            @if(!empty($life->images))
                                            <figure class="lightbox">
                                                @foreach($life->images as $img)
                                                <a data-lightbox-gallery="gallery{{$j.$i}}" href="{{$img}}" title="{{$life->name}}">
                                                    <img width="240"  height="100%"loading="lazy"  src="{{$img}}" class="mr-20 mb-20" alt="life@slcm" />
                                                </a>
                                                @endforeach
                                            </figure>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- End Faq One Single-->
                            @endforeach
                            @php $j++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Content-->

@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="assets/vendors/nivo/nivo-lightbox.js"></script>
<script>
    $(document).ready(function(){
        $('.lightbox a').nivoLightbox();
    });
</script>
@endsection
