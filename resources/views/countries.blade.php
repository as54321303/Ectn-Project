@extends('layout.layout')

@section('title','Countries')

@section('content')

<section
id="main-banner-page"
class="position-relative page-header service-header section-nav-smooth parallax"
>
<div class="overlay overlay-dark opacity-7 z-index-1"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <div
        class="page-titles whitecolor text-center padding_top padding_bottom"
      >
        <h2 class="font-xlight pt-3">We Help To</h2>
        <h2 class="font-bold">Get ECTN For Many Countries</h2>
        <h2 class="font-xlight">To Next Level</h2>
        <h3 class="font-light pb-4 pt-2">
          We are the best in the bussiness
        </h3>
      </div>
    </div>
  </div>
  <div class="gradient-bg title-wrap mt-n5">
    <div class="row">
      <div class="col-lg-12 col-md-12 whitecolor">
        <h3 class="float-left">Supported Countries</h3>
      </div>
    </div>
  </div>
</div>
</section>
<!--Page Header ends -->
<!-- Services us -->
<section id="our-services" class="padding">
<div class="container">
  <div class="row">

          @foreach($countries as $country)
          <div class="col-md-3 country-card">
            <img
              class="d-block mx-auto"
              src="{{$country->image}}"
              alt="EQUATORIAL GUINEA"/>
            <a class="country-text" href="{{url('country',$country->id)}}">{{$country->country_name2}}</a>
          </div>
          @endforeach


    </div>
 </div>
</section>
      <!-- Services us ends -->
          
      @endsection


    {{-- <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (2).svg')}}"
        alt="CONGO"
      />
      <a class="country-text" href="">CONGO</a>
    </div>
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (10).svg')}}"
        alt="IVORY COAST"
      />
      <a class="country-text" href="">IVORY COAST</a>
    </div>
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (11).svg')}}"
        alt="CONGO, THE DEMOCRATIC REPUBLIC OF THE"
      />
      <a class="country-text" href=""
        >CONGO, THE DEMOCRATIC REPUBLIC OF THE</a
      >
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (3).svg')}}"
        alt="CHAD"
      />
      <a class="country-text" href="">CHAD</a>
    </div>
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (4).svg')}}"
        alt="CENTRAL AFRICAN REPUBLIC"
      />
      <a class="country-text" href="">CENTRAL AFRICAN REPUBLIC</a>
    </div>
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (5).svg')}}"
        alt="CAMEROON"
      />
      <a class="country-text" href="">CAMEROON</a>
    </div>
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (6).svg')}}"
        alt="BURUNDI"
      />
      <a class="country-text" href="">BURUNDI</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (7).svg')}}"
        alt="BURKINA FASO"
      />
      <a class="country-text" href="">BURKINA FASO</a>
    </div>
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (8).svg')}}"
        alt="BENIN"
      />
      <a class="country-text" href="">BENIN</a>
    </div>
    <div class="col-md-3 country-card">
      <img
        class="d-block mx-auto"
        src="{{url('asset/assets/flags/1 (9).svg')}}"
        alt="ANGOLA"
      />
      <a class="country-text" href="">ANGOLA</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (12).svg')}}" alt="" />
      <a class="country-text" href="">MALI</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (13).svg')}}" alt="" />
      <a class="country-text" href="">NIGER</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (14).svg')}}" alt="" />
      <a class="country-text" href=""> SIERRA LEONE</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (15).svg')}}" alt="" />
      <a class="country-text" href=""> SENEGAL</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (16).svg')}}" alt="" />
      <a class="country-text" href="">SOUTH SUDAN</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (17).svg')}}" alt="" />
      <a class="country-text" href="">TOGO</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (18).svg')}}" alt="" />
      <a class="country-text" href="">GABON</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (19).svg')}}" alt="" />
      <a class="country-text" href="">GUINEA</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (23).svg')}}" alt="" />
      <a class="country-text" href="">MADAGASCAR</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (21).svg')}}" alt="" />
      <a class="country-text" href=""> GUINEA-BISSAU</a>
    </div>
    <div class="col-md-3 country-card">
      <img class="d-block mx-auto" src="{{url('asset/assets/flags/1 (22).svg')}}" alt="" />
      <a class="country-text" href="">LIBERIA</a>
    </div> --}}
