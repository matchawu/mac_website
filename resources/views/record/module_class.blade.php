@extends('layouts.app')

@section('title', '課程查詢')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="bcg">
			<div style="line-height:500px;color:#fff;padding-top:180px">
				<center><h1>模&nbsp;組&nbsp;課&nbsp;程</h1>
					<h5 style="font-style:oblique;padding-left:0%;color:#f2f1f2;letter-spacing:1px;">“我寧可做人類中有夢想和有完成夢想的願望的、最渺小的人，而不願做一個最偉大的、無夢想、無願望的人。” - 紀伯倫</h5>
				</center>
			</div>
	</div>
		<br>
		<div class="row">
				<div class="col-sm-1">
					<a href="{{url('/record')}}"><button class="btn btn-defaulte " type="button">回上一頁</button></a>
				</div>
				<div class="dropdown col-sm-1">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						請選擇總類
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li onclick="openAl()"><a href="#全部" data-value="all" >全部</a></li>
						<li onclick="openHumanities()"><a href="#人文思想" data-value="another action" >人文思想</a></li>
						<li onclick="openNscience()"><a href="#自然科學" data-value="something else here">自然科學</a></li>
						<li onclick="openAscience()"><a href="#應用科學" data-value="separated link">應用科學</a></li>
						<li onclick="openTrend()"><a href="#社會思潮與現象" data-value="another action">社會思潮與創意</a></li>
						<li onclick="openInterdisciplinary()"><a href="#跨域整合" data-value="something else here">跨域整合</a></li>
						<li onclick="openSocial()"><a href="#k社會實踐" data-value="separated link">社會實踐</a></li>
						<li onclick="openCreative()"><a href="#創意創業" data-value="something else here">創意創業</a></li>
						<li onclick="openOthers()"><a href="#其它" data-value="separated link">其它</a></li>
					</ul>
			</div>
		</div>


	<hr>

	<div class="row">

		<div id="social" style="display:none">
		 @foreach($module_class as $module_class6)
			@if($module_class6->field=='社會實踐')
			 <a href="{{ url('record/view_module/'.$module_class6->id) }}"><div class="col-sm-4" style="margin-top:20px">
				 <div class="post-module">
					 <div class="post-content">

						 <div class="category">{{ $module_class6->field }}</div>
						 <h1 class="title">{{$module_class6->name}}</h1>
						 <h2 class="sub_title">{{$module_class6->class_intro}}</h2>
						 <div class="post-meta">
							 <span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
								 授課者:{{$module_class6->teacher}}</a></span></div>
					 </div>
				 </div>
			 </div></a>
			 @endif
		 @endforeach
		</div>

		<div id="interdisciplinary" style="display:none">
		 @foreach($module_class as $module_class5)
			@if($module_class5->field=='跨域整合')
			 <a href="{{ url('record/view_module/'.$module_class5->id) }}"><div class="col-sm-4" style="margin-top:20px">
				 <div class="post-module">
					 <div class="post-content">

						 <div class="category">{{ $module_class5->field }}</div>
						 <h1 class="title">{{$module_class5->name}}</h1>
						 <h2 class="sub_title">{{$module_class5->class_intro}}</h2>
						 <div class="post-meta">
							 <span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
								 授課者:{{$module_class5->teacher}}</a></span></div>
					 </div>
				 </div>
			 </div></a>
			 @endif
		 @endforeach
		</div>

		<div id="trend" style="display:none">
			@foreach($module_class as $module_class4)
			 @if($module_class4->field=='社會思潮與現象')
				<a href="{{ url('record/view_module/'.$module_class4->id) }}"><div class="col-sm-4" style="margin-top:20px">
					<div class="post-module">
						<div class="post-content">

							<div class="category">{{ $module_class4->field }}</div>
							<h1 class="title">{{$module_class4->name}}</h1>
							<h2 class="sub_title">{{$module_class4->class_intro}}</h2>
							<div class="post-meta">
								<span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
									授課者:{{$module_class4->teacher}}</a></span></div>
						</div>
					</div>
				</div></a>
				@endif
			@endforeach
		</div>

		<div id="ascience" style="display:none">
			@foreach($module_class as $module_class3)
			 @if($module_class3->field=='應用科學')
				<a href="{{ url('record/view_module/'.$module_class3->id) }}"><div class="col-sm-4" style="margin-top:20px">
					<div class="post-module">
						<div class="post-content">

							<div class="category">{{ $module_class3->field }}</div>
							<h1 class="title">{{$module_class3->name}}</h1>
							<h2 class="sub_title">{{$module_class3->class_intro}}</h2>
							<div class="post-meta">
								<span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
									授課者:{{$module_class3->teacher}}</a></span></div>
						</div>
					</div>
				</div></a>
				@endif
			@endforeach
		</div>

		<div id="nscience" style="display:none">
			@foreach($module_class as $module_class2)
			 @if($module_class2->field=='自然科學')
				<a href="{{ url('record/view_module/'.$module_class2->id) }}"><div class="col-sm-4" style="margin-top:20px">
					<div class="post-module">
						<div class="post-content">

							<div class="category">{{ $module_class2->field }}</div>
							<h1 class="title">{{$module_class2->name}}</h1>
							<h2 class="sub_title">{{$module_class2->class_intro}}</h2>
							<div class="post-meta">
								<span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
									授課者:{{$module_class2->teacher}}</a></span></div>
						</div>
					</div>
				</div></a>
				@endif
			@endforeach
		</div>

		<div id="all" style="display">
			@foreach($module_class as $module)
			<div class="col-sm-4" style="margin-top:20px">
			 <a href="{{ url('record/view_module/'.$module->id) }}"><div class="post-module">
				 <div class="post-content">

					 <div class="category">{{ $module->field }}</div>
					 <h1 class="title">{{$module->name}}</h1>
					 <h2 class="sub_title">{{$module->class_intro}}</h2>
					 <div class="post-meta">
						 <span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>
							 &nbsp;授課者:{{$module->teacher}}</a></span></div>
				 </div>
			 </div></a>
			</div>
			@endforeach
		</div>

		<div id="creative" style="display:none">
		 @foreach($module_class as $module_class7)
			@if($module_class7->field=='創意創業')
			 <a href="{{ url('record/view_module/'.$module_class7->id) }}"><div class="col-sm-4" style="margin-top:20px">
				 <div class="post-module">
					 <div class="post-content">

						 <div class="category">{{ $module_class7->field }}</div>
						 <h1 class="title">{{$module_class7->name}}</h1>
						 <h2 class="sub_title">{{$module_class7->class_intro}}</h2>
						 <div class="post-meta">
							 <span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
								 授課者:{{$module_class7->teacher}}</a></span></div>
					 </div>
				 </div>
			 </div></a>
			 @endif
		 @endforeach
		</div>
		<div id="humanities" style="display:none">
			@foreach($module_class as $module_class8)
			 @if($module_class8->field=='人文與思想')
				<div class="col-sm-4" style="margin-top:20px">
					<a href="{{ url('record/view_module/'.$module_class8->id) }}"><div class="post-module">
						<div class="post-content">

							<div class="category">{{ $module_class8->field }}</div>
							<h1 class="title">{{$module_class8->name}}</h1>
							<h2 class="sub_title">{{$module_class8->class_intro}}</h2>
							<div class="post-meta">
								<span class="comments"><i class="fa fa-comments"></i>
									<a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;授課者:{{$module_class8->teacher}}</a></span></div>
						</div>
					</div></a>
				</div>
				@endif
			@endforeach
		</div>
		<div id="others" style="display:none">
		 @foreach($module_class as $module_class)
			@if($module_class->field=='其他')
			 <a href="{{ url('record/view_module/'.$module_class->id) }}">
				 <div class="col-sm-4" style="margin-top:20px">
				 <div class="post-module">
					 <div class="post-content">

						 <div class="category">{{ $module_class->field }}</div>
						 <h1 class="title">{{$module_class->name}}</h1>
						 <h2 class="sub_title">{{$module_class->class_intro}}</h2>
						 <div class="post-meta">
							 <span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
								 授課者:{{$module_class->teacher}}</a></span></div>
					 </div>
				 </div>
			 </div></a>
			 @endif
		 @endforeach
		</div>
	</div>
