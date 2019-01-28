<section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="slider slider-for">
                    <!-- Client Feedback Text  -->
                    @include('component-landing.feedback.feedback-item', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'icon'=>'icon-quote-left',
                            'feedback'=>'“ I have been using it for a number of years. I use Colorlib for usability testing. Its great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”', 
                            'name'=> 'Aigars Silkalns', 
                            'job'=> 'Ceo Colorlib'
                        )
                    )                    
                    <!-- Client Feedback Text  -->
                    @include('component-landing.feedback.feedback-item', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'icon'=>'icon-quote-left',
                            'feedback'=>'“ I use Colorlib for usability testing. Its great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”', 
                            'name'=> 'Jennifer', 
                            'job'=> 'Developer'
                        )
                    )
                    <!-- Client Feedback Text  -->
                    @include('component-landing.feedback.feedback-item', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'icon'=>'icon-quote-left',
                            'feedback'=>'“ I have been using it for a number of years. I use Colorlib for usability testing. Its great for taking images and making clickable image prototypes that do the job.”', 
                            'name'=> 'Helen', 
                            'job'=> 'Marketer'
                        )
                    )
                    <!-- Client Feedback Text  -->
                    @include('component-landing.feedback.feedback-item', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'icon'=>'icon-quote-left',
                            'feedback'=>'“ I have been using it for a number of years. I use Colorlib for usability testing. Its great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”', 
                            'name'=> 'Henry smith', 
                            'job'=> 'Developer'
                        )
                    )
                </div>
            </div>
            <!-- Client Thumbnail Area -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="slider slider-nav">
                    @include('component-landing.feedback.feedback-thumbnail', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'image'=>'assets/images/bg-img/client-3.jpg'
                        )
                    )
                    @include('component-landing.feedback.feedback-thumbnail', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'image'=>'assets/images/bg-img/client-2.jpg'
                        )
                    )
                    @include('component-landing.feedback.feedback-thumbnail', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'image'=>'assets/images/bg-img/client-1.jpg'
                        )
                    )
                    @include('component-landing.feedback.feedback-thumbnail', 
                        array(
                            'id'=>'asdo987wer9876fgdf',
                            'image'=>'assets/images/bg-img/client-2.jpg'
                        )
                    )
                </div>
            </div>
        </div>
    </div>
</section>