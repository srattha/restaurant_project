@extends('layouts.master')
@section('css')

@endsection
@section('content')
<style type="text/css">

b{
  background-image:url('https://www.google.co.th/search');
}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="row">

  <h1 style="text-align: center;">โปรโมชั่น</h1>
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu1">โปรเดอะฮักกระชากใจ</a></li>
      <li><a data-toggle="tab" href="#menu2">โปรสหายหมื่นจอก</a></li>
      <li><a data-toggle="tab" href="#menu3">โปรลูกหมูสามตัว</a></li>
      <li><a data-toggle="tab" href="#menu4">ยำประเจ็ท</a></li>
      <li><a data-toggle="tab" href="#menu5">ทอดสะพาน</a></li>
    </ul>


    <div class="tab-content">
     <div id="menu1" class="tab-pane fade in active">
      <div class="row">
     <div class="col-md-12">
          <div class="table-responsive">
           <table class="table table-striped">
            <thead>
              <tr>
                <th>รายการ</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($promotion_type1 as $index => $promotion_types1)
              <tr>
                <td>{{$promotion_types1->name}}</td>
                <td>{{$promotion_types1->price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div> 


    </div>
    <div id="menu2" class="tab-pane fade ">
      <div class="row">
       <div class="col-md-12">
          <div class="table-responsive">
           <table class="table table-striped">
            <thead>
              <tr>
                <th>รายการ</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($promotion_type2 as $index => $promotion_types2)
              <tr>
                <td>{{$promotion_types2->name}}</td>
                <td>{{$promotion_types2->price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      </div>

    </div>
    <div id="menu3" class="tab-pane fade ">
     <div class="row">
      <div class="col-md-12">
          <div class="table-responsive">
           <table class="table table-striped">
            <thead>
              <tr>
                <th>รายการ</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($promotion_type3 as $index => $promotion_types3)
              <tr>
                <td>{{$promotion_types3->name}}</td>
                <td>{{$promotion_types3->price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </div>
  <div id="menu4" class="tab-pane fade ">
   <div class="row">
   <div class="col-md-12">
          <div class="table-responsive">
           <table class="table table-striped">
            <thead>
              <tr>
                <th>รายการ</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($promotion_type4 as $index => $promotion_types4)
              <tr>
                <td>{{$promotion_types4->name}}</td>
                <td>{{$promotion_types4->price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>


</div>
<div id="menu5" class="tab-pane fade ">
 <div class="row">
 <div class="col-md-12">
          <div class="table-responsive">
           <table class="table table-striped">
            <thead>
              <tr>
                <th>รายการ</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($promotion_type5 as $index => $promotion_types5)
              <tr>
                <td>{{$promotion_types5->name}}</td>
                <td>{{$promotion_types5->price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>



</div>


</div>
</div>
</div>

@endsection
@section('script')

@endsection