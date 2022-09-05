@extends('includes/master')
@section('title',
    'Best warehousing company, post agriculture services india,collateral management services in
    india,agri logistic warehouse - Sohan Lal Commodity Management Pvt. Ltd',)

@section('content')
    <!--Page Header Start-->
    <section class="page-header clearfix innerPage_header"
        style="background-image: url(assets/images/backgrounds/contact1.jpg);">
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Start Content-->
    <!--Start Contact Page-->
    <section class="contact-page innerPage_section">
        <div class="container">
            <div class="row">
                <!--Start Contact Page Left-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-page__left">
                        <div class="sec-title">
                            <div class="icon">
                                <img src="assets/images/resources/sec-title-icon3.png" alt="">
                            </div>
                            <span class="sec-title__tagline">Contact now</span>
                            <h2 class="sec-title__title">Get in Touch <br>with Us</h2>
                        </div>
                        <p class="contact-page__left-text">We are committed to providing our customers with exceptional
                            service while offering our employees the best training.</p>
                        <div class="contact-page__social-link">
                            <ul>
                                <li><a href="https://twitter.com/SLCM_Group" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="https://in.linkedin.com/company/sohan-lal-commodity-management-pvt-ltd-"
                                        target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/slcmgroup/" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/SLCMGroup" target="_blank"><i
                                            class="fab fa-facebook"></i></a></li>

                                <li><a href="https://www.youtube.com/channel/UCy9ugEadcj8mRqvHVZhdqyQ" target="_blank"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Contact Page Right-->

                <!--Start Contact Page Right-->
                <div class="col-xl-8 col-lg-8">
                    <div class="alert alert-success message" style="display: none"></div>
                    <div class="contact-page__right">
                        <form action="{{ url('contact.html') }}" class="comment-one__form contact-form-validated"
                            novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <select name="subject" class="ignore" required>
                                            <option value="" selected disabled>Subject</option>
                                            <option>Agri Warehousing Management</option>
                                            <option>Collateral Management</option>
                                            <option>Agri Financing</option>
                                            <option>Procurement</option>
                                            <option>The Central Analytical Agri Laboratory</option>
                                            <option>Risk Mitigation</option>
                                            <option>Media Queries</option>
                                            <option>Lab Services</option>
                                            <option>Customer Support</option>
                                            <option>Human Resource</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Mobile Number" required name="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Contact Page Right-->
            </div>
        </div>
    </section>
    <!--End Contact Page-->


    <!--Start Contact Page Contact Info-->
    <section class="contact-page__contact-info clearfix">

        <div class="auto-container">
            <div class="row">



                <div class="sec-title text-center">
                    <div class="icon">
                      <img loading="lazy" src="assets/images/resources/sec-title-icon3.png" alt="">
                    </div>
                    <h2 class="sec-title__title">Contact Us
                    </h2>
                  </div>
                <div class="col-xl-12">

                    <div class="about-three__products-list" style="margin-top: 0px;">
                        <div class=" aboutItems contactItems ">
                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Corporate Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>642-644 DLF Tower,
                                        15 Shivaji Marg
                                        Najafgarh Road, Moti Nagar,
                                        New Delhi-110015<br>
                                        <i class="fa fa-phone-alt">&nbsp;</i> 011-71110100<br>
                                        <i class="fa fa-fax">&nbsp;</i> 011-71110101 <br><i
                                            class="fa fa-mobile-alt">&nbsp;</i> 9310228929, 9350528929
                                    </p>
                                </div>
                            </div>

                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Myanmar Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>
                                        SLCM Ltd.<br />
                                        Room No. 406 / 412,
                                        La Pyayt Wun Plaza,
                                        Alan Pya Pagoda Road,
                                        Next to Hotel Park Royal Yangon,
                                        Dagon Township, Yangon, Myanmar
                                        <br />
                                        <i class="fa fa-mobile-alt">&nbsp;</i> +95 9254414683
                                    </p>
                                </div>
                            </div>

                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Kolkata Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>Room No.4, Poddar Court,
                                        Gate No.2, 7th Floor,
                                        18, Rabindra Sarani,<br />
                                        Kolkata – 700001
                                    </p>
                                </div>
                            </div>

                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Patna Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>Ambition Building
                                        Room No – 304, 3rd Floor,
                                        Jamal Road, Patna
                                        Bihar – 800001<br />
                                        <i class="fa fa-mobile-alt">&nbsp;</i>7283005851
                                    </p>
                                </div>
                            </div>

                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Registered Office: India</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>4067,1st Floor,
                                        Naya Bazar,
                                        Delhi-110006</p>
                                </div>
                            </div>


                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Kota Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>G 217, Road No. 5 IPIA, Near Hussain
                                        Dharamkanta, Kota, Rajasthan Pin - 324005
                                        <br />
                                        <i class="fa fa-user">&nbsp;</i> Sumit Sharma </br>
                                        <i class="fa fa-mobile-alt">&nbsp;</i>7877087672
                                    </p>
                                </div>
                            </div>


                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Indore Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>316, Milandas Manore, 3rd Floor, RNT Marg,
                                        Opp. TI Mall, Near Hotel Lemon Tree, Indore (M.P) Pin - 452001
                                        <br />
                                        <i class="fa fa-user">&nbsp;</i> Hemendra Nagar </br>
                                        <i class="fa fa-mobile-alt">&nbsp;</i>9425035275
                                    </p>
                                </div>
                            </div>

                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Ludhiana Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>Property No. 3245/16, Chet Singh Nagar,
                                        Gill Road, Lion Tower, Above Neeta Jewellers, 2nd floor, Ludhiana, Pin - 141003
                                        <br />
                                        <i class="fa fa-user">&nbsp;</i> Pankaj Singh </br>
                                        <i class="fa fa-mobile-alt">&nbsp;</i>9501064451
                                    </p>
                                </div>
                            </div>

                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Lucknow Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>SF03 Shivam Tower, 68 Maqbara Road,
                                        Hazratganj, Lucknow, Pin - 226001
                                        <br />
                                        <i class="fa fa-user">&nbsp;</i> Saurabh Mishra
                                        </br>
                                        <i class="fa fa-mobile-alt">&nbsp;</i>9455181999
                                    </p>
                                </div>
                            </div>


                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Ahmedabad Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>S203, Akshar Stadia, Behind Eden Hotel, SG Highway, Bodakdew Ahmedabad Gujarat Pin -380054


                                        <br />
                                        <i class="fa fa-user">&nbsp;</i> Vineet Singh
                                        </br>
                                        <i class="fa fa-mobile-alt">&nbsp;</i>9454548731
                                    </p>
                                </div>
                            </div>

                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Nagpur Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>Sharda Bhavan,Plot no.269, House No.260-A, First Floor,Lakadganj,Central Avenue, Nagpur-440018


                                        <br />
                                        <i class="fa fa-user">&nbsp;</i> Satish Chandak
                                        </br>
                                        <i class="fa fa-mobile-alt">&nbsp;</i>8766779337
                                    </p>
                                </div>
                            </div>


                            <div class="aboutItem ">
                                <div class="address">
                                    <h5>Karnal Office</h5>
                                    <p><i class="fa fa-map-marker-alt">&nbsp;</i>SCO-26, Sector-8, Karnal,Haryana-132001


                                        <br />
                                        <i class="fa fa-user">&nbsp;</i> Ashok Kumar
                                        </br>
                                        <i class="fa fa-mobile-alt">&nbsp;</i>8053299006
                                    </p>
                                </div>
                            </div>

                           
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Contact Info-->


    <!--Contact Page Google Map Start-->
    <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750.4009644856085!2d77.15534520812022!3d28.665648795601207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03a9c62d2aeb%3A0x26b01169af753896!2sSLCM%20Group!5e0!3m2!1sen!2sin!4v1635792420143!5m2!1sen!2sin"
            class="contact-page-google-map__one" allowfullscreen></iframe>
    </section>
    <!--Contact Page Google Map End-->
    <!--End Content-->

@endsection
