(function ($, root, undefined) {
	
	$(function () {
		
		var windowsize = $(window).width();

	    $(window).on('resize', function() {
	      var windowsize = $(window).width();
	        // Change this to the correct selector.
	        if(windowsize > 1200) {
	            $('.head-nav').midnight().css({
	                'top' : '80px',
	                'width' : '130px',
	                'right' : 'auto',
	                'left' : '50%',
	                'transform' : 'translate(-570px, 0)'
	            });

	            $('.follow-nav').midnight().css({
	                'top' : '100px',
	                'width' : '20px',
	                'right' : 'auto',
	                'left' : '50%',
	                'transform' : 'translate(565px, 0)'
	            });

	            $('.style-nav').midnight().css({
	                'top': '165px',
	                'right' : 'auto',
	                'width' : '125px',
	                'left' : '50%',
	                'transform' : 'translate(-585px, 0)'
	            });

	            $('.icons-nav').midnight().css({
	                'top': '190px',
	                'right' : 'auto',
	                'width' : '20px',
	                'height' : '140px',
	                'left' : '50%',
	                'transform' : 'translate(563px, 0)'
	            });

	            $('.footer').midnight().css({
	                'bottom': '5%',
	                'top': 'auto',
	                'right' : 'auto',
	                'width' : '150px',
	                'left' : '50%',
	                'transform' : 'translate(-570px, 0)'
	            });
	        }
	        else {
	            $('.head-nav').midnight().css({
	                'top' : '80px',
	                'width' : '130px',
	                'right' : 'auto',
	                'left' : '50%',
	                'transform' : 'translate(-470px, 0)'
	            });

	            $('.follow-nav').midnight().css({
	                'top' : '100px',
	                'width' : '20px',
	                'right' : 'auto',
	                'left' : '50%',
	                'transform' : 'translate(465px, 0)'
	            });


	            $('.style-nav').midnight().css({
	                'top': '165px',
	                'right' : 'auto',
	                'width' : '125px',
	                'left' : '50%',
	                'transform' : 'translate(-485px, 0)'
	            });

	            $('.icons-nav').midnight().css({
	                'top': '190px',
	                'right' : 'auto',
	                'width' : '20px',
	                'height' : '140px',
	                'left' : '50%',
	                'transform' : 'translate(465px, 0)'
	            });

	            $('.footer').midnight().css({
	                'bottom': '5%',
	                'top': 'auto',
	                'right' : 'auto',
	                'width' : '150px',
	                'left' : '50%',
	                'transform' : 'translate(-470px, 0)'
	            });
	        }
	    }).trigger('resize');
	
		// OPENING MENI
		$('.small-logo').on('click', function () {
		    $('.small-nav ul').toggleClass('showing');
		})

		// LOADING SCREEN
		var progressbarDiv = $('#progressbar');
		if (progressbarDiv.length) {
		var bar = new ProgressBar.Line(progressbar, {
		  strokeWidth: 4,
		  easing: 'easeInOut',
		  duration: 1400,
		  color: '#000',
		  trailColor: '#eee',
		  trailWidth: 1,
		  svgStyle: {width: '100%', height: '100%'},
		  text: {
		    style: {},
		    autoStyleContainer: false
		  },
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
		    }
		};

		setTimeout(updateText, 1400);
		}

		// Applied globally on all textareas with the "autoExpand" class
		$(document)
		  .one('focus.autoExpand', 'textarea.autoExpand', function(){
		      var savedValue = this.value;
		      this.value = '';
		      this.baseScrollHeight = this.scrollHeight;
		      this.value = savedValue;
		  })
		  .on('input.autoExpand', 'textarea.autoExpand', function(){
		      var minRows = this.getAttribute('data-min-rows')|0, rows;
		      this.rows = minRows;
		      rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
		      this.rows = minRows + rows - 1;
		  });

		// PREVENT LOADINGSCREEN FROM SHOWING MULTIPLE TIMES
		var userHasVisited = sessionStorage.getItem('namespace.visited');
		sessionStorage.setItem('namespace.visited', 1);
		if (userHasVisited) {
		  $('.loadingPage').hide();
		}



		// LINK GLOW EFFECT
		$(window).load(checkGlow);

		function checkGlow() {
		  if ($('.link-glow').visible()) {
		    $('.link-glow').addClass('glow');
		    window.onscroll = null;
		  }
		}

		window.onscroll = checkGlow;


		// ScrollTo page sections
		$('.scrollToContact').click(function(){
		  $(window).scrollTo($('#contact'), 1500);
		});

		$('.scrollToHome').click(function(){
		  $(window).scrollTo("0px", 1500);
		});

		  if (window.location.hash.length) {
		    var $target = $(window.location.hash);
		    if ($target.length) {
		      $(window).scrollTo($target, 1500);
		    }
		  }		

	});

	$('#our-work-carousel').carousel().on('slide.bs.carousel', function(e) {
		var trenutniElement = $(e.relatedTarget);
		var title = trenutniElement.data('title');
		var cat = trenutniElement.data('category');
	  	$('.our-work-info h3').text(title);
	  	$('.our-work-info h4').text(cat);
	});


	$('#allChb').on('click', function(){

	})

	$('#checkbox-content :checkbox').change(function() {
	    // this will contain a reference to the checkbox   
	    if (this.checked) {
	        $('.testing').parent().hide();
	    } else {
	        // the checkbox is now no longer checked
	    }
	});
	
})(jQuery, this);