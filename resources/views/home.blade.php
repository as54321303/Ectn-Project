
@extends('layout.layout')



@section('title','Home-Page')



@section('content')

 <div class="bg-video-wrap">
    <video src="{{url('/asset/video/video.mp4')}}" loop muted autoplay>
    </video>
    <div class="overlay-video">
    </div>
    <div class="video-cap video-head">
    <h2 class="font-xlight">We are Seanautic Marine</h2>
    <h2>One Stop destination for all your ECTN Needs</h2>
    <p class="font-light text-capitalize">Get your ECTN with us</p>
    <a class="button btn-primary transition-3 button-padding" href="{{url('contact')}}">Get a Quote</a>
</div>
  </div>
    
<!-- <section id="home" class="p-0  single-slide">
    <h2 class="d-none">hidden</h2>
   
    <div id="particles-js"></div>
    <div class="part-header parallax parallax-slow"></div>
    <div class="overlay overlay-dark opacity-8 z-index-n1"></div>
    
    <div id="particles-text-morph">
        <h3 class="mb-2">We are Seanautic Marine</h3>
        <h2 id="morph-text" class="pb-2">One Stop destination for all your ECTN Needs </h2>
        <h3 class="mt2">Get your ECTN with us</h3>
    </div>
    
</section> -->




<section id="our-services" class="padd">

      

        

    <div class="container">





      <div class="row">





        @foreach($countries as $country)



        <div class="col-md-3 country-card col-6">

           <a href="{{route('ectn.country',$country->country_name2)}}"> <div class="dho">

                <div class="country-cards">

          <img

            class="d-block mx-auto"

            src="{{$country->image}}"

            alt="CONGO"

          />

          </div>

          </div></a>

          <a class="country-text" href="{{route('ectn.country',$country->country_name2)}}">{{$country->country_name}}</a>

        </div>

 

        @endforeach



      </div>









    </div>

  </section>

  <!--slider end-->

  <!--Some Feature -->

  <section id="our-feature" class="single-feature padding">

    <div class="container">

      <div class="row d-flex align-items-center">

        <div

          class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft"

          data-wow-delay="300ms"

        >

          <div class="heading-title mb-4">

            <h2 class="darkcolor font-normal bottom30">

              What we <span class="defaultcolor">Offer</span>

            </h2>

          </div>

          <p class="bottom35">

            “Seanautic Marine Inc. / ECTN-Africa is an independent service provider for all Cargo Tracking Note (CTN) from any worldwide origin to 22 African ECTN mandatory Countries. Every cargo that has been purchased from abroad and transported for commercial, business, in some cases diplomatic and personal purposes require a Loading Certificate called ECTN – Electronic Cargo Tracking Note. These waiver certificates (also known as CTN/ECTN/ENS/BESC/BIETC/FERI) are required by certain African countries to effectively control, supervise and manage import / export traffic to the country. Cargoes that have no valid ECTN will be blocked by the local customs.

          </p>

          <p class="bottom35">

            With a dynamic & highly Professional Team, we constantly seek Innovation & Cost effective solutions for our client’s needs. Our experienced staff grants a professional and fast handling of submitted ECTN. In addition, we provide the CTN number in advance, where possible. Seanautic/ECTN-Africa guarantees to complete the process with absolute confidentiality.

          </p>

          <a

            href="{{url('about')}}"

            class="button btnsecondary gradient-btn pagescroll mb-sm-0 mb-4"

            >Learn More</a

          >

        </div>

        <div

          class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight"

          data-wow-delay="300ms"

        >

          <div class="image">

            <img alt="SEO" src="{{url('asset/assets/seanauic.jpg')}}" />

          </div>

        </div>

      </div>

    </div>

  </section>

  <!--Some Feature ends-->

  <!-- WOrk Process-->

  <section id="our-process" class="padding bgdark">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12 text-center">

          <div

            class="heading-title whitecolor wow fadeInUp"

            data-wow-delay="300ms"

          >

            

            <h2 class="font-normal">Our Work Process</h2>

          </div>

        </div>

      </div>

      <div class="row">

        <ul class="process-wrapp">

          <li class="whitecolor wow fadeIn" data-wow-delay="300ms">

            <span class="pro-step bottom20">01</span>

            <p class="fontbold bottom25">Email Us</p>

            <p class="mt-n2 mt-sm-0">

              Email us the scanned copies of documents

            </p>

          </li>

          <li class="whitecolor wow fadeIn" data-wow-delay="400ms">

            <span class="pro-step bottom20">02</span>

            <p class="fontbold bottom25">Document Verification</p>

            <p class="mt-n2 mt-sm-0">

              We wil check the sumbitted document from our side

            </p>

          </li>

          <li class="whitecolor wow fadeIn" data-wow-delay="500ms">

            <span class="pro-step bottom20">03</span>

            <p class="fontbold bottom25">Get draft</p>

            <p class="mt-n2 mt-sm-0">

              We issue invoice & draft copy of BIETC certificate

            </p>

          </li>

          <li class="whitecolor wow fadeIn" data-wow-delay="600ms">

            <span class="pro-step bottom20">04</span>

            <p class="fontbold bottom25">Your Approval</p>

            <p class="mt-n2 mt-sm-0">

              We need your Draft approval & proof of transfer

            </p>

          </li>

          <li class="whitecolor wow fadeIn" data-wow-delay="700ms">

            <span class="pro-step bottom20">05</span>

            <p class="fontbold bottom25">Receive your Certificate</p>

            <p class="mt-n2 mt-sm-0">

              Validated BIETC is delivered, once OBL is received

            </p>

          </li>

        </ul>

      </div>

    </div>

  </section>

  <!--WOrk Process ends-->

  <!-- Mobile Apps -->
