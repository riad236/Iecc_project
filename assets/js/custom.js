




$(function(){ //document ready
	$('.homepageCarousel').slick({dots:false,infinite:true,speed:1000,autoplaySpeed:5000,fade:true,cssEase:'linear',autoplay:true});
	$(".js-enquire-has-sub").hover(
	  function() {
	    $( this ).addClass( "show-sub" );
	  }, function() {
	    $( this ).removeClass( "show-sub" );
	  }
	);

	$(".js-toggle-sm-navigation").click(function(event) {
		$("main").toggleClass('offcanvas');
	});	
	$(".ui.dropdown").dropdown();
	$('.destination-slider').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }	    
	  ]
	});
	// $('.testimonial-slider').slick({
	//   dots: true,
	//   infinite: false,
	//   speed: 300,
	//   slidesToShow: 3,
	//   slidesToScroll: 3,
	//   responsive: [
	//     {
	//       breakpoint: 1024,
	//       settings: {
	//         slidesToShow: 3,
	//         slidesToScroll: 3,
	//         infinite: true,
	//         dots: true
	//       }
	//     },
	//     {
	//       breakpoint: 600,
	//       settings: {
	//         slidesToShow: 2,
	//         slidesToScroll: 2
	//       }
	//     },
	//     {
	//       breakpoint: 480,
	//       settings: {
	//         slidesToShow: 1,
	//         slidesToScroll: 1
	//       }
	//     }
	//   ]
	// });
	$('.partners-slider').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 6,
	  slidesToScroll: 6,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }	   
	  ]
	});



	window.showSlide = function(current_slide){
		$.each( $(".testimonial-slider .testimonial-card") , function(i,elm){
			// page 1 print 3
			start = current_slide*3 -3;
			end = current_slide*3 -1;
			$(elm).fadeOut(0,function () {
				if (i>= start && i <= end){
					console.log(i, elm);
					$(elm).fadeIn(800);
				}
			});

		});
	}

	var total_slides = $(".testimonial-slider .testimonial-card").length;
	var pages = Math.ceil(total_slides/3);
	window.current_slide = 1;
	$(".testimonial-slider .slick-next").click(function (e) {

		$(".testimonial-slider .slick-next,.testimonial-slider .slick-prev").show();
		current_slide++;

		console.log(current_slide);
		showSlide(current_slide);


		if (current_slide >= pages ){ //last page
			$(this).hide();
			$(".testimonial-slider .slick-prev").show();
		}else if (current_slide <= 1){ //first page
			$(".testimonial-slider .slick-prev").hide();
			$(this).show();

		}
	}).trigger('click');


	$(".testimonial-slider .slick-prev").click(function (e) {
		$(".testimonial-slider .slick-next,.testimonial-slider .slick-prev").show();
		current_slide--;

		if (current_slide >= pages ){ //last page
			$(this).show();
			$(".testimonial-slider .slick-prev").hide();
		}else if (current_slide <= 1){ //first page
			$(".testimonial-slider .slick-prev").show();
			$(this).hide();

		}

		console.log(current_slide);
		showSlide(current_slide);
	}).trigger('click');



	$(".sign-in-modal").click(function(e){
		e.preventDefault();
		$(".socialOverlay,.modal.social-modal").fadeIn(500);
	});
	$(".modal .close").click(function () {
		$(this).closest(".modal").hide();
		$(".socialOverlay").hide();
	});


	$('.light-gallery').justifiedGallery({
		rowHeight:250,
		maxRowHeight:250
	}).on('jg.complete', function (e) {
		$('.light-gallery').lightGallery({
			subHtmlSelectorRelative: true,
			thumbnail:true,
			animateThumb: false,
			showThumbByDefault: false
		});
	});





});