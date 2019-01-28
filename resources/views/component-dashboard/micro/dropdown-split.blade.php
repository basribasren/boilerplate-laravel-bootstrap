<div class="btn-group mT-20">
  <button type="button" class="btn btn-{{ $color }}">{{ $text }}</button>
  <button type="button" 
    class="btn btn-{{ $color }} dropdown-toggle dropdown-toggle-split" 
    data-toggle="dropdown" 
    aria-haspopup="true" 
    aria-expanded="{{ $expanded }}">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>