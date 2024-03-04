
  // Slider effect on header
  $(document).ready(function() {
    $(".nav").addClass("fadeInDown");
  });
  
  // Burger Menu transitions
  var count = 0;
  $(".burgerMenu").click(function() {
    count++;
    console.log("Clicked burger menu. Count: " + count);
    
    if (count % 2 === 1) {
      // Odd clicks
      console.log("Odd click");
      $("header").addClass("fixedMenu");
      $(".burgerMenu").addClass("showMenu");
      $(".linksMenu").addClass("showMenu");
      $(".navMenu").removeClass("bounceOutUp").addClass("bounceInDown");
      $(".bgShade").removeClass("hideShade").addClass("showShade");
      $("body").addClass("bodyStopped");
    } else {
      // Even clicks
      console.log("Even click");
      $(".navMenu").removeClass("bounceInDown").addClass("bounceOutUp");
      $(".bgShade").removeClass("showShade").addClass("hideShade");
      $("body").removeClass("bodyStopped");
      setTimeout(function() {
        $("header").removeClass("fixedMenu");
        $(".burgerMenu").removeClass("showMenu");
        $(".linksMenu").removeClass("showMenu");
      }, 500); // Wait for animation to complete before removing classes
    }
  });
  
  // Animation on header
  var $anchor = $('html, body');
  $('.anchor').click(function() {
    count++;
    console.log("Clicked anchor. Count: " + count);
    
    $(".navMenu").removeClass("bounceInDown").addClass("bounceOutUp");
    $(".bgShade").removeClass("showShade").addClass("hideShade");
    $("body").removeClass("bodyStopped");
    
    $anchor.animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
    
    setTimeout(function() {
      $("header").removeClass("fixedMenu");
      $(".burgerMenu").removeClass("showMenu");
      $(".linksMenu").removeClass("showMenu");
    }, 500); // Wait for animation to complete before removing classes
  });
  
  // Burger menu without one extra click
  $('.linkHeader').click(function() {
    count++;
    console.log("Clicked header link. Count: " + count);
  });






function togglemenu() {
    var menutoggle = document.querySelector('.menutoggle');
    var navbar = document.querySelector('.nav-bar');
    navbar.classList.toggle('active');
    menutoggle.classList.toggle('active');
}



//Faqs
const faqs = () => {
    var faq = document.getElementsByClassName("faq-page");
    var i;
    console.log("test123");
    for (i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
                    to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var body = this.nextElementSibling;
            if (body.style.display === "block") {
                body.style.display = "none";
            } else {
                body.style.display = "block";
            }
        });
    }
};
faqs();

//

$(function () {
    'use strict';

    var $swipeTabsContainer = $('.swipe-tabs'),
        $swipeTabs = $('.swipe-tab'),
        $swipeTabsContentContainer = $('.swipe-tabs-container'),
        currentIndex = 0,
        activeTabClassName = 'active-tab';

    $swipeTabsContainer.on('init', function (event, slick) {
        $swipeTabsContentContainer.removeClass('invisible');
        $swipeTabsContainer.removeClass('invisible');

        currentIndex = slick.getCurrent();
        $swipeTabs.removeClass(activeTabClassName);
        $('.swipe-tab[data-slick-index=' + currentIndex + ']').addClass(activeTabClassName);
    });

    $swipeTabsContainer.slick({
        //slidesToShow: 3.25,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        swipeToSlide: true,
        touchThreshold: 10
    });

    $swipeTabsContentContainer.slick({
        asNavFor: $swipeTabsContainer,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        swipeToSlide: true,
        draggable: false,
        touchThreshold: 10
    });


    $swipeTabs.on('click', function (event) {
        // gets index of clicked tab
        currentIndex = $(this).data('slick-index');
        $swipeTabs.removeClass(activeTabClassName);
        $('.swipe-tab[data-slick-index=' + currentIndex + ']').addClass(activeTabClassName);
        $swipeTabsContainer.slick('slickGoTo', currentIndex);
        $swipeTabsContentContainer.slick('slickGoTo', currentIndex);
    });

    //initializes slick navigation tabs swipe handler
    $swipeTabsContentContainer.on('swipe', function (event, slick, direction) {
        currentIndex = $(this).slick('slickCurrentSlide');
        $swipeTabs.removeClass(activeTabClassName);
        $('.swipe-tab[data-slick-index=' + currentIndex + ']').addClass(activeTabClassName);
    });
});


