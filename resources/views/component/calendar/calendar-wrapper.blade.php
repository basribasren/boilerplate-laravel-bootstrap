<div class="bdrs-3 ov-h bgc-white bd">
  	<!-- calender-header.blade.php -->
  	@include('component.calendar.calendar-event-header', 
	  	array(
	    	'id'=>'vxcyi978sdf987dd9', 
	    	'date'=>'01', 
	    	'day'=> 'Monday'
	  	)
	)
  	<div class="pos-r">
    	<button type="button" class="mT-nv-50 pos-a r-10 t-2 btn cur-p bdrs-50p p-0 w-3r h-3r btn-warning">
      		<i class="ti-plus"></i>
    	</button>
    	<!-- calender-event-list.blade.php -->
    	@include('component.calendar.calendar-event-list', 
          	array(
	            'id'=>'a987sad876a876xcv', 
	            'name'=>'All Day Event', 
	            'date'=> 'Nov 01', 
	            'event'=>'Website Development',
	            'color' => 'red'
          	)
        )
  	</div>
</div>