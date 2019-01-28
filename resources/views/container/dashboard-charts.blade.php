@extends ('layouts.dashboard')

@section('content')
<div class="row gap-20 masonry pos-r">
  	<div class="masonry-sizer col-md-6 pos-a"></div>
  	<!-- import all chart component to here -->
  	<div class="masonry-item col-md-6">
  		@include('component-dashboard.charts.chart-line')
	</div>
	<div class="masonry-item col-md-6">
  		@include('component-dashboard.charts.chart-area')
	</div>
	<div class="masonry-item col-md-6">
  		@include('component-dashboard.charts.chart-scatter')
	</div>
	<div class="masonry-item col-md-6">
  		@include('component-dashboard.charts.chart-bar')
	</div>
	<div class="masonry-item col-md-6">
  		@include('component-dashboard.charts.chart-pie')
	</div>
</div>
@stop