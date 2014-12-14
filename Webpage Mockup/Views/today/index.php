<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  
  
  

  <body>
  	<div class="container content col-md" ng-app="app" ng-controller='index' >
  	<h1>Today</h1>
  	<div class="input-group">
    				<span class="input-group-addon"> 
							<input type="radio" ng-model="body"value="ARMS">ARMS
							<input type="radio" ng-model="body"value="LEGS">LEGS
							<input type="radio" ng-model="body" value="CHEST">CHEST
					</span></div>
	<div class="input-group">
    							<span class="input-group-addon"> 
							    <input type="radio" ng-model="height"value="ARMS">ARMS
							<input type="radio" ng-model="body"value="LEGS">LEGS
							<input type="radio" ng-model="body" value="CHEST">CHEST
					</span></div>				
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
              			<td>{{Calories/3}}</td>
                  		<td>{{Fat/3}}</td>
              		</tr>
              		<td>Lunch</td>
	              		<td>{{Calories/3}}</td>
	                  	<td>{{Fat/3}}</td>
                  </tr>
              		<td>Dinner</td>
	              		<td>{{Calories/3}}</td>
	                  	<td>{{Fat/3}}</td>
	                  </tr>
              		<td>Snack</td>
	              		<td>{Calories/3}}</td>
	                  	<td>{{Fat/3}}</td>
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
                  <th></th>
                </tr>
              </thead>
              <tbody>
               <tr ng-repeat='row in data'>
                  <td>{{row.Name}}</td>
                  <td>{{row.T_Name}}</td>
                  <td>{{row.Calories}}</td>
                  <td>{{row.Fat}}</td>
                  <td>{{row.Carbs}}</td>
                  <td>{{row.Fiber}}</td>
                  <td>{{row.Time}}</td>
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
               <tr ng-repeat='row in data'>
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