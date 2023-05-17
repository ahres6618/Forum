<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use Illuminate\Support\Carbon;
use Image;

class UserController extends Controller
{
    //
    public function destroy(Request $request)
        {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        }


        public function Storearticle(Request $request){ 
        $image=$request->file('image');
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(636,852)->save('upload/'.$name);
        $save_url='upload/'.$name;
        Article::insert([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>'upload/'.$name,
            'status'=>'waiting',
            'writer'=>Auth::user()->name,
            'writer_id'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
          ]);
    
        return redirect()->route('dashboard');
     }



     public function waitingarticles(){
      return view('waitingarticles');

     }

     public function tobeedited(){
      
      return view('tobeeditedarticles');
     }

     public function articleedit($id){
      $article = Article::find($id);
      return view('editarticle', compact('article'));
     }


     public function articleupdate(Request $request){
      $image=$request->file('image');
        $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(636,852)->save('upload/'.$name);
        $save_url='upload/'.$name;
      $article_id = $request->id;
      Article::findOrFail($article_id)->update([
      'title'=>$request->title,
      'body'=>$request->body,
      'image'=>'upload/'.$name,
      'status'=>'waiting'
      
      ]);

  
        return redirect()->route('tobeedited.articles');
   }


   public function publishedarticles(){
    return view('published');
   }

   public function deletearticle($id){
    $article= Article::where('id',$id)->first();
    $article->delete();
    return redirect()->back();
   }


   public function Detailsarticle($id){
    $article= Article::findOrFail($id);
    $latestarticle= Article::latest()->limit(5)->get();
  
    return view('articledetails', compact('article'));
 }
}
