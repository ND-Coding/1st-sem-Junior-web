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
	<br <div class="modal fade">
			  <div class="modal-dialog">
					<div class="modal-content">
			 			 <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title">Register</h4>
				  			</div>
							  <div class="modal-body">
							<p>  
							<form class="form-horizontal" action="?action=create" method="post" role="register">
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
							
							<label >Focus on this or these parts of my body during workouts</label><br>
							   <div class="input-group">
    							<span class="input-group-addon"> 
							    <input type="radio" name="Body" value="<?=$model['body'=='ARMS']?>">ARMS
							<input type="radio" name="Body" value="<?=$model['body'=='LEGS']?>">LEGS
							<input type="radio" name="Body" value="<?=$model['body'=='CHEST']?>">CHEST
					</span></div>
							<label >Set your workout days( lessdays= longer workouts)</label><br>
							 <div class="input-group">
						    	<span class="input-group-addon"> 
								     <input type="checkbox" name="days" id="sunday"value="<?=$model['day'=='sunday']?>" />Sunday
								     <input type="checkbox" name="days" id="monday" value="<?=$model['day'=='monday']?>"/>Monday
								     <input type="checkbox" name="days" id="tuesday" value="<?=$model['day'=='tuesday']?>"/>Tuesday
								     <input type="checkbox" name="days" id="wednesday" value="<?=$model['day'=='wednesday']?>"/>Wednesday
								     <input type="checkbox" name="days" id="thursday" value="<?=$model['day'=='thursday']?>"/>Thursday
								     <input type="checkbox" name="days" id="friday" value="<?=$model['day'=='friday']?>"/>Friday
								     <input type="checkbox" name="days" id="saturday" value="<?=$model['day'=='saturday']?>"/>>Saturday
						     		</span>
						     	</div><br>
							 
							 <label >Workoutpace</label> <br>
							 <div class="input-group">
    							<span class="input-group-addon"> 
							 <input type="radio" name="Workout" value="<?=$model['pace'=='fast']?>"/>FAST
							 <input type="radio" name="Workout" value="<?=$model['pace'=='normal']?>"/>Normal
							 <input type="radio" name="Workout" value="<?=$model['pace'=='slow']?>" />SLOW
							 </span>
							 </div>
							 
							 	<div class="input-group">
							 		<label>Cheat day food (something to reward you after an intense workout)</label >
							 	 <input type="text" name="cheatfood" value="<?=$model['cheatfood']?>"/><br>
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