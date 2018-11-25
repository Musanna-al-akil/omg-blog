<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\post2;
use App\Post;
use DB;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','test']]);
    }
   public function index(){
            $post2s=post2::where('id','1')->paginate(1);
          $posts=Post::orderBy('created_at','desc')->paginate(4);
 

       $title='welcome to startuply';
       //return view('pages.index',compact('title'));
  
     return view('pages.index')->with('post2s', $post2s)->with('posts', $posts);
}


   
   public function about(){
    $title='about us';
      $posts=Post::orderBy('created_at','desc')->paginate(4);
 
    return view('pages.about')->with('title',$title)->with('posts',$posts);
   }
   public function services(){
       $data=array(
           'title'=>'services',
           'services'=>['web Desigen','programing','seo'] 
       );
    return view('pages.services')->with($data);
   }
   public function team(){
    $title='welcome to startuply';
    //return view('pages.index',compact('title'));
  return view('pages.team')->with('title',$title);
}
public function contact(){
    $title='welcome to startuply';
    //return view('pages.index',compact('title'));
  return view('pages.contact')->with('title',$title);
}
public function test(){
        // $posts= Post::all();
       $post2s=Post2::where('id','1')->paginate(1) ;
       $post2s2=Post2::where('id','4')->paginate(1) ;
       //$posts= DB::select('SELECT*FROM posts');
 
    //  $posts=Post::orderBy('id','desc')->get(1);

       $posts=Post::orderBy('created_at','desc')->paginate(4);
        return view('pages.test')->with('post2s', $post2s)->with('post2s2', $post2s2)->with('posts',$posts);

}
}
