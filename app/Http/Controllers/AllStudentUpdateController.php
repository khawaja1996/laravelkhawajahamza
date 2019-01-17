<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Redirect;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AllStudentUpdateController extends Controller
{

   public function show($id) {
       
       $users = DB::table('users')->where('id', '=', $id)->get();
      return view('admin/updatestud',['users'=>$users]);
   }
    
    
   public function edit(Request $request,$id) {
      $name = $request->input('name');
       $email = $request->input('email');
       $password = Hash::make($request->input('pass'));
             DB::table('users')
                ->where('id', $id)
                ->update([
                'name' => $name,
                'email' => $email,
                'password' => $password,
    ]);
           
//      return Redirect::back()->with('Success', "successfully updated!");
       return redirect('admin');

   }
    
     public function destroy($id) {
         
      DB::delete('delete from users where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
         return redirect('admin');
   }
    
    public function showposts($id){
        $posts = DB::table('posts')->where('user_id', '=', $id)->get();
      return view('admin/fetchposts',['posts'=>$posts]);
        
    }
    
    public function destroyposts($id) {
         
      
        DB::delete('delete from posts where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
         return redirect('admin');
   }
    
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Admin');
    }
}
