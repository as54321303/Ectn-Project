<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
class FormController extends Controller
{


        public function home()
        {
            
            
            $countries=Country::all();
           
            return view('home',compact('countries'));
        }


        public function countries()
        {
            $countries=Country::all();

            return view('countries',compact('countries'));
        }

        public function country($name)
        {
            // return $name;
            $country=Country::where('country_name2',$name)->first();
            // return $country;
            $documents=Country::where('country_name2',$name)->first();
            $array_value=explode(',,',$documents->required_documents);
            $faqs_array=explode(',,',$documents->faqs);
            $procedure=explode(',,',$documents->procedure);
            

            // return $faqs_array;

            return view('country',compact('country','array_value','faqs_array','procedure'));

        }

        public function submit_form(Request $request)
        {



            if($request->file('landingbill')){
	  
                $imageName1 = time().'.'.$request->landingbill->extension();
    
                $request->landingbill->move(public_path('ID/landingbill'),$imageName1);
    
                $landingbill=url('public/ID/landingbill').'/'.$imageName1;
    
                }

                else{
                    $landingbill=null;
                }

                

            if($request->file('commercialinvoice')){
	  
                $imageName2 = time().'.'.$request->commercialinvoice->extension();
    
                $request->commercialinvoice->move(public_path('ID/commercialinvoice'),$imageName2);
    
                $commercialinvoice=url('public/ID/commercialinvoice').'/'.$imageName2;
    
                }

                else{
                    $commercialinvoice=null;
                }



            if($request->file('freightinvoice')){
	  
                $imageName3 = time().'.'.$request->freightinvoice->extension();
    
                $request->freightinvoice->move(public_path('ID/freightinvoice'),$imageName3);
    
                $freightinvoice=url('public/ID/freightinvoice').'/'.$imageName3;
    
                }
                else{
                    $freightinvoice=null;
                }


                
            if($request->file('packinglist')){
	  
                $imageName4 = time().'.'.$request->packinglist->extension();
    
                $request->packinglist->move(public_path('Document/packinglist'),$imageName4);
    
                $packinglist=url('public/Document/packinglist').'/'.$imageName4;
    
                }
                else{
                    $packinglist=null;
                }

                
            if($request->file('dulicence')){
	  
                $imageName5 = time().'.'.$request->dulicence->extension();
    
                $request->dulicence->move(public_path('Document/dulicence'),$imageName5);
    
                $dulicence=url('public/Document/dulicence').'/'.$imageName5;
    
                }
                else{
                    $dulicence=null;
                }

            if($request->file('custom_export')){
	  
                $imageName6 = time().'.'.$request->custom_export->extension();
    
                $request->custom_export->move(public_path('Document/Custom_export'),$imageName6);
    
                $custom_export=url('public/Document/Custom_export').'/'.$imageName6;
    
                }
                else{
                    $custom_export=null;
                }


            if($request->file('arccla')){
	  
                $imageName7= time().'.'.$request->arccla->extension();
    
                $request->arccla->move(public_path('Document/arccla'),$imageName7);
    
                $arccla=url('public/Document/arccla').'/'.$imageName7;
    
                }
                else{
                    $arccla=null;
                }


            if($request->file('vehicletitle')){
	  
                $imageName8 = time().'.'.$request->vehicletitle->extension();
    
                $request->vehicletitle->move(public_path('Document/vehicletitle'),$imageName8);
    
                $vehicletitle=url('public/Document/vehicletitle').'/'.$imageName8;
    
                }
                else{
                    $vehicletitle=null;
                }


            if($request->file('guot')){
	  
                $imageName10 = time().'.'.$request->guot->extension();
    
                $request->guot->move(public_path('Document/guot'),$imageName9);
    
                $guot=url('public/Document/guot').'/'.$imageName9;
    
                }
                else{
                    $guot=null;
                }


            if($request->file('certificateoforigin')){
	  
                $imageName10 = time().'.'.$request->certificateoforigin->extension();
    
                $request->certificateoforigin->move(public_path('Document/certificateoforigin'),$imageName10);
    
                $certificateoforigin=url('public/Document/certificateoforigin').'/'.$imageName10;
    
                }
                else{
                    $certificateoforigin=null;
                }


            if($request->file('fdi')){
	  
                $imageName11 = time().'.'.$request->fdi->extension();
    
                $request->fdi->move(public_path('Document/fdi'),$imageName11);
    
                $fdi=url('public/Document/fdi').'/'.$imageName11;
    
                }
                else{
                    $fdi=null;
                }


            if($request->file('certificateofinsurance')){
	  
                $imageName12 = time().'.'.$request->certificateofinsurance->extension();
    
                $request->certificateofinsurance->move(public_path('Document/certificateofinsurance'),$imageName12);
    
                $certificateofinsurance=url('public/Document/certificateofinsurance').'/'.$imageName12;
    
                }
                else{
                    $certificateofinsurance=null;
                }




                DB::table('submitted_forms')->insert([
                      
                    'country_id'=>$request->country_id,
                    'name'=>$request->name,
                    'company_name'=>$request->companyname,
                    'position'=>$request->position,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                    'landing_bill'=>$landingbill,
                    'commercial_invoice'=>$commercialinvoice,
                    'freight_invoice'=>$freightinvoice,
                    'packing_list'=>$packinglist,
                    'du_licence'=>$dulicence,
                    'custom_export'=>$custom_export,
                    'nif_number'=>$request->nif,
                    'arccla'=>$arccla,
                    'vehicletitle'=>$vehicletitle,
                    'guot'=>$guot,
                    'certificateoforigin'=>$certificateoforigin,
                    'fdi'=>$fdi,
                    'certificateofinsurance'=>$certificateofinsurance


                    ]);

                    return redirect()->back()->with('status','Form Submitted');

             }


                public function definition()
                {
                    return view('definition');
                }

                public function contact()
                {
                    return view('contact');
                }

                public function about()
                {
                    return view('about');
                }
                 public function container_booking()
                {
                    return view('containerbooking');
                }
                 public function ectn_booking()
                {
                    return view('ectnservice');
                }
}