<!--
  <section id="our-apps" class="padding">

    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-6 col-md-7 col-sm-12">

          <div

            class="heading-title bottom30 wow fadeInUp"

            data-wow-delay="300ms"

            style="

              visibility: visible;

              animation-delay: 300ms;

              animation-name: fadeInUp;

            "

          >

            <span class="defaultcolor text-center text-md-left"

              >We are the fastest ect provider in the bussiness</span

            >

            <h2 class="darkcolor font-normal text-center text-md-left">

              Why Choose Us

            </h2>

          </div>

        </div>

        <div class="col-lg-6 col-md-5 col-sm-12">

          <p class="text-center text-md-left">

            Ectn-Africa is one of the most prestigious and reliable organization for ECTN Service. We have more than 10 year of experience in the bussiness

          </p>

        </div>

      </div>

      <div class="row d-flex align-items-center" id="app-feature">

        <div class="col-lg-4 col-md-4 col-sm-12">

          <div class="text-center text-md-right">

            <div

              class="feature-item mt-3 wow fadeInLeft"

              data-wow-delay="300ms"

              style="

                visibility: visible;

                animation-delay: 300ms;

                animation-name: fadeInLeft;

              "

            >

              <div class="icon"><i class="fas fa-user-lock"></i></div>

              <div class="text">

                <h3 class="bottom15">

                  <span class="d-inline-block">SSL Protected</span>

                </h3>

                <p>

                  We care about your privacy and follow all the practices to keep your data safe.

                </p>

              </div>

            </div>

            <div

              class="feature-item mt-5 wow fadeInLeft"

              data-wow-delay="350ms"

              style="

                visibility: visible;

                animation-delay: 350ms;

                animation-name: fadeInLeft;

              "

            >

              <div class="icon"><i class="fas fa-shield-virus"></i></div>

              <div class="text">

                <h3 class="bottom15">

                  <span class="d-inline-block">Safe Transaction</span>

                </h3>

                <p>

                  We have a complete transparency in any transaction we are doing with our clients. 

                </p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-4 text-center">

          <div class="app-image top30">

            <div class="app-slider-lock-btn"></div>

            <div class="app-slider-lock">

              <img src="{{url('asset/images/iphone-slide1.jpg')}}" alt="" />

            </div>

            <div

              id="app-slider"

              class="owl-carousel owl-theme owl-loaded owl-drag"

            >

              <div class="owl-stage-outer">

                <div

                  class="owl-stage"

                  style="

                    transform: translate3d(-470px, 0px, 0px);

                    transition: all 0s ease 0s;

                    width: 1645px;

                  "

                >

                  <div class="owl-item cloned" style="width: 235px">

                    <div class="item">

                      <img src="{{url('asset/images/iphone-slide2.jpg')}}" alt="" />

                    </div>

                  </div>

                  <div class="owl-item cloned" style="width: 235px">

                    <div class="item">

                      <img src="{{url('asset/images/iphone-slide3.jpg')}}" alt="" />

                    </div>

                  </div>

                  <div class="owl-item active" style="width: 235px">

                    <div class="item">

                      <img src="{{url('asset/images/iphone-slide1.jpg')}}" alt="" />

                    </div>

                  </div>

                  <div class="owl-item" style="width: 235px">

                    <div class="item">

                      <img src="{{url('asset/images/iphone-slide2.jpg')}}" alt="" />

                    </div>

                  </div>

                  <div class="owl-item" style="width: 235px">

                    <div class="item">

                      <img src="{{url('asset/images/iphone-slide3.jpg')}}" alt="" />

                    </div>

                  </div>

                  <div class="owl-item cloned" style="width: 235px">

                    <div class="item">

                      <img src="{{url('asset/images/iphone-slide1.jpg')}}" alt="" />

                    </div>

                  </div>

                  <div class="owl-item cloned" style="width: 235px">

                    <div class="item">

                      <img src="{{url('asset/images/iphone-slide2.jpg')}}" alt="" />

                    </div>

                  </div>

                </div>

              </div>

              <div class="owl-nav disabled">

                <button type="button" role="presentation" class="owl-prev">

                  <span aria-label="Previous">‹</span></button

                ><button type="button" role="presentation" class="owl-next">

                  <span aria-label="Next">›</span>

                </button>

              </div>

              <div class="owl-dots disabled"></div>

            </div>

            <img src="{{url('asset/images/iphone.png')}}" alt="image" />

          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">

          <div class="text-center text-md-left">

            <div

              class="feature-item mt-3 wow fadeInRight"

              data-wow-delay="300ms"

              style="

                visibility: visible;

                animation-delay: 300ms;

                animation-name: fadeInRight;

              "

            >

              <div class="icon"><i class="fas fa-dolly-box"></i></div>

              <div class="text">

                <h3 class="bottom15">

                  <span class="d-inline-block">Best Pricing</span>

                </h3>

                <p>

                  We Provide the best and premium service at very competitive price to our customers

                </p>

              </div>

            </div>

            <div

              class="feature-item mt-5 wow fadeInRight"

              data-wow-delay="350ms"

              style="

                visibility: visible;

                animation-delay: 350ms;

                animation-name: fadeInRight;

              "

            >

              <div class="icon"><i class="far fa-user-circle"></i></div>

              <div class="text">

                <h3 class="bottom15">

                  <span class="d-inline-block">24/7 Support </span>

                </h3>

                <p>

                  We are always available for your help and support anytime, anywhere, anyway.

                </p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
