
  <footer>
    <div class="container">
        <div class="row align-items-start">
            
            <div class="col-lg-3 col-md-12 footer-logo">
                <img src="img/footer-logo .png" alt="Protasco Logo">
            </div>

            <div class="col-lg-2 col-6">
                <a href="#" class="footer-link">Home</a>
                <a href="#" class="footer-link">Investor Relations</a>
                <a href="#" class="footer-link">Publications</a>
            </div>

            <div class="col-lg-2 col-6">
                <a href="#" class="footer-link">Sustainability</a>
                <a href="#" class="footer-link">AGM</a>
                <a href="#" class="footer-link">Contact Us</a>
            </div>

            <div class="col-lg-2 col-6">
                <a href="#" class="footer-link">Discover Us</a>
                <a href="#" class="footer-link">Careers</a>
            </div>

            <div class="col-lg-3 col-12 text-lg-end mt-4 mt-lg-0">
                <span class="connect-text">CONNECT WITH US</span>
                <a href="#" class="social-box"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="social-box"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="bottom-link">Privacy Policy</a>
                    <a href="#" class="bottom-link">Legal Information</a>
                    <a href="#" class="bottom-link">Terms of Use</a>
                </div>
                <div class="col-md-6 copyright-text">
                    &copy; Copyright <?php echo date('Y')?>  PROTASCO BERHAD [200101012322 (548078-H)]. All Rights Reserved. | Privacy Notice.
                </div>
            </div>
        </div>
    </div>
