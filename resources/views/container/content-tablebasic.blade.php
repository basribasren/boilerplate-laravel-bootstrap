@extends ('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Basic Tables</h4>
  <!-- 'headercolor'=>'', 'thead-dark'  -->
  <!-- Simple Table -->
  <div class="row">
    <div class="col-md-6">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
      @include('component.card.card-header', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'title'=>'Simple Table', 
          'description'=> 'All table styles are inherited in Bootstrap 4, meaning any nested tables will be styled in the same manner as the parent.',
          'class' => 'grey'
        )
      )
      @include('component.table.table-wrapper', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'class'=>'',
          'cellspacing' => 0,
          'width' => '100%',
          'headercolor' => ''
        )
      )
      </div>
    </div>
    <!-- Table head options -->
    <div class="col-md-6">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
      @include('component.card.card-header', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'title'=>'Table Head Option', 
          'description'=> 'All table styles are inherited in Bootstrap 4, meaning any nested tables will be styled in the same manner as the parent.',
          'class' => 'grey'
        )
      )
      @include('component.table.table-wrapper', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'class'=>'',
          'cellspacing' => 0,
          'width' => '100%',
          'headercolor' => 'thead-dark'
        )
      )
      </div>
    </div>
  </div>
  <!-- Striped rows -->
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
      @include('component.card.card-header', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'title'=>'Striped rows Table', 
          'description'=> 'All table styles are inherited in Bootstrap 4, meaning any nested tables will be styled in the same manner as the parent.',
          'class' => 'grey'
        )
      )
      @include('component.table.table-wrapper', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'class'=>'table-striped',
          'cellspacing' => 0,
          'width' => '100%',
          'headercolor' => ''
        )
      )
      </div>
    </div>
  </div>
  <!-- Bordered table -->
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
      @include('component.card.card-header', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'title'=>'Bordered Table', 
          'description'=> 'All table styles are inherited in Bootstrap 4, meaning any nested tables will be styled in the same manner as the parent.',
          'class' => 'grey'
        )
      )
      @include('component.table.table-wrapper', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'class'=>'table-bordered',
          'cellspacing' => 0,
          'width' => '100%',
          'headercolor' => ''
        )
      )
      </div>
    </div>
  </div>
  <!-- Hoverable rows -->
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
      @include('component.card.card-header', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'title'=>'Hoverable Rows Table', 
          'description'=> 'All table styles are inherited in Bootstrap 4, meaning any nested tables will be styled in the same manner as the parent.',
          'class' => 'grey'
        )
      )
      @include('component.table.table-wrapper', 
        array(
          'id'=>'asdas98796v87xc6vsdf', 
          'class'=>'table-hover',
          'cellspacing' => 0,
          'width' => '100%',
          'headercolor' => ''
        )
      )
      </div>
    </div>
  </div>
</div>
@stop