-->
  <!--Mobile Apps ends-->

  <!-- Counters -->
  <!--

  <section id="bg-counters" class="padding bg-counters parallax">

    <div class="container">

      <div class="row align-items-center text-center">

        <div class="col-lg-4 col-md-4 col-sm-4 bottom10">

          <div class="counters whitecolor top10 bottom10">

            <span

              class="count_nums font-light"

              data-to="2029"

              data-speed="2500"

            >

            </span>

          </div>

          <h3 class="font-light whitecolor top20">Ectn Provided</h3>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

          <p class="whitecolor top20 bottom20 font-light title">

            Countries Supported by ECTN-Africa are Benin, Burkina Faso, Republic of Congo, Liberia, Togo, ,Cameroon, Central African Republic, Chad, Democratic Republic of Congo, , Equatorial Guinea, Gabon, Ghana, Republic of Guinea, Guinea-Bissau, Ivory Coast, Libya, Madagascar, Mali, Niger, Senegal, Sierra Leon, and Burundi.”

          </p>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 bottom10">

          <div class="counters whitecolor top10 bottom10">

            <span

              class="count_nums font-light"

              data-to="895"

              data-speed="2500"

            >

            </span>

          </div>

          <h3 class="font-light whitecolor top20">Happy clients</h3>

        </div>

      </div>

    </div>

  </section>
