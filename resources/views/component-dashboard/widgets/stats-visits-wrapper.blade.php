<div class="peers fxw-nw@lg+ ai-s">
  <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
    <div class="layers">
      <div class="layer w-100 mB-10">
        <h6 class="lh-1">Site Visits</h6>
      </div>
      <div class="layer w-100">
        <div id="world-map-marker"></div>
      </div>
    </div>
  </div>
  <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
    <div class="layers">
      <div class="layer w-100">
        <!-- stats-visits-bar -->
        <div class="layers">
          <div class="layer w-100">
          @include('component-dashboard.widgets.stats-visits-bar', 
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
          </div>
          <div class="layer w-100 mT-15">
          @include('component-dashboard.widgets.stats-visits-bar', 
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
          </div>
          <div class="layer w-100 mT-15">
          @include('component-dashboard.widgets.stats-visits-bar', 
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
          </div>
          <div class="layer w-100 mT-15">
          @include('component-dashboard.widgets.stats-visits-bar', 
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

        <!-- stats-visits-pie -->
        <div class="peers pT-20 mT-20 bdT fxw-nw@lg+ jc-sb ta-c gap-10">
          @include('component-dashboard.widgets.stats-visits-pie', 
            array(
              'model'=>'easy-pie-chart', 
              'datasize'=> 80, 
              'datapercent'=> 75, 
              'title'=>'New Users',
              'color'=> '#f44336'
            )
          )
          @include('component-dashboard.widgets.stats-visits-pie', 
            array(
              'model'=>'easy-pie-chart', 
              'datasize'=> 80, 
              'datapercent'=> 50, 
              'title'=>'New Purchases',
              'color'=> '#2196f3'
            )
          )
          @include('component-dashboard.widgets.stats-visits-pie', 
            array(
              'model'=>'easy-pie-chart', 
              'datasize'=> 80, 
              'datapercent'=> 90, 
              'title'=>'Bounce Rate',
              'color'=> '#ff9800'
            )
          )
        </div>
      </div>
    </div>
  </div>
</div>