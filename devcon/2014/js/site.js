$(function() {
	var sw = document.body.clientWidth, breakpoint = 700, mobile = true;
	var checkMobile = function() {
		mobile = (sw > breakpoint) ? false : true;
	};

	checkMobile();
	$(window).resize(function(){
		sw = document.body.clientWidth;	
		checkMobile();
		if (mobile) {
			$(".sectioninfo").addClass("relative");
		} else {
			mount();
		}
	});
	
	$(window).on("scroll", function(){
		var windowScroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		
		if (windowScroll > (windowHeight - 400)) {
			$("#nav").slideDown(300);
		} else {
			$("#nav").slideUp(100);
		}
		
		if (mobile) {
			$(".sectioninfo").addClass("relative");
		} else {
			mount();
		}
	});
	
	function mount() {
        var e, n, i;
		$(".sectioninfo").each(function(){			
			n = $(this).parent().parent().prevAll("div.contentsection").offset().top + $(this).parent().parent().prevAll("div.contentsection").outerHeight() -69, 
			e = $(this), 
			i = $(window).scrollTop(), 
			i >= n ? e.hasClass("relative") && e.removeClass("relative") : e.addClass("relative");
		});
    }

	$('#nav a, .arrow a').click(function(){
	    $('html, body').stop().animate({
	        scrollTop: $( $(this).attr('href') ).offset().top
	    }, 1000, "easeInOutCirc");
	    return false;
	});
	
	var intID;
	intID = setInterval ( RepeatCall, 400 );

	function RepeatCall() {
		$(".flashing").fadeIn(500).fadeOut(700);
	}
	
	$("a[class=example_group]").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'overlayColor'      : '#000'
	});
	
	
	var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();
	var marker;
	var map;
	

	function initialize() {
		directionsDisplay = new google.maps.DirectionsRenderer();
		var mapOptions = {
	    	zoom: 8,
		  	scrollwheel: false,
			mapTypeControl: false,
			disableDoubleClickZoom: true,
			disableDefaultUI: true,
			draggable: true,
			center: true,
		    center: new google.maps.LatLng($("#map_canvas").data("lat"), $("#map_canvas").data("long")),
		    mapTypeId: google.maps.MapTypeId.ROADMAP
	    };

	    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
	    marker = new google.maps.Marker({
	    	map:map,
	    	draggable:true,
	   		animation: google.maps.Animation.DROP,
	   		position: new google.maps.LatLng($("#map_canvas").data("lat"), $("#map_canvas").data("long")),
	    });
	 	google.maps.event.addListener(marker, 'click', toggleBounce);
		directionsDisplay.setMap(map);
	}

	function toggleBounce() {
		if (marker.getAnimation() != null) {
			marker.setAnimation(null);
	   	} else {
	    	marker.setAnimation(google.maps.Animation.BOUNCE);
		}
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
	function getLocation() {
	  if (navigator.geolocation) {
	  	navigator.geolocation.getCurrentPosition(showPosition);
	  }
	  else {
		alert("Geolocation is not supported by this browser.");
	  }
	}
	
	function showPosition(position) {
		marker = new google.maps.Marker({
	    	map:map,
	    	draggable:true,
	    	animation: google.maps.Animation.DROP,
	    	position: new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
	    });
	    google.maps.event.addListener(marker, 'click', toggleBounce);
		map.panTo(new google.maps.LatLng(position.coords.latitude,position.coords.longitude));
		calcRoute(new google.maps.LatLng(position.coords.latitude,position.coords.longitude), new google.maps.LatLng($("#map_canvas").data("lat"), $("#map_canvas").data("long")));
	}
	
	$(".getLocation").click(function(event){
		event.preventDefault();
		getLocation();
	});
	
	function calcRoute(thestart,theend) {
	  var start = thestart;
	  var end = theend;
	  var request = {
	    origin:start,
	    destination:end,
	    travelMode: google.maps.TravelMode.DRIVING
	  };
	  directionsService.route(request, function(result, status) {
	    if (status == google.maps.DirectionsStatus.OK) {
	      directionsDisplay.setDirections(result);
	    }
	  });
	}
}); 
