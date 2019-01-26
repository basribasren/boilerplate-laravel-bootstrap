@extends ('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Data Tables</h4>
  <div class="row">
    <div class="col-md-12">
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
          'id'=>'dataTable', 
          'class'=>"table-striped table-bordered",
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