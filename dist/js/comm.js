$(function () {
  var swiper = new Swiper(".swiper-intro", {
    loop: true,
    speed: 1000,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      init: function () {
        thisSlide = this;
        autoPlayBtn = document.querySelector(".wrap-autoplay-control > button");
        autoPlayBtn.addEventListener("click", (e) => {
          autoPlayState = autoPlayBtn.getAttribute("aria-pressed");
          if (autoPlayState === "false") {
            autoPlayBtn.setAttribute("aria-pressed", "true");
            thisSlide.autoplay.stop();
          } else if (autoPlayState === "true") {
            autoPlayBtn.setAttribute("aria-pressed", "false");
            thisSlide.autoplay.start();
          }
        });
      },
    },
  });

  var swiper = new Swiper(".swiper-news", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: false,
    },
  });

  var swiper = new Swiper(".swiper-sponsor", {
    slidesPerView: 7,
    spaceBetween: 20,
    slidesPerGroup: 3,
    loop: true,
    loopAdditionalSlides: 1,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".mV-thumb", {
    loop: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    spaceBetween: 15,
    slidesPerView: 3,
    slidesPerGroup: 1,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mV-thumb2", {
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    spaceBetween: 15,
    navigation: {
      nextEl: ".mv-pagination .swiper-button-next",
      prevEl: ".mv-pagination .swiper-button-prev",
    },
    pagination: {
      el: ".mv-pagination .swiper-pagination",
      type: "fraction",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: false,
    },
    thumbs: {
      swiper: swiper,
    },
  });

  $(function () {
    let gnbEl = $(".gnb .depth1 > li");
    let gnbLink = $(".gnb .depth1 > li > a");

    gnbLink.on("mouseenter, focus", function () {
      gnbEl.removeClass("active2");
      $(this).parent().addClass("active2");
    });
  });
});
