<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Javascript tema -->
<script src="js/script.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="plugins/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="plugins/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script src="plugins/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
  
<script>
    $(document).ready(function() {
        $('.fancybox').fancybox({
        	arrows : false,
        	nextClick : true,
			helpers : {
				media : {},
				thumbs : {
					width  : 50,
					height : 50
				}
			}
		});
    });
</script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
	    effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
	    animSpeed: 500,                 // Slide transition speed
	    pauseTime: 5000,                // How long each slide will show
	    startSlide: 0,                  // Set starting Slide (0 index)
	    directionNav: true,             // Next & Prev navigation
	    controlNav: false,               // 1,2,3... navigation
	    pauseOnHover: true,             // Stop animation while hovering
	    prevText: 'Anterior',               // Prev directionNav text
	    nextText: 'Próximo',               // Next directionNav text
	    randomStart: false,             // Start on a random slide
	});
});
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>