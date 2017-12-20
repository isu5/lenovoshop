 <!--===================================================-->
<!--END ASIDE 右边侧栏-->
<nav id="mainnav-container">
	<div id="mainnav">

		<!--Menu-->
		<!--================================-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">

					<!--Profile Widget-->
					<!--================================-->
					<div id="mainnav-profile" class="mainnav-profile">
						<div class="profile-wrap">

							<a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
										<span class="pull-right dropdown-toggle">
											<i class="dropdown-caret"></i>
										</span>
								<p class="mnp-name">管理员:Admin</p>
								<span class="mnp-desc">web@isu5.cn</span>
							</a>
						</div>
						<div id="profile-nav" class="collapse list-group bg-trans">
							<a href="#" class="list-group-item">
								<i class="demo-pli-male icon-lg icon-fw"></i> 个人设置
							</a>
							<a href="#" class="list-group-item">
								<i class="demo-pli-gear icon-lg icon-fw"></i> 修改密码
							</a>

							<a href="#" class="list-group-item">
								<i class="demo-pli-unlock icon-lg icon-fw"></i> 退出
							</a>
						</div>
					</div>


					<!--Shortcut buttons-->
					<!--================================
					<div id="mainnav-shortcut">
						<ul class="list-unstyled">
							<li class="col-xs-3" data-content="My Profile">
								<a class="shortcut-grid" href="#">
										<i class="demo-psi-male"></i>
								</a>
							</li>
							<li class="col-xs-3" data-content="Messages">
								<a class="shortcut-grid" href="#">
										<i class="demo-psi-speech-bubble-3"></i>
								</a>
							</li>
							<li class="col-xs-3" data-content="Activity">
								<a class="shortcut-grid" href="#">
										<i class="demo-psi-thunder"></i>
								</a>
							</li>
							<li class="col-xs-3" data-content="Lock Screen">
								<a class="shortcut-grid" href="#">
										<i class="demo-psi-lock-2"></i>
								</a>
							</li>
						</ul>
					</div>-->
					<!--================================-->
					<!--End shortcut buttons-->


					<ul id="mainnav-menu" class="list-group">
						<!--Category name-->
						<li class="list-header">栏目菜单</li>
						<!--Menu list item-->
						<li class="active-link">
							<a href="{{url('admin/index')}}">
								<i class="demo-psi-home"></i>
								<span class="menu-title">
									<strong>仪表盘</strong>
								</span>
							</a>
						</li>

						<!--Menu list item-->
						<li>
							<a href="#">
								<i class="ti-shopping-cart-full icon-1x"></i>
								<span class="menu-title">
									<strong>商品管理</strong>
								</span>
								<i class="arrow"></i>
							</a>
							<!--Submenu-->
							<ul class="collapse">
								<li><a href="">商品列表</a></li>
								<li><a href="">商品栏目</a></li>

							</ul>
						</li>
						<!--Menu list item-->
						<!--<li class="active-sub">打开状态</li-->
						<li>
							<a href="#">
								<i class="ti-user"></i>
								<span class="menu-title">管理员</span>
								<i class="arrow"></i>
							</a>
							<!--Submenu-->
							<ul class="collapse">
								<li><a href="#">用户列表</a></li>
								<li><a href="#">角色管理</a></li>
								<li><a href="#">权限管理</a></li>
							</ul>
						</li>
					</ul>



				</div>
			</div>
		</div>
		<!--================================-->
		<!--End menu-->

	</div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->