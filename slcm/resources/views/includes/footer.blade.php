
<!-- <section class="company-logos-one" style="padding:30px 0 30px;background:#f6f4ec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm-7">
        <h2 class="mediJoinour sec-title__title">Join Our Newsletter </h2>
      </div>
      <div class="col-sm-5">
        <form class="subscribe-form mt-0" id="newsletter" action="{{url('newsletter')}}">
          @csrf
          <input type="email" name="email" id="newsletterEmail" required placeholder="Email address">
          <span class="form-validation1">Thank you for subscribing us.</span>
          <button type="submit">Go</button>
      </form>
      </div>
    </div>    
  </div>
</section> -->


<!--Start Footer One-->
<footer class="footer-one">
  <div class="footer-one__top">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="footer-one__top-wrapper">
            <div class="footer-one__bg"><img src="assets/images/backgrounds/footer-one-bg.png" alt="" /></div>
            <div class="row">
              <!--Start Footer Widget Column-->
              <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                <div class="footer-widget__column footer-widget__about">
                  <div class="footer-widget__about-logo">
                    <a href="{{url('/')}}"><img src="assets/images/resources/logo.png" class="logo-w" alt="SLCM"></a>
                  </div>
                  <p class="footer-widget__about-text">SLCM is one of India’s largest Digitally integrated
                    post-harvest Agri-logistics platform</p>
                  <div class="footer-widget__about-contact-box">
                    <p class="phone"><a href="tel:011-71110100"><i class="fas fa-phone-square-alt"></i> 011-71110100</a> </p>
                    <p class="phone"><a href="tel:9310228929"><i class="fas fa-mobile-alt"></i>  9310228929, </a> <a href="tel:9350528929">9350528929</a> </p>
                    <p><a href="mailto:cs@slc-india.com"><i class="fa fa-envelope"></i>cs@slc-india.com</a></p>
                   {{--  <p class="text"><i class="fas fa-map-marker-alt"></i>615-618, 612-614 and 642-644 DLF Tower,
                      15 Shivaji Marg</p> --}}
                  </div>
                </div>
              </div>
              <!--End Footer Widget Column-->

              <!--Start Footer Widget Column-->
              <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                <div class="footer-widget__column footer-widget__explore">
                  <h2 class="footer-widget__title">About Us</h2>
                  <ul class="footer-widget__explore-list">
                    <li class="footer-widget__explore-list-item"><a href="{{url('company-overview.html')}}">Company History</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('group-companies.html')}}">Group Companies</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('board-of-director.html')}}">Board of Director</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('management.html')}}">Management</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('our-clients.html')}}">Our Clients</a>
                    <!-- <li class="footer-widget__explore-list-item"><a href="{{url('tech-inovation.html')}}">Tech Innovation</a></li> -->
                    <li class="footer-widget__explore-list-item"><a href="{{url('media.html')}}">SLCM in Media</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('life.html')}}">Life at SLCM</a></li>
                    </li>
                  </ul>
                </div>
              </div>
              <!--End Footer Widget Column-->

              <!--Start Footer Widget Column-->
              <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                <div class="footer-widget__column footer-widget__explore">
                  <h2 class="footer-widget__title">Explore</h2>
                  <ul class="footer-widget__explore-list">
                    <li class="footer-widget__explore-list-item"><a href="{{url('Achievements.html')}}">Achievements</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('vacancies.html')}}">Vacancies</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('wdra.html')}}">WDRA Stock Positions</a></li>
                    <!-- <li class="footer-widget__explore-list-item"><a href="{{url('icex.html')}}">ICEX Stock Positions</a></li> -->
                    <li class="footer-widget__explore-list-item"><a href="{{url('privacy-policy.html')}}">Privacy Policy</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('disclaimer.html')}}">Disclaimer</a></li>
                    <li class="footer-widget__explore-list-item"><a href="{{url('sitemap.html')}}">Sitemap</a></li>
                    </li>
                  </ul>
                </div>
              </div>
              <!--End Footer Widget Column-->

              <!--Start Footer Widget Column-->
              <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                <div class="footer-widget__column footer-widget__newletter">
                  <img src="assets/images/resources/national-accredition-board-logo.png" class="footer-widget__iso-logo"
                    alt="">
                  <ul class="footer-widget__explore-list">
                    <li class="footer-widget__explore-list-item"><a target="_blank"
                      href="pdfs/27001.pdf">ISO/IEC 27001:2013 Certified</a></li>
                  </li>
                    <li class="footer-widget__explore-list-item"><a target="_blank"
                        href="pdfs/33000.pdf">ISO 33000
                        Certified</a></li>
                    <li class="footer-widget__explore-list-item"><a target="_blank"
                        href="pdfs/ISO 9001.pdf"> ISO
                        9001:2015 Certified</a></li>
                    <li class="footer-widget__explore-list-item"><a target="_blank"
                        href="pdfs/ISO22000-2018-Certificate.pdf">ISO 22000:2018 Certified</a></li>
                    <li class="footer-widget__explore-list-item"><a target="_blank"
                        href="pdfs/14001.pdf">ISO
                        14001:2015 Certified</a></li>
                    <li class="footer-widget__explore-list-item"><a target="_blank"
                        href="pdfs/18001.pdf">ISO
                        45001:2018 Certified</a></li>
                   
                  </ul>
                  <!-- <h2 class="footer-widget__title">Newletter</h2>
                  <p class="footer-widget__newletter-text">Sign up now to get daily latest
                    news & updates from us</p>
                  <form class="subscribe-form" action="#!">
                    <input type="email" name="email" placeholder="Email address">
                    <button type="submit">Go</button>
                  </form> -->
                </div>
              </div>
              <!--End Footer Widget Column-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Start Footer One Bottom-->
  <div class="footer-one__bottom">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="footer-one__bottom-inner">
            <div class="footer-one__bottom-text">
              <p>&copy; Copyright 2021 by <a href="#!">Sohan Lal Commodity Management Pvt Ltd (SLCM)</a></p>
            </div>
            <div class="footer-one__bottom-social-links">
              <ul>
                <li><a href="https://twitter.com/SLCM_Group" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://in.linkedin.com/company/sohan-lal-commodity-management-pvt-ltd-" target="_blank"><i
                      class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/slcmgroup/" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a href="https://www.facebook.com/SLCMGroup" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCy9ugEadcj8mRqvHVZhdqyQ" target="_blank"><i
                      class="fab fa-youtube"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Footer One Bottom-->
</footer>
<!--End Footer One-->
<a href="#!" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow-2"></i></a>
