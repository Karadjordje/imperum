(function ($, root, undefined) {


	// HEX TO RGB CHECK FOR COLOR
	function hexToRgb (hex) {

		if (hex.charAt && hex.charAt(0) === '#') {
			hex = removeHash(hex)
		}

	if (hex.length === 3) {
		hex = expand(hex)
	}

	var bigint = parseInt(hex, 16)
	var r = (bigint >> 16) & 255
	var g = (bigint >> 8) & 255
	var b = bigint & 255

	return [r, g, b]
	}

	function removeHash (hex) {

		var arr = hex.split('')
		arr.shift()
		return arr.join('')
	}

	function expand (hex) {

		return hex
	    .split('')
	    .reduce(function (accum, value) {

		return accum.concat([value, value])
	    }, [])
	    .join('')
	}

	function contrast(hex) {
		var rgb = hexToRgb(hex);
		var o = Math.round(((parseInt(rgb[0]) * 299) + (parseInt(rgb[1]) * 587) + (parseInt(rgb[2]) * 114)) /1000);

		return (o <= 180) ? 'dark' : 'light';
	}


	$(function () {

		//SMALL NAVIGATION TOGGLE
		var btnSmallNav = $('.btnSmallNav');
		var smallNav = $('.smallNav');
		var closeSmallNav = $('.icon-X');
		var smallNavLinks = $('.smallNav li');

		btnSmallNav.click( function() {
			smallNav.slideDown(350);
		});
		closeSmallNav.click( function() {
			smallNav.slideUp(350);
		});
		smallNavLinks.click( function() {
			smallNav.slideUp(350);
		});

		// Form validation
		$("#submit_btn").click(function() {

			var data = {
			    user_name: $("input[name=name]").val(),
			    user_email: $("input[name=email]").val(),
			    subject: $("input[name=subject]").val(),
			    msg: $("textarea[name=message]").val()
			};
			$.post("//imperium-la.com/wp-content/plugins/cfp/contact_me_ENG.php", data, function(e) {
		        $("#contact_form  input[required=true], #contact_form textarea[required=true]").val("")
		        $('#contact_results').html(e.text);

		        if (e.type === "message") {
		        	$("input[name=name]").val(" ");
		        	$("input[name=email]").val(" ");
		        	$("input[name=subject]").val(" ");
		        	$("textarea[name=message]").val(" ");
		        } else {
		        	$('#contact_results').html(e.text);
		        }
		    }, "json");

		})


		// var windowsize = $(window).width();

	 //    $(window).on('resize', function() {
	 //      var windowsize = $(window).width();
	 //        if(windowsize > 1200) {
	 //            $('.head-nav').midnight().css({
	 //                'top' : '100px',
	 //                'width' : '110px',
	 //                'right' : 'auto',
	 //                'left' : '50%',
	 //                'transform' : 'translate(-570px, 0)'
	 //            });

	 //            $('.follow-nav').midnight().css({
	 //                'top' : '104px',
	 //                'width' : '20px',
	 //                'right' : 'auto',
	 //                'left' : '50%',
	 //                'transform' : 'translate(565px, 0)'
	 //            });

	 //            $('.style-nav').midnight().css({
	 //                'top': '180px',
	 //                'right' : 'auto',
	 //                'width' : '125px',
	 //                'left' : '50%',
	 //                'transform' : 'translate(-585px, 0)'
	 //            });

	 //            $('.icons-nav').midnight().css({
	 //                'top': '185px',
	 //                'right' : 'auto',
	 //                'width' : '20px',
	 //                'height' : '140px',
	 //                'left' : '50%',
	 //                'transform' : 'translate(563px, 0)'
	 //            });

	 //            $('.footer').midnight().css({
	 //                'bottom': '5%',
	 //                'top': 'auto',
	 //                'right' : 'auto',
	 //                'width' : '150px',
	 //                'left' : '50%',
	 //                'transform' : 'translate(-570px, 0)'
	 //            });
	 //        }
	 //        else {
	 //        	return;
	 //        //     $('.head-nav').midnight().css({
	 //        //         'top' : '80px',
	 //        //         'width' : '132px',
	 //        //         'right' : 'auto',
	 //        //         'left' : '50%',
	 //        //         'transform' : 'translate(-470px, 0)'
	 //        //     });

	 //        //     $('.follow-nav').midnight().css({
	 //        //         'top' : '100px',
	 //        //         'width' : '20px',
	 //        //         'right' : 'auto',
	 //        //         'left' : '50%',
	 //        //         'transform' : 'translate(465px, 0)'
	 //        //     });


	 //        //     $('.style-nav').midnight().css({
	 //        //         'top': '165px',
	 //        //         'right' : 'auto',
	 //        //         'width' : '125px',
	 //        //         'left' : '50%',
	 //        //         'transform' : 'translate(-485px, 0)'
	 //        //     });

	 //        //     $('.icons-nav').midnight().css({
	 //        //         'top': '190px',
	 //        //         'right' : 'auto',
	 //        //         'width' : '20px',
	 //        //         'height' : '140px',
	 //        //         'left' : '50%',
	 //        //         'transform' : 'translate(465px, 0)'
	 //        //     });

	 //        //     $('.footer').midnight().css({
	 //        //         'bottom': '5%',
	 //        //         'top': 'auto',
	 //        //         'right' : 'auto',
	 //        //         'width' : '150px',
	 //        //         'left' : '50%',
	 //        //         'transform' : 'translate(-470px, 0)'
	 //        //     });
	 //        }
	 //    });

 		$('.head-nav').midnight().css({
            'top' : '100px',
            'width' : '122px',
            'right' : 'auto',
            'left' : '50%',
            'transform' : 'translate(-570px, 0)'
        });

        $('.follow-nav').midnight().css({
            'top' : '104px',
            'width' : '20px',
            'right' : 'auto',
            'left' : '50%',
            'transform' : 'translate(565px, 0)'
        });

        $('.style-nav').midnight().css({
            'top': '180px',
            'right' : 'auto',
            'width' : '141px',
            'left' : '50%',
            'transform' : 'translate(-585px, 0)'
        });

        $('.icons-nav').midnight().css({
            'top': '185px',
            'right' : 'auto',
            'width' : '20px',
            'height' : '137px',
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
		  svgStyle: {width: '100%', height: '2px'},
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
		    var progressBarText = $('#progressbar');
		    var loadingPage = $('#loadingPage');
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

		//PREVENT LOADINGSCREEN FROM SHOWING MULTIPLE TIMES
		var cookieValue = $.cookie("user-session");
		if (cookieValue) {
			$('#loadingPage').hide();
		}
		$.cookie("user-session", "1");


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
		var loc = window.location.pathname;
		var urlArray = new Array( "Service/", "Portfolio/", "Videoblog/", "html5-blank/video-6/", "consultation/", "pricing-plan/" );
		var isFound = true;
		for(var i=0,len=urlArray.length;i<len;i++) {
			if(loc.indexOf(urlArray[i])> -1) {
			    isFound = false;
			    break;
			}
		}

		if(isFound) {
			$('.scrollToHome').click(function(){
			  $(window).scrollTo("#home", 1500);
			});
		}

		$('.scrollToContact').click(function(){
		  $(window).scrollTo($('#contact'), 1500);
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
		var projectLink = currentElement.data('link');

	  	$('.our-work-info h3').text(title);
	  	$('.our-work-info h4').text(cat);
	  	$("#externalLink").attr('href', projectLink);
	});

	// This will link to specific slide when page loads so we dont have empty content
	$('#our-work-carousel').carousel(1);


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

	  	var linkInserted = $('#projectLink').text();
	  	var projectLinkUrl = $('#projectLink').text();
	  	if (projectLinkUrl.indexOf('http') === 0) {
	  		projectLinkUrl = projectLinkUrl.split('//')[1].replace(/\//g, '');
	  	}

	  	$('#projectLink').text('');
	  	var aTag = $('#projectLink').append('<a rel="noopener noreferrer" target="_blank" href="'
	  	 + linkInserted + '">' + projectLinkUrl + '</a>');


	  	var colorOne = currentElement.data('colorone');
		var colorTwo = currentElement.data('colortwo');
		var colorThree = currentElement.data('colorthree');
		var colorFour = currentElement.data('colorfour');
		var activeShadow = "#c09858 1px 0px, #c09858 0px 1px, #c09858 0px -1px, #c09858 -1px 0px";

		$("#colorOne span").css("color", "#" + colorOne);
		$("#colorTwo span").css("color", "#" + colorTwo);
		$("#colorThree span").css("color", "#" + colorThree);
		$("#colorFour span").css("color", "#" + colorFour);

		$("#colorOne .project-icon").css('textShadow', contrast(colorOne) === 'light' ? activeShadow : 'none');
		$("#colorTwo .project-icon").css('textShadow', contrast(colorTwo) === 'light' ? activeShadow : 'none');
		$("#colorThree .project-icon").css('textShadow', contrast(colorThree) === 'light' ? activeShadow : 'none');
		$("#colorFour .project-icon").css('textShadow', contrast(colorFour) === 'light' ? activeShadow : 'none');

		$("#colorOne h5").text(colorOne);
		$("#colorTwo h5").text(colorTwo);
		$("#colorThree h5").text(colorThree);
		$("#colorFour h5").text(colorFour);
		$("#linkToProject").attr('href', projectLink);

		var span = '<span class="dot">&#9679;</span>'
		$(".addSpan").append(span);
	});

	// This will link to specific slide when page loads so we dont have empty content
	$('#portfolio-carousel').carousel(1);


	var checkedCategories = {
		frontend: false,
		backend: false,
		marketing: false,
		design: false,
		uncategorized: false,
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
