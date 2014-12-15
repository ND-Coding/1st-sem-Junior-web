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
      	<form class="form-horizontal" action="?action=save" method="post" role="social">
							      		<div class="input-group">
								
										<label>Before enter the url </label>
										<input type= "text" class="form-control"name="before" id="before" value="<?=$model['before']?>"/>
										</div><br>
										<div class="input-group">
										<label>After(enter the url)</label> 
										<input type= "text" class="form-control"name="after" id="after" value="<?=$model['after']?>"/></div>
										
									
							</div>
												<div class="modal-footer">
														<input type="Cancel" class="btn btn-default" data-dismiss="modal"></button>
														<input type="submit" class="btn btn-primary"></button>
														  </div> </form>
      		</p>
      	</div></div></div></div>
      		

