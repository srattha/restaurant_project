@extends('counter_staff.master')
@section('title','โปรไฟล์')
@section('css')
<style type="text/css">
.card {
  background: #fff;
  display: inline-block;
  border: 1px solid #ddd;
}

.image {
  float: left;
  background: #000;
  width: 25%;
  height: 150px
}

.content {
  float: left;
  height: 140px;
  width: 73%;
  overflow: hidden;
  padding: 5px;
}

.content h4 {
  margin: 5px 0;
}
</style>
@endsection
@section('content')
<div class="container" style="padding:10px;">
  <div class="row">
    <div style="text-align: center;">
     <script language="javascript">
      now = new Date();
      var thday = new Array ("อาทิตย์","จันทร์",
        "อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์");
      var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม",
        "เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน",
        "ตุลาคม","พฤศจิกายน","ธันวาคม");
      d = Date.now();
      d = new Date(d);
      d = (d.getHours() > 12 ? d.getHours() - 12 : d.getHours())+':'+d.getMinutes()+' '+(d.getHours() >= 12 ? "PM" : "AM");
      document.write("วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " +
        thmonth[now.getMonth()]+ " " + (now.getFullYear()+ 543) + " เวลา " + (d));
    </script>
    <h1 align="center">โปรไฟล์</h1>
    <hr width=18% size=50px color=ff0088>
</div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align: right;">
            @if($user->user_type_id == 1)
            <button type="button" class="btn btn-default" onclick="location.href='{{ route('status') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
            @elseif ($user->user_type_id == 2)
            <button type="button" class="btn btn-default" onclick="location.href='{{ route('home.index') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
            @elseif ($user->user_type_id == 3)
            <button type="button" class="btn btn-default" onclick="location.href='{{ route('counterstaff.index') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
            @elseif ($user->user_type_id == 4)
            <button type="button" class="btn btn-default" onclick="location.href='{{ route('chef') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
            @elseif ($user->user_type_id == 5)
            <button type="button" class="btn btn-default" onclick="location.href='{{ route('receptionist') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
            @else
            <button type="button" class="btn btn-default" onclick="location.href='{{ route('serving') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
            @endif
        </div>
    </div>
    <label>ชื่อ:</label>{{$user->name}}<br>
    <label>เบอร์โทร:</label>{{$user->telephone_number}}<br>
    <label>อีเมล์:</label>{{$user->email}}<br>
    <label>ประเภทผู้ใช้:</label>
    @if($user->user_type_id == 1)
    <span class="label label-default">ผู้ใช้ทั่วไป</span>
    @elseif ($user->user_type_id == 2)
    <span class="label label-primary">ผู้ดูแลระบบ</span>
    @elseif ($user->user_type_id == 3)
    <span class="label label-success">พนักงานเคาน์เตอร์</span>
    @elseif ($user->user_type_id == 4)
    <span class="label label-warning">กุ๊ก</span>
    @elseif ($user->user_type_id == 5)
    <span class="label label-warning">กุ๊ก</span>
    @elseif ($user->user_type_id == 6)
    <span class="label label-warning">กุ๊ก</span>
    @else

    @endif
    <br>
    @if(session()->has('password_confirmation'))
    <div class="alert alert-danger">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>{{ session()->get('password_confirmation') }}</strong>
   </div>
   @endif
   @if(session()->has('password'))
    <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>{{ session()->get('password') }}</strong>
   </div>
   @endif
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">แก้ไข รหัสผ่าน</a>
          </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('profile.editpassword') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" value="{{$user->id}}" name="id">
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                         <i class="fa fa-floppy-o" aria-hidden="true"></i> ตกลง
                     </button>
                 </div>
             </div>
         </form>
        </div>
    </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">แก้ไขโปรไฟล์</a>
  </h4>
</div>
<div id="collapse2" class="panel-collapse collapse">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">ชื่อ</label>

                <div class="col-md-6">
                    <input type="hidden" class="form-control" value="{{$user->id}}" name="id">
                    <input id="name" type="text" class="form-control" name="name" required>


                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-4 control-label">เบอร์โทร</label>
                <div class="col-md-6">
                    <span style="color: red">*โปรดกรอกหมายเลขโทรศัพท์ 10 หลัก ด้วยรูปแบบดังนี้ 08X-XXX-XXXX *</span>
                    <input type="tel" name="telephone_number" pattern="^\d{3}-\d{3}-\d{4}$" class="form-control first_login" title="โปรดกรอกหมายเลขโทรศัพท์ 10 หลัก ด้วยรูปแบบดังนี้ 08X-XXX-XXXX" oninvalid="this.setCustomValidity('โปรดกรอกหมายเลขโทรศัพท์ ให้ถูกต้อง')"
                    onvalid="this.setCustomValidity('')">
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">อีเมล์</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" required>
                    <input  type="hidden" class="form-control" name="password" value="{{$user->password}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                       <i class="fa fa-floppy-o" aria-hidden="true"></i> ตกลง
                   </button>
               </div>
           </div>
       </form>
   </div>
</div>
</div>

</div>
</div>

</div>



@endsection
@section('javascript')

@endsection



