@extends ('layouts.dashboard')

@section('content')
<div class="full-container">
  	<div class="email-app">
  		<!-- email-menu.blade.php -->
    	@include('component.email.email-menu')

  		<!-- email-compose.blade.php -->
  		@include('component.email.email-compose')  
  	</div>
</div>
@stop