@extends('layout.layout')

@section('title','Container-booking')

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

              <h2 class="font-xlight">Bussiness</h2>

            </div>

          </div>

        </div>

        <div class="gradient-bg title-wrap">

          <div class="row">

            <div class="col-lg-12 col-md-12 whitecolor">

              <h3 class="float-left">Container Booking</h3>

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

      <div class="mini-contact">

        <h2 class="darkcolor font-normal text-center">CONNECT WITH US</h2>

        <br />

        <div class="container">

          <div class="row">

            <div

              class="col-md-6 d-flex align-items-center justify-content-center"

            >

              <img class="img-fluid" src="{{url('asset/assets/abou.png')}}" alt=""  />

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

      </div>

    </section>

    <!-- Services us ends -->

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

    @endsection