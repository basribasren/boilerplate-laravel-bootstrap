@extends ('layouts.dashboard')

@section('content')
<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item col-md-6">
    <!-- fomr-basic -->
    @include('component-dashboard.form.form-basic')
  </div>
  <div class="masonry-item col-md-6">
    <!-- form-complex -->
    @include('component-dashboard.form.form-complex')
  </div>
  <div class="masonry-item col-md-6">
    <!-- horizontal -->
    @include('component-dashboard.form.form-horizontal')
  </div>
  <div class="masonry-item col-md-6">
    <!-- disabled -->
    @include('component-dashboard.form.form-disabled')
  </div>
  <div class="masonry-item col-md-6">
    <!-- validation -->
    @include('component-dashboard.form.form-validation')
  </div>
</div>
@stop