<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klient;

class KlientsController extends Controller
{
    //
    public function getAllKlients() {
        $klients = Klient::orderBy('id', 'DESC')->get();
        return view('klients', ['klients' => $klients]);
    }

    public function deleteKlient($id) {
    $klient_obj = new Klient(); 
        $klients = $klient_obj->where('id', $id)->delete();
        return back();
    }
 

 public function addKlient(Request $request) {
  
          return view('add_success');
    }

  public function createKlient(Klient $klient, Request $request) {
   $klient_obj = new Klient();
        if ($request->method()=='POST') {
            $klient_obj->name = $request['name'];
              $klient_obj->surname = $request['surname'];
             $klient_obj->age = $request['age'];
            $klient_obj->save(); //$phone_obj->insert($model, $year, $price);
             return redirect()->route('klients');
         } 
      } 
    public function editKlient(Klient $klient, Request $request) {
       // $phone_obj = new Phone();
      // $phone = $phone->find(4);
      $klient = $klient->find($request->id);
                return view('klient_edit', ['klient'=>$klient]);
    }
     public function updateKlient(Request $request, Klient $klient) {
         

          $klient = $klient->find($request->id);
          $klient->name = $request['name'];
          $klient->surname = $request['surname'];
          $klient->age = $request['age'];
          $klient->save(); //$phone_oebj->insert($model, $year, $price);

          return redirect()->route('klients');
}
public function sum() {
	$c = 0;
    	$sum = $c + $klient->age;
    	return view('sum', ['sum' => $sum]);
        //$klients->age->sum('age');
    }
}
