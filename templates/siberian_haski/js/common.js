jQuery(document).ready(function() {
	/* jQuery(".auth_button").click(function(){
		jQuery(this).next().slideToggle();
	}); */

	jQuery(".main_menu_bt").click(function(){
		jQuery(".main_menu ul").slideToggle();
	});

	jQuery(".auth_button").click(function(){
		jQuery(".top_links").slideToggle();
	});

	jQuery(".add_ad").click(function(){
		jQuery(".footer_left_block ul").slideToggle();
	});

	jQuery(".reclama").click(function(){
		jQuery(".rec_content").slideToggle();
	});

	jQuery(".contacts").click(function(){
		jQuery(".contacts_content").slideToggle();
	});

	

	//Таймер обратного отсчета
	//Документация: http://keith-wood.name/countdown.html
	//<div class="countdown" date-time="2015-01-07"></div>
	var austDay = new Date(jQuery(".countdown").attr("date-time"));
	jQuery(".countdown").countdown({until: austDay, format: 'yowdHMS'});

	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	jQuery(".fancybox").fancybox();

	//Навигация по Landing Page
	//jQuery(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	//jQuery(".top_mnu").navigation();

	//Добавляет классы дочерним блокам .block для анимации
	//Документация: http://imakewebthings.com/jquery-waypoints/
	jQuery(".block").waypoint(function(direction) {
		if (direction === "down") {
			jQuery(".class").addClass("active");
		} else if (direction === "up") {
			jQuery(".class").removeClass("deactive");
		};
	}, {offset: 100});

	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo
	jQuery("a.scroll").click(function() {
		$.scrollTo(jQuery(".div"), 800, {
			offset: -90
		});
	});

	//Каруселька
	//Документация: http://owlgraphic.com/owlcarousel/
	var owl = jQuery(".carousel");
	owl.owlCarousel({
		items : 3,
		autoHeight: true,
		autoPlay: 3000,
		stopOnHover: true,
		paginationSpeed : 1000,
		singleItem:false

	});
	owl.on("mousewheel", ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev");
		} else {
			owl.trigger("owl.next");
		}
		e.preventDefault();
	});
	jQuery(".next_button").click(function(){
		owl.trigger("owl.next");
	});
	jQuery(".prev_button").click(function(){
		owl.trigger("owl.prev");
	});

	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	jQuery("#top").click(function () {
		jQuery("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	jQuery("form").submit(function() {
		$.ajax({
			type: "GET",
			url: "mail.php",
			data: jQuery("form").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

});
