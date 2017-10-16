<script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $('.timepicker').wickedpicker({minutesInterval:5,title: 'please select', now:"07:00"});
  } );
  </script>

<section class="section columns is-multiline">
	
	<div class="field column is-6">
  		<label class="label">Date</label>
  		<div class="control">
    		<input id="datepicker" readonly="readonly" class="input" type="text" placeholder="Text input">
  		</div>
	</div>

	<div class="field column is-6">
  		<label class="label">Location</label>
  		<div class="control">
    		<div class="select">
      			<select>
        			<option>Select dropdown</option>
        			<option>Starbucks</option>
        			<option>TimHortons</option>
      			</select>
    		</div>
    	</div>
    </div>

	<div class="field column is-6">
  		<label class="label">Hour Start</label>
  		<div class="control">
    		<input class="input timepicker" type="text" placeholder="Text input" readonly="readonly">
  		</div>
	</div>

	<div class="field column is-6">
  		<label class="label">Hour End</label>
  		<div class="control">
    		<input class="input timepicker" type="text" placeholder="Text input">
  		</div>
	</div>	

</section>