-->
  <!-- Counters ends-->

  <!-- Our Team-->

  <!-- <section id="our-team" class="padding_top half-section-alt teams-border">

    <div class="container">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">

          <div

            class="heading-title heading_space wow fadeInUp"

            data-wow-delay="300ms"

          >

            <span class="defaultcolor text-center text-md-left"

              >Quisque tellus risus, adipisci</span

            >

            <h2 class="darkcolor font-normal text-center text-md-left">

              Meet Our Experts

            </h2>

          </div>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

          <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">

            Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed

            suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus

            metus sollicitudin. Quisque vitae sodales lectus.

          </p>

        </div>

      </div>

      <div class="row">

        <div class="col-md-12">

          <div id="ourteam-slider" class="owl-carousel">

            <div class="item">

              <div class="team-box">

                <div class="image">

                  <img src="assets/kyle-hallner-support-getctn.jpg" alt="" />

                </div>

                <div class="team-content">

                  <h4 class="darkcolor">Jessica Twain</h4>

                  <p>Agency Owner</p>

                  <ul class="social-icons-simple">

                    <li>

                      <a class="facebook" href="javascript:void(0)"

                        ><i class="fab fa-facebook-f"></i>

                      </a>

                    </li>

                    <li>

                      <a class="twitter" href="javascript:void(0)"

                        ><i class="fab fa-twitter"></i>

                      </a>

                    </li>

                    <li>

                      <a class="insta" href="javascript:void(0)"

                        ><i class="fab fa-instagram"></i>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

            <div class="item">

              <div class="team-box">

                <div class="image">

                  <img src="assets/kyle-hallner-support-getctn.jpg" alt="" />

                </div>

                <div class="team-content">

                  <h4 class="darkcolor">Jason Wudex</h4>

                  <p>Designer</p>

                  <ul class="social-icons-simple">

                    <li>

                      <a class="facebook" href="javascript:void(0)"

                        ><i class="fab fa-facebook-f"></i>

                      </a>

                    </li>

                    <li>

                      <a class="twitter" href="javascript:void(0)"

                        ><i class="fab fa-twitter"></i>

                      </a>

                    </li>

                    <li>

                      <a class="insta" href="javascript:void(0)"

                        ><i class="fab fa-instagram"></i>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

            <div class="item">

              <div class="team-box single">

                <div class="image">

                  <img src="assets/kyle-hallner-support-getctn.jpg" alt="" />

                </div>

                <div class="team-content">

                  <h4 class="darkcolor">Jessica Twain</h4>

                  <p>Agency Owner</p>

                  <ul class="social-icons-simple">

                    <li>

                      <a class="facebook" href="javascript:void(0)"

                        ><i class="fab fa-facebook-f"></i>

                      </a>

                    </li>

                    <li>

                      <a class="twitter" href="javascript:void(0)"

                        ><i class="fab fa-twitter"></i>

                      </a>

                    </li>

                    <li>

                      <a class="insta" href="javascript:void(0)"

                        ><i class="fab fa-instagram"></i>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

            <div class="item">

              <div class="team-box">

                <div class="image">

                  <img src="assets/kyle-hallner-support-getctn.jpg" alt="" />

                </div>

                <div class="team-content">

                  <h4 class="darkcolor">Hayden Wood</h4>

                  <p>Marketing</p>

                  <ul class="social-icons-simple">

                    <li>

                      <a class="facebook" href="javascript:void(0)"

                        ><i class="fab fa-facebook-f"></i>

                      </a>

                    </li>

                    <li>

                      <a class="twitter" href="javascript:void(0)"

                        ><i class="fab fa-twitter"></i>

                      </a>

                    </li>

                    <li>

                      <a class="insta" href="javascript:void(0)"

                        ><i class="fab fa-instagram"></i>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

            <div class="item">

              <div class="team-box">

                <div class="image">

                  <img src="assets/kyle-hallner-support-getctn.jpg" alt="" />

                </div>

                <div class="team-content">

                  <h4 class="darkcolor">Shania Jackson</h4>

                  <p>Print Media</p>

                  <ul class="social-icons-simple">

                    <li>

                      <a class="facebook" href="javascript:void(0)"

                        ><i class="fab fa-facebook-f"></i>

                      </a>

                    </li>

                    <li>

                      <a class="twitter" href="javascript:void(0)"

                        ><i class="fab fa-twitter"></i>

                      </a>

                    </li>

                    <li>

                      <a class="insta" href="javascript:void(0)"

                        ><i class="fab fa-instagram"></i>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

            <div class="item">

              <div class="team-box">

                <div class="image">

                  <img src="assets/kyle-hallner-support-getctn.jpg" alt="" />

                </div>

                <div class="team-content">

                  <h4 class="darkcolor">Jessica Twain</h4>

                  <p>Agency Owner</p>

                  <ul class="social-icons-simple">

                    <li>

                      <a class="facebook" href="javascript:void(0)"

                        ><i class="fab fa-facebook-f"></i>

                      </a>

                    </li>

                    <li>

                      <a class="twitter" href="javascript:void(0)"

                        ><i class="fab fa-twitter"></i>

                      </a>

                    </li>

                    <li>

                      <a class="insta" href="javascript:void(0)"

                        ><i class="fab fa-instagram"></i>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

            <div class="item">

              <div class="team-box">

                <div class="image">

                  <img src="assets/kyle-hallner-support-getctn.jpg" alt="" />

                </div>

                <div class="team-content">

                  <h4 class="darkcolor">Jessica Twain</h4>

                  <p>Agency Owner</p>

                  <ul class="social-icons-simple">

                    <li>

                      <a class="facebook" href="javascript:void(0)"

                        ><i class="fab fa-facebook-f"></i>

                      </a>

                    </li>

                    <li>

                      <a class="twitter" href="javascript:void(0)"

                        ><i class="fab fa-twitter"></i>

                      </a>

                    </li>

                    <li>

                      <a class="insta" href="javascript:void(0)"

                        ><i class="fab fa-instagram"></i>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section> -->

  <!-- Our Team ends-->

  <!--Pricing Start-->

  <!-- <section id="pricing" class="padding bglight">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12 text-center">

          <div

            class="heading-title darkcolor wow fadeInUp"

            data-wow-delay="300ms"

          >

            <span class="defaultcolor">Quisque tellus risus, adipisci </span>

            <h2 class="font-normal bottom40">Pricing Offers</h2>

          </div>

        </div>

        <div class="col-12 text-center">

          <div class="price-toggle-wrapper heading_space">

            <span class="Pricing-toggle-button month active">Monthly</span>

            <span class="Pricing-toggle-button year">Yearly</span>

          </div>

        </div>

      </div>

      <div class="owl-carousel owl-theme no-dots" id="price-slider">

        <div class="item">

          <div class="col-md-12">

            <div

              class="pricing-item wow fadeInUp animated sale"

              data-wow-delay="300ms"

              data-sale="60"

            >

              <h3 class="font-light darkcolor">Basic</h3>

              <p class="bottom30">The standard version</p>

              <div class="pricing-price darkcolor">

                <span class="pricing-currency">$9.95</span> /<span

                  class="pricing-duration"

                  >month</span

                >

              </div>

              <ul class="pricing-list">

                <li>Support forum</li>

                <li>Free hosting</li>

                <li class="price-not">40MB of storage space</li>

                <li class="price-not">Social media integration</li>

                <li class="price-not">10GB of storage space</li>

              </ul>

              <a class="button" href="javascript:void(0)">Choose plan</a>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="col-md-12">

            <div

              class="pricing-item sale wow fadeInUp animated"

              data-wow-delay="380ms"

              data-sale="40"

            >

              <h3 class="font-light darkcolor">Popular</h3>

              <p class="bottom30">The standard version</p>

              <div class="pricing-price darkcolor">

                <span class="pricing-currency">$19.95</span> /<span

                  class="pricing-duration"

                  >month</span

                >

              </div>

              <ul class="pricing-list">

                <li>Support forum</li>

                <li>Free hosting</li>

                <li>40MB of storage space</li>

                <li class="price-not">Social media integration</li>

                <li class="price-not">10GB of storage space</li>

              </ul>

              <a class="button" href="javascript:void(0)">Choose plan</a>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="col-md-12">

            <div

              class="pricing-item wow fadeInUp animated sale"

              data-wow-delay="460ms"

              data-sale="30"

            >

              <h3 class="font-light darkcolor">Enterprise</h3>

              <p class="bottom30">The standard version</p>

              <div class="pricing-price darkcolor">

                <span class="pricing-currency">$29.95</span> /<span

                  class="pricing-duration"

                  >month</span

                >

              </div>

              <ul class="pricing-list">

                <li>Support forum</li>

                <li>Free hosting</li>

                <li>40MB of storage space</li>

                <li>Social media integration</li>

                <li class="price-not">10GB of storage space</li>

              </ul>

              <a class="button" href="javascript:void(0)">Choose plan</a>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="col-md-12">

            <div

              class="pricing-item wow fadeInUp animated sale"

              data-wow-deeay="400ms"

              data-sale="20"

            >

              <h3 class="font-light darkcolor">Ultimate</h3>

              <p class="bottom30">The standard version</p>

              <div class="pricing-price darkcolor">

                <span class="pricing-currency">$49.95</span> /<span

                  class="pricing-duration"

                  >month</span

                >

              </div>

              <ul class="pricing-list">

                <li>Support forum</li>

                <li>Free hosting</li>

                <li>40MB of storage space</li>

                <li>Social media integration</li>

                <li>10GB of storage space</li>

              </ul>

              <a class="button" href="javascript:void(0)">Choose plan</a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section> -->

  <!--Pricing ends-->

  <!-- Partners-->

