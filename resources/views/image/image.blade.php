@extends('layouts.master')
@section('title','รูปภาพบรรยากาศ')
@section('css')

@endsection
@section('content')
<style type="text/css">

container{
     background-color: lightblue;
</style>

  	<div class="row">
  <h3 align="center">รูปภาพบรรยากาศ</h3>
  <hr width=18% size=50px color=ff0088>
  @foreach ($show_image as $show_images)
  <div class="col-md-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 filter">
    <a class="example-image-link" width="304" height="304" style="height: 100%;" href="{{ asset('storage/Shopatmosphere/'.$show_images->image) }}"
      data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
      <img class="example-image img-thumbnail" src="{{ asset('storage/Shopatmosphere/'.$show_images->image) }}"  alt="Cinque Terre" width="304" height="304" style="height: 200px;"/></a>
    </div>
    @endforeach
  </div>



@endsection
@section('script')

@endsection
