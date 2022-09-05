@extends('includes/master')
@section('title', 'best warehousing company, post agriculture services india,collateral management services in india,agri logistic warehouse - Sohan Lal Commodity Management Pvt. Ltd')


@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/vacancy-bg.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>VACANCIES</li>
                    </ul>
                    <h2>VACANCIES</h2>
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
                @if (Session::has('success'))
                 <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <div class="faq-one__content">

                    <div class="faq-one__inner-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="faq-one__inner-content-left">
                                    <p>Growth creates opportunities. To fuel its growth plans, SLCM currently has the following vacancies across multiple locations.</p>
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
                        @foreach($result as $key=>$item)
                        <div class="accrodion {{$key == 0 ? 'active' : ''}}  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="accrodion-title">
                                <h4>{{$item->name}}</h4>
                            </div>
                            <div class="accrodion-content" >
                                <div class="inner">
                                    <p class="mb-20">{!! nl2br($item->description) !!}</p>
                                    <p>
                                    <button data-position="{{$item->name}}" data-bs-toggle="modal" data-bs-target="#vacancyModal" class="clickV p-0 text-decoration-none thm-btn btn_small">
                                        Apply Now
                                    </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- vacancy Modal -->
<div class="modal fade" id="vacancyModal" tabindex="-1" aria-labelledby="vacancyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="vacancyModalLabel">Apply Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="team_style2 full-content">
            <div class="contact-page__right">
                    <form action="{{url('vacancies.html')}}" method="post" enctype="multipart/form-data" class="comment-one__form" >
                        <input type="hidden" class="position" name="position">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email address" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mobile Number" required name="mobile" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                   <textarea name="message" placeholder="Message"  rows="2" style="height: auto"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                    <label>Upload Resume</label>
                                    <input type="file" class="file_input" name="file" required accept=
                                    "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                     application/pdf, .xlsx,.xls,.doc, .docx,.ppt, .pptx,.pdf">
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$('.clickV').click(function(){
    $('.position').val(($(this).data('position')));
})
</script>
@endsection