@endsection

@section('css')

	<style type="text/css">
	.bcg {
	    /* The image used */
	    background-image: url("/img/record4.png");

	    /* Full height */
	    height: 400px;
			margin-left: -210px;
			margin-right:-173px;
	    /* Center and scale the image nicely */
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	.post-module {
  position: relative;
  z-index: 1;
  display: block;
  background: #00264d;
  min-width: 270px;
  height: 290px;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}
.post-module:hover,
.hover {
  -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
}



.post-module .post-content {
  position: absolute;
  bottom: 0;
  background: #fbfbfb;
  width: 100%;
  padding: 30px;
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
}
.post-module .post-content .category {
  position: absolute;
  top: -34px;
  left: 0;
  background: #e74c3c;
  padding: 10px 15px;
  color: #FFFFFF;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
}
.post-module .post-content .title {
  margin:10px;

  color: #333333;
  font-size: 26px;
  font-weight: 700;
}
.post-module .post-content .sub_title {
  margin: 10px;
  padding: 10 0 0 0px;
  color: #e74c3c;
  font-size: 13px;

}
.post-module .post-content .description {
  display: none;
  color: #666666;
  font-size: 14px;
  line-height: 1.8em;
}
.post-module .post-content .post-meta {
  margin: 10px 0 0 0px;
  color: #999999;
}
.post-module .post-content .post-meta .timestamp {
  margin: 10 10px 0 0;
}
.post-module .post-content .post-meta a {
  color: #999999;
  text-decoration: none;
}
.hover .post-content .description {
  display: block !important;
  height: auto !important;
  opacity: 1 !important;
}
.containercard {
  max-width: 800px;
  min-width: 640px;
  margin: 0 auto;
}


	.btn, .btn.inverse:hover{color:#fff; background-color:#e74c3c; border-color:#e74c3c;}
	.btn:hover, .btn.inverse{color:inherit; background-color:transparent; border-color:inherit;}
	*, *::before, *::after{transition:all .28s ease-in-out;}
		.page-header{
			font-size: 35px;
			margin-top: 100px;
			/*font-weight: bold;*/
		}
		/*查詢歷年課程字體*/
		font{
			font-size: 20px;
		}

		/*內容*/
		.content{
			margin-left: 4%;
		}

		/*Modal標題字體*/
		h4{
			font-weight: bold;
		}
	</style>
@endsection

@section('js')
	<script type="text/javascript">
		$(".dropdown-menu li a").click(function(){
		$(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
		$(this).parents(".dropdown").find('.btn').val($(this).data('value'));
		});
		function openHumanities(){
			$("#humanities").fadeIn("slow");
			$("#humanities").css("display","");
			$("#all").css("display","none");
			$("#nscience").css("display","none");
			$("#ascience").css("display","none");
			$("#trend").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#social").css("display","none");
			$("#creative").css("display","none");
			$("#others").css("display","none");
	};

		function openNscience(){
			$("#nscience").fadeIn("slow");
			$("#nscience").css("display","");
			$("#all").css("display","none");
			$("#humanities").css("display","none");
			$("#ascience").css("display","none");
			$("#trend").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#social").css("display","none");
			$("#creative").css("display","none");
			$("#others").css("display","none");

		};
		function openAscience(){
			$("#ascience").css("display","");
			$("#ascience").fadeIn("slow");
			$("#all").css("display","none");
			$("#humanities").css("display","none");
			$("#nscience").css("display","none");
			$("#trend").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#social").css("display","none");
			$("#creative").css("display","none");
			$("#others").css("display","none");
		};
		function openTrend(){
			$("#trend").fadeIn("slow");
			$("#trend").css("display","");

			$("#all").css("display","none");
			$("#humanities").css("display","none");
			$("#nscience").css("display","none");
			$("#ascience").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#social").css("display","none");
			$("#creative").css("display","none");
			$("#others").css("display","none");

		};
		function openInterdisciplinary(){
			$("#interdisciplinary").css("display","");
			$("#interdisciplinary").fadeIn("slow");
			$("#all").css("display","none");
			$("#humanities").css("display","none");
			$("#nscience").css("display","none");
			$("#ascience").css("display","none");
			$("#trend").css("display","none");
			$("#social").css("display","none");
			$("#creative").css("display","none");
			$("#others").css("display","none");
		};
		function openSocial(){
			$("#social").css("display","");
			$("#social").fadeIn("slow");
			$("#all").css("display","none");
			$("#humanities").css("display","none");
			$("#nscience").css("display","none");
			$("#ascience").css("display","none");
			$("#trend").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#creative").css("display","none");
			$("#others").css("display","none");
		};
		function openCreative(){
			$("#creative").css("display","");
			$("#creative").fadeIn("slow");
			$("#all").css("display","none");
			$("#humanities").css("display","none");
			$("#nscience").css("display","none");
			$("#ascience").css("display","none");
			$("#trend").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#social").css("display","none");
			$("#others").css("display","none");
		};
		function openOthers(){
			$("#others").css("display","");
			$("#others").fadeIn("slow");
			$("#all").css("display","none");
			$("#humanities").css("display","none");
			$("#nscience").css("display","none");
			$("#ascience").css("display","none");
			$("#trend").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#social").css("display","none");
			$("#creative").css("display","none");
		};
		function openAl(){
			$("#all").css("display","");
			$("#all").fadeIn("slow");
			$("#humanities").css("display","none");
			$("#nscience").css("display","none");
			$("#ascience").css("display","none");
			$("#trend").css("display","none");
			$("#interdisciplinary").css("display","none");
			$("#social").css("display","none");
			$("#creative").css("display","none");
			$("#others").css("display","none");

		};
	</script>
@endsection
