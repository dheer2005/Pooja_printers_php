<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('customers')){
  $total = ProductController::addtocart();
}

?>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-5-strong ">
    <!-- Container wrapper -->
    <div class="container-fluid">
     
      <!-- Navbar brand -->
      
      <a class="navbar-brand" href="{{url('/welcome')}}" style="font-family: fantasy;">Pooja Printers</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbar">
        <!-- Left links -->
        <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/Product')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/Category')}}"  aria-disabled="true">
              Category</a>
          </li>
        </ul>
        
          <ul class="navbar-nav justify-content-end" >
          <li class="nav-item">
            <a type="button" class=" btn btn-primary" style="margin: 5px"  href="{{ url('/Cart') }}" aria-disabled="true">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart {{$total}}
            <span class="badge badge-pill badge-danger"></span></a>
          </li>
          @if(Session::has('customers'))
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" style="margin: 5px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i>{{Session::get('customers')['name']}}</a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/logout">Logout</a>
             </div>
             @else
             <div class="btn btn-secondary"><a href="/Login">Login</a></div>
            </div>		
            @endif
          </ul>		  

          {{-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Cart({{$total}})</a></li>
            @if(Session::has('customers'))
            <li class="dropdown">
              <a class="dropdown-toggle"  data-toggle="dropdown" href="#">{{Session::get('customers')['name']}}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Logout</a></li>
              </ul>
            </li>

            @else
            <li><a href="/login">Login</a></li>
            @endif --}}
       

           
             
             
        
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <section style="background-color: #eee;" >
