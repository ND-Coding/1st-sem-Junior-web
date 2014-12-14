<!--<form role="signinform">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Username</label>
						    <input type="text" class="form-control" id="id" value="<?=$model['username']?>" placeholder="Enter Username">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="id" value="<?=$model['password']?>"placeholder="Password">
						  </div>
				       </div>
  								<button type="submit" class="btn btn-default">Submit</button>
				</form>-->
				
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
							<span style="color:red" ng-show="myForm.email.$dirty">
							  <span ng-show="myForm.username.$error.required">username is required.</span>
							  
							  </span>
							 </div>
							<div class="input-group">
							<label for="password">Password</label>
							<input type= "text"class="form-control" id="password"name="password"value="<?=$model['password']?>"/>
							<span style="color:red" ng-show="myForm.password.$dirty">
							  <span ng-show="myForm.password.$error.required">username is required.</span>
							  
							  </span>
							</div>
							<div class="input-group"> 
							<label for="usernmame">Full Name:</label>
							<input type= "text" class="form-control"id="fullname"name="fullname"value="<?=$model['fullname']?>"/> 
							<span style="color:red" ng-show="myForm.fullname.$dirty">
							  <span ng-show="myForm.fullname.$error.required">username is required.</span>
							  
							  </span>
							</div>
							<div class="input-group">
							<label for="usernmame">Email </label>
							<input type="text" class="form-control" id="email"name="email"value="<?=$model['email']?>"/>
							<span style="color:red" ng-show="myForm.email.$dirty">
							  <span ng-show="myForm.email.$error.required">username is required.</span>
							  
							  </span>
							</div>
							<div class="input-group">
							<label for="usernmame">Phone Number</label>
							 <input type="text" class="form-control" id="phonenum"name="phonenum"value="<?=$model['phonenum']?>"/>
							 <span style="color:red" ng-show="myForm.phonenum.$dirty">
							  <span ng-show="myForm.phonenum.$error.required">username is required.</span>
							  
							  </span>
							 </div>
							 <div class="input-group">
							<label for="usernmame">Weight</label>
							 <input type="text" class="form-control" id="weight"name="weight"value="<?=$model['weight']?>"/>
							<span style="color:red" ng-show="myForm.weight.$dirty">
							  <span ng-show="myForm.weight.$error.required">username is required.</span>
							  
							  </span>
							</div>
							
							
							
							 
							 	<div class="input-group">
							 		<label>Cheat day food (something to reward you after an intense workout)</label >
							 	 <input type="text" name="cheatfood" id="cheatfood" value="<?=$model['cheatfood']?>"/><br>
							 	 <span style="color:red" ng-show="myForm.cheatfood.$dirty">
							  <span ng-show="myForm.cheatfood.$error.required">cheatfood is required.</span>
							  
							  </span>
							 	</div>
							 </div>
							  <div class="modal-footer">
							<input type="Cancel" class="btn btn-default" data-dismiss="modal"></button>
							<input type="submit" ng-disabled="myForm.user.$dirty || myForm.email.$dirty "class="btn btn-primary"></button>
							  </div>
							</form>      	
					        	
					        	
					        	
					        	
					        	</p>
					      
					    </div>
					  </div>
					</div>    	
    	
    	</div>
