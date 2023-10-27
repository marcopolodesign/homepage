jQuery(function($) {
  currentSlide = 1;

  const smoothStateContainer = document.querySelector('.content-area');
  let cursor = document.querySelector('.cursor');

  function mainSlider() {
    if ($('div.content-area').hasClass('home')) {
      // General Slides
      const slides = Array.prototype.slice.call(
        document.querySelectorAll('div.slideshow-project-container')
      );
      const maxSlides = slides.length;

      slides.reverse();

      const slide = slides[currentSlide];

      const prevSlide = slides[currentSlide - 1];

      const bcgdImages = Array.prototype.slice.call(
        document.querySelectorAll('div.slideshow-project.desktop')
      );

      const bcgdImagesMobile = Array.prototype.slice.call(
        document.querySelectorAll('div.slideshow-project.mobile')
      );

      bcgdImages.reverse();
      bcgdImagesMobile.reverse();

      const bcgdImage = bcgdImages[currentSlide];
      const bcgdImageMobile = bcgdImagesMobile[currentSlide];

      if (currentSlide >= maxSlides) {
        $(slides).fadeIn();
        $(slides).css('z-index', '-1');
        $(slide).css('z-index', currentSlide);

        $(bcgdImages).addClass('scaled');
        $(bcgdImagesMobile).addClass('scaled');

        currentSlide = 0;
      }

      slides.forEach(function(slides, index) {
        $(slide).fadeIn();
        $(slide).css('z-index', currentSlide);
        $(prevSlide).fadeOut();
      });

      bcgdImages.forEach(function(bcgdImages, index) {
        $(bcgdImage).removeClass('scaled');
        $(bcgdImageMobile).removeClass('scaled');
      });

      currentSlide = currentSlide + 1;
    }
  }

  currentTitle = 1;

  function mainSliderTitles() {
    if ($('div.content-area').hasClass('home')) {
      // H1 Titles
      const titles = Array.prototype.slice.call(document.querySelectorAll('h1.info-featured-h'));

      titles.reverse();

      const title = titles[currentTitle];
      const maxTitles = Object.keys(titles).length;

      // const prevTitle = titles[currentTitle - 1];
      // const nextTitle = titles[currentTitle + 1];

      const titlesContainer = Array.prototype.slice.call(
        document.querySelectorAll('.project-info-name')
      );

      titlesContainer.reverse();

      const titleContainer = titlesContainer[currentTitle];

      const sliderCTAS = Array.prototype.slice.call(document.querySelectorAll('.project-info-cta'));

      sliderCTAS.reverse();

      const sliderCTA = sliderCTAS[currentTitle];

      if (currentTitle >= maxTitles) {
        $(titles).removeClass('animateUp');
        $(titlesContainer).removeClass('animateUp50');
        $(sliderCTAS).removeClass('animateUpCTA');

        currentTitle = 0;

        $(title).addClass('animateUp');

        $(titleContainer).addClass('animateUp50');

        $(sliderCTA).addClass('animateUpCTA');
      }

      titles.forEach(function(titles, index) {
        $(title).addClass('animateUp');
      });

      titlesContainer.forEach(function(titlesContainer, index) {
        $(titleContainer).addClass('animateUp50');
      });

      sliderCTAS.forEach(function(sliderCTAS, index) {
        $(sliderCTA).addClass('animateUpCTA');
      });

      currentTitle = currentTitle + 1;
    }
  }

  function circleLoader() {
    if ($('div.content-area').hasClass('home')) {
      var circleLoader = document.querySelector('.main-slider-circle path');

      var circleOffset = anime.setDashoffset(circleLoader);

      circleLoader.setAttribute('stroke-dashoffset', circleOffset);
      anime({
        targets: circleLoader,
        strokeDashoffset: [circleOffset, 0],
        easing: 'easeInOutSine',
        duration: 7000,
        direction: 'alternate',
        loop: true
      });
    }
  }

  function changeHeaderColor() {
    if ($('div.content-area').is('.about-template, .project-template, .contact-template')) {
      $('svg.logo path').css('fill', '');
      $('.main-navigation li a').css('color', '');
      $('.breadcrumbs-inner h4, .breadcrumbs-inner a').css('color', '');
    }

    if ($('div.content-area').is('.work-template, .home')) {
      $('svg.logo path').css('fill', '#e66065');
      $('.main-navigation li a').css('color', '#e66065');
      $('.breadcrumbs-inner h4, .breadcrumbs-inner a').css('color', '#000');
      $('.menu-trigger-svg line').css('stroke', '#e66065');
    }

    if ($('div.content-area').is('.home, .about-template, .project-template, .contact-template')) {
      if (
        $(window).width() <= 480 &&
        $('div.content-area').is('.about-template, .project-template, .contact-template')
      ) {
        $('svg.logo path').css('fill', '');
        $('.menu-trigger-svg line').css('stroke', '');
        $('.header-inner').css('background-color', '');
        // $('.header-inner').css('box-shadow', 'rgb(153, 153, 153) 0px 0px 4px');
      }

      $(document).on('scroll', function() {
        if (!$('div.content-area').is('.home')) {
          var currentScroll = $(document).scrollTop();
          var currentScrollOffset = currentScroll + 140;
          var colorTrigger = $('#project-waypoint').offset().top;

          if ($(window).width() >= 768 && currentScrollOffset > colorTrigger) {
            $('svg.logo path').css('fill', '#e66065');
            $('.main-navigation li a').css('color', '#e66065');
            $('.breadcrumbs-inner h4, .breadcrumbs-inner a').css('color', '#000');
          } else if ($(window).width() >= 768 && currentScrollOffset < colorTrigger) {
            $('svg.logo path').css('fill', '');
            $('.main-navigation li a').css('color', '');
            $('.breadcrumbs-inner h4, .breadcrumbs-inner a').css('color', '');
          }

          if ($(window).width() <= 480 && colorTrigger < currentScrollOffset) {
            $('svg.logo path').css('fill', '#e66065');
            $('.menu-trigger-svg line').css('stroke', '#e66065');
            $('.header-inner').css('background-color', '#fff');
            // $('.header-inner').css('box-shadow', 'rgb(153, 153, 153) 0px 0px 4px');
          } else if ($(window).width() <= 480 && currentScrollOffset < colorTrigger) {
            $('svg.logo path').css('fill', '');
            $('.header-inner').css('background-color', '');
            $('.menu-trigger-svg line').css('stroke', '');
            $('.header-inner').css('box-shadow', '');
          }
        }
      });
    }

    if ($(window).width() < 768 && $('div.content-area').is('work-template')) {
      $(document).on('scroll', function() {
        var currentScroll = $(document).scrollTop();
        var currentScrollOffset = currentScroll + 140;
        var colorTrigger = $('#project-waypoint').offset().top;

        $('svg.logo path').css('fill', '#e66065');
        $('.menu-trigger-svg line').css('stroke', '#e66065');
        $('.header-inner').css('background-color', '#fff');
      });
    }
  }

  function headerOnWhite() {
    if ($('div.content-area').hasClass('work-template')) {
      $(document).ready(function() {
        $('svg.logo path').css('fill', '#e66065');
        $('.main-navigation li a').css('color', '#e66065');
        $('.menu-trigger-svg line').css('stroke', '#e66065');

        $(document).on('scroll', function() {
          var currentScroll = $(document).scrollTop();

          if ($(window).width() <= 480 && currentScroll > 0) {
            $('svg.logo path').css('fill', '#e66065');
            $('.menu-trigger-svg line').css('stroke', '#e66065');
            $('.header-inner').css('background-color', '#fff');
            // $('.header-inner').css('box-shadow', 'rgb(153, 153, 153) 0px 0px 4px');
          }
        });
      });
    }
  }

  function playVideoCursor() {
    if ($('div.content-area').hasClass('project-template')) {
      $('.video-container')
        .mouseover(function() {
          const videoContainer = document.querySelector('.video-container');

          videoContainer.addEventListener('mousemove', function(event) {
            const mouseX = event.pageX;
            const pageY = event.pageY;

            const videoY = $('.video-container').offset().top;

            mouseY = pageY - videoY;

            const cursor = document.querySelector('.play-video-cursor');

            cursor.style.left = mouseX + 'px';
            cursor.style.top = mouseY + 'px';
            cursor.style.transition = '';
          });
        })
        .mouseout(function() {
          const cursor = document.querySelector('.play-video-cursor');

          cursor.style.left = 50 + '%';
          cursor.style.top = 50 + '%';
          cursor.style.transition = 'all .6s cubic-bezier(.23,1,.32,1)';
        });
    }
  }

  function progressBar() {
    if ($('div.content-area').hasClass('project-template')) {
      const bodyTag = document.querySelector('body');
      const progressBarWidth = document.querySelector('div.progress');

      document.addEventListener('scroll', function() {
        const pixels = window.pageYOffset;
        const pageHeight = bodyTag.getBoundingClientRect().height;
        const totalScrollableDistance = pageHeight - window.innerHeight;

        const percentage = pixels / totalScrollableDistance;

        progressBarWidth.style.width = `${100 * percentage}%`;
      });
    }
  }

  function useInView() {
    inView('.gallery-image, .inview-animate, .project-micellaneous div, .project-text, .xd-embed')
      .on('enter', elements => {
        elements.classList.add('animate-inview');
      })
      .on('exit', elements => {});

    inView.threshold(0.2);
  }

  function animateFirstProjectHome() {
    if ($('div.content-area').hasClass('home')) {
      const home = document.querySelectorAll('.home-project');

      home[0].classList.add('animate-inview');
    }
  }

  function firstProjectAnimate() {
    if ($('div.content-area').hasClass('work-template')) {
      $('svg.logo path').css('fill', '#e66065');
      $('.main-navigation li a').css('color', '#e66065');
      $('.menu-trigger-svg line').css('stroke', '#e66065');

      const projects = document.querySelectorAll('.is-project');
      const firstProject = projects[0];

      const workTitles = document.querySelector('.work-titles');

      firstProject.classList.add('animate-inview');
      workTitles.classList.add('animate-inview');
    }
  }

  function openNav() {
    $(document).ready(function() {
      const trigger = document.querySelector('svg.menu-trigger-svg');
      const menuMobile = document.querySelector('.menu-mobile-container');
      const menuLinkContainer = document.querySelectorAll('.menu-mobile-container ul li');
      const menuLinkContainerLinks = document.querySelectorAll('.menu-mobile-container ul li a');

      $(trigger).on('click', function() {
        $('.header-inner').css('background-color', '');
        $(menuMobile).toggleClass('active-trigger');
        $(menuLinkContainer).toggleClass('animateUp50');
        $(menuLinkContainerLinks).toggleClass('animateUpLinks');
        $(menuMobile).toggleClass('pointer-all');
        $('header').toggleClass('no-background');

        $('svg.logo path').toggleClass('white-fill');
        $(trigger).toggleClass('white-line');
      });
    });
  }

  function closeNav() {
    $(document).ready(function() {
      const trigger = document.querySelector('svg.menu-trigger-svg');
      const menuMobile = document.querySelector('.menu-mobile-container');
      const menuLinkContainer = document.querySelectorAll('.menu-mobile-container ul li');
      const menuLinkContainerLinks = document.querySelectorAll('.menu-mobile-container ul li a');

      $('.header-inner').css('background-color', '');
      $(menuMobile).removeClass('active-trigger');
      $(menuLinkContainer).removeClass('animateUp50');
      $(menuLinkContainerLinks).removeClass('animateUpLinks');
      $(menuMobile).removeClass('pointer-all');
      $('header').removeClass('no-background');

      $('svg.logo path').removeClass('white-fill');
      $(trigger).removeClass('white-line');
    });
  }

  function scrollTitles() {
    if ($('div.content-area').hasClass('project-template')) {
      // $('.site-content').addClass('smooth-container');
      $('.site-content').addClass('relative');

      $(document).on('scroll', () => {
        var pixels = $(document).scrollTop();
        // $('.smooth-container').css('top', pixels * 0.2);

        if ($('body').hasClass('post-template-default')) {
          $('.smooth-titles').css('top', pixels * -0.15);
        }
      });
    }
  }

  function projectLoad() {
    setTimeout(function() {
      const slideshowImagesMobile = Array.prototype.slice.call(
        document.querySelectorAll('div.slideshow-project.mobile.scaled')
      );

      const maxMobileSlides = slideshowImagesMobile.length;

      const slideshowImageMobile = slideshowImagesMobile[maxMobileSlides - 1];

      const slideshowImages = Array.prototype.slice.call(
        document.querySelectorAll('div.slideshow-project.desktop.scaled')
      );

      const maxSlides = slideshowImages.length;

      const slideshowImage = slideshowImages[maxSlides - 1];

      $('.slideshow-inside').removeClass('scaled');
      $('.project-info-name h1, p.project-intro').addClass('animateUp');

      //Para el home
      $(slideshowImageMobile).removeClass('scaled');
      $(slideshowImage).removeClass('scaled');
      $('div.project-info-cta:last-of-type').css('opacity', '1');

      setTimeout(function() {
        $('h1.home-featured:last-of-type').css('transform', 'translateY(0)');
        // $("div.project-info-cta:last-of-type").css('opacity', 'translateY(0)');
      }, 7000);
    }, 300);
  }

  function preloaderColor() {
    $('.preloader-background').addClass('background-animated');

    if ($('div.content-area').hasClass('work-template')) {
      $('.preloader-background').css('background-color', '#fff');
    } else if ($('div.content-area').hasClass('about-template')) {
      $('.preloader-background').css('background-color', '#e66065');
    } else if ($('div.content-area').hasClass('contact-template')) {
      $('.preloader-background').css('background-color', '#000');
    } else if ($('div.content-area').hasClass('project-template')) {
      $('.preloader-background').css('background-color', '#fff');
    } else if ($('div.content-area').hasClass('home')) {
      $('.preloader-background').css('background-color', '#f2f2f2');
    }

    $('.preloader-animate').removeClass('preloader-animated');
  }

  function preloaderAnimate() {
    if ($('div.content-area').hasClass('work-template')) {
      $('.preloader-animate').css('background-color', '#fff');
    } else if ($('div.content-area').hasClass('about-template')) {
      $('.preloader-animate').css('background-color', '#e66065');
    } else if ($('div.content-area').hasClass('contact-template')) {
      $('.preloader-animate').css('background-color', '#000');
    } else if ($('div.content-area').hasClass('home')) {
      $('.preloader-animate').css('background-color', '#fff');
    } else if ($('div.content-area').hasClass('project-template')) {
      $('.preloader-animate').css('background-color', '#fff');
    }

    $('.preloader-animate').addClass('preloader-animated');

    setTimeout(function() {
      $('.preloader-background').css('background-color', '');
      $('.preloader-animate').css('background-color', '');
      $('.preloader-background').removeClass('background-animated');
    }, 1500);
  }

  function allCursor() {
    let anchors = document.querySelectorAll('a');

    const growCursor = () => {
      cursor.classList.add('is-down');
    };

    const shrinkCursor = () => {
      cursor.classList.remove('is-down');
    };

    const hoverCursor = () => {
      cursor.classList.add('is-hover');
    };

    const removeHoverCursor = () => {
      cursor.classList.remove('is-hover');
    };

    document.addEventListener('mousedown', () => {
      growCursor();
    });

    anchors.forEach(anchor => {
      anchor.addEventListener('mouseover', () => {
        hoverCursor();
      });
    });

    anchors.forEach(anchor => {
      anchor.addEventListener('mouseleave', () => {
        removeHoverCursor();
      });
    });

    document.addEventListener('mouseup', () => {
      shrinkCursor();
    });

    const moveCursor = (x, y) => {
      cursor.style.top = y + 'px';
      cursor.style.left = x + 'px';
    };

    document.addEventListener('mousemove', event => {
      moveCursor(event.pageX, event.pageY);
    });

    document.addEventListener('scroll', event => {
      moveCursor(event.pageX, event.pageY);
    });
  }

  const changeCursorColor = () => {
    if (document.querySelector('.content-area').classList.contains('about-template')) {
      cursor.classList.add('about');
      console.log('hasClass!');
    } else {
      cursor.classList.remove('about');
      console.log('hasntClass');
    }
  };

  function justOnceFunctions() {
    $(document).ready(function() {
      // setInterval(mainSlider, 7000);
      // setInterval(mainSliderTitles, 7000);
      // setInterval(circleLoader, 7000);

      openNav();
      allCursor();
      reRunFunctions();
    });
  }

  function reRunFunctions() {
    $(document).ready(function() {
      // firstProjectAnimate();
      progressBar();
      playVideoCursor();
      scrollTitles();
      projectLoad();
      useInView();
      changeHeaderColor();
      changeCursorColor();
      animateFirstProjectHome();
    });
  }

  $('.site-branding a, .main-navigation li a, .menu-mobile-nav ul li a').click(function(e) {
    e.preventDefault();

    var href = $(this).attr('href');

    var settings = {
      anchors: 'a',
      debug: true,
      cacheLength: 0,
      onStart: {
        duration: 700, // Duration of our animation
        render: function($container) {
          closeNav();
          preloaderColor();
          $container.fadeOut(600);
          $('svg.logo path').css('fill', '#e66065');
          $('.main-navigation li a').css('color', '#e66065');
          $('.menu-trigger-svg line').css('stroke', '#e66065');
        }
      },
      onProgress: {
        duration: 0,
        render: function() {
          console.log('progressing');
        }
      },
      onReady: {
        duration: 800,
        render: function($container, $newContent) {
          // Remove your CSS animation reversing class
          content.restartCSSAnimations();
          console.log('ready');

          $container.html($newContent);
          console.log('newcontent');
          preloaderAnimate();
          setTimeout(function() {
            projectLoad();
            $container.fadeIn();
          }, 800);
        }
      },
      onAfter: function() {
        reRunFunctions();
      }
    };

    var content = $('#page')
      .smoothState(settings)
      .data('smoothState');
    content.load(href);
  });

  justOnceFunctions();
});

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

document.addEventListener('resize', () => {
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});
