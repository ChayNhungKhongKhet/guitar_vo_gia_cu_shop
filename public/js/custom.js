/*--------------------- Copyright (c) 2020 -----------------------
[Master Javascript]
Project: Lawyer - Responsive HTML Template 
Version: 1.0.0
Assigned to: Theme Forest
-------------------------------------------------------------------*/
(function ($) {
	"use strict";
	/*-----------------------------------------------------
		Function  Start
	-----------------------------------------------------*/
	var Lawyer = {
		initialised: false,
		version: 1.0,
		mobile: false,
		init: function () {
			if (!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}
			/*-----------------------------------------------------
				Function Calling
			-----------------------------------------------------*/
			this.preLoader();
			this.FixedHeader();
			this.wowAnimation();
			this.navMenu();
			this.arrivals();
			this.fashionSlider();
			this.collection();
			this.topButton();
			this.casesFilter();
			this.countryFlag();
			this.CountDown();
			this.ProductDetail();
			this.ProductQuantity();
			this.checkoutPage();
			this.SelectTwo();
			this.currency();
			this.ListGridView();
			this.ListGridIcon();
			this.LoginFormClick();
			this.categoryList();
			this.productzoom();
			
		},

		/*-----------------------------------------------------
				Fix Preloader
			-----------------------------------------------------*/
			preLoader: function () {
			    jQuery(window).on('load', function() {
	        jQuery(".pe_loader").fadeOut();
	        jQuery("#preloader").delay(300).fadeOut("slow");
	    });
			},
		/*-----------------------------------------------------
			Country Cases
		-----------------------------------------------------*/
		countryFlag: function () {
			if ($('.pe_top_country').length > 0) {
             function format(item, state) {
                 if (!item.id) {
                   return item.text;
				 }
				 //console.logo(item);
				 //item.id.toLowerCase();
                 var countryUrl = "https://lipis.github.io/flag-icon-css/flags/4x3/";
                 var url = state ? stateUrl : countryUrl;
                 var img = $("<img>", {
                   class: "img-flag",
                   width: 26,
				   src: url + item.element.value.toLowerCase() + ".svg"
				   
                 });
                 var span = $("<span>", {
                   text: " " + item.text
                 });
                 span.prepend(img);
                 return span;
               }

               $(document).ready(function() {
                 $("#countries").select2({
                   templateResult: function(item) {
					var toLowerCase_flag = item.id == undefined ? '' : item.id.toLowerCase();
					var $span = $("<span><img src='https://lipis.github.io/flag-icon-css/flags/4x3/" + toLowerCase_flag + ".svg'/> " + item.text + "</span>");
					 return $span;
                   },
                    templateSelection: function(item1) {
					var toLowerCase_flag1 = item1.id.toLowerCase();
					var $span = $("<span><img src='https://lipis.github.io/flag-icon-css/flags/4x3/" + toLowerCase_flag1 + ".svg'/> " + item1.text + "</span>");
					 return $span;
				   }
				   
				 });
				 
               });

          }
		},
		/*-----------------------------------------------------
			User Onclick JS
		-----------------------------------------------------*/
		LoginFormClick: function () {
			$(document).ready(function(){
                  $("#hide").click(function(){
                    $(".pe_user_form").hide();
                  });
                  $("#show").click(function(){
                    $(".pe_user_form").show();
                  });
                });
		},


		/*-----------------------------------------------------
			Category Onclick JS
		-----------------------------------------------------*/
		categoryList: function () {
			$(document).ready(function(){
                  // $(".pe_logo").click(function(){
                  //   $(".pe_categories_logo_dropdown").toggleClass();
                  //    // alert("hello");
                  // });                 
                  $(".pe_logo").click(function(){
									  $(".pe_categories_logo_dropdown").toggleClass("pe_show_ctgry");
									});
                });
		},

		/*-----------------------------------------------------
			Product Zoom
		-----------------------------------------------------*/
		productzoom: function () {
			
						$(function() {

			  var native_width = 0;
			  var native_height = 0;
			  var mouse = {x: 0, y: 0};
			  var magnify;
			  var cur_img;

			  var ui = {
			    magniflier: $('.magniflier')
			  };

			  // Add the magnifying glass
			  if (ui.magniflier.length) {
			    var div = document.createElement('div');
			    div.setAttribute('class', 'glass');
			    ui.glass = $(div);

			    $('body').append(div);
			  }

			  
			  // All the magnifying will happen on "mousemove"

			  var mouseMove = function(e) {
			    var $el = $(this);

			    // Container offset relative to document
			    var magnify_offset = cur_img.offset();

			    // Mouse position relative to container
			    // pageX/pageY - container's offsetLeft/offetTop
			    mouse.x = e.pageX - magnify_offset.left;
			    mouse.y = e.pageY - magnify_offset.top;
			    
			    // The Magnifying glass should only show up when the mouse is inside
			    // It is important to note that attaching mouseout and then hiding
			    // the glass wont work cuz mouse will never be out due to the glass
			    // being inside the parent and having a higher z-index (positioned above)
			    if (
			      mouse.x < cur_img.width() &&
			      mouse.y < cur_img.height() &&
			      mouse.x > 0 &&
			      mouse.y > 0
			      ) {

			      magnify(e);
			    }
			    else {
			      ui.glass.fadeOut(100);
			    }

			    return;
			  };

			  var magnify = function(e) {

			    // The background position of div.glass will be
			    // changed according to the position
			    // of the mouse over the img.magniflier
			    //
			    // So we will get the ratio of the pixel
			    // under the mouse with respect
			    // to the image and use that to position the
			    // large image inside the magnifying glass

			    var rx = Math.round(mouse.x/cur_img.width()*native_width - ui.glass.width()/2)*-1;
			    var ry = Math.round(mouse.y/cur_img.height()*native_height - ui.glass.height()/2)*-1;
			    var bg_pos = rx + "px " + ry + "px";
			    
			    // Calculate pos for magnifying glass
			    //
			    // Easy Logic: Deduct half of width/height
			    // from mouse pos.

			    // var glass_left = mouse.x - ui.glass.width() / 2;
			    // var glass_top  = mouse.y - ui.glass.height() / 2;
			    var glass_left = e.pageX - ui.glass.width() / 2;
			    var glass_top  = e.pageY - ui.glass.height() / 2;
			    //console.log(glass_left, glass_top, bg_pos)
			    // Now, if you hover on the image, you should
			    // see the magnifying glass in action
			    ui.glass.css({
			      left: glass_left,
			      top: glass_top,
			      backgroundPosition: bg_pos
			    });

			    return;
			  };

			  $('.magniflier').on('mousemove', function() {
			    ui.glass.fadeIn(200);
			    
			    cur_img = $(this);

			    var large_img_loaded = cur_img.data('large-img-loaded');
			    var src = cur_img.data('large') || cur_img.attr('src');

			    // Set large-img-loaded to true
			    // cur_img.data('large-img-loaded', true)

			    if (src) {
			      ui.glass.css({
			        'background-image': 'url(' + src + ')',
			        'background-repeat': 'no-repeat'
			      });
			    }

			    // When the user hovers on the image, the script will first calculate
			    // the native dimensions if they don't exist. Only after the native dimensions
			    // are available, the script will show the zoomed version.
			    //if(!native_width && !native_height) {

			      if (!cur_img.data('native_width')) {
			        // This will create a new image object with the same image as that in .small
			        // We cannot directly get the dimensions from .small because of the 
			        // width specified to 200px in the html. To get the actual dimensions we have
			        // created this image object.
			        var image_object = new Image();

			        image_object.onload = function() {
			          // This code is wrapped in the .load function which is important.
			          // width and height of the object would return 0 if accessed before 
			          // the image gets loaded.
			          native_width = image_object.width;
			          native_height = image_object.height;

			          cur_img.data('native_width', native_width);
			          cur_img.data('native_height', native_height);

			          //console.log(native_width, native_height);

			          mouseMove.apply(this, arguments);

			          ui.glass.on('mousemove', mouseMove);
			        };


			        image_object.src = src;
			        
			        return;
			      } else {

			        native_width = cur_img.data('native_width');
			        native_height = cur_img.data('native_height');
			      }
			    //}
			    //console.log(native_width, native_height);

			    mouseMove.apply(this, arguments);

			    ui.glass.on('mousemove', mouseMove);
			  });

			  // ui.glass.on('mouseout', function() {
			  //   ui.glass.off('mousemove', mouseMove);
			  // });

			});
		},

		
		/*-----------------------------------------------------
			List Grid View
		-----------------------------------------------------*/
		ListGridView: function () {
			(function(){
			  /* Variables */
			  var icon = document.getElementsByClassName('icon');
			  var products = document.getElementsByClassName('products');

			  /* Functions */
			  // Has class
			  function hasClass(elem, className) {
			    return elem.classList.contains(className);
			  }

			  /* Do stuff */
			  // For each icon
			  for (var i = 0, len = icon.length; i < len; i++) {
			    // On click of icon
			    icon[i].addEventListener('click', function() {
			      // If clicked icon has 'active' class
			      if (hasClass(this, 'active')) {
			        // Do nothing
			        return;
			      // If clicked icon doesn't have 'active' class
			      } else {
			        // For each icon
			        for (var j = 0, len = icon.length; j < len; j++) {
			          // Toggle the 'active' class
			          icon[j].classList.toggle('active');
			        }
			        // Toggle the 'list' and 'grid' classes
			        products[0].classList.toggle('list');
			        products[0].classList.toggle('grid');

			      }

			    });

			  }
			})();
		},
		/*-----------------------------------------------------
			List Grid View
		-----------------------------------------------------*/
		ListGridIcon: function () {
			$(document).ready(function() {
                  $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
                  $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
              });
		},
		/*-----------------------------------------------------
			Country Cases
		-----------------------------------------------------*/
		currency: function () {
			$(document).ready(function(){
                 function setCurrency (currency) {
                    if (!currency.id) { return currency.text; }
                     var $currency = $('<span class="glyphicon glyphicon-' + currency.element.value + '">' + currency.text + '</span>');
                     return $currency;
                  };
                  $(".templatingSelect2").select2({
                     placeholder: "What currency do you use?", //placeholder
                     templateResult: setCurrency,
                     templateSelection: setCurrency
                  });
               })
		},
		/*-----------------------------------------------------
			Fix Cases
		-----------------------------------------------------*/
		casesFilter: function () {
			$(function () {
				$('.case_filter').mixItUp();
			});
			$('.popup-gallery').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true
				}
			});
		},
		/*-----------------------------------------------------
			Checkout Page
		-----------------------------------------------------*/
		collection: function () {
			jQuery( document ).ready(function() {
              
                  var next = jQuery(".next");
                  var steps = jQuery(".step");
                  var stepsinfo = jQuery(".step1");
              
                  next.bind("click", function() { 
                    jQuery.each( steps, function( i ) {
                      if (!jQuery(steps[i]).hasClass('current') && !jQuery(steps[i]).hasClass('done')) {
                        jQuery(steps[i]).addClass('current');
                        jQuery(steps[i - 1]).removeClass('current').addClass('done');
                        return false;
                      }
                    })    
                  });

                  next.bind("click", function() { 
                    jQuery.each( stepsinfo, function( j ) {
                      if (!jQuery(stepsinfo[j]).hasClass('active') && !jQuery(stepsinfo[j]).hasClass('done')) {
                        jQuery(stepsinfo[j]).addClass('active');
                        jQuery(stepsinfo[j - 1]).removeClass('active').addClass('done');
                        return false;
                      }
                    })    
                  });


                $(".next").click(function (e) {
                var active = $(this).parents(".pe_checkout_main_form ");
                active.addClass("hide");
                lrNextTab(active);
                });

                function lrNextTab(elem) {
                $(elem).next().removeClass("hide");
                }
                })
		},
		/*-----------------------------------------------------
			Collection
		-----------------------------------------------------*/
		checkoutPage: function () {
			$(document).ready(function() {
		    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
		    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
		});
		},
		/*-----------------------------------------------------
	         Fixed Header
	        -----------------------------------------------------*/
		FixedHeader: function () {
			if ($('.fixed_header').length > 0) {
				$(window).scroll(function () {
					var scroll = $(window).scrollTop();

					if (scroll >= 100) {
						$(".fixed_header").addClass("fixed");
					} else {
						$(".fixed_header").removeClass("fixed");
					}

				});
			}
		},
		/*-----------------------------------------------------
	         Fixed Header
	        -----------------------------------------------------*/
		CountDown: function () {
			if ($('.pe_coundown_wrapper').length > 0) {
			(function () {
		  const second = 1000,
		        minute = second * 60,
		        hour = minute * 60,
		        day = hour * 24;

		  let birthday = "Sep 30, 2021 00:00:00",
		      countDown = new Date(birthday).getTime(),
		      x = setInterval(function() {    

		        let now = new Date().getTime(),
		            distance = countDown - now;

		        document.getElementById("days").innerText = Math.floor(distance / (day)),
		          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
		          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
		          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

		        //do something later when date is reached
		        if (distance < 0) {
		          let headline = document.getElementById("headline"),
		              countdown = document.getElementById("countdown"),
		              content = document.getElementById("content");

		          headline.innerText = "It's my birthday!";
		          countdown.style.display = "none";
		          content.style.display = "block";

		          clearInterval(x);
		        }
		        //seconds
		      }, 0)
		  }());
		}
		},
		/*-----------------------------------------------------
			Fix Mobile Menu 
		-----------------------------------------------------*/
		navMenu: function () {
			var w = window.innerWidth;
			if (w <= 991) {
				$(".main_menu_wrapper>ul li").on('click', function () {
					$(this).find('ul.sub_menu').slideToggle();
					$(this).toggleClass("open");
				});
				$(".main_menu_wrapper>ul").on('click', function () {
					event.stopPropagation();
				});
				$(".menu_btn").on('click', function (e) {
					event.stopPropagation();
					$(".main_menu_wrapper, .menu_btn_wrap").toggleClass("open");
				});
				$("body").on('click', function () {
					$(".main_menu_wrapper, .menu_btn_wrap").removeClass("open");
				});
			}
		},
		/*-----------------------------------------------------
			Fix Search Bar
		-----------------------------------------------------*/
		arrivals: function () {
			var swiper = new Swiper('.pe_new_arrivals_slider .swiper-container', {
				slidesPerView: 4,
				spaceBetween: 30,
				centeredSlides: false,
				loop: true,
				speed: 1000,
				freeMode: true,
				autoplay: {
				  delay: 2500,
				  disableOnInteraction: false,
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},

				breakpoints: {
					400: {
						slidesPerView: 1,
						spaceBetween: 0,
						centeredSlides: false,
					},
					575: {
						slidesPerView: 2,
						spaceBetween: 30,
						centeredSlides: false,
					},
					767: {
						slidesPerView: 3,
						spaceBetween: 30,
						centeredSlides: false,
					},
					992: {
						slidesPerView: 3,
						spaceBetween: 20,
						centeredSlides: false,
					},
					1200: {
						slidesPerView: 4,
						spaceBetween: 30,
						centeredSlides: false,
					},
				},
			});
		},
		/*-----------------------------------------------------
			Fix Search Bar
		-----------------------------------------------------*/
		fashionSlider: function () {
			var swiper = new Swiper('.pe_fashion_section .swiper-container', {
				slidesPerView: 7.5,
				spaceBetween: 0,
				centeredSlides: true,
				loop: true,
				speed: 1000,
				freeMode: true,
				autoplay: {
				  delay: 2500,
				  disableOnInteraction: false,
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},

				breakpoints: {
					0: {
						slidesPerView: 1,
						spaceBetween: 0,
						centeredSlides: false,
					},
					575: {
						slidesPerView: 2,
						spaceBetween: 0,
						centeredSlides: false,
					},
					767: {
						slidesPerView: 3,
						spaceBetween: 0,
						centeredSlides: false,
					},
					992: {
						slidesPerView: 4,
						spaceBetween: 0,
						centeredSlides: false,
					},
					1200: {
						slidesPerView: 5,
						spaceBetween: 0,
						centeredSlides: false,
					},
				},
			});
		},
		/*-----------------------------------------------------
			Fix Animation 
		-----------------------------------------------------*/
		wowAnimation: function () {
			new WOW().init();
		},
		/*-----------------------------------------------------
			Product Detail
		-----------------------------------------------------*/
		ProductDetail: function () {
			var galleryThumbs = new Swiper('.pe_detail_wrapper .gallery-thumbs', {
		      spaceBetween: -30,
		      slidesPerView: 4,
		      freeMode: true,
		      watchSlidesVisibility: true,
		      watchSlidesProgress: true,
		    });
		    var galleryTop = new Swiper('.pe_detail_wrapper .gallery-top', {
		      spaceBetween: 10,
		      navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev',
		      },

		      thumbs: {
		        swiper: galleryThumbs
		      }
		      
		    });
		},
		/*-----------------------------------------------------
			Product Quantity
		-----------------------------------------------------*/
		ProductQuantity: function () {
			(function () {
                  "use strict";
                  var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
                    return function (arg) {
                      if (this.length > 1) {
                        this.each(function () {
                          var $this = $(this);

                          if (!$this.data(ident)) {
                            $this.data(ident, func($this, arg));
                          }
                        });

                        return this;
                      } else if (this.length === 1) {
                        if (!this.data(ident)) {
                          this.data(ident, func(this, arg));
                        }

                        return this.data(ident);
                      }
                    };
                  });
                })();

                (function () {
                  "use strict";
                  function Guantity($root) {
                    const element = $root;
                    const quantity = $root.first("data-quantity");
                    const quantity_target = $root.find("[data-quantity-target]");
                    const quantity_minus = $root.find("[data-quantity-minus]");
                    const quantity_plus = $root.find("[data-quantity-plus]");
                    var quantity_ = quantity_target.val();
                    $(quantity_minus).click(function () {
                      quantity_target.val(--quantity_);
                    });
                    $(quantity_plus).click(function () {
                      quantity_target.val(++quantity_);
                    });
                  }
                  $.fn.Guantity = jQueryPlugin("Guantity", Guantity);
                  $("[data-quantity]").Guantity();
                })();
		},
		/*-----------------------------------------------------
			Fix Animation 
		-----------------------------------------------------*/
		SelectTwo: function () {
			if ($('.pe_select_input').length > 0) {
			$(document).ready(function() {
			    $('.pe_select_input').select2();
			});
		}
		},
		/*-----------------------------------------------------
			Fix GoToTopButton
		-----------------------------------------------------*/
		topButton: function () {
			var scrollTop = $("#scroll");
			$(window).on('scroll', function () {
				if ($(this).scrollTop() < 500) {
					scrollTop.removeClass("active");
				} else {
					scrollTop.addClass("active");
				}
			});
			$('#scroll').click(function () {
				$("html, body").animate({
					scrollTop: 0
				}, 2000);
				return false;
			});

			$(function () {
				$('.go_to_demo').click(function () {
					$('html, body').animate({
						scrollTop: $('#go_to_demo').offset().top
					}, 'slow');
					return false;
				});
			});
		},

	};

	Lawyer.init();

})(jQuery);

