<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  </head>
  <body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="#">WebSiteName</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
        <span class="navbar-toggler-icon"></span>
      </button>
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
          @if(Auth::user()->id==1)
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.panel')}}">الآدمن </a>
          </li>
          @endif
        </ul>
    
        <ul class="nav navbar-nav ml-auto">
         
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.logout')}}"><span class="fas fa-sign-in-alt"></span> تسجيل الخروج</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container d-md-flex align-items-stretch">
      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <center> <h2 class="mb-4">إضافة مقالة</h2>   </center> 
        <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data" style="direction: rtl">
          @csrf
          <input type="hidden" name="id">
          <div class="form-row">
              
              <div class="value">
                  <input class="input--style-6" type="text" name="title" placeholder="عنوان ">
              </div>
          </div>
         
          <div class="form-row">
          
              <div class="value">
                  <div class="input-group">
                      <textarea class="textarea--style-6" name="body" placeholder="Message sent to the employer">النص</textarea>
                  </div>
              </div>
          </div>
          <div class="form-row">
              <div class="name">حمل الصورة</div>
              <div class="value">
                  <div class="input-group js-input-file">
                      <input class="input-file" type="file" name="image" id="file">
                      <label class="label--file" for="file">اختر ملف</label>
                      
                  </div>
                  <div class="label--desc">صورة المقالة </div>
              </div>
          </div>
          <div class="form-row">
           
            <div class="value">
                <div class="input-group js-input-file">
                    <input type="submit" value="ارسل" id="file">
                    
                </div>
                
            </div>
        </div>
      </form>
      </div>

      <nav id="sidebar">
				<div class="p-4 pt-5">
					
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">مقالاتي </a>
	            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li><a href="{{route('dashboard')}}"><span class="fa fa-chevron-right mr-2"></span> أضف مفالة </a></li>
                <li><a href="{{route('waiting.articles')}}"><span class="fa fa-chevron-right mr-2"></span>مقالات بإنتظار الموافقة عليها </a></li>
                <li><a href="{{route('tobeedited.articles')}}"><span class="fa fa-chevron-right mr-2"></span> يجب تعديلها</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> مرفوضة</a></li>
                <li><a href="{{route('published.articles')}}"><span class="fa fa-chevron-right mr-2"></span> المقالات المنشورة</a></li>
              
	            </ul>
	          </li>
	   
	    
	        </ul>
					
					</div>
				
	      </div>
    	</nav>
		</div>


 
  <!-- jQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <!-- Bootstrap JS -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
  
  </body>
</html>