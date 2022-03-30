			<header class="navbar page-header whiteHeader navbar-expand-lg">
				<ul class="nav flex-row mr-auto">
					<li class="nav-item">
						<a class="nav-link sidenav-btn h-lg-down" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a> <a class="nav-link sidenav-btn h-lg-up" data-target="#page-aside" data-toggle="dropdown" href="#page-aside"><span class="navbar-toggler-icon"></span></a>
					</li>
				</ul>
				<ul class="nav flex-row order-lg-2 ml-auto nav-icons">
				
					<li class="nav-item dropdown user-dropdown align-items-center">
						<a class="nav-link" data-toggle="dropdown" href="#" id="dropdown-user" role="button"><span class="ml-2 h-lg-down dropdown-toggle">後台管理系統</span></a>
						<div aria-labelledby="dropdown-user" class="dropdown-menu dropdown-menu-right">
							<div class="text-center p-3 pt-0 b-b mb-5">
								<span class="mb-0 d-block font300 text-title fs-1x"><span class="font700">Hi, <?php echo $_SESSION['username']; ?> 您好</span></span> <span class="fs12 mb-0 text-muted"></span>
							</div><a class="dropdown-item" href="#">登入時間：</a> <a class="dropdown-item" href="#"><?php echo $_SESSION['login_time']; ?></a>
							<div class="dropdown-divider"></div><a class="dropdown-item" href="#">登入IP：</a> <a class="dropdown-item" href="#"><?php echo $_SESSION['login_ip']; ?></a> <a class="dropdown-item" href="components/common/Sing_out.php"><i class="icon-Power"></i> 登出</a>
						</div>
					</li>
					<li class="h-lg-up nav-item">
						<a aria-expanded="false" class=" nav-link collapsed" data-target="#navbarToggler" data-toggle="collapse" href="#"><i class="icon-Magnifi-Glass2"></i></a>
					</li>
				</ul>
				<div class="collapse navbar-collapse search-collapse" id="navbarToggler">
					<form class="form-inline ml-1">
						<button class="no-padding bg-trans border0" type="button"><i class="icon-Magnifi-Glass2"></i></button> <input aria-label="Search" class="form-control border0" placeholder="Search..." type="search">
					</form>
				</div>
			</header>
			<div class="page-subheader mb-30">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-7">
							<div class="list">
								<div class="list-item pl-0">
									<div class="list-thumb ml-0 mr-3 pr-3 b-r text-muted"></div>
									<div class="list-body">
										<div class="list-title fs-2x">
											<h3></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5 d-flex justify-content-end">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb no-padding bg-trans mb-0">
									<li class="breadcrumb-item">
										<a href="index.html"><i class="icon-Home mr-2 fs14"></i></a>
									</li>
									<li class="breadcrumb-item">關於我們</li>
									<li class="breadcrumb-item active">管理關於我們</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div><!-- page-sub-Header end-->
