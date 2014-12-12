<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
<div class="container"><h1>Here is your workout schedule  </h1>	</div> 
     
<div class="container content" ng-app="app" ng-controller='index' >
  			<div class="panel panel-default">
			  <div class="panel-heading"><h2>Workout schedule</h2> </div>
			  <div class="panel-body">
			    <p>If workout is Normal then enjoy workingouts at thegym , play sports or any other general workouts.</p>
			    <p>If workout is Legs then enjoy a run in the park, weighted squats or any other leg exercises. </p>
			    <p>If workout is Arms then enjoy lifting dumbells, pushups, pullups or any other arm exercises. </p>
			    <p>If workout is Chest then enjoy bench lifting, resistant band exercise or any other chest exercises.</p>
			  
			  <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Workout</th> 
                  <th>Time</th>
                  <th>Days</th>
                  
                </tr>
              </thead>
              <tbody>
               <tr ng-repeat='row in data'>
                  <td>{{row.workout}}</td>
                  <td>{{row.pace_time}}</td>
                  <td>{{row.days}}</td>
                  </tr>			
              </tbody>
            </table>
          </div></div>
		</div>

  			<div class="panel panel-default">
			  <div class="panel-heading"><h2>Workouts </h2> </div>
			  <div class="panel-body">
			    
			  
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
         
</div>
          
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
			
			var app = angular.module('app', [])
			
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
			function workout(data, field){
				var total = 0;
				
			
				$.if('workout'= ARMS)
				{
					workout = Normal
					workout = Arms
				return total;
				}
				$.if('workout'= legs)
				{ workout = Normal
					workout = legs
				
				return total;
				}
				$.if('workout'= chest)
				{ workout = Normal
					workout = Chest
				
				return total;
				}
			}
			function days (argument) {
			  var array=""
			  if (Sunday="yes") {
			  	array= array +"Sun"
			  	
			  };
			  if ('Monday'="yes") {
			  	array= array +"Mon"
			  };
			   if ('Tuesday'="yes") {
			  	array= array +"Sun"
			  };
			   if ('Wednesday'="yes") {
			  	array= array +"Sun"
			  };
			   if ('Thursday'="yes") {
			  	array= array +"Sun"
			  };
			   if ('Friday'="yes") {
			  	array= array +"Sun"
			  };
			   if ('Saturday'="yes") {
			  	array= array +"Sun"
			  };
			  return array;
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