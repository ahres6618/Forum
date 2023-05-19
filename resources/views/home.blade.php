@php
 $article =  App\Models\Article::where('status','approved')->latest()->get(); 
 $random = App\Models\Article::where('status','approved')->inRandomOrder()->limit(5)->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
	  body{
    margin-top:20px;
    background:#eee;
    color: #708090;
}
.icon-1x {
    font-size: 24px !important;
}
a{
    text-decoration:none;    
}
.text-primary, a.text-primary:focus, a.text-primary:hover {
    color: #00ADBB!important;
}
.text-black, .text-hover-black:hover {
    color: #000 !important;
}
.font-weight-bold {
    font-weight: 700 !important;
}
	  </style>
  </head>
  <body>


    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href='/'>WebSiteName</a>
     
      <div id="navb" class="navbar-collapse collapse hide">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">الإقتصاد</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">الرياضة</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">الإعلانات</a>
          </li>
        </ul>
    
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}"><span class="fas fa-user"></span> الإشتراك</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}"><span class="fas fa-sign-in-alt"></span> تسجيل الدخول</a>
          </li>
        </ul>
      </div>
    </nav>



    <div class="container">
      <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 mb-3">
        @foreach ($article as $item)
          <!-- End of post 1 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0" >
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="{{route('article.details', $item->id )}}" class="text-primary">{{$item->title}}</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="{{route('article.details', $item->id )}}">{{Carbon\Carbon::parse($item->created_at)->locale('ar')->diffForhumans()}}</a> 
                  <span class="op-6">by</span> <a class="text-black" href="{{route('article.details', $item->id )}}">{{$item->writer}}</a></p>
                <div class="text-sm op-5 text-black"> {{Str::limit($item->body, 20);}}... </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                 
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 1 -->
          @endforeach
        </div>
        <!-- Sidebar content -->
        <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
          <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div><div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;"><div class="sticky-inner">
           
            <div class="bg-white mb-3">
              <h4 class="px-3 py-4 op-5 m-0">
                Rondom Topics
              </h4>
              @foreach ($random as $item)
                  
             
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="{{route('article.details', $item->id )}}" class="text-primary">{{$item->title}} </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">{{Carbon\Carbon::parse($item->created_at)->diffForhumans()}}</a> <span class="op-6">by</span> <a class="text-black" href="#">{{$item->writer}}</a></p>
              </div>
              @endforeach
              <hr class="m-0">
            </div>
            <div class="bg-white text-sm">
              <h4 class="px-3 py-4 op-5 m-0 roboto-bold">
                Stats
              </h4>
              <hr class="my-0">
              <div class="row text-center d-flex flex-row op-7 mx-0">
                <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"> <a class="d-block lead font-weight-bold" href="#">58</a> Topics </div>
                <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"> <a class="d-block lead font-weight-bold" href="#">1.856</a> Posts </div>
              </div>
              <div class="row d-flex flex-row op-7">
                <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"> <a class="d-block lead font-weight-bold" href="#">300</a> Members </div>
                <div class="col-sm-6 flex-ew text-center py-3 mx-0"> <a class="d-block lead font-weight-bold" href="#">DanielD</a> Newest Member </div>
              </div>
            </div>
          </div></div>
        </div>
      </div>
    </div>
  <!-- jQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <!-- Bootstrap JS -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
  
  </body>
</html>