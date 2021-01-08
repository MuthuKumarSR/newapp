<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use DB;

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
        $id = Auth::user()->id;

        $post = DB::table('posts')->where('user_id',$id)->get();

        return view('home')->with('posts',$post);
    }

    public function profile()
    {
        return view('profile');
    }
    
    public function post()
    {
        return view('post');
    }

    public function upload(Request $request)
    {
        $id = Auth::user()->id;

        $title = $request->title;

        $description = $request->description;
        
        if ($request->hasFile('file')) {
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(5)."-".date('his')."-".str_random(3).".".$extension;
        $folderpath  = 'images'.'/';
        $file->move($folderpath , $fileName);
            
        }

        DB::table('posts')->insert(['user_id' => $id,'title' => $title,'description' => $description,'image' => $fileName]);


        return redirect('/home'); 

    }

    public function delete($id)
    {
        DB::table('posts')->where('id',$id)->delete();

        return redirect('/home');
    }
   

}
