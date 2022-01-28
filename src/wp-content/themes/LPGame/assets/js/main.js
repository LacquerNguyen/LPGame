(function($) {
    ({
    init: function() {
      var self = this
      $(function() {
        self.menuFuncition();
        self.countdownFuncition();
        self.counterOnScroll();
        self.slickslider();
        self.languageFuntion();
        self.pnaviFunciton();
        self.wowScript();
      })
    },
    slickslider: function(){
      $('.our__partners--slick').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        cssEase: 'linear',
        autoplay: true,
        responsive: [
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          },
        ]
      });
      },
    menuFuncition : function(){
       // ============================================================================
       $('.c-open-menu').on('click',function(){
        if($(this).hasClass('active')){
          $(this).removeClass('active')
          $('.c-submenu_sp').removeClass('open-menu');
          $('#page').removeClass('active-menu');
        }else{
          $(this).addClass('active')
          $('.c-submenu_sp').addClass('open-menu');
          $('#page').addClass('active-menu');
        }
      })

      },
    countdownFuncition: function () {
      const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

        //I'm adding this section so I don't have to keep updating this pen every year :-)
        //remove this if you don't need it
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy,
            dayMonth = "02/30/",
            ready = dayMonth + yyyy;
        
        today = mm + "/" + dd + "/" + yyyy;
        if (today > ready) {
          birthday = dayMonth + nextYear;
        }
        //end
  
        const countDown = new Date(ready).getTime(),
            x = setInterval(function() {    

          const now = new Date().getTime(),
              distance = countDown - now;
              $('#item__days').text(Math.floor(distance / (day)));
              $('#item__hours').text(Math.floor((distance % (day)) / (hour)));
              $('#item__minutes').text(Math.floor((distance % (hour)) / (minute)));
              $('#item__seconds').text(Math.floor((distance % (minute)) / second));

      }, 0)
    },
    counterOnScroll: function () {
			var a = 0;
			if($('#counter').length == 0) return;
			$(window).on('scroll load',function () {
				var oTop = $('#counter').offset().top - window.innerHeight;
				if (a == 0 && $(window).scrollTop() > oTop) {
					$('.counter-value').each(function () {
						var $this = $(this),
							countTo = $this.attr('data-count');
						$({countNum: $this.text()}).animate({countNum: countTo},
              {
								duration: 2000,
								easing: 'swing',
								step: function () {
									$this.text(Math.floor(this.countNum));
								},
								complete: function () {
									$this.text(this.countNum);
									//alert('finished');
								}

							});
					});
					a = 1;
				}
        var offsets =  $('.image__map').offset().top - window.innerHeight;;
        if( $(window).scrollTop() > offsets ){
          $('.witch').addClass('is__active');
        }
			});
		},
    languageFuntion : function () {
      $('.btn__language').on('click',function () {
        if($(this).hasClass('is-active')){
          $(this).removeClass('is-active');
          $('.dropdown__menu--language').slideUp();
        }else{
          $(this).addClass('is-active')
          $('.dropdown__menu--language').slideDown();
        }
      });
      $(".site").click(function (event) {
        var target = $(event.target);
        if (!(target.parents('.language__list--group').length || target.hasClass('.language__list--group'))){ //tìm class
          $(this).removeClass('is-active');
          $('.dropdown__menu--language').slideUp();
        }
      });
    },
    wowScript: function(){
      new WOW().init();
    },
    pnaviFunciton : function () {
      var lastScrollTop = 0;
      $(window).on('scroll',function(event){
         var WdScroll = $(this).scrollTop();
         if (WdScroll > lastScrollTop){
            $('.pnavi').addClass('downscroll')
         } else {
          $('.pnavi').removeClass('downscroll')
         }
         lastScrollTop = WdScroll;
         
      });
      var backTop = function (scroll) {
        var winW = $(window).width(),
          winH = $(window).height(),
          posFooter = $('.l__footer').offset().top + 40,
          scrollTop = scroll + winH,
          pTop = $('.pnavi');
        if (scrollTop <= posFooter && scroll > 100 ){
          pTop.addClass('is-fixed');
        } else {
          pTop.removeClass('is-fixed');
          $('.pnavi').removeClass('downscroll');
        }
      }
      $(window).on('scroll load', function () {
        backTop($(this).scrollTop());
      });
      $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top -20
        }, 500);
      });
    }
  }.init())


  
})(jQuery)
