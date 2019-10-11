jQuery(document).ready(function() {
  console.log("ready!");
});

particlesJS(
  "bubbles-js",

  {
    particles: {
      number: {
        value: 20,
        density: {
          enable: true,
          value_area: 800
        }
      },
      color: {
        value: "#a0cbb5"
      },
      shape: {
        type: "circle",
        stroke: {
          width: 0,
          color: "#000000"
        },
        polygon: {
          nb_sides: 5
        },
        image: {
          src: "https://www.mds-digitalagency.be/_static/bubble.png",
          width: 200,
          height: 170
        }
      },
      opacity: {
        value: 1,
        random: true,
        anim: {
          enable: false,
          speed: 2,
          opacity_min: 0.1,
          sync: false
        }
      },
      size: {
        value: 30,
        random: true,
        anim: {
          enable: false,
          speed: 40,
          size_min: 0.1,
          sync: false
        }
      },
      line_linked: {
        enable: false,
        distance: 150,
        color: "#ffffff",
        opacity: 0.4,
        width: 1
      },
      move: {
        enable: true,
        speed: 2,
        direction: "top",
        random: false,
        straight: false,
        out_mode: "out",
        attract: {
          enable: false,
          rotateX: 600,
          rotateY: 1200
        }
      }
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: {
          enable: false,
          mode: "bubble"
        },
        onclick: {
          enable: true,
          mode: "push"
        },
        resize: true
      },
      modes: {
        grab: {
          distance: 400,
          line_linked: {
            opacity: 1
          }
        },
        bubble: {
          distance: 400,
          size: 40,
          duration: 2,
          opacity: 8,
          speed: 3
        },
        repulse: {
          distance: 200
        },
        push: {
          particles_nb: 4
        },
        remove: {
          particles_nb: 2
        }
      }
    },
    retina_detect: true,
    config_demo: {
      hide_card: false,
      background_color: "#b61924",
      background_image: "",
      background_position: "50% 50%",
      background_repeat: "no-repeat",
      background_size: "cover"
    }
  }
);

(function($) {
  $(document).ready(function() {
    var a = 0;
    console.log(a);
    $(window).scroll(function() {
      var oTop = $("#counter").offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function() {
          var $this = $(this),
            countTo = $this.attr("data-count");
          $({
            countNum: $this.text()
          }).animate(
            {
              countNum: countTo
            },

            {
              duration: 1000,
              easing: "swing",
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }
            }
          );
        });
        a = 1;
      }
    });
  });
})(jQuery);

(function($) {
  $(document).ready(function() {
    console.log("flick");
    $(".reviews-carousel").flickity({
      // options
      cellAlign: "left",
      contain: true
    });
  });
})(jQuery);

(function($) {
  $(document).ready(function() {
    $(".modal_btn").click(function() {
      $(".home_modal").toggleClass("open");
    });
    $(document).keyup(function(e) {
      if (e.key === "Escape") {
        if ($(".home_modal").hasClass("open")) {
          $(".home_modal").toggleClass("open");
        }
      }
    });

    $(".header_search").click(function() {
      $(".home_search_wrapper").toggleClass("open");
      $(".home_search_input").toggleClass("open");
      console.log("click");
    });
  });
})(jQuery);