<!--

  <section id="our-partners">

    <h2 class="darkcolor font-normal text-center">

      Here’s some of the companies we work with

    </h2>

    <div class="container">

      <div class="row">

        <h2 class="d-none">Partners Carousel</h2>

        <div class="col-md-12 col-sm-12">

          <div id="partners-slider" class="owl-carousel">

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/')}}assets/cpillar.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/dbschen.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/dhl.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/eculine.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/geoids.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/nesle.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/bollare.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/airel.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/peerasce.JPG')}}" />

              </div>

            </div>

            <div class="item">

              <div class="logo-item">

                <img alt="" src="{{url('asset/assets/tata.JPG')}}" />

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
-->

  <!-- Partners ends-->

  <!-- Testimonials -->
<!--
  <section id="our-testimonial" class="bgdark padding_bottom">

    <div class="parallax page-header testimonial-bg">

      <div class="container">

        <div class="row">

          <div

            class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right"

          >

            <div

              class="heading-title wow fadeInUp padding_testi"

              data-wow-delay="300ms"

            >

              <span class="whitecolor">Quisque tellus risus, adipisci</span>

              <h2 class="whitecolor font-normal">What People Say</h2>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="container">

      <div class="owl-carousel" id="testimonial-slider">

        item 1-->
<!--
        <div class="item testi-box">

          <div class="row align-items-center">

            <div class="col-lg-4 col-md-12 text-center">

              <div class="testimonial-round d-inline-block">

                <img src="{{url('asset/assets/kyle-hallner-support-getctn.jpg')}}" alt="" />

              </div>

              <h4 class="defaultcolor font-light top15">

                <a href="#.">John Smith</a>

              </h4>

              <p>UPWORK, New York</p>

            </div>

            <div

              class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center"

            >

              <p class="bottom15 top90">

                We have a number of different teams within our agency that

                specialise in different areas of business so you can be sure

                that you won’t receive a generic service and although we boast

                a years and years of service.

              </p>

              <span class="d-inline-block test-star">

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="fas fa-star"></i>

              </span>

            </div>

          </div>

        </div>

        item 2-->
        <!--

        <div class="item testi-box">

          <div class="row align-items-center">

            <div class="col-lg-4 col-md-12 text-center">

              <div class="testimonial-round d-inline-block">

                <img src="{{url('asset/images/testimonial-2.jpg')}}" alt="" />

              </div>

              <h4 class="defaultcolor font-light top15">

                <a href="#.">Hayden Wood</a>

              </h4>

              <p>FIVERR, Italy</p>

            </div>

            <div

              class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center"

            >

              <p class="bottom15 top90">

                Seanautic marine’s customer testimonial page is another

                beauty. Its simple design focuses on videos and standout

                quotes from customers. This approach is clean,

                straightforward, text that can be overwhelming and easy to

                skip.

              </p>

              <span class="d-inline-block test-star">

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="far fa-star"></i>

              </span>

            </div>

          </div>

        </div>

        item 3-->
