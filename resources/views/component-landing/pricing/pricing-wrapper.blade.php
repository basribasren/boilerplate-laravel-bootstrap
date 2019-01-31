<section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text  -->
                @include('component-landing.micro.micro-heading', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'Pricing Plan', 
                        'class'=> 'section-heading text-center'
                    )
                )
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                @include('component-landing.pricing.pricing-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'Starter Plan',
                        'price'=>29,
                        'active' => '',
                        'descriptions'=>[
                            'Up to 10 users monthly',
                            'Unlimited updates',
                            'Free host &amp; domain',
                            '24/7 Support',
                            '10 Unique Users'
                        ]
                    )
                )
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                @include('component-landing.pricing.pricing-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'Basic Plan',
                        'price'=>29,
                        'active' => '',
                        'descriptions'=>[
                            'Up to 10 users monthly',
                            'Unlimited updates',
                            'Free host &amp; domain',
                            '24/7 Support',
                            '10 Unique Users'
                        ]
                    )
                )
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                @include('component-landing.pricing.pricing-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'Advenced Plan',
                        'price'=>29,
                        'active' => 'active',
                        'descriptions'=>[
                            'Up to 10 users monthly',
                            'Unlimited updates',
                            'Free host &amp; domain',
                            '24/7 Support',
                            '10 Unique Users'
                        ]
                    )
                )
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                @include('component-landing.pricing.pricing-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'Community Plan',
                        'price'=>29,
                        'active' => '',
                        'descriptions'=>[
                            'Up to 10 users monthly',
                            'Unlimited updates',
                            'Free host &amp; domain',
                            '24/7 Support',
                            '10 Unique Users'
                        ]
                    )
                )
            </div>
        </div>
    </div>
</section>