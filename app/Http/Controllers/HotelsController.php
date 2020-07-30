<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelsController extends Controller
{
    public function OurHotels(Request $request){

      $validator = Validator::make($request->all(), [
        'from_date'=>'required|date',
        'to_date'=>'required|date',
        'city'=>'required',
        'adults_number'=>'required',
        ]);

      if ($validator->fails()) {
        return response()->json(["code"=>300,'Status' => 'Failed' , 'Error' => $validator->errors()]);
         }

         $data = array(
          array("provider"=>"BestHotels", "hotelName"=>"Coast Hotels", "fare"=>"600 L.E" , 'amenities' => array("air condition", "Good view", )),
           array("provider"=>"BestHotels", "hotelName"=>"Kings Inn", "fare"=>"500 L.E" , 'amenities' =>  array("air condition", "Good view", )),
           array("provider"=>"BestHotels", "hotelName"=>"Lustrio Inn", "fare"=>"250 L.E" , 'amenities' =>  array("air condition", "Good view", )),
           array("provider"=>"TopHotels", "hotelName"=>"Moss View Hotel", "fare"=>"200 L.E" , 'amenities' =>  array("air condition", "Good view", )),
           array("provider"=>"TopHotels", "hotelName"=>"Omni Hotels", "fare"=>"400 L.E" , 'amenities' =>  array("air condition", "Good view", )),
         );

         return response()->json(["code"=>200,'Status' => 'success' , 'data' => $data]);

    }

    public function BestHotel(Request $request){

      $validator = Validator::make($request->all(), [
        'from_date'=>'required|date',
        'to_date'=>'required|date',
        'city'=>'required',
        'adults_number'=>'required',
        ]);

      if ($validator->fails()) {
        return response()->json(["code"=>300,'Status' => 'Failed' , 'Error' => $validator->errors()]);
         }

         $data = array(
          array("hotelName"=>"Coast Hotels","hotelRate"=>3,  "hotelFare"=>"600 L.E" , 'roomAmenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Kings Inn", "hotelRate"=>4, "hotelFare"=>"500 L.E" , 'roomAmenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Lustrio Inn", "hotelRate"=>3, "hotelFare"=>"250 L.E" , 'roomAmenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Moss View Hotel","hotelRate"=>5, "hotelFare"=>"200 L.E" , 'roomAmenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Omni Hotels", "hotelRate"=>5, "hotelFare"=>"400 L.E" , 'roomAmenities' =>  array("air condition", "Good view", )),
         );

         return response()->json(["code"=>200,'Status' => 'success' , 'data' => $data]);

    }

    public function TopHotels(Request $request){

      $validator = Validator::make($request->all(), [
        'from_date'=>'required|date',
        'to_date'=>'required|date',
        'city'=>'required',
        'adults_number'=>'required',
        ]);

      if ($validator->fails()) {
        return response()->json(["code"=>300,'Status' => 'Failed' , 'Error' => $validator->errors()]);
         }

         $data = array(
          array("hotelName"=>"Coast Hotels","rate"=>3,  "price  "=>"600 L.E" , 'amenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Kings Inn", "rate"=>4, "price"=>"500 L.E" , 'amenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Lustrio Inn", "rate"=>3, "price"=>"250 L.E" , 'amenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Moss View Hotel","rate"=>5, "price"=>"200 L.E" , 'amenities' =>  array("air condition", "Good view", )),
           array("hotelName"=>"Omni Hotels", "rate"=>5, "price"=>"400 L.E" , 'amenities' =>  array("air condition", "Good view", )),
         );

         return response()->json(["code"=>200,'Status' => 'success' , 'data' => $data]);

    }
}
