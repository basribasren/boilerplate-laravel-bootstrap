@extends ('layouts.dashboard')

@section('content')
<div class="full-container">
  <div class="email-app">
    <!-- email-menu.blade.php -->
    @include('component-dashboard.email.email-menu')
    
  <div class="email-wrapper row remain-height bgc-white ov-h">
    <div class="email-list h-100 layers">
      <!-- email-search.blade.php -->
      @include('component-dashboard.email.email-search')
      <!-- email-list.blade.php -->
      @include('component-dashboard.email.email-list', 
        array(
          'id'=>'hd8sfd98erh898sad', 
          'sender'=>'John Doe', 
          'title'=> 'title goes here', 
          'message'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'
        )
      )      
    </div>
    <div class="email-content h-100">
      <div class="h-100 scrollable pos-r">
        <div class="email-content-wrapper">
          <!-- email-header.blade.php -->
          @include('component-dashboard.email.email-header', 
            array(
              'id'=>'hd8sfd98erh898sad', 
              'sender'=> [
                'name' => 'John Doe',
                'image' => 'https://randomuser.me/api/portraits/men/11.jpg',
                'email' => 'email@gmail.com'
              ],
              'date'=> 'Nov, 02 2017'
            )
          ) 
          <!-- email-content.blade.php -->
          @include('component-dashboard.email.email-content', 
            array(
              'id'=>'hd8sfd98erh898sad',
              'title'=> 'Title of this email goes here',
              'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'
            )
          ) 
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@stop