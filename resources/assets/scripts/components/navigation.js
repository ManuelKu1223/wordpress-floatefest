$(document).ready(function () {
  let $hero = $('.hero')
  let $navbar = $('.navbar-float')
  let $ghost = $('.navbar__ghost');

  if ($(window).width() > 641) {
    if ($hero.length > 0) {
      initScrollSpy()
      if (window.scrollTop > $hero.innerHeight()) {
        activateStickyNavigation()
      }

      $(window).scroll(function () {
        var heightToCompare = $hero.innerHeight();
        if ($(this).scrollTop() > heightToCompare) {
          activateStickyNavigation();
        } else {
          deactivateStickyNavigation();
        }
      });
    } else {
      activateStickyNavigation();
    }
  } else {
    deactivateStickyNavigation();
  }

  function activateStickyNavigation() {
    $navbar.addClass('navbar-float--active');
    $ghost.addClass('navbar__ghost--visible');
  }

  function deactivateStickyNavigation() {
    $navbar.removeClass('navbar-float--active');
    $ghost.removeClass('navbar__ghost--visible');
  }


  $('.menu-item > a').on('click', function(e){
    let href = $(this).attr('href')
    e.preventDefault()

    if ($(href).length > 0) {
      let offsetTop
      let currentBaseFontSize = parseInt($('html').css('font-size'))

      if ($(window).width() < 640 ) {
        offsetTop = href === "#" ? 0 : $(href).offset().top - $navbar.innerHeight()
      } else {
        switch (href) {
          case '#shuttles':
          case '#rules':
          case '#maps':
          case '#rv':
          case '#glamping':
          case '#faq':
          case '#foodVendors':
          case '#vendorsVolunteers':
          case '#health':
          case '#pictures':
          case '#videos':
            offsetTop = offsetTop = href === "#" ? 0 : $(href).offset().top - $navbar.innerHeight() + (currentBaseFontSize * 12.5)
            break;

          default:
            offsetTop = href === "#" ? 0 : $(href).offset().top - $navbar.innerHeight()
            break;
        }
      }

      $('html, body').stop().animate({
          scrollTop: offsetTop,
      }, 1200);

      e.preventDefault()
    } else {
      window.location.href = `${window.location.origin}/${href}`
    }

    if ($(window).width() < 1113 ) {
      let nav = $('.mobile__nav')
      let activeClass = 'mobile__nav--active'
      nav.removeClass(activeClass)
      $('body').removeClass('mobile-nav-activated')
    }

  });

  $('.sub-menu').on('click', function(){
    if ($(window).width() < 853) {$('ul.sub-menu').fadeToggle(400);}
  });

  $('.sub-menu > li > a').on('click', function(e){
    if ($(window).width() < 853) {
      e.stopPropagation();
    }
  });

  function initScrollSpy() {
      var lastId,
      menuItems = $(".navbar__navigation").find('.menu-item a'),

      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) {
          return item;
        }
      });

    $(window).scroll(function(){
       var fromTop = $(this).scrollTop();
       var visibleItems = []
       scrollItems.map(function(){
         let newItem = [];
         if (($(this).offset().top - 180) < fromTop) {
           newItem.push($(this).attr('id'))
           newItem.push($(this).offset().top)
           visibleItems.push(newItem);
         }
       });

       visibleItems = visibleItems.sort(sortFunction)
       let id = visibleItems[0][0]

       if (lastId !== id) {
           lastId = id;
           $('.menu-item--active').removeClass("menu-item--active")
           menuItems
           .filter("[href='#"+id+"']").parents('.menu-item').addClass("menu-item--active");
       }
    });
  }

  function sortFunction(a, b) {
    if (a[1] === b[1]) {
      return 0;
    } else {
      return (a[1] > b[1]) ? -1 : 1;
    }
  }

})
