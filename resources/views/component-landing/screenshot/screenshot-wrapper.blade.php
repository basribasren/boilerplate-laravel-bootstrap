<section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                @include('component-landing.micro.micro-heading', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'App Screenshots', 
                        'class'=> 'section-heading'
                    )
                )
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- App Screenshots Slides  -->
                @include('component-landing.screenshot.screenshot-slides', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'images'=>[
                            'assets/images/scr-img/app-1.jpg',
                            'assets/images/scr-img/app-2.jpg',
                            'assets/images/scr-img/app-3.jpg',
                            'assets/images/scr-img/app-4.jpg',
                            'assets/images/scr-img/app-5.jpg',
                        ]
                    )
                )
            </div>
        </div>
    </div>
</section>