
$(document).ready(function() {

  // Smooth scrolling
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, 'easeInOutExpo');

          if ( $(this).parents('.nav-menu').length ) {
            $('.nav-menu .menu-active').removeClass('menu-active');
            $(this).closest('li').addClass('menu-active');
          }

          if ( $('body').hasClass('mobile-nav-active') ) {
              $('body').removeClass('mobile-nav-active');
              $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
              $('#mobile-body-overly').fadeOut();
          }
          return false;
        }
      }
    });
  });

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {opacity:'show'},
    speed: 400
  });

  // Mobile Navigation
  if( $('#nav-menu-container').length ) {
      var $mobile_nav = $('#nav-menu-container').clone().prop({ id: 'mobile-nav'});
      $mobile_nav.find('> ul').attr({ 'class' : '', 'id' : '' });
      $('body').append( $mobile_nav );
      $('body').prepend( '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>' );
      $('body').append( '<div id="mobile-body-overly"></div>' );
      $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

      $(document).on('click', '.menu-has-children i', function(e){
          $(this).next().toggleClass('menu-item-active');
          $(this).nextAll('ul').eq(0).slideToggle();
          $(this).toggleClass("fa-chevron-up fa-chevron-down");
      });

      $(document).on('click', '#mobile-nav-toggle', function(e){
          $('body').toggleClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').toggle();
      });

      $(document).click(function (e) {
          var container = $("#mobile-nav, #mobile-nav-toggle");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
             if ( $('body').hasClass('mobile-nav-active') ) {
                  $('body').removeClass('mobile-nav-active');
                  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                  $('#mobile-body-overly').fadeOut();
              }
          }
      });
  } else if ( $("#mobile-nav, #mobile-nav-toggle").length ) {
      $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Stick the header at top on scroll
  $("#header").sticky({topSpacing:0, zIndex: '50'});

  // Counting numbers

  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Tooltip & popovers
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();

  // Background image via data tag
  $('[data-block-bg-img]').each(function() {
    // @todo - invoke backstretch plugin if multiple images
    var $this = $(this),
      bgImg = $this.data('block-bg-img');

      $this.css('backgroundImage','url('+ bgImg + ')').addClass('block-bg-img');
  });

  // jQuery counterUp
  if(jQuery().counterUp) {
    $('[data-counter-up]').counterUp({
      delay: 20,
    });
  }

  //Scroll Top link
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrolltop').fadeIn();
    } else {
      $('.scrolltop').fadeOut();
    }
  });

  $('.scrolltop, #logo a').click(function(){
    $("html, body").animate({
      scrollTop: 0
    }, 1000, 'easeInOutExpo');
    return false;
  });
   $("body").delegate("#men","click",function(){

     $("#mentor").show(); 
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{mentor:1},
         success : function(data){
           $('#mentorname').html(data)
         }
      })      
    })
    $("body").delegate("#ia1","click",function(){

     $("#ia1res").show(); 
     $("#mentor").hide();      
    })
    $("body").delegate("#ia2","click",function(){

     $("#ia2res").show(); 
     $("#mentor").hide();      
    })
    $("body").delegate("#ia3","click",function(){

     $("#ia3res").show(); 
     $("#mentor").hide();      
    })
   $("body").delegate("#avg","click",function(){
     $("#iaavg").show(); 
     $("#mentor").hide();      
    })
   $("body").delegate("#sdt","click",function(){
     $("#sdetform").show();  
       $("#ssex").hide();
       $("#siamarkav").hide();  
        $("#siamark").hide();  
    })
   $("body").delegate(".sdetform","click",function(){
     $("#sdetail").show();  
     $("#sdetform").hide(); 
     var branch=$("#bran").val();  
     var sem=$("#sem").val();
     var sec=$("#sec").val();
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{sdetform:1,branch:branch,sec:sec,sem:sem},
         success : function(data){
            $('#sdetailres').html(data)
         }
      }) 
    })
   $("body").delegate("#count","click",function(){
     $("#ssex").show();  
     $("#sdetform").hide(); 
     $("#siamark").hide();
     $("#siamarkav").hide();
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{ssex:1},
         success : function(data){
            $('#ssexdet').html(data)
         }
      }) 
    })
   $("body").delegate("#ia","click",function(){
     $("#siamark").show(); 
      $("#sdetform").hide();
      $("#ssex").hide();
       $("#siamarkav").hide(); 
      
    })
   $("body").delegate(".sdetia","click",function(){
     $("#siaresult").show();
     var usn=$("#usn").val();  
     var ia=$("#semia").val();
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{sdetia:1,usn:usn,ia:ia},
         success : function(data){
            $('#iaresult').html(data)
           
         }
      })
      
    })
   $("body").delegate("#miav","click",function(){
     $("#siamarkav").show(); 
     $("#ssex").hide(); 
     $("#siamark").hide();
      $("#sdetform").hide();
      
    })
   $("body").delegate(".siamarkav","click",function(){
     $("#siamarkavres").show(); 
     $("#siamarkav").hide(); 
      var usn=$("#usn1").val();
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{siamarkav:1,usn:usn},
         success : function(data){
            $('#result').html(data)
        
         }
      })
      
    })
});
