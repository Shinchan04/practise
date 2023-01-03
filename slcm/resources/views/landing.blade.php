@extends('includes/master')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link href="assets/css/layout.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>SLCM</title>
    
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11024628300"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11024628300');
</script>



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1082005955840649');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1082005955840649&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    
  </head>
  <body>
  
  <section id="heropic">
  	<div class="container-fluid">
    	<div class="row">
    	<img src="assets/images/heropic.png" alt="heroslider">
      <!-- @if (Session::has('message'))
          <div class="alert alert-success">{{ Session::get('message') }}
        @endif -->
        <div class="form-wrap">
        
        	<div class="heading">Apply Now</div>
        	<div class="form-wrap" >
            <form action="{{ route('landingpage_save') }}" method="post" >
            @csrf
              <div class="row">
                <div class="form-group col-md-12">
                  <input class="form-control" id="name" name="name" type="text" placeholder="Full Name" data-validation="required">
                </div>
                <div class="form-group col-md-12">
                  <input class="form-control" id="mobile" name="mobile" type="number" placeholder="Phone Number" data-validation="required">
                </div>
                <div class="form-group col-md-12">
                  <input class="form-control"  id="business" name="business" type="text" placeholder="Existing Business" >
                </div>
                <div class="form-group col-md-12">
                  <select class="form-control"  id="state" name="state" type="select" style="margin-bottom:10px" >
                  <option value="" disabled selected>Select State</option>
                  <option>Andhra Pradesh</option>
                  <option>Arunachal Pradesh</option>
                  <option>Assam</option>
                  <option>Bihar</option>
                  <option>Chhattisgarh</option>
                  <option>Delhi</option>
                  <option>Goa</option>
                  <option>Gujarat</option>
                  <option>Haryana</option>
                  <option>Himachal Pradesh</option>
                  <option>Jammu and Kashmir</option>
                  <option>Jharkhand</option>
                  <option>Karnataka</option>
                  <option>Kerala</option>
                  <option>Madhya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Manipur</option>
                  <option>Meghalaya</option>
                  <option>Mizoram</option>
                  <option>Nagaland</option>
                  <option>Odisha</option>
                  <option>Punjab</option>
                  <option>Rajasthan</option>
                  <option>Sikkim</option>
                  <option>Tamil Nadu</option>
                  <option>Telangana</option>
                  <option>Tripura</option>
                </div>
                <div class="form-group col-md-12">
                  <input class="form-control"  id="city" name="city" type="text" placeholder="Your City" >
                </div>
                <div class="submit">
                <input id="submit" name="Submit" type="Submit" value="Submit" onclick="alert('Thank you for contacting us we will get back to you shortly!')">
                </div>
              </div>
            </form>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
            <script>
			$.validate();
		  </script> 
          </div>
        </div>
    	</div>
    </div>
  </section>
  
  
  <section id="banerpionst">
  	<div class="container">
    	<div class="row">
    		<div class="col-md-3 col-sm-3 col-xs-12">
            	<img src="assets/images/icon1.jpg">
            	<span><strong>950+ Mandis</strong>Access</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
            	<img src="assets/images/icon2.jpg">
            	<span><strong>9600 Warehouse</strong>Network</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
            	<img src="assets/images/icon3.jpg">
            	<span><strong>500+ Aggregators</strong>1090 Commodities</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
            	<img src="assets/images/icon4.jpg">
            	<span><strong>25B+ Loan Disbursed</strong>2500+ Mn MT Throughput</span>
            </div>
        </div>
    </div>
  </section>
  
  
  <section id="aboutus" class="pad-top">
  	<div class="container">
    	<div class="row">
    		<div class="col-md-6 col-sm-6 col-xs-12">
            	<img src="assets/images/sec-title-icon3.png">
            	<h1>
                	<span>get to know about us</span>
                    About SLCM - Our Brands
                </h1>
                <h3>One Stop post-harvest agri-logistics platform</h3>
                <p>Founded in 2009, Sohan Lal Commodity Management Pvt. Ltd. (SLCM) Group offers technology-driven warehousing services such as scientific storage for agriculture commodities, fumigation, testing and certification and funding against storage receipts in India and Myanmar. A player in the global post-harvest space, SLCM is ISO 9001: 2015, ISO 22000: 2018, ISO 33000, ISO</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 aboutbox">
            	<ul>
                	<li>
                    	<img src="assets/images/agrireach.jpg">
                    	<p>Digitally Enabled Professional Warehouse Management Solution. <span>Industry FIRST</span></p>
                    </li>
                    <li>
                    	<img src="assets/images/logo-kisan.png">
                    	<p>Multi-Asset NBFC Empowering Agriculture Financing.</p>
                   </li>
                </ul>
            </div>
        </div>
    </div>
  </section>
  
  
  <section id="products" class="pad-top pad-bot">
  	<div class="container">
    	<div class="row">
        	<div class="heading">Our Products</div>
    		<div class="col-md-4 col-sm-4 col-xs-12">
            	<div class="pro-wrap">
            	<div class="proimg-box">
                	<img src="assets/images/pic1.jpg">
                </div>
                <h4>COMMODITY BASED FINANCING (CBF)</h4>                
                <p>Commodity Based Financing (CBF) is a unique product offered by Kissandhan. The basic principle of financing is the underlying asset/ commodity which is being taken as collateral.</p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">
            	<div class="pro-wrap">
            	<div class="proimg-box">
                	<img src="assets/images/pic2.jpg">
                </div>
                <h4>LENDING TO NBFC-MFI FOR ON-LENDING PURPOSE</h4>                
                <p>This product has been designed for lending to NBFC-MFIs for on-lending to ‘Small-Holder Farmers’ for enhancing their Income level through agriculture and allied activities.</p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">
            	<div class="pro-wrap">
            	<div class="proimg-box">
                	<img src="assets/images/pic3.jpg">
                </div>
                <h4>BUSINESS CORRESPONDENT (BC) PARTNERSHIP-LENDING</h4>                
                <p>This product has been designed to create robust portfolio in Kissandhan’s Book by way of responsive, effective and efficient custodian of the Asset Book.</p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">
            	<div class="pro-wrap">
            	<div class="proimg-box">
                	<img src="assets/images/pic4.jpg">
                </div>
                <h4>LENDING TO FARMER PRODUCER ORGANISATION (FPOS)</h4>                
                <p>It is established in the form of Producer Company, a Cooperative Society or any other legal entity that provides systems and processes for profit sharing and benefits among the members.</p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">
            	<div class="pro-wrap">
            	<div class="proimg-box">
                	<img src="assets/images/pic5.jpg">
                </div>
                <h4>INVOICE DISCOUNTING FACILITY</h4>                
                <p>Kissandhan have introduced an exciting product titled “Instacash” which is the simplest and easiest way to manage the cash flow of the company. </p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">
            	<div class="pro-wrap">
            	<div class="proimg-box">
                	<img src="assets/images/pic6.jpg">
                </div>
                <h4>OTHER PRODUCTS</h4>                
                <p>Some more products like Term Loan/OD facility to Agri Enterprises/MSME like Agri Processors/Artias/Traders, lending for Farm Mechanisation, Impact Lending, and Loan facility for Input Dealers, etc.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-sm-8 col-xs-12">
            	<div class="whychooseus">
                	<div class="heading">Why Choose Us?</div>
                    <ul>
                    	<li>
                        	<img src="assets/images/icon5.jpg">
                        	<strong>Competent Professionals</strong>
                            <p>We work in an atmosphere of trust and camaraderie, where partners help each other.</p>
                        </li>
                        <li>
                        	<img src="assets/images/icon6.jpg">
                        	<strong>Superior Service</strong>
                            <p>We are committed to providing clients with the best value and service in the industry.</p>
                        </li>
                        <li>
                        	<img src="assets/images/icon7.jpg">
                        	<strong>Competitive Pricing</strong>
                            <p>Providing value through straightforward commissions and added services.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
            	<div class="why-points">
                	<img src="assets/images/icon8.jpg">
                    <p>Quick Sanction & Disbursement</p>
                </div>
                <div class="why-points">
                	<img src="assets/images/icon9.jpg">
                    <p>Transparent & Hassle Free Process</p>
                </div>
                <div class="why-points">
                	<img src="assets/images/icon10.jpg">
                    <p>Attractive Commercial Terms</p>
                </div>
            </div>
         </div>
     </div>
 </section>    
 
 
 
 

 
                      
  
  
  
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection