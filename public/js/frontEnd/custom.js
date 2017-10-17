$(function(){
    "use strict";
    // js for dropdown menu
    var navcollapse = $('.navbar-collapse ul li');
    navcollapse.hover(function() {
        $(this).children('ul').stop(true, false, true).slideToggle(300);
    });
    //js or mobile menu
    var mobilebtn= $('#mobile-btn');
    var mbmenu = $('.mobile-menu');
    mobilebtn.on("click", function(){
		/* Act on the event */
        mbmenu.slideToggle(300).toggleClass('active_menu');
    });
    var menuit1 = $('#menu ul.main-menu li.it1');
    var submenu1 = $('ul.sub-menu.sub1');
    menuit1.on("click", function(){
        submenu1.toggle('active');
        if(submenu1.hasClass('active')){
            submenu1.style.display == "block";
        }
    });
    var menuit2 = $('#menu ul.main-menu li.it2');
    var submenu2 = $('ul.sub-menu.sub2');
    menuit2.on("click", function(){
        submenu2.toggle('active');
        if(submenu2.hasClass('active')){
            submenu2.style.display == "block";
        }
    });
    var menuit3 = $('#menu ul.main-menu li.it3');
    var submenu3 = $('ul.sub-menu.sub3');
    menuit3.on("click", function(){
        submenu3.toggle('active');
        if(submenu3.hasClass('active')){
            submenu3.style.display == "block";
        }
    });
    var menuit4 = $('#menu ul.main-menu li.it4');
    var submenu4 = $('ul.sub-menu.sub4');
    menuit4.on("click", function(){
        submenu4.toggle('active');
        if(submenu4.hasClass('active')){
            submenu4.style.display == "block";
        }
    });
    var menuit5 = $('#menu ul.main-menu li.it5');
    var submenu5 = $('ul.sub-menu.sub5');
    menuit5.on("click", function(){
        submenu5.toggle('active');
        if(submenu5.hasClass('active')){
            submenu5.style.display == "block";
        }
    });
    	//js for testimonial
    	var owltestimonial = $("#owl-testimonial");
		owltestimonial.owlCarousel({
			navigation : true, // Show next and prev buttons
			navigationText: [
			"<i class='fa fa-chevron-left' aria-hidden='true'></i>",
			"<i class='fa fa-chevron-right' aria-hidden='true'></i>"
			],
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			items : 1,
		    itemsCustom : false,
		    itemsDesktop : [1199,1],
		    itemsDesktopSmall : [980,1],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    singleItem : false,
		    itemsScaleUp : false,
		});
		var owltestimonialv2 = $("#owl-testimonialv2");
		owltestimonialv2.owlCarousel({
			navigation : true, // Show next and prev buttons
			navigationText: [
			"<i class='fa fa-chevron-left' aria-hidden='true'></i>",
			"<i class='fa fa-chevron-right' aria-hidden='true'></i>"
			],
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			items : 1,
		    itemsCustom : false,
		    itemsDesktop : [1199,1],
		    itemsDesktopSmall : [980,1],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    singleItem : false,
		    itemsScaleUp : false,
		});
		//js for testimonial
		var svtestimonial = $("#service-testimonial");
		svtestimonial.owlCarousel({
			navigation : true, // Show next and prev buttons
			navigationText: [
			"<i class='fa fa-angle-left' aria-hidden='true'></i>",
			"<i class='fa fa-angle-right' aria-hidden='true'></i>"
			],
			// autoPlay: 3000, //Set AutoPlay to 3 seconds
			items : 3,
		    itemsCustom : false,
		    itemsDesktop : [1199,3],
		    itemsDesktopSmall : [980,2],
		    itemsTablet: [768,2],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    singleItem : false,
		    itemsScaleUp : false,
		});
		var owlclients = $("#owl-clients");
		owlclients.owlCarousel({
			navigation : true, // Show next and prev buttons
			navigationText: [
			"<i class='fa fa-angle-left' aria-hidden='true'></i>",
			"<i class='fa fa-angle-right' aria-hidden='true'></i>"
			],
			// autoPlay: 3000, //Set AutoPlay to 3 seconds
			items : 3,
		    itemsCustom : false,
		    itemsDesktop : [1199,3],
		    itemsDesktopSmall : [980,2],
		    itemsTablet: [768,2],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    singleItem : false,
		    itemsScaleUp : false,
		});
		//js for testimonial
		var owlproject = $("#owl-project");
		owlproject.owlCarousel({
			navigation : true, // Show next and prev buttons
			navigationText: [
			"<i class='fa fa-angle-left' aria-hidden='true'></i>",
			"<i class='fa fa-angle-right' aria-hidden='true'></i>"
			],
			// autoPlay: 3000, //Set AutoPlay to 3 seconds
			items : 4,
		    itemsCustom : false,
		    itemsDesktop : [1199,3],
		    itemsDesktopSmall : [980,2],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    singleItem : false,
		    itemsScaleUp : false,
		});
	//js for testimonial
	var owlservicev3 = $("#owl-servicev3");
	owlservicev3.owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: [
		"<i class='ion-ios-arrow-back'></i>",
		"<i class='ion-ios-arrow-forward'></i>"
		],
		// autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 3,
		itemsCustom : false,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [980,1],
		itemsTablet: [768,1],
		itemsTabletSmall: false,
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	});
	var owlclientsv3 = $("#owl-clientsv3");
	owlclientsv3.owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: [
		"<i class='fa fa-angle-left' aria-hidden='true'></i>",
		"<i class='fa fa-angle-right' aria-hidden='true'></i>"
		],
		// autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 2,
		itemsCustom : false,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [980,2],
		itemsTablet: [768,1],
		itemsTabletSmall: false,
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	});
	var owlthumbnail = $("#owl-thumbnail");
	var owlintro = $("#owl-intro");
	owlthumbnail.owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: [
		"<i class='fa fa-angle-left' aria-hidden='true'></i>",
		"<i class='fa fa-angle-right' aria-hidden='true'></i>"
		],
		// autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 1,
	    itemsCustom : false,
	    itemsDesktop : [1199,1],
	    itemsDesktopSmall : [980,1],
	    itemsTablet: [768,1],
	    itemsTabletSmall: false,
	    itemsMobile : [479,1],
	    singleItem : false,
	    itemsScaleUp : false,
	});
	owlintro.owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: [
		"<i class='fa fa-angle-left' aria-hidden='true'></i>",
		"<i class='fa fa-angle-right' aria-hidden='true'></i>"
		],
		// autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 1,
	    itemsCustom : false,
	    itemsDesktop : [1199,1],
	    itemsDesktopSmall : [980,1],
	    itemsTablet: [768,1],
	    itemsTabletSmall: false,
	    itemsMobile : [479,1],
	    singleItem : false,
	    itemsScaleUp : false,
	});
	var owlimgdetail = $("#owl-imgdetail");
	owlimgdetail.owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: [
		"<i class='fa fa-angle-left' aria-hidden='true'></i>",
		"<i class='fa fa-angle-right' aria-hidden='true'></i>"
		],
		// autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 4,
	    itemsCustom : false,
	    itemsDesktop : [1199,4],
	    itemsDesktopSmall : [980,3],
	    itemsTablet: [768,2],
	    itemsTabletSmall: false,
	    itemsMobile : [479,1],
	    singleItem : false,
	    itemsScaleUp : false,
	});
	//js for accordion
	var acc = document.getElementsByClassName("accordion");
	var i;
	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function(){
		this.classList.toggle("active");
		this.nextElementSibling.classList.toggle("show");
		}
	}
	//js for tabs
	var tabsClick = $('.tabs .tab-links a');
	tabsClick.on('click', function(e)  {
		var currentAttrValue = $(this).attr('href');
		var tabsCurrent = $('.tabs ' + currentAttrValue);
		// Show/Hide Tabs
		tabsCurrent.show().siblings().hide();
		// Change/remove current tab to active
		$(this).parent('li').addClass('active').siblings().removeClass('active');
		e.preventDefault();
	});
	// js for isotope
	var grid = $(".grid");
	grid.isotope({
		itemSelector: '.pro-it',
		layoutMode: 'fitRows',
		});
		var menufilter = $('ul.menu-filter li');
		menufilter.on("click", function(){
			menufilter.removeClass('active');
			$(this).addClass('active');
			var selector =$(this).attr('data-filter');
			$(".grid").isotope({
				filter: selector,
				animationOption: {
				 duration: 750,
				 easing: 'linear',
				 queue: false,
			}
		});
		return false;
	});
	// masonry layout
	var gridman = $('.grid-man');
	gridman.masonry({
		// options...
		itemSelector: '.grid-item-man',
		// columnWidth: 200
	});

	//js for range select
	var sliderrange = $( "#slider-range" );
	sliderrange.slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
		slide: function( event, ui ) {
			var amount = $( "#amount" );
			amount.val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
    //js for quantiity input
    var numbersrow = $(".numbers-row");
	numbersrow.append('<div class="inc button">+</div><div class="dec button">-</div>');
	var button = $(".button");
		button.on("click", function() {
			var $button = $(this);
			var oldValue = $button.parent().find("input").val();
			if ($button.text() == "+") {
			  var newVal = parseFloat(oldValue) + 1;
			} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
			} else {
			newVal = 0;
		}
	}
		$button.parent().find("input").val(newVal);
	});
	// js for time count down
	function getTimeRemaining(endtime) {
	  var t = Date.parse(endtime) - Date.parse(new Date());
	  var seconds = Math.floor((t / 1000) % 60);
	  var minutes = Math.floor((t / 1000 / 60) % 60);
	  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	  var days = Math.floor(t / (1000 * 60 * 60 * 24));
	  return {
	    'total': t,
	    'days': days,
	    'hours': hours,
	    'minutes': minutes,
	    'seconds': seconds
	  };
	}
	function initializeClock(id, endtime) {
	  var clock = document.getElementById(id);
	  if( clock != null){
		var daysSpan = clock.querySelector('.days');
		var hoursSpan = clock.querySelector('.hours');
		var minutesSpan = clock.querySelector('.minutes');
		var secondsSpan = clock.querySelector('.seconds');
		function updateClock() {
	    var t = getTimeRemaining(endtime);

	    daysSpan.innerHTML = t.days;
	    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
	    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
	    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

	    if (t.total <= 0) {
	      clearInterval(timeinterval);
	    }
	  }
	  updateClock();
	  var timeinterval = setInterval(updateClock, 1000);
	  }
	}
	var deadline = new Date(Date.parse(new Date()) + 365 * 24 * 60 * 60 * 1000);
	initializeClock('clockdiv', deadline);

	//== JS for goole map
	// When the window has finished loading create our google map below
    // google.maps.event.addDomListener(window, 'load', init);
    /*window.addEventListener('load',function(){
      	// Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map_canvas');
        var mapcheck = $('#map-check');
        if(mapElement != null){
        	if(mapcheck.hasClass('map')){
	        	var mapOptions = {
	            // How zoomed in you want the map to start at (always required)
	            zoom: 9,

	            // The latitude and longitude to center the map (always required)
	            center: new google.maps.LatLng(12.3584562, -1.6769299), // New York
	            scrollwheel:  false,

	            // How you would like to style the map.
	            // This is where you would paste any style found on Snazzy Maps.
	            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
	       		};
	        }else{
				var mapOptions = {
				// How zoomed in you want the map to start at (always required)
				zoom: 9,

				// The latitude and longitude to center the map (always required)
				center: new google.maps.LatLng(12.3584562, -1.6769299), // New York
				 scrollwheel:  false,
				// How you would like to style the map.
				// This is where you would paste any style found on Snazzy Maps.
				styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#00cb9b"},{"visibility":"on"}]}]
				};
      		}
	        // Create the Google Map using our element and options defined above
	        var map = new google.maps.Map(mapElement, mapOptions);
	        // Let's also add a marker while we're at it
	        if (mapcheck.hasClass('map')) {
			        	var marker = new google.maps.Marker({
			            position: new google.maps.LatLng(12.3584562, -1.6769299),
			            map: map,
			            icon:  '../commun/images/uploads/biglocation.png',
			            title: 'Afrik Eveil !'
		       		});
	        }else{
		        	var marker = new google.maps.Marker({
		            position: new google.maps.LatLng(12.3584562, -1.6769299),
		            map: map,
		            icon:  '../commun/images/uploads/location.png',
		            title: 'Afrik Eveil !'
		        });
	        }
        }
    },false);*/
    //js for scroll menu
	$(window).scroll(function(event) {
		/* Act on the event */
		var scrollPos = $(window).scrollTop(),
		header = $('header');
		if(scrollPos > 1){
			header.addClass("sticky");

		}else{
			//header.removeClass("sticky");
		}
	});
	//js for search box
	var btnsearch = $( 'button.search-top-bt' );
	var topsearch = $('.topsearch' );
	var hthd = $('.ht-header, .ht-headerv3');
	var hthd2 = $('.ht-headerv2');
	var hdtopct = $('.hdtop-ct');
	btnsearch.on("click", function(){
		topsearch.toggleClass( 'show-searchbox');
		hthd.toggleClass('hd-change');
		hthd2.toggleClass('hd-show');
		hdtopct.toggleClass('hdtop-show');
	});
	var count = $('.count');
	count.each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 20000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});
	//js for nav icon
	var navicon1 = $('#nav-icon1');
	navicon1.on("click", function(){
		$(this).toggleClass('open');
	});

	var tpj=jQuery;
	var revapi12;
	tpj(function() {
		if(tpj("#rev_slider_12_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_12_1");
		}else{
			revapi12 = tpj("#rev_slider_12_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"../src/js",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
					onHoverStop:"off",
					arrows: {
						style:"hebe",
						enable:true,
						hide_onmobile:false,
						hide_onleave:false,
						tmp:'<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span>    <span class="tp-arr-imgholder"></span> </div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1920,1024,778,480],
				gridheight:[960,568,960,720],
				lazyType:"none",
				shadow:0,
				spinner:"spinner3",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});	/*ready*/
	var revapi3;
	tpj(function() {
		if(tpj("#rev_slider_3_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_3_1");
		}else{
			revapi3 = tpj("#rev_slider_3_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"../src/js",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"on",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
					onHoverStop:"off",
					arrows: {
						style:"hebe",
						enable:true,
						hide_onmobile:false,
						hide_onleave:false,
						tmp:'<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span>    <span class="tp-arr-imgholder"></span> </div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1920,1024,778,480],
				gridheight:[960,568,960,720],
				lazyType:"none",
				shadow:12,
				spinner:"spinner3",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"on",
				autoHeight:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});	/*ready*/
	var revapi13;
	tpj(function() {
		if(tpj("#rev_slider_13_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_13_1");
		}else{
			revapi13 = tpj("#rev_slider_13_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"../src/js",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"on",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
					onHoverStop:"off",
					arrows: {
						style:"hebe",
						enable:true,
						hide_onmobile:false,
						hide_onleave:false,
						tmp:'<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span>    <span class="tp-arr-imgholder"></span> </div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1920,1024,778,480],
				gridheight:[960,568,960,720],
				lazyType:"none",
				shadow:0,
				spinner:"spinner3",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"on",
				autoHeight:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});	/*ready*/
	// -------------------------------------------------------------
	//   Basic Navigation
	// -------------------------------------------------------------
	(function () {
		var $frame  = $('#hsscroll1');
		var $slidee = $frame.children('ul').eq(0);
		var $wrap   = $frame.parent();

		// Call Sly on frame
		$frame.sly({
		    horizontal: 1,
		    itemNav: 'basic',
		    smart: 0,
		    scrollBy: 1,
		    mouseDragging: 1,
		    swingSpeed: 0.2,
			scrollBar: $wrap.find('.hsscrollbar'),
		    dragHandle: 1,
			clickBar: 1,
			elasticBounds: 1,
		    speed: 600,
		    startAt: 0,
		});
	}());
	var fancyboxmedia = $('.fancybox-media');
	fancyboxmedia.fancybox({
		openEffect  : 'float',
		closeEffect : 'none',
		helpers : {
			media : {},
			overlay: {
		        locked: false
		    }
		}
	});
	var imglightbox = $(".img-lightbox");
	imglightbox.fancybox({
		helpers: {
			title : {
				type : 'float'
			},
			overlay: {
				locked: false
			}
		}
	});
});