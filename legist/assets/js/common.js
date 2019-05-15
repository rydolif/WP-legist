$(function() {

//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('nav').toggleClass('nav--active');
    $('header').toggleClass('header--menu');
    $('.top-line__contacts').toggleClass('top-line__contacts--active');
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});


  $('.answers__item').click(function() {
    $(this).find('.answers__dropdown').slideToggle();
    $(this).find('.answers__dropdown_open-close').toggleClass('answers__dropdown_open-close--active');
  });


  // $('.answers__more_open').click(function() {
  //   $(this).hide();
  //   $(this).siblings('.answers__item_hidden').show();
  //   $('.answers__more_close').show();
  // });

  // $('.answers__more_close').click(function() {
  //   $(this).hide();
  //   $('.answers__item_hidden').hide();
  //   $('.answers__more_open').show();
  // });

  // $('.articles__more_open').click(function() {
  //   $(this).hide();
  //   $(this).siblings('.articles__item_hidden').show();
  //   $('.articles__more_close').show();
  // });

  // $('.articles__more_close').click(function() {
  //   $(this).hide();
  //   $('.articles__item_hidden').hide();
  //   $('.articles__more_open').show();
  // });

// //------------------------------------form-------------------------------------------
//   $('input[type="tel"]').mask('+0 (000) 000-00-00');

//   jQuery.validator.addMethod("phoneno", function(phone_number, element) {
//      return this.optional(element) || phone_number.match(/\+[0-9]{1}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
//   }, "Введите Ваш телефон");

//   $(".form").each(function(index, el) {
//     $(el).addClass('form-' + index);

//     $('.form-' + index).validate({
//       rules: {
//         phone: {
//           required: true,
//           phoneno: true
//         },
//         name: 'required',
//       },
//       messages: {
//         name: "Введите Ваше имя",
//         phone: "Введите Ваш телефон",
//       },
//       submitHandler: function(form) {
//         var t = {
//           name: jQuery('.form-' + index).find("input[name=name]").val(),
//           phone: jQuery('.form-' + index).find("input[name=phone]").val(),
//           subject: jQuery('.form-' + index).find("input[name=subject]").val()
//         };
//         ajaxSend('.form-' + index, t);
//       }
//     });

//   });

//   function ajaxSend(formName, data) {
//     jQuery.ajax({
//       type: "POST",
//       url: "sendmail.php",
//       data: data,
//       success: function() {
//         $(".modal").popup("hide");
//         $("#thanks").popup("show");
//         setTimeout(function() {
//           $(formName).trigger('reset');
//         }, 2000);
//       }
//     });
//   }


//----------------------------------------fixed----------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>100){
          $('.header').addClass('header--active');
      }
      else if ($(this).scrollTop()<100){
          $('.header').removeClass('header--active');
      }
  });


//-------------------------скорость якоря---------------------------------------
  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 90}, 'slow', 'swing');
      
     $('.hamburger').removeClass('hamburger--active');
     $('.header-menu').removeClass('header-menu');
     $('.nav--active').removeClass('nav--active');
     $('.top-line__contacts').removeClass('top-line__contacts--active');

  });

// //-------------------------скорость якоря---------------------------------------
//   $(".scroll-to").on("click","a", function (event) {
//       if ($(this).attr('href') == 'blog.html') return;
//       event.preventDefault();
//       var id  = $(this).attr('href'),
//           top = $(id).offset().top;
//       $('body,html').animate({scrollTop: top - 60}, 'slow', 'swing');


//   //--------------------закриття меню при кліку на ссилку якоря--------------------
//      $('.hamburger').removeClass('hamburger--active');
//      $('.header-menu').removeClass('header-menu');
//      $('.nav--active').removeClass('nav--active');
//      $('.top-line__contacts').removeClass('top-line__contacts--active');

//   });

  
});

//----------------------------------------preloader----------------------------------

  $(window).on('load', function(){
    $('.preloader').delay(1000).fadeOut('slow');
  });
