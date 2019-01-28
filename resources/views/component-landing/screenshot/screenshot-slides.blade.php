<div class="app_screenshots_slides owl-carousel">
    @foreach ($images as $image)
    <div class="single-shot">
        <img src="{{ $image }}" alt="">
    </div>
    @endforeach
</div>