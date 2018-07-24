@extends('layouts.master')
@section('css')

@endsection
@section('content')            
<div class="center-right">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-11">
        <div class="offer offer-radius offer-success">
          <div class="shape">
            <div class="shape-text">
              เพิ่ม              
            </div>
          </div>
          <div class="offer-content">
            <h3 class="lead">
              <form role="form">
                <div class="form-group">
                  <label for="Name">ชื่อ-สกุล:</label>
                  <a><input type="email" class="form-control" id="name" placeholder="ชื่อ-สกุล"></a>
                </div>
                <div class="form-group">
                  <label for="เบอร์มือถื">เบอร์มือถื:</label>
                  <input type="เบอร์มือถื" class="form-control" id="เบอร์" placeholder=" เบอร์มือถื">
                </div> 
                <div class="form-group">
                  <label for="email">อีเมล์:</label>
                  <a><input type="email" class="form-control" id="email" placeholder="อีเมล์"></a>
                </div>

                <div class="form-group">
                  <label for="เลือกวันที่จอง">เลือกวันที่จอง:</label>
                  <!-- <div class='input-group date' id='datetimepicker1'>
                    <input type='date' class="form-control">

                  </div> -->
                  <div class="input-append date form_datetime" data-date="2013-02-21T15:25:00Z">
                    <input size="16" type="text" value="" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
                    <span class="add-on"><i class="icon-calendar"></i></span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-4 col-md-4">
                    <label for="sel1">จำนวนท่าน</label>
                    <select  class="form-control" id="sel1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                    </select>
                  </div>
                </div> 
                <br>
              <br>
              <br>
             
                <div class="form-group">
                  <div class="col-xs-4 col-md-4">
                    <label for="sel1">เลือกโซน</label><br>
                    <select  class="form-control" id="sel1">:
                      <option>เลือกโซน</option>
                      <option>ในร้าน</option>
                      <option>นอกร้าน</option>
                    </select>
                  </div>
                  <br>
                   <br>
                  <br>
                 
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">ยืนยันการจองโต๊ะ</button>
                </div>
              </form>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>





@endsection
@section('javascript')        
@endsection
