@extends('layouts.app')

@section('title', '碎形課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <form class="well form-horizontal" action="{{asset('/application/fractal')}}" method="post"  id="fractal_class">
    <fieldset>

      <!-- Form Name -->
      <legend><b>開設碎形課程</b></legend>

      <!-- 此處input name 已更改 -->
      <!-- text req term-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課學期</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
        <input  name="term" placeholder="ex. 106-1" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req name-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程名稱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="name" placeholder="課程中文名稱" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req code-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程代號</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
        <input  name="code" placeholder="課程代碼" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req field-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程領域</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
        <input  name="field" placeholder="人文藝術、" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req unit-->
      <div class="form-group">
        <label class="col-md-4 control-label">授課單元</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
        <input  name="unit" placeholder="開放授課之單元或類別" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req location-->
      <div class="form-group">
        <label class="col-md-4 control-label" >上課地點</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="location" placeholder="請輸入上課地點" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req time-->
      <div class="form-group">
        <label class="col-md-4 control-label">上課時間</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <input name="time" placeholder="ex. 9/17 9:00-12:00" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req limit-->
      <div class="form-group">
        <label class="col-md-4 control-label">人數限制</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
        <input name="limit" placeholder="ex. 50" class="form-control"  type="text" >
          </div>
        </div>
      </div>

      <!-- text req teacher-->
      <div class="form-group">
        <label class="col-md-4 control-label">講師姓名</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="teacher" placeholder="請輸入授課講師中文名字" class="form-control" type="text" >
          </div>
        </div>
      </div>

      <!-- text req email-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡方式</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" placeholder="請填入電子郵件" class="form-control" type="text" >
          </div>
        </div>
      </div>

      <!-- textarea no_req teacher_intro -->
      <div class="form-group">
        <label class="col-md-4 control-label">講師介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                <textarea class="form-control full" name="teacher_intro" placeholder="講師背景及專長介紹"></textarea>
        </div>
        </div>
      </div>

      <!-- text req class_hr-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
        <input name="class_hr" placeholder="本課程上課總時數(hr)" class="form-control" type="text" >
          </div>
        </div>
      </div>

      <!-- text req auth_hr-->
      <div class="form-group">
        <label class="col-md-4 control-label">認證時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
        <input name="auth_hr" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text" >
          </div>
        </div>
      </div>

      <!-- textarea no_req class_intro -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程簡介</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="class_intro" placeholder="課程介紹"></textarea>
        </div>
        </div>
      </div>

      <!-- textarea no_req comment -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程備註</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                <textarea class="form-control full" name="comment" placeholder="單一課程注意事項或是變動"></textarea>
        </div>
        </div>
      </div>

      <!-- Button submit -->
      <div class="form-group">
        <center>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success"> 完成開課 <span class="glyphicon glyphicon-ok"></span></button>
        </center>
      </div>

    </fieldset>
  </form>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('js')
<script>

</script>
@endsection
