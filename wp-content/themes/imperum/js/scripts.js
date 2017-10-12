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


	// Front page carousel dynamic change of content
	$('#our-work-carousel').carousel().on('slide.bs.carousel', function(e) {
		var currentElement = $(e.relatedTarget);

		var title = currentElement.data('title');
		var cat = currentElement.data('category');

	  	$('.our-work-info h3').text(title);
	  	$('.our-work-info h4').text(cat);
	});


	// Portfolio carousel dynamic change of content (has custom fields)
	$('#portfolio-carousel').carousel().on('slide.bs.carousel', function(e) {
		var currentElement = $(e.relatedTarget);

		var title = currentElement.data('title');
		var content = currentElement.data('content');
		var projectLink = currentElement.data('plink');
		var projectCategory = currentElement.data('pcategory');
		var projectDate = currentElement.data('pdate');
		var projectDuration = currentElement.data('pduration');
		var shortDescription = currentElement.data('pshortdescription');

	  	$('#projectName').text(title);
	  	$('.headline').text(title);
	  	$('#projectContent').text(content);
	  	$('#projectLink').text(projectLink);
	  	$('#projectCategory').text(projectCategory);
	  	$('#projectDate').text(projectDate);
	  	$('#projectDuration').text(projectDuration);
	  	$('#shortDescription').text(shortDescription);


	  	var colorOne = currentElement.data('colorone');
		var colorTwo = currentElement.data('colortwo');
		var colorThree = currentElement.data('colorthree');
		var colorFour = currentElement.data('colorfour');

		$("#colorOne span").css("color", "#" + colorOne);
		$("#colorTwo span").css("color", "#" + colorTwo);
		$("#colorThree span").css("color", "#" + colorThree);
		$("#colorFour span").css("color", "#" + colorFour);

		$("#colorOne h5").text(colorOne);
		$("#colorTwo h5").text(colorTwo);
		$("#colorThree h5").text(colorThree);
		$("#colorFour h5").text(colorFour);

	});

	var checkedCategories = {
		frontend: false,
		testing: false,
		uncategorized: false,
		wordpress: false,
		design: false,
		seo: false,
	};

	function checkedKeys() {
		return Object.keys(checkedCategories).filter(function(key) {
			return checkedCategories[key];
		});
	}

	function toggleAll() {
		Object.keys(checkedCategories).forEach(function(key) {
			checkedCategories[key] = false;
			$('#' + key + 'Chb').attr('checked', false);
		});
		$('.cat-all').addClass('item').removeClass('hidden');
		$('.cat-all').eq(0).addClass('active');

		$('#allChb').attr({
			disabled: true,
			checked: true
		});
	}

	$('#category-checkboxes').on('change', 'input:checkbox', function(e) {
		var $chb = $(this);
		var category = $chb.data('category');

		$('.cat-all').removeClass('active');

		if (category == 'all') {
			if (this.checked) {
				toggleAll();
				return;
			} else {
				$(this).attr('disabled', true);
			}
		}

		$('.cat-all').removeClass('item').addClass('hidden');

		if (this.checked) {
			$('#allChb').attr({
				disabled: false,
				checked: false
			});
		}

		var $catItems = $('.cat-' + category);
		checkedCategories[category] = this.checked;

		var categories = checkedKeys();
		if (categories.length === 0) {
			toggleAll();
			return;
		}

		categories.forEach(function(cat) {
			var checked = checkedCategories[cat];
			var $catItems = $('.cat-' + cat);
	        $catItems.addClass('item');
			$catItems.removeClass('hidden');
		});

		$('.cat-all.item').eq(0).addClass('active');
	});


	// Logic for video-checkboxes
	var $vbPosts = $('#vb-posts');
	var videoCats  = {
		'ux-web-tactics': true,
		'marketing-tactic': true,
		'other-tactics': true,
	};

	$('#video-checkboxes').on('change', 'input:checkbox', function() {
		var cat = $(this).data('category'); // ux-web-tactics
		videoCats[cat] = this.checked;
		var lookupCategories = [];
		for (key in videoCats) {
			if (videoCats[key] === true) {
				lookupCategories.push(key);
			}
		}

		// This doesnt allow for checkboxes to be turned off
		if (lookupCategories.length === 0) {
			this.checked = true;
			return;
		}
		$vbPosts.load('video-checkboxes/?category_name=' + lookupCategories.join(','));
	});

})(jQuery, this);
