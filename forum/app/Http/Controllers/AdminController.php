<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminpage(){
        $articles = Article::where('status','waiting')->get();
        return view('admin', compact('articles') );
    }


    public function approvestatue($id){
        $article = Article::findOrFail($id)->update([
            'status'=>'approved'
     ]);

     return redirect()->back();
    }

    public function editstatue($id){
        $article = Article::findOrFail($id)->update([
            'status'=>'toedit'
     ]);

     return redirect()->back();
    }
    public function deletestatus($id){
        $article = Article::findOrFail($id)->update([
            'status'=>'deleted'
     ]);

     return redirect()->back();
    }

}
