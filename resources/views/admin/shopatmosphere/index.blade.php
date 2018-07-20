@extends('admin.layouts.master')
@section('css')

<style type="text/css" media="screen">
div.upload {
  width: 157px;
  height: 57px;
  background: url(https://lh6.googleusercontent.com/-dqTIJRTqEAQ/UJaofTQm3hI/AAAAAAAABHo/w7ruR1SOIsA/s157/upload.png);
  overflow: hidden;
}

div.upload input {
  display: block !important;
  width: 157px !important;
  height: 57px !important;
  opacity: 0 !important;
  overflow: hidden !important;
}

</style>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">บรรยากาศ ร้าน</h1>
  </div>
</div>

<div class="row">
  <form id="form1" runat="server" method="POST" action="{{ route('addshopatmosphere') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="upload">
      <input type='file' name="file" id="imgInp" />
    </div>
    <img id="blah" src="/assets/img/no-img.png" style="width: 25%; height: 25%;">
    <br>
    <hr>
    <div class="form-group" id="button_submit" style="display: none;">
     <button  type="submit" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม </button>
   </div>
 </form>
</div>
<div class="row">
  @foreach ($show_image as $show_images)
  <div class="col-md-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 filter">
    <a class="example-image-link" width="304" height="304" style="height: 300px;" href="{{ asset('storage/Shopatmosphere/'.$show_images->image) }}"
      data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
      <img class="example-image img-thumbnail" src="{{ asset('storage/Shopatmosphere/'.$show_images->image) }}"  alt="Cinque Terre" width="304" height="304" style="height: 300px;"/></a>
      <!--  <img src="{{ asset('storage/Shopatmosphere/'.$show_images->image) }}" class="img-thumbnail" alt="Cinque Terre" width="304" height="304" style="height: 300px;"> -->
    </div>


    @endforeach
  </div>

  @endsection
  @section('javascript')
  <script>
    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
          $('#button_submit').show();
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgInp").change(function() {
      readURL(this);
    });

  </script>
  @endsection
