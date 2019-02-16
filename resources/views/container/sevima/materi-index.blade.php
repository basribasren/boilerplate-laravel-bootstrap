@extends ('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Daftar Materi</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
      	@if(count($payload) > 0)
	        @foreach($payload as $materi)
	            <div class="well">
	                <div class="row">
	                    <div class="col-md-2 col-sm-2">
	                        <img style="width:100%" src="/storage/cover_images">
	                    </div>
	                    <div class="col-md-8 col-sm-8">
	                        <h3><a href="/sevima/materi/{{$materi->id}}">{{$materi->title}}</a></h3>
	                        <small>Written on {{$materi->created_at}} by</small>
	                        <p>
	                        	{{$materi->description}}
	                        </p>
	                        <div class="peers mR-15">
						      <div class="peer">
						        <a href="/sevima/materi/{{$materi->id}}" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5">
						          <i class="icon-eye"></i>
						        </a>
						      </div>
						      <div class="peer">
						        <a href="" class="td-n c-green-500 cH-blue-500 fsz-md p-5">
						          <i class="icon-comment"></i>
						        </a>
						      </div>						      
						    </div>
	                    </div>
	                </div>
	            </div>
			    <hr>
	        @endforeach
	        {{$payload->links()}}
	    @else
	        <p>No posts found</p>
	    @endif
      </div>
    </div>
  </div>
</div>
@stop