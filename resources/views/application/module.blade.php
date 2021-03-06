@extends('layouts.app')

@section('title', '開設模組課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <form class="well form-horizontal" action="{{asset('/application/module')}}" method="post"  id="module_class">
    <fieldset>

      <!-- Form Name -->
      <legend><b>開設模組課程</b></legend>

      <!-- 此處input name 已更改 -->
      <!-- text req term-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課學期</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
            <input  name="term" placeholder="ex. 106-1" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req way-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課模式</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" id="way" name="way">
              <option value="單位創課">單位創課</option>
              <option value="學生募課">學生募課</option>
              <option value="企業捐課">企業捐課</option>
            </select>
          </div>
        </div>
      </div>

      <!-- text req name-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程名稱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="name" placeholder="課程中文名稱" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req field-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程領域</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" id="field" name="field">
              <option value="人文與思想">人文與思想</option>
              <option value="自然科學">自然科學</option>
              <option value="應用科學">應用科學</option>
              <option value="社會思潮與現象">社會思潮與現象</option>
              <option value="跨域整合">跨域整合</option>
              <option value="社會實踐">社會實踐</option>
              <option value="創意創業">創意創業</option>
              <option value="其他">其他</option>
            </select>
          </div>
        </div>
      </div>

      <!-- text no_req other_field-->
      <div class="form-group" id="other_field">
        <label class="col-md-4 control-label">輸入分類</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
        <input  name="other_field" placeholder="請輸入其他分類名稱" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- text req location-->
      <div class="form-group">
        <label class="col-md-4 control-label" >上課地點</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="location" placeholder="請輸入上課地點" class="form-control"  type="text"  required>
          </div>
        </div>
      </div>

      <!-- text req limit-->
      <div class="form-group">
        <label class="col-md-4 control-label">人數限制</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
        <input name="limit" placeholder="ex. 50" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req teacher-->
      <div class="form-group">
        <label class="col-md-4 control-label">講師姓名</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="teacher" placeholder="請輸入授課講師中文名字" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- text req email-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡方式</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" placeholder="請填入電子郵件" class="form-control" type="text" required>
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
              <input name="class_hr" placeholder="本課程上課總時數(hr)" class="form-control" type="text" required>
            </div>
          </div>
        </div>

      <!-- text req auth_hr-->
      <div class="form-group">
        <label class="col-md-4 control-label">認證時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
        <input name="auth_hr" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text" required>
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

      <!-- 以下三組為 模組課程 獨有 -->
      <!-- textarea no_req goal  -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程目標</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></span>
                <textarea class="form-control full" name="goal" placeholder="本模組課程欲達成之學習目標"></textarea>
        </div>
        </div>
      </div>

      <!-- textarea no_req claim -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程要求</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                <textarea class="form-control full" name="claim" placeholder="本課程對學生修課之要求"></textarea>
        </div>
        </div>
      </div>

      <!-- textarea no_req other -->
      <div class="form-group">
        <label class="col-md-4 control-label">其他</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                <textarea class="form-control full" name="other" placeholder="其他注意事項"></textarea>
        </div>
        </div>
      </div>

      <!-- text no_req keyword-->
      <div class="form-group">
        <label class="col-md-4 control-label">關鍵字</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
            <input name="keyword" placeholder="關鍵字請以空格隔開" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- text no_req video-->
      <div class="form-group">
        <label class="col-md-4 control-label">影音連結</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input name="video" placeholder="請輸入課程影音網址" class="form-control" type="text">
          </div>
        </div>
      </div>

      <br>

      <!-- Button submit -->
      <div class="form-group">
        <center>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <button type="submit" class="btn btn-success">完成開課 <span class="glyphicon glyphicon-ok"></span></button>
        </center>
      </div>


    </fieldset>
  </form>

</div>
@endsection

@section('css')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<style>
#other_field{
  display: none;
}
</style>
@endsection

@section('js')
<script>
$('select').change(function(){
  if($('select option:selected').text() == "其他"){
    $('#other_field').show();
  }
  else{
    $('#other_field').hide();
  }
});
</script>
@endsection
