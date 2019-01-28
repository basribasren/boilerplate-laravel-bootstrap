<footer class="footer-social-icon text-center section_padding_70 clearfix">
    <!-- footer logo -->
    @include('component-landing.footer.footer-logo', 
	    array(
	        'id'=>'asdo987wer9876fgdf',
	        'logo'=>'Ca.'
	    )
	)   
    
    <!-- social icon-->
	<div class="footer-social-icon">
		@include('component-landing.footer.footer-social', 
		    array(
		        'id'=>'asdo987wer9876fgdf',
		        'link'=>'#',
		        'icon' => 'icon-facebook'
		    )
		)
		@include('component-landing.footer.footer-social', 
		    array(
		        'id'=>'asdo987wer9876fgdf',
		        'link'=>'#',
		        'icon' => 'active icon-twitter-alt'
		    )
		)
		@include('component-landing.footer.footer-social', 
		    array(
		        'id'=>'asdo987wer9876fgdf',
		        'link'=>'#',
		        'icon' => 'icon-instagram'
		    )
		)
		@include('component-landing.footer.footer-social', 
		    array(
		        'id'=>'asdo987wer9876fgdf',
		        'link'=>'#',
		        'icon' => 'icon-google'
		    )
		) 
	</div>

    <!-- footer menu -->
    @include('component-landing.footer.footer-menu')
   
    <!-- Foooter Text-->
    @include('component-landing.footer.footer-copyright')
</footer>