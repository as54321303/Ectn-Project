@extends('layout.layout')



@section('title','About')

    

@section('content')



     <!--Page Header-->

    <section

    id="main-banner-page"

    class="position-relative page-header about-header parallax section-nav-smooth"

  >

    <div class="overlay overlay-dark opacity-7"></div>

    <div class="container">

      <div class="row">

        <div class="col-lg-6 offset-lg-3">

          <div

            class="page-titles whitecolor text-center padding_top padding_bottom"

          >

            <h2 class="font-xlight">About us</h2>

            <h2 class="font-bold">Seanautic Marine </h2>

            <h2 class="font-xlight">Best & Fast</h2>

            <h3 class="font-light pt-2">

              The Best ECTN Provider in the Bussiness

            </h3>

          </div>

        </div>

      </div>

      <div class="gradient-bg title-wrap">

        <div class="row">

          <div class="col-lg-12 col-md-12 whitecolor">

            <h3 class="float-left">About Our Company</h3>

            <ul class="breadcrumb top10 bottom10 float-right">

              <li class="breadcrumb-item hover-light">

                <a href="index.html">Home</a>

              </li>

              <li class="breadcrumb-item hover-light">About</li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!--Page Header ends -->

  <!-- About us -->

  <section id="aboutus" class="padding_top padding_bottom">

    <div class="container aboutus">

      <div class="row align-items-center">

        <div class="col-lg-6 col-md-6 padding_bottom_half">

          <div class="image"><img alt="SEO" src="{{url('asset/assets/newabout.jpeg')}}" /></div>

        </div>

        <div

          class="col-lg-5 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left"

        >

          <h1 class="darkcolor font-normal bottom30">

            We provide  <span class="defaultcolor">ECTN</span>  for 24+ African countries

          </h1>

          <p class="bottom35">

            Seanautic Marine Inc/ECTN Africa. is an International Sea Transport Agency established in 1983 specializing in shipping cargo to over 130 ports in the Caribbean, Central/South America, Mediterranean, Middle East, Africa, Pacific and Indian Ocean.

          </p>

          <a

            href="{{url('contact')}}"

            class="button btnsecondary gradient-btn "

            >Learn More</a

          >

        </div>

      </div>

      <div class="row align-items-center">

        <div

          class="col-lg-5 col-md-6 padding_top_half text-center text-md-left"

        >

          <h2 class="darkcolor font-normal bottom30">

            Most Reliable  <span class="defaultcolor">Ectn Provider</span> 

           

          </h2>

          <p class="bottom35">

           We provide fast and efficient quality logistics and transportation services including Full Container Load (FCL) and Less Than Container Load (LCL), Roll-On/Roll-Off (Ro/Ro), and Break Bulk (B/B). View our Routes and Destinations for sailing days and Container Equipment Specifications.

          </p>

          <p>Seanautic Marine head office is located in the heart of Vieux-Montreal with a regional office in Toronto, Ontario.</p>

        </div>

        <div class="col-lg-6 offset-lg-1 col-md-6 padding_top_half">

          <!-- lef -->
<div class="heading-title wow fadeInUp" data-wow-delay="300ms">

 <div class="image"><img alt="SEO" src="{{url('asset/assets/cargoship.jpg')}}" /></div>
          </div>
        </div>

      </div>

    </div>

  </section>
   <section class="mini-contact bgdark">
      <br />
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="text-light font-normal text-center bottom20">
              Get a Quote
            </h3>

            <form
              class="getin_form wow fadeInLeft"
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
                      placeholder="Name"
                      required
                      name="userName"
                    />
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label for="name1" class="d-none"></label>
                    <input
                      class="form-control"
                      id="name1"
                      type="text"
                      placeholder="Company Name"
                      required
                      name="Companyname"
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
                      placeholder="Email"
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
                      placeholder="Phone"
                      name="phone"
                    />
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label for="email1" class="d-none"></label>
                    <select
                      class="form-control"
                      type="tel"
                      id="tel"
                      placeholder="Phone:"
                      name="phone"
                    >
                    <option value="" selected disabled>Select Destination</option>
                  <option value="ANGOLA">ANGOLA</option>
                  <option value="BENIN">BENIN</option>
                  <option value="BURKINA FASO">BURKINA FASO</option>
                  <option value="BURUNDI">BURUNDI</option>
                  <option value="CAMEROON">CAMEROON</option>
                  <option value="CENTRAL AFRICAN REPUBLIC">CENTRAL AFRICAN REPUBLIC</option>
                  <option value="CHAD">CHAD</option>
                  <option value="DEMOCRATIC REPUBLIC OF THE CONGO">DEMOCRATIC REPUBLIC OF THE CONGO</option>
                  <option value="REPUBLIC OF CONGO">REPUBLIC OF CONGO</option>
                  <option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
                  <option value="GABON">GABON</option>
                  <option value="GHANA">GHANA</option>
                  <option value="REPUBLIC OF GUINEA">REPUBLIC OF GUINEA</option>
                  <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                  <option value="IVORY COAST">IVORY COAST</option>
                  <option value="LIBERIA">LIBERIA</option>
                  <option value="LIBYA">LIBYA</option>
                  <option value="MADAGASCAR">MADAGASCAR</option>
                  <option value="MALI">MALI</option>
                  <option value="NIGER">NIGER</option>
                  <option value="NIGERIA">NIGERIA</option>
                  <option value="SENEGAL">SENEGAL</option>
                  <option value="SOUTH SUDAN">SOUTH SUDAN</option>
                  <option value="TOGO">TOGO</option>
                  <option value="SIERRA LEONE">SIERRA LEONE</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label for="message1" class="d-none"></label>
                    <textarea
                      class="form-control"
                      id="message1"
                      placeholder="Write Brief Description About Your Cargo"
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
          <div class="col-md-6">
            <h3 class="text-light font-normal text-center bottom20">
              Submit Your Request
            </h3>
            <form
              class="getin_form wow fadeInRight"
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
                      placeholder="Your Name"
                      required
                      name="YourName"
                    />
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label for="email1" class="d-none"></label>
                    <input
                      class="form-control"
                      type="text"
                      id="email1"
                      placeholder="Your Company"
                      name="email"
                    />
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label for="email1" class="d-none"></label>
                    <input
                      class="form-control"
                      type="email"
                      id="email"
                      placeholder="Your Email"
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
                    <label class="text-white" for="email1" class=""
                      >Bill Of Landing</label
                    >
                    <input
                      class="form-control"
                      type="file"
                      id="tel"
                      placeholder=""
                      name="Billoflanding"
                    />
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="text-white" for="email1" class=""
                      >Commercial Invoice
                    </label>
                    <input
                      class="form-control"
                      type="file"
                      id="tel"
                      placeholder=""
                      name="CommercialInvoice "
                    />
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="text-white" for="email1" class=""
                      >Freight Invoice
                    </label>
                    <input
                      class="form-control"
                      type="file"
                      id="tel"
                      placeholder=""
                      name="FreightInvoice "
                    />
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="text-white" for="email1" class=""
                      >Customs Export Declaration (optional)
                    </label>
                    <input
                      class="form-control"
                      type="file"
                      id="tel"
                      placeholder=""
                      name="CustomsExportDeclaration"
                    />
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
    </section>

  <!-- About us ends -->

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

  <!-- Our Team-->

  <!-- Our Team ends-->

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

                <img alt="" src="{{url('asset/assets/cpillar.JPG')}}" />

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

<br>
<br>
<br>





    


  @endsection