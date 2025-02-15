!(function($) {
  "use strict";

  // Preloader
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(500).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

  // Animated scroll, for internals links, included those with class .scrollto

  var scrolltoOffset = $('#header').outerHeight() - 1;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }
        //scroll duration
        $('html, body').animate({
          scrollTop: scrollto
        }, 1200, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          //$('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Active animated scroll for internal links
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1200, 'easeInOutExpo');
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first, .mobile-nav ul:first li:first").addClass('active');
      }
    });
  });

  // Navigation: mobiles
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        }
      }
    });
    //more info
    $(document).on('click', '.mobile-nav', function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        }
      }
    });

  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Toggle contact area in header if scrolling
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
      $('#topbar').addClass('topbar-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
      $('#topbar').removeClass('topbar-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
    $('#topbar').addClass('topbar-scrolled');
  }

  // Button return to top area of page
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  //scroll duration, for button in bottom of page
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1200, 'easeOutExpo');
    return false;
  });

  // Plugin OwlCarousel, testimonials)
  $(".testimonials-carousel").owlCarousel({
    autoplay: 1,    //false no auto, 1 one by one, 2 items define number of frames
    dots: true,
    loop: true,
	responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 2
      }
    }
  });
 /*Sending Form: modal for send and result */
  $('#formModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      $('#formModal').find(".form-result").text('');
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text( recipient)
      $('#formModal').find(".form-result").removeClass('d-block');
  })

    $("#sendMyForm").on("click", function(e){
        e.preventDefault();
        let frm = "#" + $(e.target).data('submit');

        $.post({
            url: '/register-user',
            data: $(frm).serialize(),
            success: function(data) {

                $(frm)[0].reset();

                // Dacă succes, ascundem erorile și afișăm mesajul de succes
                $('#formModal').find(".form-res").text(data).addClass('alert alert-success d-block').removeClass('d-none');
                //$('#formModal').find(".form-result").addClass('d-block');

                //$(".form-result").text("Formular trimis cu succes!").addClass('alert alert-success');
                $(frm).find(".is-invalid").removeClass("is-invalid");
                $(frm).find(".invalid-feedback").remove();
                //alert('Formular trimis cu succes!')
            },
            error: function(xhr) {
                if (xhr.status === 422) { // Eroare de validare Laravel
                    let errors = xhr.responseJSON.errors;

                    // Ștergem erorile vechi
                    $(frm).find(".is-invalid").removeClass("is-invalid");
                    $(frm).find(".invalid-feedback").remove();

                    // Adăugăm noile erori
                    $.each(errors, function(field, messages) {
                        let inputField = $(frm).find("[name='" + field + "']");
                        inputField.addClass("is-invalid"); // Marcare input invalid

                        // Adăugăm mesajul de eroare sub câmp
                        inputField.after("<div class='invalid-feedback'>" + messages[0] + "</div>");
                    });
                } else {
                    // Alte erori
                    $(frm).find(".form-result").text("A apărut o eroare neașteptată.").addClass('alert alert-danger d-block');
                }
            }
        });
    });


    $("#formModal").on("hidden.bs.modal", function () {
        let frm = $("#myForm");

        frm.find(".form-res").removeClass('d-block').addClass('d-none');
        // Resetează formularul
        frm[0].reset();

        // Elimină erorile și clasele de invalidare
        frm.find(".is-invalid").removeClass("is-invalid");
        frm.find(".invalid-feedback").remove();

        // Șterge mesajele din div-ul "form-result"
        frm.find(".form-result").removeClass("alert alert-danger alert-success d-block").text("");
    });

})(jQuery);
