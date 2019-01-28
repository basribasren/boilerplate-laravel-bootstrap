<section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                @include('component-landing.micro.micro-heading', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'title'=>'Our Team', 
                        'class'=> 'section-heading'
                    )
                )
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                @include('component-landing.team.team-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'image'=>'assets/images/team-img/team-1.jpg', 
                        'name'=> 'Jonathan',
                        'job'=>'Developer',
                        'facebook'=>'#',
                        'twitter'=>'#',
                        'google'=>'#',
                        'instagram'=>'#'
                    )
                )
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                @include('component-landing.team.team-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'image'=>'assets/images/team-img/team-2.jpg', 
                        'name'=> 'Alex Manning',
                        'job'=>'CEO-Founder',
                        'facebook'=>'#',
                        'twitter'=>'#',
                        'google'=>'#',
                        'instagram'=>'#'
                    )
                )               
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                @include('component-landing.team.team-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'image'=>'assets/images/team-img/team-3.jpg', 
                        'name'=> 'Ollie Schneider',
                        'job'=>'Business Planner',
                        'facebook'=>'#',
                        'twitter'=>'#',
                        'google'=>'#',
                        'instagram'=>'#'
                    )
                )                
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                @include('component-landing.team.team-item', 
                    array(
                        'id'=>'asdo987wer9876fgdf', 
                        'image'=>'assets/images/team-img/team-4.jpg', 
                        'name'=> 'Roger West',
                        'job'=>'Financer',
                        'facebook'=>'#',
                        'twitter'=>'#',
                        'google'=>'#',
                        'instagram'=>'#'
                    )
                )                
            </div>
        </div>
    </div>
</section>