<div>
  <h5 class="mB-5">{{ $value }}k</h5>
  <small class="fw-600 c-{{ $fontcolor }}-700">{{ $title }}</small>
  <span class="pull-right c-{{ $fontcolor }}-600 fsz-sm">{{ $barvalue }}%</span>
  <div class="progress mT-10">
    <div class="progress-bar bgc-{{ $backcolor }}-500" 
      role="progressbar" 
      aria-valuenow="{{ $barvalue}}" 
      aria-valuemin="{{ $barmin }}" 
      aria-valuemax="{{ $barmax }}" 
      style="width:50%;"> 
      <span class="sr-only">{{ $barvalue }}% Complete</span>
    </div>
  </div>
</div>