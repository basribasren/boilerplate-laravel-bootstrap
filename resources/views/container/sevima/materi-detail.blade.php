@extends ('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Detail Materi</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
      	    <a href="/sevima/materi/" class="btn btn-default">Go Back</a>
      	    <div class="row">
	            <div class="col-md-2 col-sm-2">
	                <img style="width:100%" src="/storage/cover_images">
	            </div>
	            <div class="col-md-10 col-sm-10">
				    <h1>{{$payload->title}}</h1>
	            </div>
	        </div>
		    <br><br>
		    <div>
		        {!!$payload->description!!}
		    </div>
		    <hr>
		    <small>Long duration {{$payload->duration}} and Written on {{$payload->created_at}} by</small>
		    <hr>
		    
      </div>
    </div>
  </div>
</div>
@stop