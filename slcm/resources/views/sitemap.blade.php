@extends('includes/master')
@section('title', 'Sohan Lal Commodity Management Pvt. Ltd')

@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/11main-slider-v1-3.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Sitemap</li>
                    </ul>
                    <h2>Sitemap</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        
<!--Start Content-->
<section class="services-details innerPage_section commodity">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <div class="treeview js-treeview">
  <ul>
    <li>
      <div class="treeview__level" data-level="A">
        <a href="{{url('/')}}" class="level-title">Home</a>
      </div>
      <ul>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="#!" class="level-title">About Us</a>
          </div>
          <ul>

            <li>
              <div class="treeview__level" data-level="C">
                <a href="{{url('company-overview.html')}}" class="level-title">Company Overview </a>
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('group-companies.html')}}" class="level-title">Group Companies</a>
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('history.html')}}" class="level-title">Company History</a>                
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('board-of-director.html')}}" class="level-title">Board of Directors</a>
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('management.html')}}" class="level-title">Management</a>
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('our-clients.html')}}" class="level-title">Our Clients</a>               
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('tech-inovation.html')}}" class="level-title">Tech Innovation</a>
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('csr.html')}}" class="level-title">Social Responsibility</a>
              </div>
            </li>

            <li>
              <div class="treeview__level" data-level="C">
              <a href="{{url('Achievements.html')}}" class="level-title">Achievements</a>
              </div>
            </li>
          </ul>
        </li>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="#!" class="level-title">Our Services</a>
          </div>
          <ul>
            <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('commodity.html')}}">Commodity Warehousing</a></div></li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('agri-finance.html')}}">Agri Financing</a></div></li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('collateral-management.html')}}">Collateral Management</a></div></li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('procurement.html')}}">Procurement</a></div></li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('risk-management.html')}}">Risk Mitigation </a></div></li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('analytical-central-laboratory.html')}}">Analytical Central Laboratory </a></div></li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('other-allied-services.html')}}">Other Allied Services</a></div></li>
          </ul>
        </li>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="#!" class="level-title">SLCM at Glance</a>
          </div>
          <ul>
          <li><div class="treeview__level" data-level="C"><a  class="level-title" href="https://slcmfamily-ourstrength.sohanlal.in" target="_blank">Locate our Warehouse</a</div></li>
                      <li><div class="treeview__level" data-level="C"><a  class="level-title" href="{{url('media.html')}}">SLCM in Media </a></div></li>
                      <li><div class="treeview__level" data-level="C"><a  class="level-title" href="{{url('life.html')}}">Life at SLCM</a</div></li>
                      <li><div class="treeview__level" data-level="C"><a  class="level-title" href="{{url('wdra.html')}}">WDRA Stock Positions </a></div></li>
                      <li><div class="treeview__level" data-level="C"><a  class="level-title" href="{{url('icex.html')}}">ICEX Stock Positions </a></div></li>
          </ul>
        </li>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="{{url('digitised-enterprise.html')}}" class="level-title">Digitised Enterprise</a>
          </div>
        </li>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="{{url('investors.html')}}" class="level-title">Investors</a>
          </div>
          <ul>
          </ul>
        </li>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="#!" class="level-title">SLCM Myanmar</a>
          </div>
          <ul>
          <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('slcm-myan.html')}}">Overview <br>
                          <span>အက်ဥ္းခ်ဳပ္သံုးသပ္ခ်က္</span>
                        </a></div>
                      </li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('slcm-commodity.html')}}">Commodity Warehousing <br><span>လူသံုးကုန္
                            သိုေလွာင္ျခင္း</span></div></a> </li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('slcm-collateral.html')}}">Collateral Management<br><span>ေဘးကင္းလံုျခံဳေစေရးစီမံမႉ</span>
                        </a></div></li>
                      <li><div class="treeview__level" data-level="C"><a class="level-title" href="{{url('slcm-contact.html')}}">Contact Us <br><span>ကြၽႏု္ပ္တို႔အားဆက္သြယ္ရန္</span>
                        </a></div></li>
          </ul>
        </li>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="{{url('contact.html')}}" class="level-title">Contact Us</a>
          </div>
          <ul>
          </ul>
        </li>

        <li>
          <div class="treeview__level" data-level="B">
            <a href="#!" class="level-title">Others</a>
          </div>
          <ul>
                      <li><div class="treeview__level" data-level="C"><a  class="level-title" href="{{url('vacancies.html')}}">Vacancies</a</div></li>
                      <li><div class="treeview__level" data-level="C"><a  class="level-title" href="{{url('privacy-policy.html')}}">Privacy Policy </a></div></li>
                      <li><div class="treeview__level" data-level="C"><a  class="level-title" href="{{url('disclaimer.html')}}">Disclaimer </a></div></li>
          </ul>
        </li>

      </ul>
    </li>
  </ul>
</div>
        </div>
        <div class="col-lg-6">
            <img src="assets/images/resources/sitemap-img.jpg" width="100%" class="img-thumbnail" alt="">
        </div>
    </div>
</div>
</section>
        <!--End Content-->

@endsection
