@extends('layouts.front_layout')

@section('title', '首頁')

@section('main')
<div id='main' class='col-md-12 col-sm-12 col-xs-12'>
  <!-- logo -->
  <div id='logobox' class='col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1'>
    <img src="{{asset('images/layouts/logo.png')}}">
  </div>
  
  <!-- 表格區塊 -->
  <div class='col-md-10 col-md-offset-1 col-sm-12 col-xs-12'>

  <form>

  <div class="form-group">
    <label for="username">姓名</label>
    <input type="text" class="form-control" id="username" placeholder="姓名" name='username'>
  </div>

  <div class="form-group">
    <label for="phone">電話</label>
    <input type="text" class="form-control" id="phone" placeholder="電話" name='phone'>
  </div>
  <div class="form-group">
  <label for="content">內容</label>
  <textarea class="form-control" rows="5" style='resize : none;' name='content'></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  <!-- 表格區塊結束 -->

 

		


</div>
@endsection