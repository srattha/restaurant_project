@extends('layouts.master')
@section('css')
@endsection
@section('content')
<div class="row">
  <h1 style="text-align: center;">สถานะโต๊ะ</h1>
  <div class="row">
    <div class="row" style="padding: 1px;">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 col-sm-3 col-md-12 col-lg-12">
            <div class="offer offer-radius offer-success">
              <div class="picture">
                <div class="shape">
                  <div class="shape-text">

                  </div>
                </div>

                <div class="offer-content">
                  <div class="row">
                    @foreach ($table_status as $index => $table_statu)

                    <div class=" col-md-2"> 
                      @if($table_statu->status == 1)
                      <img src="img/sofa1.png" data-color="violet" alt="Third Image" data-toggle="modal" data-target="#reservations" onclick="data_print('{{$table_statu->id}}', '{{$table_statu->name}}', '{{$table_statu->seating}}')" style="width: 35%; height: 35%" />
                      {{$table_statu->name}}

                      จำนวนที่นั่ง: {{$table_statu->seating}}
                      @else
                      <img src="img/sofa.png" data-color="violet" alt="Third Image" style="width: 35%; height: 35%" /> 
                      @endif
                    </div>

                    @endforeach

                  </div>
                </div>
                <div id="reservations" class="modal fade" role="dialog">
                 <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span id="name"></span> จำนวน <span id="seating"></span> ที่ </h4>
                  </div>
                  <div class="modal-body">
                    
                    <div style="padding-top: 10px;">
                     <form class="form-horizontal" method="POST" action="{{ route('booktable') }}">
                      {{ csrf_field() }}

                      <input type='hidden'  name="dining_table_id" id="dining_table_id" value="dining_table_id">
                      <div class="form-group">
                       <div class="col-sm-6">
                        <label><b>วันที่ </b></label>
                        <div id="start">
                         <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                          <input type='text'  name="reserve_date" id="date"  class="form-control first_login"  />
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label><b>เวลา </b></label>
                      <div id="start">
                       <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input type='text'  name="time" id="time"  class="form-control first_login"  />
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                 <label><b>เบอร์โทร ติดต่อ </b></label>
                 <div id="start">
                  <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                   <input type='number'  name="reserve_mobile" id="time"  class="form-control first_login"  / required="">
                 </div>
               </div>
             </div>
             <div class="modal-footer">
               <button type="submit" class="btn btn-primary swa-confirm"> ตกลง</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>


@endsection
@section('javascript')
<script type="text/javascript">
 $(document).ready(function(){
   $('#date').datetimepicker({
    format: "DD-MM-YYYY",
    defaultDate: new Date()
  });
   $('#time').datetimepicker({
    format: "hh:mm ",
    defaultDate: new Date()
  });
 
});

  function data_print($id, $name, $seating){

    var dining_table_id = $id;
    var name = $name;
    var seating = $seating;
    document.getElementById("name").innerHTML = name;
    document.getElementById("dining_table_id").value = dining_table_id;
    document.getElementById("seating").innerHTML = seating;
  }



</script>
@endsection