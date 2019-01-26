<ul class="m-0 p-0 mT-20">
  <li class="bdB peers ai-c jc-sb fxw-nw">
    <a class="td-n p-20 peers fxw-nw mR-20 peer-greed c-grey-900" href="javascript:void(0);" data-toggle="modal" data-target="#calendar-edit">
      <div class="peer mR-15">
        <i class="fa fa-fw fa-clock-o c-{{ $color }}-500"></i>
      </div>
      <div class="peer">
        <span class="fw-600">{{ $name }}</span>
        <div class="c-grey-600">
          <span class="c-grey-700">{{ $date }} - </span>
          <i>{{ $event }}</i>
        </div>
      </div>
    </a>
    <div class="peers mR-15">
      <div class="peer">
        <a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5">
          <i class="ti-pencil"></i>
        </a>
      </div>
      <div class="peer">
        <a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5">
          <i class="ti-trash"></i>
        </a>
      </div>
    </div>
  </li>
</ul>