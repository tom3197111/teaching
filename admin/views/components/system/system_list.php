			
			<div class="page-content">
				<div class="container-fluid">
					<div class="row">
						<div class="bg-white table-responsive rounded shadow-sm mb-30">
							<div class="col-sm-12">
								<table cellspacing="0" class="table mb-0 table-striped" width="100%">
									<button class="btn btn-primary ">新增資料</button>
									<thead>
										<tr>
											<th>順序</th>
											<th>標題</th>
											<th>狀態</th>
											<th>删除</th>
										</tr>
									</thead>
									<tbody>
										
											<?php foreach ($list['Data'] as $key => $value) { ?>
										<tr>
											<td><?php echo $value['sort']; ?></td>
											<td><a class="text-underline" href="<?php echo $url.'?type=show&id='.$value['id'] ?>"><?php echo $value['title']; ?></a></td>
											<td><?php echo $value['state'] == 1 ? '顯示':'隱藏'; ?></td>
											<td>
												<a class=" avatar32 text-danger rounded-circle no-padding" href="<?php echo $_SERVER['PHP_SELF'].'?type=del&id='.$value['id'] ?>"><i class="fa fa-times"></i></a>
											</td>
										</tr>
											<?php } ?>
										
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>
			</div>
<?php 
include '_page.php';
?>