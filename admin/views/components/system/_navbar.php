		<aside class=" page-aside aside-fixed" id="page-aside">
			<div class="sidenav darkNav">
				<p class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center"><!-- <i class="icon-Paper-Plane inline-icon rounded avatar32 d-inline-flex align-items-center justify-content-center"></i>
                        <span class="logo-text d-inline-flex"> <span class='font700 d-inline-block mr-1'>ASSAN</span> UI</span>--></p>
				<div class="flex">
					<div class="aside-content slim-scroll">
						<ul class="metisMenu" id="metisMenu">
							<li  <?php echo $url == 'system.php' ? 'class="active"' :'';  ?>>
								 <a class="has-arrow" href="javascript:void(0)"><span class="nav-text">系統功能</span></a>
								<ul aria-expanded="false">
									<li <?php echo $_SERVER['QUERY_STRING']== 'type=ins'  && $url=='system.php' ? 'class="active"':''; ?>>
										<a href="system.php?type=ins">新增系統功能</a>
									</li>
									<li <?php echo $_SERVER['QUERY_STRING']== 'type=list' && $url=='system.php' ? 'class="active"':''; ?>>
										 <a href="system.php?type=list">系統功能管理</a>
									</li>
			
								</ul>
							</li><!--Menu-item-->
							
									<li>
								 <a class="has-arrow" href="javascript:void(0)"><span class="nav-text">管理</span></a>
								<ul aria-expanded="false">
									<?php foreach ($_SESSION['category'] as $key => $value) { ?>
									<li class="active">
										<a href="<?php echo $_SERVER['PHP_SELF'].'?type=content_list&cat_id='.$value['id']; ?>"><?php echo $value['title']; ?></a>
									</li>
									<?php } ?>
								</ul>
							</li><!--Menu-item-->
							<!--		<li>
								<a class="has-arrow" href="javascript:void(0)"><span class="nav-text">資料設定</span></a>
								<ul aria-expanded="false">
									<li >
										 <a href="sch.html">新增/修改 班表資料</a>
									</li>
									<li >
									 <a href="sch_sample.html">新增/修改 班表範本</a>
									</li>
									<li>
									<a href="">醫生列表</a>
									</li>
									<li>
									<a href="">新增/修改 醫生資料</a>
									</li>
									<li>
										<a href="">預約設定列表</a>
									</li>
								</ul>-->
							</li><!--Menu-item-->
								 <li >
								 <a class="has-arrow" href="javascript:void(0)"><span class="nav-text">關於我們</span></a>
								<ul aria-expanded="false">
																	<li>
										<a href="aboutdata.html">管理關於我們</a>
									</li>
									 <li >
										<a href="new_aboutdata_edit.html">新增/修改關於我們</a>
									</li>
								</ul>
							</li><!--Menu-item-->
							
		

							<li >
								 <a class="has-arrow" href="javascript:void(0)"><span class="nav-text">輪播圖管理</span></a>
								<ul aria-expanded="false">
									<li  >
										 <a href="ad.html">管理輪播圖</a>
									</li>
									<li >
										 <a href="new_ad_edit.html">新增輪播圖</a>
									</li>
								</ul>
							</li><!--Menu-item-->
						</ul>
					</div><!-- aside content end-->
				</div><!-- aside hidden scroll end-->
				<div class="aside-footer p-3 pl-25">
					<div class="">
					
					</div>
				</div><!-- aside footer end-->
			</div><!-- sidenav end-->
		</aside><!-- page-aside end-->