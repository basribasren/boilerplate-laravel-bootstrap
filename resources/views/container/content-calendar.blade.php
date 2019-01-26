@extends ('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <!-- calendar-wrapper.blade.php -->
        @include('component.calendar.calendar-wrapper')
    </div>
    <div class="col-md-8">
      <div id='full-calendar'></div>
    </div>
  </div>
  <!-- calender-event-add.blade.php -->
  @include('component.calendar.calendar-add-event')
  
</div>
@stop