</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  


  
  <script>
    AOS.init({
      duration: 1200,
    })


    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: false,
      centeredSlides: true,
      slidesPerView: "auto",
      autoplay: {
        delay: 5000,
      },
      spaceBetween: 0,
      loop: true,
      loopedSlides: 10,
      coverflowEffect: {
        rotate: 80,
        stretch: -50,
        depth: -280,
        modifier: 0.3,
        slideShadows: false,
        scale: 1.4,
      },
      navigation: {
        nextEl: '.sbn4',
        prevEl: '.sbp4',
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      on: {
        init: function () {
          document.querySelector('.swiper-wrapper').style.overflow = 'visible';
        }
      }
    });

    document.querySelectorAll('.mySwiper .swiper-slide').forEach(slide => {
      slide.addEventListener('mouseenter', () => {
        slide.style.transform += ' scale(1.2)';
        slide.style.zIndex = 9999;
      });
      slide.addEventListener('mouseleave', () => {
        slide.style.transform = slide.style.transform.replace(/ scale\(1\.2\)/, '');
        slide.style.zIndex = '';
      });
    });
    invrelslider = new Swiper('.invrelslider', {
      loop: true,
      allowTouchMove: true,
      effect: 'coverflow',
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        depth: 90,
        slideShadows: false,
        modifier: 10,
      },
      navigation: {
        nextEl: '.sbn1',
        prevEl: '.sbp1',
      },
      pagination: {
        el: '.sp1',
        clickable: true,
      },
      breakpoints: {
        1024: {
          loop: true,
          effect: 'slide',
          freeMode: true,
          slidesPerView: 3,
          spaceBetween: 0,
          allowTouchMove: false,

        }
      }

    });



    // // Global variable for the Swiper instance
    // const dropdown = document.querySelector('.custom-dropdown');
    // const selected = dropdown.querySelector('.dropdown-selected');
    // const options = dropdown.querySelector('.dropdown-options');

    // const sliderContainer = document.querySelector(".propsdpSlider .swiper-wrapper");
    // const allSlides = Array.from(sliderContainer.children);
    // let propSlider;


    // function initSwiper(slideCount) {

    //   if (propSlider) {
    //     propSlider.destroy(true, true);
    //     propSlider = null;
    //   }
    //   const navContainer = document.querySelector('.slider-controls');
    //   const pagContainer = document.querySelector('.sp1');

    //   propSlider = new Swiper('.propsdpSlider', {
    //     loop: true,
    //     effect: 'coverflow',
    //     centeredSlides: true,
    //     slidesPerView: 3,
    //     // autoplay: {
    //     //   delay: 2800,
    //     //   disableOnInteraction: false,
    //     //   pauseOnMouseEnter: true,
    //     // },
    //     spaceBetween: 0,
    //     coverflowEffect: {
    //       rotate: 0,
    //       depth: 80,
    //       slideShadows: false,
    //       modifier: 10.71,
    //     },
    //     navigation: {
    //       nextEl: '.sbn1',
    //       prevEl: '.sbp1',
    //     },
    //     pagination: {
    //       el: '.sp1',
    //       clickable: true,
    //     },
    //     breakpoints: {
    //       1024: {
    //         slidesPerView: 3,
    //         spaceBetween: 30,
    //         gap: 0,
    //         centeredSlides: true,
    //         effect: 'loop',
    //         loop: true,
    //       },
    //       768: {
    //         slidesPerView: 2,
    //         spaceBetween: 20,
    //         effect: 'loop',
    //         loop: true,
    //       },
    //       320: {
    //         slidesPerView: 1,
    //         spaceBetween: 10,
    //       },
    //     },
    //   });
    //   const swiperWrapper = document.querySelector('.propsdpSlider .swiper-wrapper');
    //   if (navContainer && pagContainer) {
    //     if (slideCount <= 3) {
    //       navContainer.style.display = 'none';
    //       pagContainer.style.display = 'none';

    //     } else {
    //       navContainer.style.display = '';
    //       pagContainer.style.display = '';
    //     }
    //   }
    // }


    // selected.addEventListener('click', () => {
    //   dropdown.classList.toggle('open');
    // });

    // function filterByCategory(selectedCategory) {
    //   const li = document.querySelector(`.dropdown-options li[data-value="${selectedCategory}"]`);
    //   if (li) {
    //     selected.textContent = li.textContent;
    //   }
    //   dropdown.classList.remove('open');

    //   // Filter slides
    //   let filteredSlides = allSlides.filter(slide => {
    //     const category = slide.getAttribute("data-category");
    //     // For "all", include everything EXCEPT extracard
    //     if (selectedCategory === "all") {
    //       return slide.id !== "extracard";
    //     }
    //     return category === selectedCategory;
    //   });

    //   // Clear existing slides
    //   sliderContainer.innerHTML = "";

    //   // Append filtered slides
    //   filteredSlides.forEach(slide => {
    //     sliderContainer.appendChild(slide.cloneNode(true));
    //   });

    //   initSwiper(filteredSlides.length);
    // }

    // // Dropdown click
    // options.addEventListener('click', (e) => {
    //   if (e.target.tagName === 'LI') {
    //     const selectedCategory = e.target.getAttribute('data-value');
    //     filterByCategory(selectedCategory);
    //   }
    // });

    // // ✅ Run once on page load to apply "all" filter
    // filterByCategory("all");
    // window.addEventListener("resize", () => {
    //   if (propSlider) {
    //     initSwiper(document.querySelectorAll(".propsdpSlider .swiper-slide").length);
    //   }
    // });
    // document.addEventListener("DOMContentLoaded", () => {
    //   initSwiper(allSlides.length);
    // });

    // let shapeTimeline;

    // window.addEventListener("load", () => {
    //   const shapes = Array.from(document.querySelectorAll('svg g[id^="shape"]'))
    //     .sort((a, b) => {
    //       const numA = parseInt(a.id.replace("shape", ""));
    //       const numB = parseInt(b.id.replace("shape", ""));
    //       return numA - numB;
    //     });

    //   gsap.registerPlugin(ScrollTrigger);

    //   ScrollTrigger.matchMedia({
    //     "(min-width: 769px)": function () {
    //       setupAnimation(1);

    //     },
    //     "(max-width: 768px)": function () {
    //       setupAnimation(2.9);
    //     }
    //   });

    //   function setupAnimation(initialScale) {
    //     if (shapeTimeline) {
    //       shapeTimeline.kill();
    //       shapeTimeline = null;
    //     }
    //     // const headline = document.querySelector('.headline_preloader');

    //     // // === HEADLINE FADE IN / FADE OUT ===
    //     // const headlineTimeline = gsap.timeline();
    //     // headlineTimeline.fromTo(headline,
    //     //   { opacity: 0, y: 50 },
    //     //   { opacity: 1, y: 0, duration: 2, ease: "power2.out" } // fade in + move up
    //     // )
    //     //   .to(headline,
    //     //     { opacity: 0, y: -20, duration: 1, ease: "power2.in" }, // fade out + move up
    //     //     "+=0.2"
    //     //   );


    //     gsap.set(shapes, {
    //       opacity: 0,
    //       scale: initialScale,
    //       rotation: -15,
    //       transformOrigin: "50% 50%"
    //     });

    //     gsap.set("#shape1", {
    //       opacity: 1,
    //       scale: 1,
    //       rotation: 0
    //     });

    //     shapeTimeline = gsap.timeline({
    //       repeat: -1,
    //       delay: 0.5
    //     });

    //     shapes.forEach((shape, index) => {
    //       const delay = index * 0.15;

    //       shapeTimeline.add(() => {
    //         shape.parentNode.appendChild(shape);
    //       }, delay - 0.01);

    //       shapeTimeline.to(shape, {
    //         opacity: 1,
    //         scale: 1,
    //         rotation: 0,
    //         duration: 1,
    //         ease: "back.out(1.8)"
    //       }, delay);

    //       shapeTimeline.to(shape, {
    //         opacity: 0,
    //         scale: 2,
    //         rotation: 100,
    //         duration: 1,
    //         ease: "power2.inOut"
    //       }, delay + 0.1);
    //     });
    //   }

    //   // Preloader timeline
    //   document.body.style.overflow = "hidden";
    //   const tl_preload = gsap.timeline();

    //   tl_preload
    //     .from("main", {
    //       duration: 1,
    //       stagger: 0.4,
    //       ease: "Power3.easeOut"
    //     })
    //     .to(".sdp-preload", {
    //       duration: 0
    //     })
    //     .to(".sdp-preload", {
    //       duration: 1,
    //       ease: "Power3.easeOut"
    //     })
    //     .to(".sdp-preload", {
    //       display: "none",
    //       onComplete: () => {
    //         document.body.style.overflow = "";
    //         if (shapeTimeline) {
    //           shapeTimeline.kill();
    //           shapeTimeline = null;
    //         }
    //         initSlickSlider();
    //       }
    //     })
    //     .to("main", {
    //       opacity: 1
    //     });


    //   function initSlickSlider() {
    //     $("#banner_slider").css({ display: "block" });
    //     $("#banner_slider .sliderbanner").slick({
    //       autoplay: true,
    //       autoplaySpeed: 4000,
    //       speed: 800,
    //       lazyLoad: "progressive",
    //       arrows: true,
    //       dots: true,
    //       fade: true,
    //       cssEase: 'ease-in-out',
    //       appendDots: $("#banner_slider .custom-dots-container"),
    //       prevArrow: '<div class="slick-nav prev-arrow"><img src="./images/white-next.svg" class="mbn_arrow_prev" alt="Previous"></div>',
    //       nextArrow: '<div class="slick-nav next-arrow"><img src="./images/white-next.svg" class="mbn_arrow_next" alt="Next"></div>',
    //       pauseOnHover: false,
    //       pauseOnFocus: false,
    //       responsive: [
    //         {
    //           breakpoint: 900,
    //           settings: { arrows: true }
    //         }
    //       ]
    //     }).slickAnimation();


    //     gsap.to("#banner_slider", {
    //       opacity: 1,
    //       duration: 1.2,
    //       ease: "power3.out",
    //       onComplete: () => ScrollTrigger.refresh()
    //     });
    //   }

    // });





    // var assetSlider = new Splide(".assetm-carousel", {
    //   perPage: 1,
    //   perMove: 1,
    //   gap: 0,
    //   type: "loop",
    //   rewind: false,
    //   autoplay: false,
    //   interval: 4000,
    //   pauseOnHover: false,
    //   speed: 1000,
    //   pagination: true,

    // }).mount();



  </script>


</body>

</html>