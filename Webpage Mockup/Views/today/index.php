<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  
  
  


  	<div class="container content col-md" ng-app="app" ng-controller='index' >
  		
  	<h1>Today</h1>
  	
		  <div class="panel panel-default">
			  <div class="panel-heading"><h2>Recomended Daily Food Intake</h2> </div>
			  <div class="panel-body">
			     <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Food type</th> 
                  <th>Calories</th>
                  <th>Fat</th>
                  
                </tr>
              </thead>
              <tbody>
              	<tr >
              		<td>Breakfast</td>
              			<td>200</td>
                  		<td>30</td>
              		</tr>
              		<td>Lunch</td>
	              		<td>300</td>
	                  	<td>50</td>
                  </tr>
              		<td>Dinner</td>
	              		<td>300</td>
	                  	<td>30</td>
	                  </tr>
              		<td>Snack</td>
	              		<td>50</td>
	                  	<td>10</td>
              		 </tr>
               
                  
                	
              </tbody>
            </table>
          </div>
        <h2>Your cheat food day is {{cheatfood}} enjoy on the 1st of this month </h2>
			  </div>
			  
		</div>

		<div class="panel panel-default col-md">
			  <div class="panel-heading">
			    <h2>Food Intake</h2>
			  </div>
			  <div class="panel-body">
			     
						     <div class="col-md" ng-show="showQuickAdd">
					<input type="text" class="typeahead form-control" placeholder="Saved Foods" />
				</div>
				<a class="btn btn-success toggle-modal add" data-target="#myModal" href="?action=create">
		<i class="glyphicon glyphicon-plus"></i>
		Add
	</a>
				</div>
				<div class="row" >
					<div class="col-sm-8">
									
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" >
							  <div class="modal-dialog">
							    <div class="modal-content">
							    </div>
							  </div>
							</div>
							
							<!-- Alert -->
							<div class="alert alert-success initialy-hidden" id="myAlert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
								</button>
								<div></div>
							</div>
				
			    
			    
			  </div>
			  <div class="table-responsive col-md">
            <table class="table table-striped col-md">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Calories</th>
                  <th>Fat (g)</th>
                  <th>Carbs (g)</th>
                  <th>Fiber (g)</th>
                  <th>Time</th>
                  <th>Friend</th>
                </tr>
              </thead>
              <tbody>
               <tr ng-repeat='row in data'>
                  <td>{{row.food}}</td>
                  <td>{{row.food_type}}</td>
                  <td>{{row.calories}}</td>
                  <td>{{row.fat}}</td>
                  <td>{{row.carbs}}</td>
                  <td>{{row.fiber}}</td>
                  <td>{{row.Time}}</td>
                  <td>{{row.friend}}</td>
                  <td>
					<a ng-click="click(row)" title="Edit" class="btn btn-default btn-sm toggle-modal edit" data-target="#myModal" href="?action=edit&id={{row.id}}">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<a ng-click="click(row)" title="Delete" class="btn btn-default btn-sm toggle-modal delete" data-target="#myModal" href="?action=delete&id={{row.id}}">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
                  	
                  </td>
                </tr>			
              </tbody>
            </table>
          </div>> 
		</div>
  
  		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2>Music Recomendendations</h2>
			  </div>
			  <div class="panel-body">
			  	<p>Enjoy the music below to motivate you during your workouts.</p>
			    <table class="table table-striped">
              <thead>
                <tr>
                  <th>Rap</th> 
                  <th>RnB</th>
                  <th>Jazz</th>
                  <th>Techno</th>
                  <th>Classical</th>
                  
                </tr>
              </thead>
              <tbody>
               <tr>
                  <td><a href="https://www.youtube.com/watch?v=jltN3fLFmTQ">"i" by Kendrick Lamar</a>  </td>
                  <td><a href="https://www.youtube.com/watch?v=k4YRWT_Aldo">"7/11" by Beyonce</a></td>
                  <td><a href="https://www.youtube.com/watch?v=h4ZyuULy9zs">“Strange Fruit” by Billie Holiday</a></td>
                  <td><a href="https://www.youtube.com/watch?v=eWUC5Q0RCAA">"Seek Bromance" by Tim Berg</a> </td>
                  <td><a href="https://www.youtube.com/watch?v=nGdFHJXciAQ">"Four Seasons: Winter" by Vivaldi</a>  </td>
                  </tr>			
              </tbody>
            </table>
			    
			    
			  </div>
			    
		</div>
		</div>
    	
 
   	
    	
  
  
  
  
  <meta name="description" content="">
  <meta name="author" content="Nathan Dalling">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
</head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
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
				$scope.click = function(row){
					$scope.curRow = row;
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
			
			
			
			
			
			$(function(){
				$(".today").addClass("active");
								
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