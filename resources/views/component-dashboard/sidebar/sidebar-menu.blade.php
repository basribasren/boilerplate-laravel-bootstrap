<!-- ### $Sidebar Menu ### -->
<ul class="sidebar-menu scrollable pos-r">
  <li class="nav-item mT-30 active">
    <a class="sidebar-link" href="{{ url ('dashboard') }}">
      <span class="icon-holder">
        <i class="c-blue-500 icon-home"></i>
      </span>
      <span class="title">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class='sidebar-link' href="{{ url ('email') }}">
      <span class="icon-holder">
        <i class="c-brown-500 icon-email"></i>
      </span>
      <span class="title">Email</span>
    </a>
  </li>
  <li class="nav-item">
    <a class='sidebar-link' href="{{ url ('compose') }}">
      <span class="icon-holder">
        <i class="c-blue-500 icon-share"></i>
      </span>
      <span class="title">Compose</span>
    </a>
  </li>
  <li class="nav-item">
    <a class='sidebar-link' href="{{ url ('calendar') }}">
      <span class="icon-holder">
        <i class="c-deep-orange-500 icon-calendar"></i>
      </span>
      <span class="title">Calendar</span>
    </a>
  </li>
  <li class="nav-item">
    <a class='sidebar-link' href="{{ url ('chat') }}">
      <span class="icon-holder">
        <i class="c-deep-purple-500 icon-comment-alt"></i>
      </span>
      <span class="title">Chat</span>
    </a>
  </li>
  <li class="nav-item">
    <a class='sidebar-link' href="{{ url ('charts') }}">
      <span class="icon-holder">
        <i class="c-indigo-500 icon-bar-chart"></i>
      </span>
      <span class="title">Charts</span>
    </a>
  </li>
  <li class="nav-item">
    <a class='sidebar-link' href="{{ url ('forms') }}">
      <span class="icon-holder">
        <i class="c-light-blue-500 icon-pencil"></i>
      </span>
      <span class="title">Forms</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="sidebar-link" href="{{ url ('ui') }}">
      <span class="icon-holder">
          <i class="c-pink-500 icon-palette"></i>
        </span>
      <span class="title">UI Elements</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
        <i class="c-orange-500 icon-layout-list-thumb"></i>
      </span>
      <span class="title">Tables</span>
      <span class="arrow">
        <i class="icon-angle-right"></i>
      </span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a class='sidebar-link' href="{{ url ('table/basic') }}">Basic Table</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ url ('table/advanced') }}">Data Table</a>
      </li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
          <i class="c-purple-500 icon-map"></i>
        </span>
      <span class="title">Maps</span>
      <span class="arrow">
          <i class="icon-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{ url ('map/google') }}">Google Map</a>
      </li>
      <li>
        <a href="{{ url ('map/vector') }}">Vector Map</a>
      </li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
          <i class="c-red-500 icon-files"></i>
        </span>
      <span class="title">Pages</span>
      <span class="arrow">
          <i class="icon-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a class='sidebar-link' href="{{ url ('blank') }}">Blank</a>
      </li>                 
      <li>
        <a class='sidebar-link' href="{{ url ('404') }}">404</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ url ('500') }}">500</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ url ('signin') }}">Sign In</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ url ('signup') }}">Sign Up</a>
      </li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
        <i class="c-teal-500 icon-view-list-alt"></i>
      </span>
      <span class="title">Multiple Levels</span>
      <span class="arrow">
        <i class="icon-angle-right"></i>
      </span>
    </a>
    <ul class="dropdown-menu">
      <li class="nav-item dropdown">
        <a href="javascript:void(0);">
          <span>Menu Item</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0);">
          <span>Menu Item</span>
          <span class="arrow">
            <i class="icon-angle-right"></i>
          </span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="javascript:void(0);">Menu Item</a>
          </li>
          <li>
            <a href="javascript:void(0);">Menu Item</a>
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>