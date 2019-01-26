<div class="peer bdR" id="chat-sidebar">
  <div class="layers h-100">
    <!-- Search -->
    <div class="bdB layer w-100">
      <input type="text" placeholder="Search contacts..." name="chatSearch" class="form-constrol p-15 bdrs-0 w-100 bdw-0">
    </div>

    <!-- List -->
    <div class="layer w-100 fxg-1 scrollable pos-r">
      <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
        <div class="peer">
          <img src="{{ $picture }}" alt="" class="w-3r h-3r bdrs-50p">
        </div>
        <div class="peer peer-greed pL-20">
          <h6 class="mB-0 lh-1 fw-400">{{ $name }}</h6>
          <small class="lh-1 c-{{ $color }}-500">{{ $status }}</small>
        </div>
      </div>
    </div>
  </div>
</div>