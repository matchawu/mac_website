@extends('layouts.app')

@section('title', '登入申請')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>
<div class="container col-sm-2">
</div>
<div class="container col-sm-8">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><b>開課單位申請</b></legend>

<div class="alert alert-info">
  <strong>初次使用? </strong> 申請流程請參照 <a href="{{ url('/introduce') }}" class="alert-link">微學分課程申請簡介。</a>
</div>

<!-- 此處input name尚未更改 -->
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">申請帳號</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="ID" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">申請密碼</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input  name="first_name" placeholder="password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

<!-- Button -->
<div class="form-group">
  <!-- <label class="col-md-4 control-label"></label>
  <div class="col-md-4"> -->
  <center>
    <a href="{{ url('/application/login') }}">
    <button type="button" class="btn btn-primary">登入<span class="glyphicon glyphicon-log-in"></span></button>
    </a>
  </center>
  <!-- </div> -->
</div>

</fieldset>
</form>
</div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

</script>
@endsection

@section('js')
<script>

</script>
@endsection