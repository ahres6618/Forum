@php
$id=Auth::user()->id;
@endphp

@if ($id==1) 



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
    
            <div class="">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                           <h4>جميع المقالات </h4> 
                        </div>
                    </div>
                  
                        
                   
                    <div class="card-body">
                        <table id="mytable" class=" table table-bordered table-stripped" style="direction: rtl; text-align: center;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>writer</th>
                                    <th>status </th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($articles as $item)
                                    <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->writer}}</td>
                                    <td>{{$item->status}}</td>
                                   
                                    <td class="d-flex justify-content-center align-items-center">
                                        <form action="{{route('article.aprove', $item->id)}}" method="post" class="mx-auto">
    
                                          @csrf
                                            <button type="submit"
                                            class="btn btn-sm btn-danger ">
                                          موافقة
                                            </button>
                                            </form>
                                    
                                   
                                            <form action="{{route('status.edit', $item->id)}}" method="post" class="mx-auto">
                                              @csrf
                                   
                                                <button type="submit"
                                                class="btn btn-sm btn-danger">
                                                  يجب تعديل
                                                </button>
                                                </form>
                                    
                                    <form action="{{route('status.delete', $item->id)}}" method="post" class="mx-auto">
    
                                      @csrf
                                    <button type="submit"
                                    class="btn btn-sm btn-danger">
                                  حذف
                                    </button>
                                    </form>
                                    </td>
                                    </tr>
                                    @endforeach
                            </tbody>
    
                        </table>
                    </div>
    
                </div>
            </div>
       
      </div>

      <nav id="sidebar">
				<div class="p-4 pt-5">
					
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">مقالاتي</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu1">
               
	            </ul>
	          </li>
	         
	        
	        </ul>
				
				
	      </div>
    	</nav>
		</div>


 
  <!-- jQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <!-- Bootstrap JS -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
  
  </body>
</html>
@else
404 not found 

@endif


