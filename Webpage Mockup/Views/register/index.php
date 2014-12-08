<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<body>
	<style>

</style>
	<h1><div class="container">Register for CasualFit APP</div> 
      </h1>
      
      
      <!-- home -->
      
      
      
      
    </header>
    <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#Register" aria-controls="Register" role="tab" data-toggle="tab">Register</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
  	
  		<form role="form">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Username</label>
						    <input type="text" class="form-control" id="username" placeholder="Enter Username">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="password" placeholder="Password">
						  </div>
				       </div>
  								<button type="submit" class="btn btn-default">Submit</button>
				</form>
  	
  	</div>
  
  <div role="tabpanel" class="tab-pane fade" id="Register">.
  	
  			<div role="tabpanel" class="tab-pane fadein" id="Register">...
    	<br <div class="modal fade">
				  <div class="modal-dialog">
						<div class="modal-content">
				 			 <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title">Register</h4>
				  			</div>
							  <div class="modal-body">
							<p>  
							<form class="form-horizontal" action="?action=create" method="action">
							Username: <input type= "text" name="username" value="<?=$model['username']?>"/> <br>
							Password: <input type= "text" name="password"value="<?=$model['password']?>"/> <br>
							    	
							Full Name: <input type= "text" name="fullname"value="<?=$model['fullname']?>"/> <br>
							Email <input type="text" name="email"value="<?=$model['email']?>"/><br>
							Phone Number <input type="text" name="phonenum"value="<?=$model['phonenumber']?>"/><br>
							Weight <input type="text" name="weight"value="<?=$model['weight']?>"/><br>
							
							
							
							Focus on this or these parts of my body during workouts<br>
							   
							    <input type="radio" name="Body" value="<?=$model['body'=='ARMS']?>">ARMS<br>
							<input type="radio" name="Body" value="<?=$model['body'=='LEGS']?>">LEGS<br>
							<input type="radio" name="Body" value="<?=$model['body'=='CHEST']?>">CHEST<br>
							
							Set your workout days( lessdays= longer workouts)<br>
							 <input type="checkbox" name="days" id="sunday"value="<?=$model['day'=='sunday']?>" />Sunday<br>
							 <input type="checkbox" name="days" id="monday" value="<?=$model['day'=='monday']?>"/>Monday<br>
							 <input type="checkbox" name="days" id="tuesday" value="<?=$model['day'=='tuesday']?>"/>Tuesday<br>
							 <input type="checkbox" name="days" id="wednesday" value="<?=$model['day'=='wednesday']?>"/>Wednesday<br>
							 <input type="checkbox" name="days" id="thursday" value="<?=$model['day'=='thursday']?>"/>Thursday<br>
							 <input type="checkbox" name="days" id="friday" value="<?=$model['day'=='friday']?>"/>Friday<br>
							 <input type="checkbox" name="days" id="saturday" value="<?=$model['day'=='saturday']?>"/>>Saturday<br>
							 
							 Workoutpace <br>
							 <input type="radio" name="Workout" value="<?=$model['pace'=='fast']?>"/>FAST<br>
							 <input type="radio" name="Workout" value="<?=$model['pace'=='normal']?>"/>Normal<br>
							 <input type="radio" name="Workout" value="<?=$model['pace'=='slow']?>" />SLOW<br>
							 Cheat day food (something to reward you after an intense workout) <input type="text" name="cheatfood" id="cheatfood" value="<?=$model['cheatfood']?>"/><br>
							 </div>
							  <div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<input type="submit" class="btn btn-primary">Finish</button>
							  </div>
							</form>      	
					        	
					        	
					        	
					        	
					        	</p>
					      
					    </div>
					  </div>
					</div>/>
    	
    	
    	</div>
  	
  	.jnjn.</div>
  
</div>
   
    
    
    <!---
	<div class="bs-example bs-example-tabs">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#register" role="tab" data-toggle="tab">Register</a>
		      
      
      </li>
      <li class=""><a href="#signin" role="tab" data-toggle="tab">Signin</a>
				   
				   
		</li>
<div class="alert alert-warning fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      
 </div>
      </div>
    />-->
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="register">
        <p>
        	
        	
        	<script type="text/javascript">
        		$(function() {
        			$('register').addClass('active');
        			
        			$('.toggle-model').on('click', function  (event) {
					  event.preventDefault();
					  $("#myModal .modal-content").load(this.href);
					  $("#myModal")
					})
				  
				}
				$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
					  e.target // newly activated tab
					  e.relatedTarget // previous active tab
					})
				$('#myTab a').click(function (e) {
					  e.preventDefault()
					  $(this).tab('show')
					})
        	</script>
        	
        	
        </p>
      </div>
      
      
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