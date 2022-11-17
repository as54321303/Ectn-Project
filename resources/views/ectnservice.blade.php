@extends('layout.layout')



@section('title','Ectn-booking')



@section('content')

     <!--Page Header-->

    <section

      id="main-banner-page"

      class="position-relative page-header service-detail-header section-nav-smooth parallax"

    >

      <div class="overlay overlay-dark opacity-7 z-index-1"></div>

      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-2">

            <div

              class="page-titles whitecolor text-center padding_top padding_bottom"

            >

              <h2 class="font-xlight">We Love</h2>

              <h2 class="font-bold">Walking line In Usable</h2>

              <h2 class="font-xlight">Products</h2>

              <h3 class="font-light pt-2">

                The Best in Market

              </h3>

            </div>

          </div>

        </div>

        <div class="gradient-bg title-wrap">

          <div class="row">

            <div class="col-lg-12 col-md-12 whitecolor">

              <h3 class="float-left">ECTN Service</h3>

              <ul class="breadcrumb top10 bottom10 float-right">

                <li class="breadcrumb-item hover-light">

                  <a href="https://securityoncalls.com/projects/newsea/home">Home</a>

                </li>

                <li class="breadcrumb-item hover-light">Service Detail</li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--Page Header ends -->

    <!-- Services us -->

    <section id="services" class="padding">

      <div class="row container col-12">

        <div class="col-md-6">

          <img class="img-fluid d-block mx-auto" src="{{url('asset/assets/seanauic.jpg')}}"  alt="" />

        </div>

        <div class="col-md-6 d-flex align-items-center">

          <div>

            <h2 class="darkcolor font-normal bottom30">

              Get Your <span class="defaultcolor">ECTN</span> from us

            </h2>

            <p class="">

              With a dynamic & highly Professional Team, we constantly seek

              Innovation & Cost effective solutions for our client’s needs. Our

              experienced staff grants a professional and fast handling of

              submitted ECTN. In addition, we provide the CTN number in advance,

              where possible. Seanautic/ECTN-Africa guarantees to complete the

              process with absolute confidentiality.

            </p>

            <p>

              Countries Supported by ECTN-Africa are Benin, Burkina Faso,

              Republic of Congo, Liberia, Togo, ,Cameroon, Central African

              Republic, Chad, Democratic Republic of Congo, , Equatorial Guinea,

              Gabon, Ghana, Republic of Guinea, Guinea-Bissau, Ivory Coast,

              Libya, Madagascar, Mali, Niger, Senegal, Sierra Leon, and

              Burundi.”

            </p>

          </div>

        </div>

      </div>

    </section>

    <!-- Services us ends -->

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

    <section id="our-services" class="padding">

      

        

    <div class="container">





      <div class="row">





        {{-- @foreach($countries as $country)



        <div class="col-md-3 country-card col-6">

            <div class="dho">

                <div class="country-cards">

          <img

            class="d-block mx-auto"

            src="{{$country->image}}"

            alt="CONGO"

          />

          </div>

          </div>

          <a class="country-text" href="{{url('country',$country->id)}}">{{$country->country_name}}</a>

        </div>

 

        @endforeach --}}



      </div>









    </div>

  </section>

  @endsection