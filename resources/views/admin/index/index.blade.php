@extends('admin.layout.main')
@section('content')
	<div id="page-title">
		<h1 class="page-header text-overflow">仪表盘</h1>

		<!--Searchbox-->
		<div class="searchbox">
			<div class="input-group custom-search-form">
				<input type="text" class="form-control" placeholder="Search..">
			<span class="input-group-btn">
				<button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>
			</span>
			</div>
		</div>
	</div>
	<ol class="breadcrumb">
		<li><a href="#">首页</a></li>
		<li><a href="#">仪表盘</a></li>
		<li class="active">仪表盘</li>
	</ol>
	<div id="page-content">

		<hr class="new-section-sm bord-no">
		<div class="row">
			<div class="eq-height">
				<div class="col-sm-6 col-lg-3  eq-box-lg">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">用户注册</h3>
						</div>
						<!--Buttons Sizes-->
						<!--===================================================-->
						<div class="panel-body demo-nifty-btn">
							<button class="btn btn-lg btn-default">用户注册</button><br>
						</div>
						<!--===================================================-->
		
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 eq-box-lg">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">订单管理</h3>
						</div>
						<!--Buttons Rounded Sizes-->
						<!--===================================================-->
						<div class="panel-body demo-nifty-btn">
							<button class="btn btn-lg btn-rounded btn-default">订单管理</button><br>
						</div>
						<!--===================================================-->
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 eq-box-lg">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">购物车</h3>
						</div>
						<!--Icon Buttons Sizes-->
						<!--===================================================-->
						<div class="panel-body demo-nifty-btn">
							<button class="btn btn-default btn-icon"><i class="demo-pli-mine icon-3x"></i></button><br>
						</div>
						<!--===================================================-->
		
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 eq-box-lg">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">评论管理</h3>
						</div>
						<!--Icon Buttons Sizes-->
						<!--===================================================-->
						<div class="panel-body demo-nifty-btn">
							<button class="btn btn-default btn-icon btn-circle"><i class="demo-pli-mail icon-3x"></i></button><br>
						</div>
						<!--===================================================-->
					</div>
				</div>
			</div>
		</div>



	</div>



@endsection