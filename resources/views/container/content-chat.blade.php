@extends ('layouts.dashboard')

@section('content')
<div class="full-container">
  <div class="peers fxw-nw pos-r">
    <!-- chat-list.blade.php -->@include('component.chat.chat-list', 
      array(
        'id'=>'asdo987wer9876fgdf', 
        'picture'=>'https://randomuser.me/api/portraits/men/1.jpg', 
        'name'=> 'John Doe', 
        'status'=>'online',
        'color'=> 'green'
      )
    )
    <!-- 'status'=>'online', 'away', 'busy', 'offline' -->
    <!-- 'color'=> 'green', 'amber', 'red', 'grey' -->

    <!-- Chat Box -->
    <div class="peer peer-greed" id='chat-box'>
      <div class="layers h-100">
        <!-- chat-header.blade.php -->
        @include('component.chat.chat-header', 
          array(
            'id'=>'asdo987wer9876fgdf', 
            'picture'=>'https://randomuser.me/api/portraits/men/1.jpg', 
            'name'=> 'John Doe', 
            'ontyping'=>true
          )
        )

        <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r">
          <!-- Chat Box -->
          <div class="p-20 gapY-15">
            <!-- Chat Conversation -->
            <!-- chat-content.blade.php -->@include('component.chat.chat-content')
            <!-- Chat Conversation -->
            <!-- chat-content.blade.php -->
          </div>
        </div>
        </div>
        <div class="layer w-100">
          <!-- Chat Send -->
          <!-- chat-input.blade.php -->
          @include('component.chat.chat-input')
        </div>
      </div>
    </div>
  </div>
</div>
@stop