(function ($, root, undefined) {
	
	$(function () {
		
		// Start midnight
	    $(document).ready(function(){
	      	// Change this to the correct selector.
	      	$('.head-nav').midnight().css('top', '7%');
	    });

	    // Start midnight
	    $(document).ready(function(){
	      	// Change this to the correct selector.
	      	$('.style-nav').midnight().css('top', '19.4%');
	    });

	    // Start midnight
	    $(document).ready(function(){
	      	// Change this to the correct selector.
	      	$('.footer').midnight().css({'bottom': '5%','top': 'auto'});
	    });
	


		// LOADING SCREEN
		$('html, body').css({
		    overflow: 'hidden',
		    height: '100%'
		});

		var bar = new ProgressBar.Line(milos, {
		    strokeWidth: 4,
		    easing: 'easeInOut',
		    duration: 1400,
		    color: '#000',
		    trailColor: '#eee',
		    trailWidth: 1,
		    svgStyle: {width: '100%', height: '100%'},
		    text: {
		        style: {
		            // Text color.
		            // Default: same as stroke color (options.color)
		            color: '#000',
		            position: 'absolute',
		            right: '0',
		            top: '30px',
		            padding: 0,
		            margin: 0,
		            transform: null
		        },
		        autoStyleContainer: false
		    },
		    from: {color: '#000'},
		    to: {color: '#000'},
		    step: (state, bar) => {
		        bar.setText(Math.round(bar.value() * 100) + ' %');
		    }
		});

		bar.animate(1.0);  // Number from 0.0 to 1.0

		function updateText (){
		    var progressBarText = $('.progressbar-text');
		    var loadingPage = $('.loadingPage');
		    if (progressBarText.text() == '100 %') {
		        loadingPage.fadeOut(350);
		        $('html, body').css({
		            overflow: 'auto',
		            height: 'auto'
		        });
		    }
		};

		setTimeout(updateText, 1400);
		// LOADING SCREEN END

	});

	
})(jQuery, this);
