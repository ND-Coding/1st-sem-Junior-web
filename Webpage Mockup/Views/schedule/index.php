<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>

<div class="container"><h1>Here is your workout schedule  </h1>	</div> 
     
<div  >
  			<div class="panel panel-default">
			  <div class="panel-heading"><h2>Workout schedule</h2> </div>
			  <div class="panel-body">
			  	
			  	<label >Focus on this or these parts of my body during workouts</label><br>
							   
					<label >Set your workout days( lessdays= longer workouts)</label><br>
						
							 
							 <label >Workout hours</label> <br>
							 
			    
			  
			  <div class="table-responsive">
            <table class="table table-striped">
              <thead>
              	
                <tr>
                  <th>Workout</th> 
                  <th>Time</th>
                  <th>Sun</th>
                  <th>Mon</th>
                  <th>Tues</th>
                  <th>Wed</th>
                  <th>Thu</th>
                  <th>Fri</th>
                  <th>Sat<th>
                </tr>
              </thead>
              <tbody>
               <tr>
                  <td>nomal</td>
					                  <td><select>
					  <option value="1hour">1hour</option>
					  <option value="1hour">2hour</option>
					  <option value="1hour">3hour</option>
					  <option value="1hour">4hour</option>
					  <option value="1hour">5hour</option>
					  <option value="1hour">6hour</option>
					  <option value="1hour">7hour</option>
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  
					                  </tr>	
					                  <tr>
					                  <td><select>
					  <option value="1hour">arms</option>
					  <option value="1hour">legs</option>
					  <option value="1hour">chest</option>
					  <option value="1hour">normal</option>
					  
					</select></td>
					                  <td><select>
					  <option value="1hour">1hour</option>
					  <option value="1hour">2hour</option>
					  <option value="1hour">3hour</option>
					  <option value="1hour">4hour</option>
					  <option value="1hour">5hour</option>
					  <option value="1hour">6hour</option>
					  <option value="1hour">7hour</option>
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  <td><select>
					  <option value="yes">yes</option>
					  <option value="no">no</option>
					  
					</select></td>
					                  </tr>					
              </tbody>
            </table>
          </div>
          <p>If workout is Normal then enjoy workingouts at thegym , play sports or any other general workouts.</p>
			    <p>If workout is Legs then enjoy a run in the park, weighted squats or any other leg exercises. </p>
			    <p>If workout is Arms then enjoy lifting dumbells, pushups, pullups or any other arm exercises. </p>
			    <p>If workout is Chest then enjoy bench lifting, resistant band exercise or any other chest exercises.</p>
          
          </div>
		</div>
</div><div class="container content" ng-app="app" ng-controller='index' >
  			<div class="panel panel-default">
			  <div class="panel-heading"><h2>Workouts </h2> </div>
			  <div class="panel-body">
			    <a class="btn btn-success toggle-modal add" data-target="#myModal" href="?action=create">
		<i class="glyphicon glyphicon-plus"></i>
		Add
	</a>
			  
			  <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Workout</th> 
                  <th>Time left</th>
                  <th>Days</th>
                  <th>friend</th>
                </tr>
              </thead>
              <tbody>
               <tr ng-repeat='row in data'>
                  <td>{{row.workout}}</td>
                  <td>{{row.pace_time}}</td>
                  <td>{{row.days}}</td>
                  <td>{{row.friends}}</td>
                  <td>
					<a title="Edit" class="btn btn-default btn-sm toggle-modal edit" data-target="#myModal" href="?action=edit&id={{row.id}}">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<a title="Delete" class="btn btn-default btn-sm toggle-modal delete" data-target="#myModal" href="?action=delete&id={{row.id}}">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
                  	
                  </td>
                </tr>			
              </tbody>
            </table>
          </div></div>
		</div>  			
         
</div></div>
          
          
  <meta name="description" content="">
  <meta name="author" content="Nathan Dalling">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
</head>
<<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script type="text/javascript" src="http://builds.handlebarsjs.com.s3.amazonaws.com/handlebars-v2.0.0.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
		<script type="text/javascript">
			$('.typeahead').typeahead({ },
			{
			  displayKey: 'Name',
			  source: function(q, callback){
			  	$.getJSON('?action=search&format=json&q=' + q, function(data){
			  		callback(data);
			  	});
			  	
			  }
			});	
		</script>
		
		
		<script type="text/javascript">
			var $mContent;
			var app = angular.module('app', [])
			
			.controller('index', function($scope, $http){
				$scope.showQuickAdd = false;
				$scope.curRow = null;
				
				$http.get('?format=json')
				.success(function(data){
					$scope.click = function(row){
					$scope.curRow = row;
					$scope.workout ='workout';
				}
				}
					$http.get('?format=json&userId=')
				.success(function(data){
					$scope.data = data;
					
				
				});
				$('body').on('click', ".toggle-modal", function(event){
					event.preventDefault();
					var $btn = $(this);
					MyFormDialog(this.href, function (data) {
						$("#myAlert").show().find('div').html(JSON.stringify(data));
						
						if($btn.hasClass('edit')){
							$scope.data[$scope.data.indexOf($scope.curRow)] = data;
						}
						if($btn.hasClass('add')){
							$scope.data.push(data);							
						}
						if($btn.hasClass('delete')){
							$scope.data.splice($scope.data.indexOf($scope.curRow), 1);					
						}
						$scope.$apply();
					})								
				})
			});
			
			function MyFormDialog (url, then /*callback when the form is submitted*/) {
			  	$("#myModal").modal("show");
			  	$.get(url + "&format=plain", function(data){
					$mContent.html(data);
					$mContent.find('form')
					.on('submit', function(e){
						e.preventDefault();
						$("#myModal").modal("hide");
						
						$.post(this.action + '&format=json', $(this).serialize(), function(data){
							then(data);
						}, 'json');
					});
				});
			}	
			var $socialScope = null;
			app.controller('social', function($scope){
					$socialScope = $scope;
					$socialScope.$apply();
			});
			
			
			
			
			$(function(){
				$(".index").addClass("active");
								
				$mContent = $("#myModal .modal-content");
				var defaultContent = $mContent.html();
				
				
								
				$('#myModal').on('hidden.bs.modal', function (e) {
					$mContent.html(defaultContent);
				    
				})
				
				$('.alert .close').on('click',function(e){
					$(this).closest('.alert').slideUp();
				});

				
			});
			
			
			
		</script>
		
		
		<script type="text/javascript">
			$('.typeahead').typeahead({ },
			{
			  displayKey: 'Name',
			  source: function(q, callback){
			  	$.getJSON('?action=search&format=json&q=' + q, function(data){
			  		callback(data);
			  	});
			  	
			  }
			});	
		</script>
		