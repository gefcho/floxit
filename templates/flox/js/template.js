(function ($) {
	$(document).ready(function () {
		$(".fl-offcanvas-menu").mmenu();
		var API = $(".fl-offcanvas-menu").data("mmenu");

		$(".offcanvas-menu-button").click(function () {
			API.open();
		});
		$("a.fl-menu").click(function () {
			API.close();
		});
		$(".mm-navbar__title").html('<a href="/./"><img class="menu-logo" src="/templates/flox/images/flox_logo.svg"></a>');
		$(window).scroll(function () {
			var scrolltop = $(window).scrollTop();
			var header_height = $('.main-menu').height();
			if (scrolltop >= header_height) {
				$('.main-menu').addClass('fixed');
				$('.main-menu').css('margin-top', -header_height);
				$('.fl-banner').css('margin-top', header_height);
			} else {
				$('.main-menu').removeClass('fixed');
				$('.main-menu').css('margin-top', '0px');
				$('.fl-banner').css('margin-top', '0px');
			}
		})
		var $page = $('html, body');
		$('a.fl-menu').click(function () {
			var header_height = $('.main-menu').height();

			$page.animate({
				scrollTop: $($.attr(this, 'href')).offset().top - header_height
			}, 750);
			return false;
		});
		var lpNav = $('.nav.menu');

		function lpSetNavActive() {
			var curItem = '';
			$('section').each(function () {
				if ($(window).scrollTop() > $(this).offset().top - 140) {
					curItem = $(this).attr('id');
				}
			});
			if (lpNav.find('li.active_menu a').attr('href') != '#' + curItem || lpNav.find('li.active_menu').length == 0) {
				lpNav.find('li.active_menu').removeClass('active_menu');
				lpNav.find('li a[href="#' + curItem + '"]').parent().addClass('active_menu');
			}
		}
		lpSetNavActive();
		$(window).on('load scroll', lpSetNavActive);
		//accordeon
		$('.accordeon_element').each(function () {

			var $header = $(this).find('.element_header'),
				$text = $(this).find('.element_text');
			var $header1 = $(this).find('.element_header2');

			$header.click(function () {
				// $('.accordeon_element').removeClass('active');
				if ($(this).parent().hasClass('active')) {

					$(this).parent().removeClass('active');
					$header1.parent().removeClass('active');
				} else {

					$(this).parent().addClass('active');

				}
			});

		});

		$('.accordeon_element2').each(function () {

			var $header = $(this).find('.element_header2'),
				$text = $(this).find('.element_text2');

			$header.click(function () {
				// $('.accordeon_element').removeClass('active');
				if ($(this).parent().hasClass('active')) {

					$(this).parent().removeClass('active');
				} else {

					$(this).parent().addClass('active');

				}
			});

		});

		//*accordeon


		$('#popup1').wiFeedBack({
			fbScript: '/templates/flox/blocks/wi-feedback.php',
			fbLink: '.wi-fb-link1',
			fbDelegate: true,
			fbColor: 'green'
		});



		var form_width = $('#popup1 .wi-fb-line').width();
		$('.popup-language').magnificPopup({
			type: 'inline'
		});

		function switch_lang() {
			$('.language-swith a').html($('.lang-block .lang-active a').html());
			$('.language-swith a').append('<i class="fas fa-cog"></i>');
			$('.popup-language').html($('.lang-block .lang-active a').html());
			$('.popup-language').append('<i class="fas fa-cog"></i>');

		}
		$(window).on('load', switch_lang);


		$("#phone").intlTelInput({
			autoPlaceholder: "aggressive",
			initialCountry: "auto",
			geoIpLookup: function (success, failure) {
				$.get("https://ipinfo.io", function () {}, "jsonp").always(function (resp) {
					var countryCode = (resp && resp.country) ? resp.country : "";
					success(countryCode);
				});
			},
		});

		function static_lang() {
			if ($('#language-popup > div > ul > li > ul.submenu').css('display') == 'block') {
				$('#language-popup > div > ul > li > ul.submenu').css('display', 'none');
			} else {
				$('#language-popup > div > ul > li > ul.submenu').css('display', 'block');
			}
		}
		$('#language-popup > div > ul > li > a').on('click', static_lang);
		
		$("#form").submit(function(e) {
        var form_data = $(this).serialize();

        $.ajax({
          type: "POST",
          url: "/templates/flox/blocks/contact-us-send.php",
          data: form_data
        });

        e.preventDefault();
		});

	});
})(jQuery);
