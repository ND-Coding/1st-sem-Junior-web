
    
   <form>
    <div class="modal-body">
  	
  	  <h1> Enter Workout </h1>
		  <div class="form-group">
		    <label for="selType_id" class="col-sm-2 control-label">Type</label>
		    <div class="col-sm-10">
		     <input type="radio" name="Body" value="<?=$model['body'=='ARMS']?>">ARMS<br>
   			 <input type="radio" name="Body" value="<?=$model['body'=='LEGS']?>">LEGS<br>
    		<input type="radio" name="Body" value="<?=$model['body'=='CHEST']?>">CHEST<br>
    		<input type="radio" name="Body" value="<?=$model['body'=='NORMAL']?>">Normal<br>
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="txtCarbs" class="col-sm-2 control-label">Time Spent</label>
		    <div class="col-sm-10">
		       <input type="radio" name="time" value="<?=$model['time_left'=='0']?>">none<br>
   			 <input type="radio" name="time" value="<?=$model['time_left'=='30']?>">30min<br>
   			 <input type="radio" name="time" value="<?=$model['time_left'=='60']?>">1 hour<br>
   			 <input type="radio" name="time" value="<?=$model['time_left'=='90']?>">1 hour and 30min<br>
   			 <input type="radio" name="time" value="<?=$model['time_left'=='120']?>">2 hours<br>
   			 
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="txtFiber" class="col-sm-2 control-label">DAY</label>
		    <div class="col-sm-10">
		      	<input type="radio" name="sunday" id="sunday"value="<?=$model['day'=='sunday']?>" />Sunday<br>
     			<input type="radio" name="monday" id="monday" value="<?=$model['day'=='monday']?>"/>Monday<br>
     			<input type="radio" name="tuesday" id="tuesday" value="<?=$model['day'=='tuesday']?>"/>Tuesday<br>
     			<input type="radio" name="wednesday" id="wednesday" value="<?=$model['day'=='wednesday']?>"/>Wednesday<br>
     			<input type="radio" name="thursday" id="thursday" value="<?=$model['day'=='thursday']?>"/>Thursday<br>
     			<input type="radio" name="friday" id="friday" value="<?=$model['day'=='friday']?>"/>Friday<br>
     			<input type="radio" name="saturday" id="saturday" value="<?=$model['day'=='saturday']?>"/>>Saturday<br>
    				
		    </div>
		  </div>
		  

  </div>
  <div class="modal-footer">
    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
    <input type="submit" name="submit" class="btn btn-primary" value="Save changes" />
  </div>
</form>