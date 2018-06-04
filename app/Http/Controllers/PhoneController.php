<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller
{
    //
    public function getAllPhones() {
        $phones = Phone::orderBy('id', 'DESC')->get();
        return view('phones', ['phones' => $phones]);
    }

    public function deletePhone($id) {
    $phone_obj = new Phone(); 
        $phones = $phone_obj->where('id', $id)->delete();
        return back();
    }
 

 public function addPhone(Request $request) {
  
          return view('add_success');
    }

  public function createPhone(Phone $phone, Request $request) {
   $phone_obj = new Phone();
        if ($request->method()=='POST') {
            $phone_obj->model = $request['model'];
              $phone_obj->year = $request['year'];
             $phone_obj->price = $request['price'];
            $phone_obj->save(); //$phone_obj->insert($model, $year, $price);
             return redirect()->route('phones');
         } 
      } 
    public function editPhone(Phone $phone, Request $request) {
       // $phone_obj = new Phone();
      // $phone = $phone->find(4);
      $phone = $phone->find($request->id);
                return view('phone_edit', ['phone'=>$phone]);
    }
     public function updatePhone(Request $request, Phone $phone) {
         

          $phone = $phone->find($request->id);
          $phone->model = $request['model'];
          $phone->year = $request['year'];
          $phone->price = $request['price'];
          $phone->save(); //$phone_oebj->insert($model, $year, $price);

          return redirect()->route('phones');
         
     } 
     public function orderPhone(Request $request, Phone $phone) {
         

          $phone = $phone->find($request->phone->id);
          $phone->user_id = $request->user_id;
          //$phone->user_id = 3;
          $phone->save(); 

          return redirect()->route('phones');
         
     }
      public function showOrderPhone(Request $request, Phone $phone) {
 		$phone_arr = Phone::all()->where('user_id', Auth::id());
 		$price = 0;
 		foreach ($phone_arr as $phone) {
    		$price = $price+$phone->price;
		}
		return view('Orders', ['orders' => $phone_arr,
							   'price' => $price]);      
     } 

      public function backOrderPhone(Request $request, Phone $phone) {
 		  $phone = $phone->find($request->phone->id);
          $phone->user_id = null;
          $phone->save(); 

          return redirect()->route('orders');
     } 

}
