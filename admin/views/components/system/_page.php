<?php 
//這邊先寫type
 $page_url = $url.'?type='.$_GET['type'].'&page=';
?>
			<div class="page-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div aria-live="polite" class="dataTables_info" id="data-table_info" role="status">
								<?php 
								echo '目前在第'.$list['page'].' 頁,共 '.$list['pages'].' 頁';
								?>
							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
								<ul class="pagination">
									
									<?php if($list['page']-1 != 0){ ?>
										<li class="page-item">
											<a class="page-link" href="<?php echo $page_url.($list['page']-1); ?>">上一頁</a>
										</li>
									<?php } ?>

									
									<?php 
										for( $i=1 ; $i<=$list['pages'] ; $i++ ) {

											echo '<li class="page-item">
													<a class="page-link" href="'.$page_url.$i.'">'.$i.'</a>
												  </li>';
										} 

										if($list['page'] != $list['pages']){?>
									<li class="page-item">
										<a class="page-link" href="<?php echo $page_url.($list['page']+1) ?>">下一頁</a>
									</li>
								<?php } ?>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>