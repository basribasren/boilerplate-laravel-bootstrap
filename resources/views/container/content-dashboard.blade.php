@extends ('layouts.dashboard')

@section('content')
<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>

  <!-- #stats-summary place ==================== -->
  <div class="masonry-item  w-100">
    <div class="row gap-20">
      <div class='col-md-3'>
        @include('component.widgets.stats-summary', 
          array(
            'id'=>'sparklinedash', 
            'title'=>'Total Visits', 
            'color'=> 'green', 
            'summary'=>'-10%'
          )
        )
      </div> 
      <div class='col-md-3'>
        @include('component.widgets.stats-summary', 
          array(
            'id'=>'sparklinedash2', 
            'title'=>'Total Page Views', 
            'color'=> 'red', 
            'summary'=>'-7%'
          )
        )
      </div> 
      <div class='col-md-3'>
        @include('component.widgets.stats-summary', 
          array(
            'id'=>'sparklinedash3', 
            'title'=>'Unique Visitor<', 
            'color'=> 'purple', 
            'summary'=>'~12%'
          )
        )
      </div> 
      <div class='col-md-3'>
        @include('component.widgets.stats-summary', 
          array(
            'id'=>'sparklinedash4', 
            'title'=>'Bounce Rate', 
            'color'=> 'blue', 
            'summary'=>'33%'
          )
        )
      </div>               
    </div>
  </div>

  <!-- #stats-visits place ==================== -->
  <div class="masonry-item col-12">
    <div class="bd bgc-white">
      <!-- stats-visits-wrapper.blade.php -->
      @include('component.widgets.stats-visits-wrapper')
    </div>
  </div>

  <!-- #stats-monthly place ==================== -->
  <div class="masonry-item col-md-6">
    <div class="bd bgc-white">
      <div class="layers">
        <div class="layer w-100 pX-20 pT-20">
          <h6 class="lh-1">Monthly Stats</h6>
        </div>
        <div class="layer w-100 p-20">
          <canvas id="line-chart" height="220"></canvas>
        </div>
        <div class="layer bdT p-20 w-100">
          <div class="peers ai-c jc-c gapX-20">
            <!-- stats-monthly.blade.php -->
            @include('component.widgets.stats-monthly', 
              array(
                'title'=>'APPL',
                'datapercent'=> 10, 
                'status'=>'up',
                'color'=> 'green'
              )
            )
            @include('component.widgets.stats-monthly', 
              array(
                'title'=>'Average',
                'datapercent'=> 2, 
                'status'=>'down',
                'color'=> 'red'
              )
            )
            @include('component.widgets.stats-monthly', 
              array(
                'title'=>'Sales',
                'datapercent'=> 15, 
                'status'=>'up',
                'color'=> 'green'
              )
            )
            @include('component.widgets.stats-monthly', 
              array(
                'title'=>'Profit',
                'datapercent'=> 8, 
                'status'=>'down',
                'color'=> 'red'
              )
            )
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- #stats-todo place ==================== -->
  <div class="masonry-item col-md-6">
    <div class="bd bgc-white p-20">
      <div class="layers">
        <div class="layer w-100 mB-10">
          <h6 class="lh-1">Todo List</h6>
        </div>
        <!-- stats-todo.blade.php -->
        @include('component.widgets.stats-todo', 
          array(
            'id'=>'inputCall1',
            'task'=> 'Call John for Dinner', 
            'badgecolor'=>'success',
            'deadline'=> 2
          )
        )
        <!-- id: inputCall1, inputCall2, inputCall3, "" -->
        <!-- badgecolor: denger, warning, info, success, "" -->
      </div>
    </div>
  </div>

  <!-- #stats-report place ==================== -->
  <div class="masonry-item col-md-6">
    <div class="bd bgc-white">
      <div class="layers">
        <div class="layer w-100 p-20">
          <h6 class="lh-1">Sales Report</h6>
        </div>
        <!-- stats-report.blade.php -->
        @include('component.widgets.stats-report', 
          array(
            'name'=>'Item #1 Name',
            'status'=> 'Unavailable', 
            'date'=>'Nov 20',
            'price'=> 30,
            'badgecolor' => 'red',
            'textcolor' => 'success'
          )
        )
        <!-- badgecolor: red, deep-purple, pink, green, red, orange, yellow -->
        <!-- textcolor: denger, warning, info, success -->
      </div>
      <div class="ta-c bdT w-100 p-20">
        <a href="#">Check all the sales</a>
      </div>
    </div>  
  </div>

  <!-- #stats-weather place ==================== -->
  <div class="masonry-item col-md-6">
    <div class="bd bgc-white p-20">
      <div class="layers">
        <!-- Widget Title -->
        <div class="layer w-100 mB-20">
          <h6 class="lh-1">Weather</h6>
        </div>
        <!-- stats-weather.blade.php -->
        @include('component.widgets.stats-weather')
      </div>
    </div>
  </div>

  <!-- #chat-widget place ==================== -->
  <div class="masonry-item col-md-6">
    <div class="bd bgc-white">
      <div class="layers">
        <div class="layer w-100 p-20">
          <h6 class="lh-1">Quick Chat</h6>
        </div>
        <div class="layer w-100">

          <div class="bgc-grey-200 p-20 gapY-15">
            <!-- chat-wrapper.blade.php -->
            @include('component.widgets.chat-box',
              array(
                'image'=>'https://randomuser.me/api/portraits/men/11.jpg',
                'message'=> [
                    'time' => '12:00 AM',
                    'text'=> 'the printing and typesetting industry.'
                ], 
                'status'=> 'sender'
              )
            )
            @include('component.widgets.chat-input')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop