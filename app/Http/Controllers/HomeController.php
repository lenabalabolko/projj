<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

     public function getAllUsers() {
        $myuser_obj = new User();
        $users = $myuser_obj->getAllUsers();
        return view('users', ['users'=>$users]);
        // return DB:: table($this->table_name)->get();
    }

    public function deleteUser($id) {
        $Myuser_obj = new user();
        $users = $Myuser_obj->deleteUser($id);
        return back();
        //return view('students', ['students'=>$students]);
    }

     public function getAllUsers2() {
        $myuser2_obj = new User();
        $users2 = $myuser2_obj->getAllUsers2();
        return view('users2', ['users2'=>$users2]);
        // return DB:: table($this->table_name)->get();
    }

    public function deleteUser2($id) {
        $Myuser2_obj = new user();
        $users2 = $Myuser2_obj->deleteUser2($id);
        return back();
        //return view('students', ['students'=>$students]);
    }
}
