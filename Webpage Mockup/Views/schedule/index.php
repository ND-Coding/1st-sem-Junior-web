<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>pg1 register</title>
  <li class="dropdown">
        <a id="drop4" role="button" data-toggle="dropdown" href="#">menu <span class="caret"></span></a>
        <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Home</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Today's menu </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">schedule</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">social</a></li>
        </ul>
      </li>
      
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
				
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Workout</th>
                  <th>time left</th>
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
          </div>
  <meta name="description" content="">
  <meta name="author" content="Nathan Dalling">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
</head>