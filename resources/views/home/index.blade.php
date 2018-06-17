@extends('layouts.front_layout')

@section('title', '首頁')

@section('main')
<div id='main' class='col-md-12 col-sm-12 col-xs-12'>
  <!-- logo -->
  <div id='logobox' class='col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1'>
    <img src="{{asset('images/layouts/logo.png')}}">
  </div>

  <div id='indeximg' class='col-md-8 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1'>
  	<img src="{{asset('images/layouts/home-1.png')}}">
  </div>

  <div id='footerbox' class='col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 np_'>
    <div id='fbbox' class='col-md-1 col-md-offset-1 col-sm-2 col-sm-offset-3 col-xs-2 col-xs-offset-3 np_' >
    	<a href=""><img src="{{asset('images/layouts/icon1.png')}}"></a>
    </div>	
    <div id='igbox' class='col-md-1 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-0 np_'>
      <a href=""><img src="{{asset('images/layouts/icon2.png')}}"></a>
    </div>
    <div id='brbox' class='col-md-1 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-0 np_'>
      <a href=""><img src="{{asset('images/layouts/icon3.png')}}"></a>
    </div>
    <div id='copyrightbox' class='col-md-6 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 np_'>
      <p class='np_'>No.33 Design © all rights reserved . Proudly created by:Rayhsu&33design</p>
    </div>
  </div>	

 
    <header>
	<nav class="cd-stretchy-nav">
		<a class="cd-nav-trigger" href="#0">	
			<span aria-hidden="true"></span>
		</a>

		<ul>
			<li><a href="#0" class="active"><span>Home</span></a></li>
			<li><a href="#0"><span>about</span></a></li>
			<li><a href="#0"><span>works</span></a></li>
			<li><a href="#0"><span>share</span></a></li>
			<li><a href="#0"><span>contact</span></a></li>
		</ul>

		<span aria-hidden="true" class="stretchy-nav-bg"></span>
	</nav>
    </header>
		


</div>
@endsection