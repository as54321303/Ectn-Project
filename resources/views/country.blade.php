

@extends('layout.layout')

@section('metaTitle',"$country->metaTitle")

@section('metaDescription',"$country->metaDescription")

@section('title',"$country->country_name")



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

                 We provide the best ectn service in the market

               </h3>

             </div>

           </div>

         </div>

         <div class="gradient-bg title-wrap">

           <div class="row">

             <div class="col-lg-12 col-md-12 whitecolor">

               <h3 class="float-left">Country Detail</h3>

               <ul class="breadcrumb top10 bottom10 float-right">

                 <li class="breadcrumb-item hover-light">

                   <a href="{{url('home')}}">Home</a>

                 </li>

                 <li class="breadcrumb-item hover-light">Country Detail</li>

               </ul>

             </div>

           </div>

         </div>

       </div>

     </section>

     <!--Page Header ends -->

     <!-- Services us -->

     <section id="our-services" class="padding bglight">

       <div class="container">

         <div class="row whitebox top15">

           <div class="col-lg-4 col-md-5">

             <div class="image widget bottom20 flag-widget">

               <img class="img-fluid" alt="SEO" src="{{url($country->image)}}" />

             </div>

             <div class="col-12 px-0">

               <div class="w-100">

                 <div class="full-map short-map" id="map">

                  <img src="{{$country->map}}"  style="border:0;" allowfullscreen="" loading="lazy" alt="">
                  {{-- <iframe src="{{$country->map}}"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                 </div>

               </div>

             </div>

             <div class="widget heading_space text-center text-md-left">

               <h4 class="text-capitalize darkcolor bottom20 font-bold">Need Help?</h4>

               <div class="contact-table colorone d-table bottom15">

                 <div class="d-table-cell cells">

                   <span class="icon-cell"

                     ><i class="fas fa-mobile-alt"></i

                   ></span>

                 </div>

                 <div class="d-table-cell cells">

                   <p class="bottom0">

                     +1-514-287-1812 <span class="d-block">+1 (416) 620-7224</span>

                   </p>

                 </div>

               </div>

               <div class="contact-table colorone d-table bottom15 text-left">

                 <div class="d-table-cell cells">

                   <span class="icon-cell"

                     ><i class="fas fa-map-marker-alt"></i

                   ></span>

                 </div>

                 <div class="d-table-cell cells">

                   <p class="bottom0">

                     20, rue Saint-Paul Ouest

                     <span class="d-block">Montreal Canada</span>

                   </p>

                 </div>

               </div>

               <div class="contact-table colorone d-table text-left">

                 <div class="d-table-cell cells">

                   <span class="icon-cell"><i class="far fa-clock"></i></span>

                 </div>

                 <div class="d-table-cell cells">

                   <p class="bottom0">

                     Mon to Fri - 8:30am to 5:00pm

                     <span class="d-block">Sat to Sun: Closed</span>

                   </p>

                 </div>

               </div>

               <a href="#." class="button btnsecondary gradient-btn top30 ">

                 Connect with us</a

               >

             </div>

           </div>

           <div class="col-lg-8 col-md-7">

             <div class="widget heading_space text-center text-md-left">

               <h3 class="darkcolor font-normal bottom30 font-bold">{!!$country->country_name!!}</h3>

               <p class="bottom30">

              {!!$country->description!!}

               </p>

               <!-- <p class="bottom30">

                 Lorem Ipsum is simply dummy text of the printing and typesetting

                 industry. Lorem Ipsum has been the industry's standard dummy

                 text ever since the 1500s

               </p> -->
<!--
               <div class="owl-carousel" id="service-detail">

                 <div class="item">

                   <div class="image">

                     <img alt="SEO" src="{{url('asset/countries_images/sudan4.jpg')}}" />

                   </div>

                 </div>

                 <div class="item">

                   <div class="image">

                     <img alt="SEO" src="{{url('asset/countries_images/sudan4.jpg')}}" />

                   </div>

                 </div>

                 <div class="item">

                   <div class="image">

                     <img alt="SEO" src="{{url('asset/countries_images/sudan4.jpg')}}" />

                   </div>

                 </div>

                 <div class="item">

                   <div class="image">

                     <img alt="SEO" src="{{url('asset/countries_images/sudan4.jpg')}}" />

                   </div>

                 </div>

               </div>
-->

             </div>

             <div class="row">

               <div class="col-lg-6 col-md-6">

                 <div id="accordion">

                   <div class="card">

                     <div class="card-header">

                       <a

                         class="card-link darkcolor font-bold"

                         data-toggle="collapse"

                         href="#collapseOne"

                         >Dictum’s</a>

                     </div>

                     <div

                       id="collapseOne"

                       class="collapse show"

                       data-parent="#accordion"

                     >

                       <div class="card-body">

                         <p>

                          {!!$country->dictums!!}

                         </p>

                       </div>

                     </div>

                   </div>

                   <div class="card">

                     <div class="card-header">

                       <a

                         class="collapsed card-link darkcolor font-bold"

                         data-toggle="collapse"

                         href="#collapseTwo"

                         >Procedure</a

                       >

                     </div>

                     <div

                       id="collapseTwo"

                       class="collapse"

                       data-parent="#accordion"

                     >

                       <div class="card-body">

                         <ul class="country-tabs">

                            @for ($i=0;$i<count($procedure);$i++)
                           
                    
                        
                                        {!!$procedure[$i]!!}

                         


                           @endfor
                        
                           <!-- <li>

                             Submit the required documents by email or online

                             submission.

                           </li>

                           <li>

                             You will be sent a draft and an invoice, typically

                             within the same day.

                           </li>

 

                           <li>

                             Once your payment has been received and you approve

                             the draft, validation will be sent.

                           </li>

                           <li>

                             Due to a change in the validation process, please

                             allow 3-5 days from initial request to final

                             validation.

                           </li> -->

                         </ul>

                       </div>

                     </div>

                   </div>

                   <div class="card">

                     <div class="card-header">

                       <a

                         class="collapsed card-link darkcolor font-bold"

                         data-toggle="collapse"

                         href="#collapseThree"

                         >FAQs

                       </a>

                     </div>

                     <div

                       id="collapseThree"

                       class="collapse"

                       data-parent="#accordion"

                     >

                       <div class="card-body">

                         <ul class="country-tabs">

                       @for ($i=0;$i<count($faqs_array);$i++)
                           
                    
                  
                                        {!!$faqs_array[$i]!!}

                         


                           @endfor

                         </ul>

                       </div>

                     </div>

                   </div>

                   <div class="card">

                     <div class="card-header">

                       <a

                         class="collapsed card-link darkcolor font-bold"

                         data-toggle="collapse"

                         href="#collapseFour"

                         >Required documents

                       </a>

                     </div>

                     <div

                       id="collapseFour"

                       class="collapse"

                       data-parent="#accordion"

                     >

                       <div class="card-body">

                         <ul class="country-tabs">


                        
                          @for ($i=0;$i<count($array_value);$i++)   
                          
                           <li>{!!$array_value[$i]!!}</li>

                           @endfor
                     


                         </ul>

                       </div>

                     </div>

                   </div>

                 </div>

               </div>

               <div class="col-lg-6 col-md-6 mt-5 mt-md-0">

               

                 <form action="{{url('submit-form')}}" class="form" method="POST" enctype="multipart/form-data">

                    @csrf

                    <input type="hidden" name="country_id" value="{{$country->id}}">

                   <h4 class="text-center font-bold">Application Form</h4>

                   <!-- Progress bar -->

                   <div class="progressbar">

                     <div class="progress" id="progress"></div>

 

                     <div

                       class="progress-step progress-step-active"

                       data-title="Info"

                     ></div>

                     <div class="progress-step" data-title="Contact"></div>

                     <div class="progress-step" data-title="IDs"></div>

                     <div class="progress-step" data-title="Document"></div>

                   </div>

                   <p class="text-danger">*Please fill every field to submit</p>

                   <!-- Steps -->

                   <div class="form-step form-step-active">

                     <div class="input-group">

                       <!-- <label for="username"></label> -->

                       <input

                         type="text"

                         name="name"

                         id="username"

                         placeholder="Your Name" required

                       />

                     </div>

                     <div class="input-group">

                       <!-- <label for="position">Position</label> -->

                       <input

                         type="text"

                         name="companyname"

                         id="company"

                         placeholder="Company Name" required

                       />

                     </div>

                     <div class="input-group">

                       <!-- <label for="position">Position</label> -->

                       <input

                         type="text"

                         name="position"

                         id="position"

                         placeholder="Your Position in Company" required 

                       />

                     </div>

                     <div class="">

                       <span class="sbtn sbtn-next gradient-btn width-50 ml-auto"

                         >Next</span>

                     </div>

                   </div>

                   <div class="form-step">

                     <div class="input-group">

                       <!-- <label for="phone">Phone</label> -->

                       <input

                         type="text"

                         name="phone"

                         id="phone"

                         placeholder="Phone" required

                       />

                     </div>

                     <div class="input-group">

                       <!-- <label for="email">Email</label> -->

                       <input

                         type="text"

                         name="email"

                         id="email"

                         placeholder="Email" required

                       />

                     </div>

                     <div class="sbtns-group">

                       <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                       <a class="sbtn gradient-btn sbtn-next">Next</a>

                     </div>

                   </div>





                   @if($country->id=="4"||$country->id=="3"

                   ||$country->id=="6"||$country->id=="22"||$country->id=="24"

                   ||$country->id=="18"||$country->id=="20"||$country->id=="12"

                   ||$country->id=="13"||$country->id=="19"||$country->id=="15"

                   ||$country->id=="14"||$country->id=="17"||$country->id=="21"

                   ||$country->id=="23")



                   <div class="form-step">

                    <div class="input-group">

                      <label for="ladingbill">Bill of Lading</label>

                      <input type="file" name="landingbill" id="bol" required />

                    </div>

                    <div class="input-group">

                      <label for="commercialinvoice">Commercial Invoice</label>

                      <input type="file" name="commercialinvoice" id="CoI" required/>

                    </div>

                    



                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <a class="sbtn gradient-btn sbtn-next">Next</a>

                    </div>

                  </div>

                  <div class="form-step">

                    <div class="input-group">

                      <label for="FreightInvoice">Freight Invoice</label>

                      <input type="file" name="freightinvoice" id="bol" required />

                    </div>

                    <div class="input-group">

                      <label for="ID">Custom Export Declaration</label>

                      <input type="file" name="custom_export" id="CED" required/>

                    </div>

                    

                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <input

                        type="submit"

                        value="Submit"

                        class="sbtn gradient-btn"

                      />

                    </div>

                  </div>



                   @endif





                   @if($country->id=="1"||$country->id=="8"||$country->id=="10"||

                   $country->id=="7")



                     

                    <div class="form-step">

                      <div class="input-group">

                        <label for="ladingbill">Bill of Lading</label>

                        <input type="file" name="ladingbill" id="bol" required />

                      </div>

                      <div class="input-group">

                        <label for="CommercialInvoice">Commercial Invoice</label>

                        <input type="file" name="commercialinvoice" id="CoI" required/>

                      </div>

                      



                      <div class="sbtns-group">

                        <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                        <a class="sbtn gradient-btn sbtn-next">Next</a>

                      </div>

                    </div>

                    <div class="form-step">

                    <div class="input-group">

                        <label for="FreightInvoice">Freight Invoice</label>

                        <input type="file" name="freightinvoice" id="bol" required/>

                      </div>

                      <div class="input-group">

                        <label for="Vehicletitle">Vehicle title</label> 

                        <input

                          type="File"

                          name="vehicletitle"

                          id="Vehicletitle"

                          placeholder="Vehicle title"

                        />

                      </div>





                      <div class="sbtns-group">

                        <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                        <input

                          type="submit"

                          value="Submit"

                          class="sbtn gradient-btn" 

                        />

                      </div>







                   @endif













                   @if($country->id=="11")





                   <div class="form-step">

                    <div class="input-group">

                      <label for="ladingbill">Bill of Lading</label>

                      <input type="file" name="landingbill" id="bol" required />

                    </div>

                    <div class="input-group">

                      <label for="commercialinvoice">Commercial Invoice</label>

                      <input type="file" name="commercialinvoice" id="CoI" required/>

                    </div>

                    <div class="input-group">

                      <label for="FreightInvoice">Freight Invoice</label>

                      <input type="file" name="freightinvoice" id="bol" required/>

                    </div>



                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <a class="sbtn gradient-btn sbtn-next">Next</a>

                    </div>

                  </div>







                  <div class="form-step">

                    <div class="input-group">

                      <label for="PackingList">Packing List</label>

                      <input type="file" name="packinglist" id="ID" required />

                    </div>

                    <div class="input-group">

                      <label for="ID">DU - Import License</label>

                      <input type="file" name="dulicence" id="ID" required/>

                    </div>

                    <div class="input-group">

                      <!-- <label for="NIFNumber"></label> -->

                      <input

                        type="number"

                        name="nif"

                        id="nifnumber"

                        placeholder="NIF Number" required

                      />

                    </div>

                    <div class="input-group">

                       <label for="arccla">Arccla</label> 

                      <input

                        type="File"

                        name="arccla"

                        id="Arccla"

                        placeholder="Arccla" required

                      />

                    </div>

                     <div class="input-group">

                       <label for="arccla">Vehicle title</label> 

                      <input

                        type="File"

                        name="vehicletitle"

                        id="Vehicletitle"

                        placeholder="Vehicle title" 

                      />

                    </div>





                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <input

                        type="submit"

                        value="Submit"

                        class="sbtn gradient-btn"

                      />

                    </div>



                   @endif





                   @if($country->id=="2")





                   <div class="form-step">

                    <div class="input-group">

                      <label for="ladingbill">Bill of Lading</label>

                      <input type="file" name="ladingbill" id="bol" required/>

                    </div>

                    <div class="input-group">

                      <label for="CommercialInvoice">Commercial Invoice</label>

                      <input type="file" name="commercialinvoice" id="CoI" required />

                    </div>

                    <div class="input-group">

                      <label for="FreightInvoice">Freight Invoice</label>

                      <input type="file" name="freightinvoice" id="bol" required />

                    </div>



                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <a class="sbtn gradient-btn sbtn-next">Next</a>

                    </div>

                  </div>

                  <div class="form-step">

                    <div class="input-group">

                      <label for="PackingList">Packing List</label>

                      <input type="file" name="packinglist" id="ID" required/>

                    </div>

                     <div class="input-group">

                       <label for="arccla">Vehicle title</label> 

                      <input

                        type="File"

                        name="vehicletitle"

                        id="Vehicletitle"

                        placeholder="Vehicle title"

                      />

                    </div>





                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <input

                        type="submit"

                        value="Submit"

                        class="sbtn gradient-btn"

                      />

                    </div>





                   @endif





                   @if($country->id=="9")





                   <div class="form-step">

                    <div class="input-group">

                      <label for="ladingbill">Bill of Lading</label>

                      <input type="file" name="landingbill" id="bol" />

                    </div>

                    <div class="input-group">

                      <label for="CommercialInvoice">Commercial Invoice</label>

                      <input type="file" name="commercialinvoice" id="CoI" required />

                    </div>

                    <div class="input-group">

                      <label for="FreightInvoice">Freight Invoice</label>

                      <input type="file" name="freightinvoice" id="bol" required/>

                    </div>



                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <a class="sbtn gradient-btn sbtn-next">Next</a>

                    </div>

                  </div>

                  <div class="form-step">

                    

                    <div class="input-group">

                      <label for="ID">GUOT</label>

                      <input type="file" name="guot" id="GUOT" required/>

                    </div>

                    <div class="input-group">

                      <label for="PackingList">Packing List</label>

                      <input type="file" name="packinglist" id="ID" required/>

                    </div>

                    <div class="input-group">

                       <label for="arccla">Vehicle title</label> 

                      <input

                        type="File"

                        name="vehicletitle"

                        id="Vehicletitle"

                        placeholder="Vehicle title"

                      />

                    </div>

                    

                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <input

                        type="submit"

                        value="Submit"

                        class="sbtn gradient-btn"

                      />

                    </div>

                             







                   @endif





                   

                   @if($country->id=="5")



                             

                   <div class="form-step">

                    <div class="input-group">

                      <label for="ladingbill">Bill of Lading</label>

                      <input type="file" name="ladingbill" id="bol" required/>

                    </div>

                    <div class="input-group">

                      <label for="CommercialInvoice">Commercial Invoice</label>

                      <input type="file" name="commercialinvoice" id="CoI" required/>

                    </div>

                    <div class="input-group">

                      <label for="FreightInvoice">Freight Invoice</label>

                      <input type="file" name="freightinvoice" id="bol" required/>

                    </div>



                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <a class="sbtn gradient-btn sbtn-next">Next</a>

                    </div>

                  </div>

                  <div class="form-step">

                    <div class="input-group">

                      <label for="ID">Custom Export Declaration</label>

                      <input type="file" name="custom_export" id="CED" required/>

                    </div>

                    <div class="input-group">

                      <label for="PackingList">Packing List</label>

                      <input type="file" name="packinglist" id="ID" required/>

                    </div>

                     <div class="input-group">

                      <label for="Certificate of Origin">Certificate of Origin</label>

                      <input type="file" name="certificateoforigin" id="cerorigin" required/>

                    </div>

                    <div class="input-group">

                      <label for="FDI Certificate">FDI Certificate</label>

                      <input type="file" name="fdi" id="FDI" required/>

                    </div>

                     <div class="input-group">

                      <label for="Certificateofinsurance">Certificate of Insurance</label>

                      <input type="file" name="certificateofinsurance" id="certificateofinsurance" required/>

                    </div>

                    

                     

                    

                     <div class="input-group">

                       <label for="arccla">Vehicle title</label> 

                      <input

                        type="File"

                        name="vehicletitle"

                        id="Vehicletitle"

                        placeholder="Vehicle title"

                      />

                    </div>





                    <div class="sbtns-group">

                      <a class="sbtn gradient-btn sbtn-prev">Previous</a>

                      <input

                        type="submit"

                        value="Submit"

                        class="sbtn gradient-btn"

                      />

                    </div>





                   @endif





                   





                   

                 </form>

               </div>

             </div>

           </div>

         </div>

       </div>

     </section>

     <!-- Services us ends -->

     <!-- Contact US -->

 

     <!-- Contact US ends -->



@endsection







@section('scripts')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

    $(document).ready(function(){









    });

  </script>

@endsection