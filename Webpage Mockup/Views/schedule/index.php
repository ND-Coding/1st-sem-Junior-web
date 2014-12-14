<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body
<div class="container"><h1>Here is your workout schedule  </h1>	</div> 
     
<div class="container content" ng-app="app" ng-controller='schedule' >
  			<div class="panel panel-default">
			  <div class="panel-heading"><h2>Workout schedule</h2> </div>
			  <div class="panel-body">
			  	
			  	<label >Focus on this or these parts of my body during workouts</label><br>
							   <div class="input-group">
    							<span class="input-group-addon"> 
							    <input type="radio"name="body" id="body"ng-model="body"value="ARMS">ARMS
							<input type="radio" id="body" name="body" ng-model="body"value="LEGS">LEGS
							<input type="radio" id="body" name="body" ng-model="body" value="CHEST">CHEST
					</span></div>
					<label >Set your workout days( lessdays= longer workouts)</label><br>
							 <div class="input-group">
						    	<span class="input-group-addon"> 
								     <input type="radio" id="day" ng-model="Sun" value="yes" />Sunday
								     <input type="radio" id="day" ng-model="Mon" value="yes "/>Monday
								     <input type="radio" id="day" ng-model="Tues"value="yes"/>Tuesday
								     <input type="radio" id="day" ng-model="Wed" value="yes"/>Wednesday
								     <input type="radio" id="day" ng-model="Thu" value="yes"/>Thursday
								     <input type="radio" id="day" ng-model="Fri" value="yes"/>Friday
								     <input type="radio" id="day" ng-model="Sat" value="yes"/>Saturday
						     		</span>
						     	</div><br>
							 
							 <label >Workoutpace</label> <br>
							 <div class="input-group">
    							<span class="input-group-addon"> 
							 <input type="radio" name="pace" id="pace" value="14"/>FAST
							 <input type="radio" name="pace" id="pace" value="7"/>Normal
							 <input type="radio" name="pace" id="pace" value="5" />SLOW
							 </span>
							 </div>
			    
			  
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
                  <td>{{pace/2}}</td>
                  <td>{{Sun}}</td>
                  <td>{{Mon}}</td>
                  <td>{{Tues}}</td>
                  <td>{{Wed}}</td>
                  <td>{{Thu}}</td>
                  <td>{{Fri}}</td>
                  <td>{{Sat}}</td>
                  
                  </tr>	
                  <tr>
                  <td>{{body}}</td>
                  <td>{{pace/2}}</td>
                  <td>{{Sun}}</td>
                  <td>{{Mon}}</td>
                  <td>{{Tues}}</td>
                  <td>{{Wed}}</td>
                  <td>{{Thu}}</td>
                  <td>{{Fri}}</td>
                  <td>{{Sat}}</td>
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
</div><div class="container content" ng-app="app" ng-controller='schedule' >
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
                  
                </tr>
              </thead>
              <tbody>
               <tr ng-repeat='row in data'>
                  <td>{{row.workout}}</td>
                  <td>{{row.pace_time}}</td>
                  <td>{{row.days}}</td>
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
          
          </body>
  <meta name="description" content="">
  <meta name="author" content="Nathan Dalling">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
</head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script type="text/javascript" src="http://builds.handlebarsjs.com.s3.amazonaws.com/handlebars-v2.0.0.js"></script>
		<script type="text/javascript">
			var $mContent;
			var app = angular.module('app', [])
			function schedule($scope) {
				    {$scope.body =body };
				    {$scope.pace = pace};
				    {$scope.Sun =Sun};
				    {$scope.Mon = Mon};
				    {$scope.Tues = Tues};
				    {$scope.Wed = Wed};
				    {$scope.Thu = Thu};
				    {$scope.Fri = Fri};
				    {$scope.Sat = Sat};
				   				}				
			.controller('index', function($scope, $http){
				$http.get('?format=json')
				.success(function(data){
					$scope.data = data;
					$scope.workout = function(){ return workout(data, 'workout'); };
					$scope.pace_time = function(){ return hours(data, 'pace');  };
					$scope.days = function(){ return days(data, '');  };
				});
					$scope.fiber = sum(data, 'Fiber');
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
			function hours (data,field) {
				var hours = 0 ;
				$.if('pace'== 'Normal')
				{
					hours =12;
			 }
			 	$.if('pace'== 'FAST')
				{
					hours = 15;
			 }
			 	$.if('pace' == 'SLOW')
				{
					hours =7;
			 }
			 	if()
			 	{
			 		
			 	}
			 
			}			
			
			
			
			$(function(){
				$(".schedule").addClass("active");
								
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