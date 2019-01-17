<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class AllStudentController extends Controller
{
    
    public function index() {
      $users = DB::table('users')->where('id', '!=', Auth::id())->get();
      return view('admin/home',['users'=>$users]);
   }
    
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Admin');
    }
}
