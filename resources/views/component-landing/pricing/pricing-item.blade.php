<!-- Package Price  -->
<div class="single-price-plan {{ $active }} text-center">
    <!-- Package Text  -->
    <div class="package-plan">
        <h5>{{ $title }}</h5>
        <div class="ca-price d-flex justify-content-center">
            <span>$</span>
            <h4>{{ $price }}</h4>
        </div>
    </div>
    <div class="package-description">
        @foreach ($descriptions as $description)
            <p>{{ $description }}</p>
        @endforeach
    </div>
    <!-- Plan Button  -->
    <div class="plan-button">
        <a href="#">Select Plan</a>
    </div>
</div>