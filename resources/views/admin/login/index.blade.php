<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录 -- 爱酥在线商城</title>
    <!--STYLESHEET-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/admin/css/nifty.min.css" rel="stylesheet">
    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="/admin/css/nifty-demo-icons.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="/admin/css/nifty-demo.min.css" rel="stylesheet">
    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="/admin/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
    <!--JAVASCRIPT-->
    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="/admin/plugins/pace/pace.min.css" rel="stylesheet">
	<!--自定义style文件-->
	<link href="/admin//css/style.css" rel="stylesheet">

	<script src="/admin/plugins/pace/pace.min.js"></script>
    <!--jQuery [ REQUIRED ]-->
    <script src="/admin/js/jquery-2.2.4.min.js"></script>
    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="/admin/js/bootstrap.min.js"></script>
    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="/admin/js/nifty.min.js"></script>
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="/admin/js/bg-images.js"></script>

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h3 class="h4 mar-no">管理后台</h3>
		                <p class="text-muted">爱酥在线商城</p>
		            </div>
		            <form action="/admin/login" method="post">
						{{csrf_field()}}
		                <div class="form-group">
		                    <input type="text" class="form-control" name="username"  placeholder="用户名" autofocus>
		                </div>
		                <div class="form-group">
		                    <input type="password" class="form-control" name="password"  placeholder="密码" >
		                </div>
						<div class="form-group">
							<input type="text" class="form-control" name="captcha"  placeholder="验证码" style="width: 50%"/>

							<img src="{{ captcha_src() }}" id="captcha" onclick="this.src='{{ captcha_src() }}?t='+new Date().getTime()" alt="" style="cursor: pointer;" />
						</div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">记住我</label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>

		            </form>
					<div class="mar-ver pad-btm">
						{{--验证码错误显示--}}
						@if(count($errors) > 0)
							<div class="alert alert-danger btn-sm ">
								@foreach($errors->all() as $error)
									{{ $error }}
								@endforeach
							</div>
						@endif
						{{--登录错误显示--}}
						@if(session('error'))
							<div class="alert alert-danger btn-sm ">
								{{session('error')}}
							</div>
						@endif
					</div>
		        </div>
		
		        <div class="pad-all">


		            {{--<a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>
		            <a href="pages-register.html" class="btn-link mar-lft">Create a new account</a>
		
		            <div class="media pad-top bord-top">
		                <div class="pull-right">
		                    <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
		                </div>
		                <div class="media-body text-left">
		                    Login with
		                </div>
		            </div>--}}
					&copy;2017 爱酥在线商城 Powered by aliphp.cn
		        </div>
		    </div>
		</div>
		<!--===================================================-->
		
		
		<!-- DEMO PURPOSE ONLY -->
		<!--===================================================-->
		<div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg bg-trans active" src="/admin/img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/admin/img/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/admin/img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/admin/img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/admin/img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/admin/img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/admin/img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/admin/img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
		    </div>
		</div>
		<!--===================================================-->

	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->

		</body>
</html>
