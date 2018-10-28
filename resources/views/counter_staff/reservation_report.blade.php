@extends('counter_staff.master') 
@section('title','รายงานการจอ') @section('css')
<style type="text/css">
.panel-warning {
    border-color: #323232;
}

.panel-warning>.panel-heading {
    color: rgba(255, 255, 255, 0.9);
    background-color: #323232;
    border-color: #323232;
}
</style>
@endsection @section('content')

<div class="container" style="padding:10px;">
    <div class="panel-group page">
        <div class="panel panel-default">
            <div class="panel-heading" style="padding: 20px 15px;">
                <div class="row">
                    <div class="col-md-6">
                        ตาราง รายงานการจอง
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-default" onclick="location.href='{{ route('counterstaff.index') }}'"> <i class="fa fa-chevron-left" aria-hidden="true"></i> กลับ</button>
                        <button type="button" class="btn btn-default" onclick="window.print()"> <i class="fa fa-print" aria-hidden="true"></i> พิมพ์</button>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-warning">
                            <div class="panel-heading">วันที่</div>
                            <div class="panel-body">
                                {{$datas}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-warning">
                            <div class="panel-heading">โต๊ะ</div>
                            <div class="panel-body">
                                {{$table_name->name}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-warning">
                            <div class="panel-heading">ชื่อ</div>
                            <div class="panel-body">
                              {{$user['name']}}
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">เบอร์โทร</div>
                        <div class="panel-body">{{$reserve_mobile}}</div>
                    </div>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                <h5>ลำดับ</h5>
                            </th>
                            <th>
                                <h5>รายการ</h5>
                            </th>
                            <th>
                                <h5>จำนวน</h5>
                            </th>
                            <th>
                                <h5>ราคาต่อหน่วย</h5>
                            </th>
                            <th>
                                <h5>จำนวนเงิน</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($food as $index => $f) @if($f->food_detail == null)
                        <tr>
                            <td class="table-active">{{$index+1}}</td>
                            <td>
                                <p>{{$f->promotion->name}}</p>
                            </td>
                            <td>{{$f->totalorder}}</td>
                            <td>{{$f->promotion->price}}</td>
                            <td>{{$f->amount}}</td>
                        </tr>

                        @else
                        <tr>
                            <td class="table-active">{{$index+1}}</td>
                            <td>
                                <p>{{$f->food_detail->food_name}}</p>
                            </td>
                            <td>{{$f->totalorder}}</td>
                            <td>{{$f->food_detail->price}}</td>
                            <td>{{$f->amount}}</td>
                        </tr>
                        @endif @endforeach

                        <tr>
                            <td colspan="4">
                                <div style="text-align: center;">
                                    <h5>ยอดรวม</h5>
                                </div>
                            </td>
                            <td>{{$amount}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <form class="form-horizontal" method="POST" action="{{ route('confirm_payment') }}">
                    {{ csrf_field() }} @if($order != "")
                    <input type="hidden" name="order" value="{{$order->id}}" /> @endif
                    <input type="hidden" name="table_id" value="{{$table_name->id}}" />
                    <div class="row">
                        <div class="col-md-6">
                            <label class="switch">
                                <!-- <input type="hidden" name="is_paid" value="1" /> -->
                                <input type="checkbox" id="IsPaid" name="is_paid" value="1">
                                <span class="slider round"></span>
                            </label>
                            <h3><span id="have_not_paid" class="label label-danger">ยังไม่ได้จ่าย</span>
                             <span id="pay" class="label label-success" style="display: none;">จ่าย แล้ว</span>
                         </h3>

                     </div>
                     <div class="col-md-6" style="text-align: right;">
                        <button type="submit" id="submit" class="btn  btn-primary" style="display: none;"><i class="fa fa-check-square" aria-hidden="true"></i> ยืนยัน</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
<div class="print-page">
    <div style="text-align: center; padding: 50px;">
        <img src="/img/g1.jpg" class="img-circle" style="width: 20%;">
    </div>
    <div style="text-align: center; padding: 30px;">
        <b>ใบแจ้งรายการ</b>
    </div>
    <div style="text-align:center;padding: 10px;">
        <b>วันที่: {{$datas}}</b>
    </div>
    <div style="text-align:center;padding: 10px;">
        <b>โต๊ะ: {{$table_name->name}}</b>
    </div>
    <table>
        <tr style="border-bottom: 1px solid #ddd;">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สิ้นค้า</td>
            <td></td>
            <td style="text-align: right;">ราคา</td>
        </tr>
        @foreach ($food as $index => $f) @if($f->food_detail == null)
        <tr>
            <td>{{$f->totalorder}}&nbsp;&nbsp;&nbsp;&nbsp;{{$f->promotion->name}}</td>
            <td></td>
            <td style="text-align: right;">{{$f->amount}}</td>
        </tr>
        @else
        <tr>
            <td>{{$f->totalorder}}&nbsp;&nbsp;&nbsp;&nbsp;{{$f->food_detail->food_name}}</td>
            <td></td>
            <td style="text-align: right;">{{$f->amount}}</td>
        </tr>
        @endif @endforeach
    </table>
    <div style="border-bottom: 1px solid #ddd;"></div>
    <table>
        <tr>
            <th><b>ยอดรวม:</b></th>
            <th></th>
            <th style="text-align: right;">{{$amount}} บาท</th>
        </tr>
        <tr>
            <th><b>หมายเหตุ:</b></th>
            <th></th>
            <th></th>
        </tr>
    </table>
</div>

</div>

@endsection @section('javascript')
<script type="text/javascript">
    $(document).ready(function() {
        $('#IsPaid').change(function() {
            if (this.checked != true) {
                $("#have_not_paid").show();
                $("#pay").hide();
                $("#submit").hide();
            } else {
                $("#pay").show();
                $("#submit").show();
                $("#have_not_paid").hide();
                $("#submit").remove('disabled')
            }
        });
    });
</script>
@endsection
