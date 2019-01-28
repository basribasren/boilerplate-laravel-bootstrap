<section class="special-area bg-white section_padding_100" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading Area -->
                @include('component-landing.micro.micro-heading', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'Why Is It Special', 
                        'class'=> 'section-heading text-center'
                    )
                )
            </div>
        </div>

        <div class="row">
            <!-- Single Special Area -->
            @include('component-landing.special.special-item', 
                array (
                    'id'=> 'al1k2b3jhg123',
                    'delay'=> '0.2s',
                    'icon'=> 'icon-mobile',
                    'strength'=> 'Easy to use',
                    'description'=>'We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily'
                )
            )
            <!-- Single Special Area -->
            @include('component-landing.special.special-item', 
                array (
                    'id'=> 'al1k2b3jhg123',
                    'delay'=> '0.4s',
                    'icon'=> 'icon-ruler-pencil',
                    'strength'=> 'Powerful Design',
                    'description'=>'We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily'
                )
            )
            <!-- Single Special Area -->
            @include('component-landing.special.special-item', 
                array (
                    'id'=> 'al1k2b3jhg123',
                    'delay'=> '0.6s',
                    'icon'=> 'icon-settings',
                    'strength'=> 'Customizability',
                    'description'=>'We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily'
                )
            )
        </div>
    </div>
    <!-- Special Description Area -->
    @include('component-landing.special.special-description')
</section>
