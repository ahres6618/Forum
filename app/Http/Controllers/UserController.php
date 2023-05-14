<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use Illuminate\Support\Carbon;

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
        Article::insert([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>'lookaboutit',
            'writer'=>Auth::user()->name,
            'created_at'=>Carbon::now(),
          ]);
    
        return redirect()->route('dashboard');
     }

}
