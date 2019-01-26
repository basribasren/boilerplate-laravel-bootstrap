<table id="{{ $id }}" class="table {{ $class }}" cellspacing="{{ $cellspacing }}" width="{{ $width }}">

  @include('component.table.table-header', 
    array(
      'id'=> 'akd76876vsdfsdf',
      'color'=> $headercolor,
      'scope' => 'col'
    )
  )
  @include('component.table.table-body', 
    array(
      'id'=> 'akd76876vsdfsdf',
      'color' => 'grey',
      'scope' => 'row'
    )
  )
  @include('component.table.table-footer')
</table>

<!-- class = '', table-striped', 'table-bordered', table-hover -->