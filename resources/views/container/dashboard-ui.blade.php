@extends ('layouts.dashboard')

@section('content')
<div class="row gap-20 masonry pos-r">
  <h4 class="c-grey-900">UI Elements</h4>
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Alerts</h6>
      <div class="mT-30">
        <!-- alert -->
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'primary', 
            'message'=>'This is a secondary alert—check it out!'
          )
        )
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'secondary', 
            'message'=>'This is a secondary alert—check it out!'
          )
        )
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'success', 
            'message'=>'This is a success alert—check it out!'
          )
        )
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'danger', 
            'message'=>'This is a danger alert—check it out!'
          )
        )
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'warning', 
            'message'=>'This is a warning alert—check it out!'
          )
        )
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'info', 
            'message'=>'This is a info alert—check it out!'
          )
        )
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'light', 
            'message'=>'This is a light alert—check it out!'
          )
        )
        @include('component-dashboard.micro.alert', 
          array(
            'color'=>'dark', 
            'message'=>'This is a dark alert—check it out!'
          )
        )
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Buttons</h6>
      <div class="mT-30">
        <div class="gap-10 peers">
          <!-- button-fill -->
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'primary', 
              'text'=>'Primary'
            )
          )
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'secondary', 
              'text'=>'secondary'
            )
          )
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'success', 
              'text'=>'success'
            )
          )
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'danger', 
              'text'=>'danger'
            )
          )
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'warning', 
              'text'=>'warning'
            )
          )
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'info', 
              'text'=>'info'
            )
          )
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'light', 
              'text'=>'light'
            )
          )
          @include('component-dashboard.micro.button-fill', 
            array(
              'color'=>'dark', 
              'text'=>'dark'
            )
          )
        </div>

        <div class="w-100 gap-10 peers mY-20">
          <!-- button-outline -->
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'primary', 
              'text'=>'Primary'
            )
          )
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'secondary', 
              'text'=>'secondary'
            )
          )
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'success', 
              'text'=>'success'
            )
          )
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'danger', 
              'text'=>'danger'
            )
          )
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'warning', 
              'text'=>'warning'
            )
          )
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'info', 
              'text'=>'info'
            )
          )
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'light', 
              'text'=>'light'
            )
          )
          @include('component-dashboard.micro.button-outline', 
            array(
              'color'=>'dark', 
              'text'=>'dark'
            )
          )
        </div>

        <!-- button-group -->
        @include('component-dashboard.micro.button-group')
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Dropdowns</h6>
      <div class="mT-30">
        <!-- button default -->
        @include('component-dashboard.micro.dropdown-default', 
          array(
            'id'=>'dropdownMenuButton', 
            'color'=>'secondary',
            'expanded'=> 'false',
            'text'=>'Dropdown button',
            'list' => [
              'link'=> '#'
            ]
          )
        )
        <!-- button-split -->
        @include('component-dashboard.micro.dropdown-split', 
          array(
            'id'=>'dropdownMenuButton', 
            'color'=>'danger',
            'expanded'=> 'false',
            'text'=>'Dropdown button',
            'list' => [
              'link'=> '#'
            ]
          )
        )
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">List Group</h6>
      <div class="mT-30">
        <!-- list -->
        @include('component-dashboard.micro.list', 
          array(
            'id'=>'asjdh235234lkjrwr', 
            'active'=>'active',
            'text'=>'Dropdown button',
            'link' => '#'
          ))
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Modal</h6>
      <div class="mT-30">
        <!-- modal -->
        @include('component-dashboard.micro.modal')
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Popover</h6>
      <div class="mT-30">
        <!-- popover -->
        @include('component-dashboard.micro.popover')
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Progress</h6>
      <div class="mT-30">
        <!-- Progress Bars -->
        <div class="layers">
          <!-- progress -->
          @include('component-dashboard.micro.progress', 
            array(
              'title'=>'Visitors From USA', 
              'backcolor'=> 'deep-purple',
              'fontcolor' => 'grey',
              'value' => 100,
              'barmin'=> 0,
              'barmax'=> 100,
              'barvalue' => 50
            )
          )
          @include('component-dashboard.micro.progress', 
            array(
              'title'=>'Visitors From Europe', 
              'backcolor'=> 'green',
              'fontcolor' => 'grey',
              'value' => 1000,
              'barmin'=> 0,
              'barmax'=> 100,
              'barvalue' => 80
            )
          )
          @include('component-dashboard.micro.progress', 
            array(
              'title'=>'Visitors From Australia', 
              'backcolor'=> 'light-blue',
              'fontcolor' => 'grey',
              'value' => 450,
              'barmin'=> 0,
              'barmax'=> 100,
              'barvalue' => 40
            )
          )
          @include('component-dashboard.micro.progress', 
            array(
              'title'=>'Visitors From India', 
              'backcolor'=> 'blue',
              'fontcolor' => 'grey',
              'value' => 10000,
              'barmin'=> 0,
              'barmax'=> 100,
              'barvalue' => 90
            )
          )
        </div>
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <div class="bgc-white p-20 bd">
      <h6 class="c-grey-900">Tootips</h6>
      <div class="mT-30">
       <!-- tooltip -->
        @include('component-dashboard.micro.tooltip', 
          array(
            'title'=>'Tooltip on top', 
            'color'=> 'primary',
            'place' => 'top'
          )
        )
        @include('component-dashboard.micro.tooltip', 
          array(
            'title'=>'Tooltip on right', 
            'color'=> 'secondary',
            'place' => 'right'
          )
        )
        @include('component-dashboard.micro.tooltip', 
          array(
            'title'=>'Tooltip on bottom', 
            'color'=> 'success',
            'place' => 'bottom'
          )
        )
        @include('component-dashboard.micro.tooltip', 
          array(
            'title'=>'Tooltip on left', 
            'color'=> 'danger',
            'place' => 'left'
          )
        )
      </div>
    </div>
  </div>
</div>
@stop