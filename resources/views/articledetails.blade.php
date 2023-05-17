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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Page 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Page 2</a>
          </li>
        </ul>
    
        <ul class="nav navbar-nav ml-auto">
         
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.logout')}}"><span class="fas fa-sign-in-alt"></span> logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container d-md-flex align-items-stretch">
      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <h2>{{$article->title}}</h2>
      <p>{{$article->body}}</p>
      
       
      </div>

      <nav id="sidebar">
				<div class="p-4 pt-5">
					<h5>Categories</h5>
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
	          <li>
	            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mens Shoes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Casual</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Football</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jordan</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lifestyle</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Running</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Accessories</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Nicklace</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Ring</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Bag</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sacks</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lipstick</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu4">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jeans</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> T-shirt</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jacket</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Shoes</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sweater</a></li>
	            </ul>
	          </li>
	        </ul>
					<div class="mb-5">
						<h5>Tag Cloud</h5>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
					</div>
					<div class="mb-5">
	        	<h5>Newsletter</h5>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
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