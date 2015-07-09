
   <div class="copyright">©Copyright 2015 Keni Thomas | Site Credit</div>
   
   
   
   

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="wp-content/themes/kt/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $('.carousel').carousel({
  interval: 6000
})
      </script>
     
<!-- smooth scroll -->
       <script type="text/javascript">
       
$("a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 500, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});
                  
         
             </script>
      
      
     
     <!-- modals -->

      <script type="text/javascript">
      
          $('#topVidModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
      
      </script>  
      

          <script type="text/javascript">
      
          $('#BookKeni1').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
      
      </script>    
      
      <script type="text/javascript">
      //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
function autoPlayYouTubeModal(){
  var trigger = $("body").find('[data-toggle="modal"]');
  trigger.click(function() {
    var theModal = $(this).data( "target" ),
    videoSRC = $(this).attr( "data-theVideo" ), 
    videoSRCauto = videoSRC+"?autoplay=1" ;
    $(theModal+' iframe').attr('src', videoSRCauto);
    $(theModal+' button.close').click(function () {
        $(theModal+' iframe').attr('src', videoSRC);
    });   
  });
}
      </script>
      
      
      
      <script type="text/javascript">
          $(document).ready(function(){
  autoPlayYouTubeModal();
});
      </script>
      
      
<!--       <script type="text/javascript">
      $(function() {
          $("#togglenav").click(function() {
              $(".navbar-toggle-minus-hide").toggleClass("navbar-toggle-minus");
              
          });
      });
      
      </script> -->
      
      <script type="text/javascript">
        
              $(function() {
	$(".mob-off").click(function() {
		$(".in").toggleClass("off");


		
	});
});

      
      </script>
      


<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>

		
