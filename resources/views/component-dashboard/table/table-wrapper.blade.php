<table id="{{ $id }}" class="table {{ $class }}" cellspacing="{{ $cellspacing }}" width="{{ $width }}">

  @include('component-dashboard.table.table-header', 
    array(
      'id'=> 'akd76876vsdfsdf',
      'color'=> $headercolor,
      'scope' => 'col'
    )
  )
  @include('component-dashboard.table.table-body', 
    array(
      'id'=> 'akd76876vsdfsdf',
      'color' => 'grey',
      'scope' => 'row'
    )
  )
  @include('component-dashboard.table.table-footer')
</table>

<!-- class = '', table-striped', 'table-bordered', table-hover -->