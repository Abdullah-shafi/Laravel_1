<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use DB;

class r_customer_homeController extends Controller
{


//home
   public function index(Request $req){
   	   
   	     $req->session()->put('uname','customer' );

   	     $propertys = DB::table('property')
   	                   ->join('property_picture', 'property.property_id', '=', 'property_picture.property_id')

   	                   ->where('status', 'allowed')
   	                   ->orderby('no_of_clicks', 'desc')
   	                   ->limit(6)
   	                   ->get();


    	return view('website.r_customer_home',['propertys'=>$propertys]);
    }


 //details
   public function details($id){
   	   
   	    $property = DB::table('property')
   	               ->join('property_picture', 'property.property_id', '=', 'property_picture.property_id')
   	                ->join('customer', 'property.username', '=', 'customer.username')
   	               ->where ('property.property_id',$id)
                   ->get();

    	 return view('website.customer_property_details',['propertys'=>$property]);
    }


//AllProperty
   public function customer_all_property(){

   	     $propertys = DB::table('property')
   	                   ->join('property_picture', 'property.property_id', '=', 'property_picture.property_id')
   	                   ->where('status', 'allowed')
   	                   ->orderby('date', 'desc')
   	                   ->get();


    	return view('website.customer_all_property',['propertys'=>$propertys]);
    }

//customer_contact
public function customer_contact(){
    	return view('website.customer_contact');
    }

 //details
   public function customer_about_me(){
   	    $user = DB::table('customer')
   	               ->where ('username','customer')
                   ->get();

    	 return view('website.customer_about_me',['users'=>$user]);
    }
   // change_password
     public function customer_change_password(){
    	return view('website.customer_change_password');
       }
  //customer_delete_profile
      public function customer_delete_profile(Request $req){
      	$name=$req->session()->get('uname');
   	    $user = DB::table('customer')
   	               ->where ('username',$name)
                   ->get();

    	 return view('website.customer_delete_profile',['users'=>$user]);
    } 

  //customer_edit_profile
     public function customer_edit_profile(Request $req){
   	   $name=$req->session()->get('uname');
   	    $user = DB::table('customer')
   	               ->where ('username',$name)
                   ->get();
    	 return view('website.customer_edit_profile',['users'=>$user]);
    } 
 //about
    public function about(){
    	return view('website.about-us');
    }
}
