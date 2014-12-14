<head> 

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	
	</head>
	<body>
		<style> 
			
			</style>
	
	<div class="jumbotron">
			  <h1>Welcome to the CasualFit APP</h1>
						  <p>Hello, if you have a CasualFit Account please login at the top of the screen
						  	
						  	</p>
					  <p>Here at CasualFit, we help you become stronger with the pace you would like to go.
					  		<h2>Features :</h2>
					  		 <h3>Workout Schedule</h3>
						  		 <p>- We set up workout schedule for you</p>
						  		 <p>- Track your workouts </p>
						  		 <p>- Notifies the you if you didnt meet the hours of your workout schedule</p>
					  		 <h3>Today's agenda</h3>
					  		 	<p>- We sets up a food diet </p>
					  		 	<p>- Track your food intake</p>
					  		 	<p>- Recomends music for your favorite genre</p>
					  		 <h3>Social Posting</h3>
					  		 	<p>- Submits your photos on our app to show off your before and after pictures </p>
					  </p>
			  <h2>If you do not have an Account , please register here..</h2> 
			  
			  <p><a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" href="?action=create">
									<i class="glyphicon glyphicon-plus"></i>
									Register
								</a></p>
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
					$scope.calories = function(){ return sum(data, 'Calories'); };
					$scope.fat = function(){ return sum(data, 'Fat');  };
					$scope.fiber = function(){ return sum(data, 'Fiber');  };
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
			$(function(){
				$(".register").addClass("active");
								
				$mContent = $("#myModal .modal-content");
				var defaultContent = $mContent.html();
				
				
								
				$('#myModal').on('hidden.bs.modal', function (e) {
					$mContent.html(defaultContent);
				    
				})
				
				$('.alert .close').on('click',function(e){
					$(this).closest('.alert').slideUp();
				});
				
			)};
        	</script>
        	
        	
        </p>
      
	
	</body>
  
  
  <meta name="description" content="">
  <meta name="author" content="Nathan Dalling">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
</head>