/*-----------------------------------------------------
	Fix Contact Form Submission
-----------------------------------------------------*/
// Contact Form Submission
function checkRequire(formId, targetResp) {
	targetResp.html('');
	var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
	var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
	var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
	var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
	var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
	var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
	var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
	var check = 0;
	$('#er_msg').remove();
	var target = (typeof formId == 'object') ? $(formId) : $('#' + formId);
	target.find('input , textarea , select').each(function () {
		if ($(this).hasClass('require')) {
			if ($(this).val().trim() == '') {
				check = 1;
				$(this).focus();
				$(this).parent('div').addClass('form_error');
				targetResp.html('You missed out some fields.');
				$(this).addClass('error');
				return false;
			} else {
				$(this).removeClass('error');
				$(this).parent('div').removeClass('form_error');
			}
		}
		if ($(this).val().trim() != '') {
			var valid = $(this).attr('data-valid');
			if (typeof valid != 'undefined') {
				if (!eval(valid).test($(this).val().trim())) {
					$(this).addClass('error');
					$(this).focus();
					check = 1;
					targetResp.html($(this).attr('data-error'));
					return false;
				} else {
					$(this).removeClass('error');
				}
			}
		}
	});
	return check;
}
$(".submitForm").on('click', function () {
	var _this = $(this);
	var targetForm = _this.closest('form');
	var errroTarget = targetForm.find('.response');
	var check = checkRequire(targetForm, errroTarget);

	if (check == 0) {
		var formDetail = new FormData(targetForm[0]);
		formDetail.append('form_type', _this.attr('form-type'));
		$.ajax({
			method: 'post',
			url: 'ajaxmail.php',
			data: formDetail,
			cache: false,
			contentType: false,
			processData: false
		}).done(function (resp) {
			console.log(resp);
			if (resp == 1) {
				targetForm.find('input').val('');
				targetForm.find('textarea').val('');
				errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
			} else {
				errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
			}
		});
	}
});
;

