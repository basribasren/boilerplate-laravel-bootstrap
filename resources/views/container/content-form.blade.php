@extends ('layouts.dashboard')

@section('content')
<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item col-md-6">
    <!-- fomr-basic -->
    @include('component.form.form-basic')
  </div>
  <div class="masonry-item col-md-6">
    <!-- form-complex -->
    @include('component.form.form-complex')
  </div>
  <div class="masonry-item col-md-6">
    <!-- horizontal -->
    @include('component.form.form-horizontal')
  </div>
  <div class="masonry-item col-md-6">
    <!-- disabled -->
    @include('component.form.form-disabled')
  </div>
  <div class="masonry-item col-md-6">
    <!-- validation -->
    @include('component.form.form-validation')
  </div>
</div>
@stop