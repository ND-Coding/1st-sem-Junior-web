<form class="form-horizontal" action="?action=save" method="post" role="schedule">
							    <div class="modal-body">
    <div role="tabpanel" class="tab-pane fadein" id="Register">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	<br <div class="modal fade">
		
			  <div class="modal-dialog">
					<div class="modal-content">
			 			 <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title">Register</h4>
				  			</div>
							  <div class="modal-body">
							  	<? if(!empty($errors)): ?>
							  			<div class="alert alert-danger">
							  				<ul>
							  				<? foreach ($errors as $key => $value): ?>
												  <li><?=$key?> <?= $value ?></li>
											<? endforeach; ?>
											</ul>
							  			</div>
							  		<? endif; ?>
							<p>  
							  
							    	
							  	
							  	  <h1> Enter Workout </h1>
							  	  <label>friend</label>
							<input type= "text" class="form-control"name="friend" id="friend" value="<?=$model['friend']?>"/>
							
							  
							  
							
							 </div>
									  <div class="form-group">
									    <label for="selType_id" class="col-sm-2 control-label">Type </label>
									    <p>(arms legs,chest or normal)</p>
									    <div class="col-sm-10">
									     <input type="text" name="type" id="type" value="<?=$model['type']?>"/><br>
							   			 
									    </div>
									  </div>
									  
									  <div class="form-group">
									    <label for="txtCarbs" class="col-sm-2 control-label">Time Spent in mins </label>
									    <div class="col-sm-10">
									      <input type="text" name="hours" id="hours" value="<?=$model['hours']?>"/><br>
							   			 
							   			 
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="txtFiber" class="col-sm-2 control-label">DAY</label>
									    <p>sun-mon</p>
									    <div class="col-sm-10">
									      	<input type="text" name="day" id="day"value="<?=$model['day']?>" /><br>
							     			
							    				
									    </div>
									  </div>
									  
							
							  </div>
							  <div class="modal-footer">
							    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
							    <input type="submit" name="submit" class="btn btn-primary" value="Save changes" />
							  </div>
							</form>
							
</p></div></div></div></div></div>