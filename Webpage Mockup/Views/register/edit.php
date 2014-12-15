				
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
							<form class="form-horizontal" action="?action=save" method="post" role="register">
								<div class="input-group">
									
							<label>Username</label>
							<input type= "text" class="form-control"name="username" id="username" value="<?=$model['username']?>"/>
							
							  
							  
							
							 </div>
							<div class="input-group">
							<label for="password">Password</label>
							<input type= "text"class="form-control" id="password"name="password"value="<?=$model['password']?>"/>
							
							 
							  
							 
							</div>
							<div class="input-group"> 
							<label for="usernmame">Full Name:</label>
							<input type= "text" class="form-control"id="fullname"name="fullname"value="<?=$model['fullname']?>"/> 
							
							  
							  
							</div>
							<div class="input-group">
							<label for="usernmame">Email </label>
							<input type="text" class="form-control" id="email"name="email"value="<?=$model['email']?>"/>
							
							  
							  
							  
							</div>
							<div class="input-group">
							<label for="usernmame">Phone Number</label>
							 <input type="text" class="form-control" id="phonenum"name="phonenum"value="<?=$model['phonenum']?>"/>
							
							  
							  
							  
							 </div>
							 <div class="input-group">
							<label for="usernmame">Weight</label>
							 <input type="text" class="form-control" id="weight"name="weight"value="<?=$model['weight']?>"/>
							
							  
							  
							  
							</div>
							
							
							
							 
							 	<div class="input-group">
							 		<label>Cheat day food (something to reward you after an intense workout)</label >
							 	 <input type="text" name="cheatfood" id="cheatfood" value="<?=$model['cheatfood']?>"/><br>
							 	 
							  
							  
							  
							 	</div>
							 </div>
							  <div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" /></button>
							<input type="submit" class="btn btn-primary"></button>
							  </div>
							</form>      	
					        	
					        	
					        	
					        	
					        	</p>
					      
					    </div>
					  </div>
					</div>    	
    	
    	</div>