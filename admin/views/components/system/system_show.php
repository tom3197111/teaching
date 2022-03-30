			<div class="page-content">
				<div class="container-fluid">
					<div class="row">
						 <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
							<div class="col-sm-12">
							   <div class="">
                                    <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                        <div class="flex d-flex flex-column">
                                            <h3>新增系統功能</h3> 
                                            <span class="portlet-subtitle"></span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?type=upda' ?>">
                                            <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
                                            <div class="form-group row">
                                                <label for="nm3" class="col-sm-2 col-form-label">順序  (請填數字，如：1)</label>
                                                <div class="col-sm-10 ">
                                                    <input value="<?php echo $data[0]['sort'] ?>" name="sort" type="text" class="col-sm-2 form-control" id="nm3" placeholder="">
													  
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">標題</label>
                                                <div class="col-sm-10">
                                                    <input value="<?php echo $data[0]['title'] ?>"  name="title" type="text" class="form-control" id="inputEmail3" placeholder="">
                                                </div>
                                            </div>

                                          
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <label class="col-form-label col-sm-2 pt-0">狀態</label>
                                                    <div class="col-sm-10 ">
                                                 <div class="customUi-radio radioUi-primary  ">
                                                    <input id="gr1" type="radio"  name="state" value="1" <?php echo $data[0]['state'] ==1 ?'checked':''; ?>>
                                                    <label for="gr1">
                                                        <span class="label-radio"></span>
                                                        <span class="label-helper">顯示</span>
                                                    </label>
                                                </div>
                                                <div class="customUi-radio radioUi-primary  ">
                                                    <input id="gr2" type="radio" name="state" value="0" <?php echo $data[0]['state'] ==0 ?'checked':''; ?>>
                                                    <label for="gr2">
                                                        <span class="label-radio"></span>
                                                        <span class="label-helper">隱藏</span>
                                                    </label>
                                                </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                             
                                           <button type="submit" class="btn btn-primary">確認送出</button>
                                        </form>
                                    </div>
                                </div>
					
							
							</div>
						</div>
					</div>
				</div>
			</div>