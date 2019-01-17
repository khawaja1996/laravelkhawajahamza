<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

class PostInsertController extends Controller
{
//   public function index() {
//      $users = DB::table('users')->where('id', '==', Auth::id())->get();
//      return view('student/home',['users'=>$users]);
//   }
    
    public function index()
    {
        return view('student.posts');
    }
    
    public function insert(Request $request) {
       $user_id = $request->input('user_id');
       $title = $request->input('title');
       $description = $request->input('description');
             DB::table('posts')
                ->insert([
                'user_id' => $user_id,
                'title' => $title,
                'description' => $description,
                     ]);
        return redirect('student');
        
   }
    
    public function fetch($id) {
       
       $posts = DB::table('posts')->where('user_id', '=', Auth::user()->id )->get();
      return view('student/postsfetch',['posts'=>$posts]);
   }
}