<!--
        <div class="item testi-box">

          <div class="row align-items-center">

            <div class="col-lg-4 col-md-12 text-center">

              <div class="testimonial-round d-inline-block">

                <img src="{{url('asset/images/testimonial-3.jpg')}}" alt="" />

              </div>

              <h4 class="defaultcolor font-light top15">

                <a href="#.">Kevin Miller</a>

              </h4>

              <p>ENVATO, Australia</p>

            </div>

            <div

              class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center"

            >

              <p class="bottom15 top90">

                Seanautic marine is a company that provides tools to help

                professional event planning and execution, and their customers

                are very happy folks! The thing I love about their customer

                testimonial page provides content formats.

              </p>

              <span class="d-inline-block test-star">

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="fas fa-star"></i>

              </span>

            </div>

          </div>

        </div>

        item 4-->
        <!--

        <div class="item testi-box">

          <div class="row align-items-center">

            <div class="col-lg-4 col-md-12 text-center">

              <div class="testimonial-round d-inline-block">

                <img src="{{url('asset/images/testimonial-4.jpg')}}" alt="" />

              </div>

              <h4 class="defaultcolor font-light top15">

                <a href="#.">Alina Johanson</a>

              </h4>

              <p>INTEL, Sidney</p>

            </div>

            <div

              class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center"

            >

              <p class="bottom15 top90">

                Startup Institute is a career accelerator that allows

                professionals to learn new skills, take their careers in a

                different direction, and pursue a career they are passionate

                about that have completed the program.

              </p>

              <span class="d-inline-block test-star">

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="fas fa-star"></i> <i class="fas fa-star"></i>

                <i class="far fa-star"></i>

              </span>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>


  Testimonials Ends-->

  <!-- Contact US -->

  <section class="mini-contact">

    <h2 class="darkcolor font-normal text-center">Request a Quote</h2>

    <br />

    <div class="container">

      <div class="row">

        <div

          class="col-md-6 d-flex align-items-center justify-content-center"

        >

          <img class="img-fluid" src="{{url('asset/assets/abou.png')}}" alt="" />

        </div>

        <div class="col-md-6">

          <div class="heading-title wow fadeInUp" data-wow-delay="300ms">

            <form

              class="getin_form wow fadeInUp"

              data-wow-delay="400ms"

              onsubmit="return false;"

            >

              <div class="row px-2">

                <div class="col-md-12 col-sm-12" id="result1"></div>

                <div class="col-md-12 col-sm-12">

                  <div class="form-group">

                    <label for="name1" class="d-none"></label>

                    <input

                      class="form-control"

                      id="name1"

                      type="text"

                      placeholder="Name:"

                      required

                      name="userName"

                    />

                  </div>

                </div>

                <div class="col-md-12 col-sm-12">

                  <div class="form-group">

                    <label for="email1" class="d-none"></label>

                    <input

                      class="form-control"

                      type="email"

                      id="email1"

                      placeholder="Email:"

                      name="email"

                    />

                  </div>

                </div>

                <div class="col-md-12 col-sm-12">

                  <div class="form-group">

                    <label for="email1" class="d-none"></label>

                    <input

                      class="form-control"

                      type="tel"

                      id="tel"

                      placeholder="Phone:"

                      name="phone"

                    />

                  </div>

                </div>

                <div class="col-md-12 col-sm-12">

                  <div class="form-group">

                    <label for="message1" class="d-none"></label>

                    <textarea

                      class="form-control"

                      id="message1"

                      placeholder="Message:"

                      required

                      name="message"

                    ></textarea>

                  </div>

                </div>

                <div class="col-md-12 col-sm-12">

                  <button

                    type="submit"

                    id="submit_btn1"

                    class="button gradient-btn w-100"

                  >

                    Send

                  </button>

                </div>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </section>



     



@endsection

    