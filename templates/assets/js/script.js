$(document).ready(function () {

	"use strict";
	var main_wind = $(window);
	var wWidth = $(window).width();


	/* =================================
	LOADER 
	=================================== */
	$(".loader").delay(400).fadeOut();
	$(".animationload").delay(400).fadeOut("fast");

	/* =================================
	NAVBAR 
	=================================== */
	jQuery(window).scroll(function () {
		var top = jQuery(document).scrollTop();
		//var batas = jQuery(window).height();
		var batas = 200;

		if (top > batas) {
			jQuery('.navbar-main').addClass('stiky');
		} else {
			jQuery('.navbar-main').removeClass('stiky');
		}
	});

	var ImgToPreview = null;

	$(".editable").on("dblclick", function (event) {

		event.preventDefault;

		ImgToPreview = $(this);

		var id = $(this).attr("id");
		var type = $(this).data('type');
		var text = $(this).html();

		var width = 0;
		var height = 0;

		var xContent = "";
		if (type == "text") {
			xContent = "<div class='form-group'><label for='" + id + "'></label><input required='required' type='text' name='xEditable_text_" + id + "' id='xEditable_text_" + id + "' class='form-control' placeholder='Enter Content' value='" + text + "'></div>";
		} else if (type == "html") {
			xContent = "<div class='form-group'><label for='" + id + "'></label><textarea required='required' type='text' name='xEditable_text_" + id + "' id='xEditable_text_" + id + "' class='form-control quilleditor' placeholder='Enter Content'>" + text + "</textarea></div>";

		} else if (type == "img") {
			width = $(this).attr('data-width');
			height = $(this).attr('data-height');
			xContent = "<div class='form-group'><label for='" + id + "'></label><input required='required' type='file' name='xEditable_text_" + id + "' id='xEditable_text_" + id + "' placeholder='Select Image'/></div>";
		}

		$(".xQuickEditButton").each(function (i, el) {
			var el = $(this);
			el.data("id", id);
			el.attr("id", id);
			el.data("type", type);
			if (type == 'img') {
				el.attr("data-width", width);
				el.attr("data-height", height);
			}
		});

		$(".xQuickEditContent").html(xContent);

		$("#editable-modal").modal('toggle');

	});


	$(".xQuickEditButton").on("click", function () {

		var id = $(this).attr('id');
		var type = $(this).data('type');

		var Editabletext = $("#xEditable_text_" + id);
		var text = $("#xEditable_text_" + id).val();

		if (type == "text" || type == "html") {

			var fd = new FormData();
			fd.append('cmskey', text);

			$.ajax("/hilcot/quickedit/" + id + "", {
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function (data, status, xhr) {
					//var jData = JSON.parse(data);
					$("#editable-modal").modal('toggle');
					$(".editable#" + id + "").html(text);
				},
				error: function (jqXhr, textStatus, errorMessage) {
					$("#editable-modal").modal('toggle');
				}
			});
		} else if (type == "img") {

			var width = $(this).attr('data-width');
			var height = $(this).attr('data-height');

			var fd = new FormData();
			var files = $("#xEditable_text_" + id)[0].files[0];
			fd.append('file', files);

			$.ajax({
				url: '/hilcot/quickupload/' + id + '/w/' + width + '/h/' + height,
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function (data, status, xhr) {
					var jData = JSON.parse(data);
					ImgToPreview.attr("src", jData.text);
					$("#editable-modal").modal('toggle');
				},
			});

		}


	});


	$('a[href="#"]').click(function (e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});
	$('.stoper').click(function (e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});


	var toolbarOptions = [
		['bold', 'italic', 'underline'],
		['blockquote', 'code-block'],
		['link', 'image'],

		[{ 'color': [] }],
		[{ 'align': [] }],

		['clean']
	];

	$('.quill-editor').each(function (i, el) {
		var el = $(this),
			id = 'quilleditor-' + i,
			val = el.val(),
			editor_height = 200;
		var div = $('<div/>').attr('id', id).css('min-height', editor_height + 'px').html(val);
		el.addClass('d-none');
		el.parent().append(div);

		//#region Fix for copy paste giving new line
		var Block = Quill.import('blots/block');
		Block.tagName = 'div';
		Quill.register(Block);
		//#endregion

		var quill = new Quill('#' + id, {
			modules: { toolbar: '#toolbar-container' },
			theme: 'snow'
		});
		quill.on('text-change', function () {
			el.html(quill.root.innerHTML);
		});
	});





	/* =================================
	BANNER ROTATOR IMAGE 
	=================================== */
	$('#slides').superslides({
		//animation: "fade",
		play: 5000,
		slide_speed: 800,
		pagination: true,
		hashchange: false,
		scrollable: true,

	});

	/* =================================
	BACK TO TOP 
	=================================== */
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function () {
		($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if ($(this).scrollTop() > offset_opacity) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function (event) {
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0,
		}, scroll_top_duration
		);
	});

	/* =================================
	ISOTOPE
	=================================== */
	$(window).load(function () {
		// INITIALIZE ISOTOPE
		var $container = $('.grid-services');
		$container.isotope({
			filter: '*',
		});
		$('.portfolio_filter a').on('click', function () {
			$('.portfolio_filter .active').removeClass('active');
			$(this).addClass('active');

			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 500,
					animationEngine: "jquery"
				}
			});
			return false;
		});
	});

	/* =================================
	OWL
	=================================== */

	var caro = $("#caro");
	caro.owlCarousel({
		items: 1,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		loop: true,
	});

	var owl = $("#owl-testimony");
	owl.owlCarousel({
		autoplay: 5000,
		stopOnHover: true,
		margin: 30,
		items: 2,
		nav: true,
		navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
		dots: true,
		loop: true,
		responsive: {
			0: {
				items: 1
			},
			1000: {
				items: 2
			}
		}
	});

	var testimony2 = $("#owl-testimony2");
	testimony2.owlCarousel({
		items: 1,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
		dots: true,
		loop: true
	});

	/* =================================
	FAQ
	=================================== */
	$('.panel-heading a').on('click', function () {
		$('.panel-heading').removeClass('active');
		$(this).parents('.panel-heading').addClass('active');
	});

	/* =================================
	MAGNIFIC POPUP
	=================================== */
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});


	/* =================================
	GOOGLE MAPS
	=================================== */

	function CustomZoomControl(controlDiv, map) {
		//grap the zoom elements from the DOM and insert them in the map
		var controlUIzoomIn = document.getElementById('cd-zoom-in'),
			controlUIzoomOut = document.getElementById('cd-zoom-out');
		controlDiv.appendChild(controlUIzoomIn);
		controlDiv.appendChild(controlUIzoomOut);

		// Setup the click event listeners and zoom-in or out according to the clicked element
		google.maps.event.addDomListener(controlUIzoomIn, 'click', function () {
			map.setZoom(map.getZoom() + 1)
		});
		google.maps.event.addDomListener(controlUIzoomOut, 'click', function () {
			map.setZoom(map.getZoom() - 1)
		});
	}

	if ($('#maps').length) {
		//set your google maps parameters
		var myLat = $('#maps').data('lat'),
			myLng = $('#maps').data('lng'),
			myMarkerx = $('#maps').data('marker');


		var latitude = myLat,
			longitude = myLng,
			markerx = myMarkerx,
			map_zoom = 14;

		//google map custom marker icon - .png fallback for IE11
		var is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1;
		var marker_url = (is_internetExplorer11) ? markerx : markerx;

		//define the basic color of your map, plus a value for saturation and brightness
		var main_color = '#000000',
			saturation_value = -80,
			brightness_value = 5;

		//we define here the style of the map
		var style = [
			{
				//set saturation for the labels on the map
				elementType: "labels",
				stylers: [
					{ saturation: saturation_value }
				]
			},
			{ //poi stands for point of interest - don't show these lables on the map
				featureType: "poi",
				elementType: "labels",
				stylers: [
					{ visibility: "off" }
				]
			},
			{
				//don't show highways lables on the map
				featureType: 'road.highway',
				elementType: 'labels',
				stylers: [
					{ visibility: "off" }
				]
			},
			{
				//don't show local road lables on the map
				featureType: "road.local",
				elementType: "labels.icon",
				stylers: [
					{ visibility: "off" }
				]
			},
			{
				//don't show arterial road lables on the map
				featureType: "road.arterial",
				elementType: "labels.icon",
				stylers: [
					{ visibility: "off" }
				]
			},
			{
				//don't show road lables on the map
				featureType: "road",
				elementType: "geometry.stroke",
				stylers: [
					{ visibility: "off" }
				]
			},
			//style different elements on the map
			{
				featureType: "transit",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.government",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.sport_complex",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.attraction",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.business",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "transit",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "transit.station",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "landscape",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]

			},
			{
				featureType: "road",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "road.highway",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "water",
				elementType: "geometry",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" },
					{ lightness: brightness_value },
					{ saturation: saturation_value }
				]
			}
		];

		//set google map options
		var map_options = {
			center: new google.maps.LatLng(latitude, longitude),
			zoom: map_zoom,
			panControl: false,
			zoomControl: false,
			mapTypeControl: false,
			streetViewControl: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			styles: style,
		}
		//inizialize the map
		var map = new google.maps.Map(document.getElementById('maps'), map_options);
		//add a custom marker to the map
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(latitude, longitude),
			map: map,
			visible: true,
			icon: marker_url,
		});

		var zoomControlDiv = document.createElement('div');
		var zoomControl = new CustomZoomControl(zoomControlDiv, map);

		//insert the zoom div on the top left of the map
		map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
	}

});





