@extends('layouts.app')

@section('title', '課程查詢')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="page-header">
			<center>課程查詢</center>
		</div>
		
		<div class="wrapper row2">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <ul class="nospace group services" style="list-style-type:none;display:inline;">
      <li class="one_quarter first">
        <article><a href="#"><i class="fa fa-3x fa-slideshare"></i></a>
          <h6 class="heading font-x1"><a href="#">Suscipit</a></h6>
          <p>Bibendum ac risus sit amet venenatis mauris a tortor porta ligula</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-eercast"></i></a>
          <h6 class="heading font-x1"><a href="#">Convallis</a></h6>
          <p>Mi integer sagittis urna id tempor interdum donec vitae est ut</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-steam"></i></a>
          <h6 class="heading font-x1"><a href="#">Tincidunt</a></h6>
          <p>Lorem vehicula vel nec tortor dignissim nec arcu quis ornare</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-automobile"></i></a>
          <h6 class="heading font-x1"><a href="#">Malesuada</a></h6>
          <p>Nulla et metus hendrerit elit rutrum tristique ut nec ligula</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

		<!-- <div class="panel-body">
			<table class="table table-hover" >
			<thead style="background-color:#da8b8b;color:#fff">
				<tr>
					<img src="/img/as.jpg" >
					<th>歡迎來到課程查詢</th>

				</tr>
			</thead>
			<tbody style="background-color:">
				<tr>
					<td>1234</td>
					<td>程式設計</td>
					<td>教務處</td>
					<td>106學年度</td>
					<td>
						<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">查看詳情</button>
					</td>
				</tr>
			</tbody>
		</table>
		</div> -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.backtotop.js"></script>
		<script src="/js/jquery.mobilemenu.js"></script>
	 </div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/search.css">
	<style type="text/css">


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
@endsection
