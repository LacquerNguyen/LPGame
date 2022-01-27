(function($) {
    ({
    init: function() {
      var self = this
      $(function() {
        self.menuFuncition();
        self.anchorScroll();
        self.disabledInput();
        self.checkValidate();
        self.triggerSection();
      })
    },

    menuFuncition : function(){
      if ( $('.p-top_section--about').length){
        var lmain = $('.p-top_section--about').offset().top;
        var hmenu_btn = $('.p-menu_btn').height();
        $(window).on('scroll load',function(){
          var scrollTop = $(window).scrollTop();
          if( scrollTop > hmenu_btn ){
            $('.p-menu_btn').addClass('p-posi_fixed');
          }else{
            $('.p-menu_btn').removeClass('p-posi_fixed');
          }
          if( scrollTop > lmain - 2 ){
                $('.p-menu_btn').addClass('is_fixed');
  
          }else{
            $('.p-menu_btn').removeClass('is_fixed');
          }
  
  
        })
      }
      $('.p-menu_btnMenu').on('click',function(){
        console.log(1)
          if( $(this).hasClass('is-active')){
            $(this).removeClass('is-active');
            $('.l-menusp').removeClass('l-menusp_open');
            $('body').removeClass('p-open');
            $(".l-menusp ul").animate({ opacity: "0",left:"30px"}, 300);
          }else{
            $(this).addClass('is-active');
            $('body').addClass('p-open');
           
              $('.l-menusp').addClass('l-menusp_open');
        
         
              $(".l-menusp ul").animate({
                 opacity: "1",
                 left:"0"
            }, 800);

       
          }
      });

      $("body").on('click',function (event) {
        var target = $(event.target);
        if (!(target.parents('.p-menu').length || target.hasClass('.p-menu'))){ //tìm class
            $('.p-menu_btnMenu').removeClass('is-active');
            $('.l-menusp').removeClass('l-menusp_open');
            $('body').removeClass('p-open');
            $(".l-menusp ul").animate({ opacity: "0",left:"30px"}, 300);
        }
      });
      $(".l-menusp .menu-item a").on('click',function (event) {
        console.log(1)
          $('.p-menu_btnMenu').removeClass('is-active');
          $('.l-menusp').removeClass('l-menusp_open');
          $('body').removeClass('p-open');
          $(".l-menusp ul").animate({ opacity: "0",left:"30px"}, 300);
      })
    },
    anchorScroll:  function(){
      $('.p-business_list--js li').each(function(index){
        var offsets = $(this).offset().top - 2;
        var offset = Math.round(offsets * 100)/100;
          $(window).on('scroll load',function(){
  
            var scrollTop = $(window).scrollTop();
            if( index == 0 ){
                if(scrollTop > offsets){
                  $('.p-top_section--business_list_navigation ul li').removeClass('is-active');
                  $('.p-top_section--business_list_navigation ul li').eq(0).addClass('is-active');
                  return false
                }
            }
            if( index == 1 ){
              if(scrollTop > offset){
                $('.p-top_section--business_list_navigation ul li').removeClass('is-active');
                $('.p-top_section--business_list_navigation ul li').eq(1).addClass('is-active');
                return false
              }
            }
            if( index == 2 ){
              if(scrollTop > offset){
                $('.p-top_section--business_list_navigation ul li').removeClass('is-active');
                $('.p-top_section--business_list_navigation ul li').eq(2).addClass('is-active');
                return false
              }
            }
            if( index == 3 ){
              if(scrollTop > offset){
                $('.p-top_section--business_list_navigation ul li').removeClass('is-active');
                $('.p-top_section--business_list_navigation ul li').eq(3).addClass('is-active');
                return false
              }
            }
            if( index == 4 ){
              if(scrollTop > offset){
                $('.p-top_section--business_list_navigation ul li').removeClass('is-active');
                $('.p-top_section--business_list_navigation ul li').eq(4).addClass('is-active');
                return false
              }
            }
          })
      });
      $(window).on('resize load',function(){
          if($(window).width() < 769){
            var businesslistH = $('.p-top_section--business_list_navigation ul').height();
            var naviBusinessOffet = $('.p-top_section--business_list_navigation').offset().top;
            $('.p-top_section--business_list_navigation').css("height",businesslistH);
            $(window).on('scroll load',function(){
              var scrollTop = $(window).scrollTop();
              var n = parseFloat(naviBusinessOffet + businesslistH);
              x = Math.round(n * 100)/100;
              if( scrollTop > x){
                $('.p-top_section--business_list_navigation ul').appendTo('.p-navigation_business');
                $('.p-navigation_business').css('opacity','1');
                $('.p-navigation_business ul').hide();
              }else{
                $('.p-navigation_business ul').insertAfter('.p-navigation_business');
                $('.p-navigation_business').css('opacity','0');
                $('.p-top_section--business_list_navigation ul').show();
              }
            })
            $('.p-navigation_business p').on('click',function(){
              if( $(this).hasClass('is-active') ){
                $(this).removeClass('is-active');
                $('.p-navigation_business ul').slideUp();
              }else{
                $(this).addClass('is-active');
                $('.p-navigation_business ul').slideDown();
              }
            });
          }else{
            $('.p-navigation_business').hide();
          }
      })
      $('.p-top_section--business_list_navigation').on('click', 'a[href^=#]', function(e){
          e.preventDefault();
          var id = $(this).attr('href');
          $('html,body').animate({scrollTop: $(id).offset().top}, 500);
      });
    },
    
    disabledInput: function(){
      if($('.mw_wp_form_input').length){

        $('.p-btn_summit input[type="submit"]').attr('disabled','disabled');
        $('.p-btn_summit input[type="submit"]').addClass('disabled');
        $('.mwform-checkbox-field input').change(function(){
            if ($('.mwform-checkbox-field input').prop('checked')) {
              $('input[type="submit"]').removeAttr('disabled');
              $('.p-btn_summit input[type="submit"]').removeClass('disabled');
            }else{
              $('.p-btn_summit input[type="submit"]').attr('disabled','disabled');
              $('.p-btn_summit input[type="submit"]').addClass('disabled');
            }
         });

      }

    },
    checkValidate: function () {
        $('.p-contact_form tr').each(function(){
          if( $(this).find('.error').length ){
            $(this).addClass('p-error');
          }else{
            $(this).removeClass('p-error');
          }
        })
      },
      triggerSection: function () {
        var location = window.location.href;
        var stuff = location.split('?');
        var id = stuff[stuff.length - 1];
        console.log(id)
        if (id == 'section_about') {
          setTimeout(function () {
            $('#trigger-about').trigger('click');
          }, 100);
        }
        if (id == 'section_business') {
          setTimeout(function () {
            $('#trigger-business').trigger('click');
          }, 100);
        }
        $('a[href^=#]').on('click', function(e){
          e.preventDefault();
          var id = $(this).attr('href');
          $('html,body').animate({scrollTop: $(id).offset().top}, 500);
        });

        
      }
  }.init())


  
})(jQuery)
