$(function () {
  $(".dropDown").click(function () {
    $(this).siblings("li").find("ul").slideUp();
    $(this).find("ul").slideToggle();
    $(this).find("i").toggleClass("fa-chevron-up fa-chevron-down");
  });
});
// for word captcha start
var code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById("captcha").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 120;
  canv.height = 35;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
$("#refresh_captcha").click(function () {
  createCaptcha();
});
function validateCaptcha(action) {
  //   debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    $("#enquiryForm").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox").val("");
    return false;
  }
}

// for word captcha start
var code2;
function createCaptcha2() {
  //clear the contents of captcha div first
  document.getElementById("captcha2").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha2 = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha2.indexOf(charsArray[index]) == -1)
      captcha2.push(charsArray[index]);
    else i--;
  }
  var canv2 = document.createElement("canvas");
  canv2.id = "captcha2";
  canv2.width = 120;
  canv2.height = 35;
  var ctx2 = canv2.getContext("2d");
  ctx2.font = "25px Georgia";
  ctx2.strokeText(captcha2.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code2 = captcha2.join("");
  document.getElementById("captcha2").appendChild(canv2); // adds the canvas to the body element
}
$("#refresh_captcha2").click(function () {
  createCaptcha2();
});
function validateCaptcha2(action) {
  //   debugger
  if (document.getElementById("cpatchaTextBox2").value == code2) {
    $("#enquiryForm2").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm2").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox2").val("");
    return false;
  }
}

$(function () {
  AOS.init();
  window.addEventListener("load", AOS.refresh);
  $(window).on("scroll", function () {
    $(function () {
      if ($(".stricky").length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
          $(".stricky").addClass("stricky-fixed");
          $(".scroll-to-top").fadeIn(1500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
          $(".stricky").removeClass("stricky-fixed");
          $(".scroll-to-top").fadeOut(1500);
        }
      }
    });
  });
});
$(function () {
  $(window).on("scroll", function () {
    var scrolled = $(window).scrollTop();
    if (scrolled > 80) $(".go-top").addClass("active");
    if (scrolled < 80) $(".go-top").removeClass("active");
  });
  $(function () {
    $(".go-top").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: "0",
        },
        500
      );
    });
  });
});

$(document).ready(function () {
  $(".error").hide();
  $(".searchResult").hide();
  $("#generateNumber").click(function () {
    $(".error").hide();
    var getVal = $("#number").val();
    if (getVal === "") {
      $(".error").show();
    } else {
      $(".vipNumber").text(getVal);
      $(".error").hide();
      $(".searchResult").show();
    }
  });
});

$(function () {
  var a = 0;
  $(window).scroll(function () {
    if ($(".counter")[0]) {
      var oTop = $(".counter").offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function () {
          var $this = $(this),
            countTo = $this.attr("data-count");
          $({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },

            {
              duration: 1000,
              easing: "swing",
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
                //alert('finished');
              },
            }
          );
        });
        a = 1;
      }
    }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const lenis = new Lenis();

  lenis.on("scroll", ScrollTrigger.update);

  gsap.ticker.add((time) => {
    lenis.raf(time * 1000); // Convert time from seconds to milliseconds
  });

  gsap.ticker.lagSmoothing(0);
});
// image revel effect
document.addEventListener("DOMContentLoaded", function () {
  const imgBoxes = document.querySelectorAll(".animated .img_box");

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom > 0;
  }

  function handleScroll() {
    imgBoxes.forEach((imgBox) => {
      if (isInViewport(imgBox)) {
        imgBox.classList.add("reveal"); // Add animation class
      }
    });
  }

  // Run when scrolling
  window.addEventListener("scroll", handleScroll);
  window.addEventListener("resize", handleScroll); // Adjust if resizing affects visibility

  // Initial check in case elements are already in view
  handleScroll();
});

document.addEventListener("DOMContentLoaded", function () {
  const createOdometer = (el, value) => {
    const odometer = new Odometer({
      el: el,
      value: 0, // Start from zero
    });

    let hasRun = false; // Prevent multiple executions

    const options = {
      threshold: [0, 0.9],
    };

    const callback = (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !hasRun) {
          odometer.update(value); // Start counting
          hasRun = true; // Ensure it only runs once
          observer.unobserve(el); // Stop observing after first trigger
        }
      });
    };

    const observer = new IntersectionObserver(callback, options);
    observer.observe(el);
  };

  // Initialize odometer when it's in viewport
  const ExpOdometer = document.querySelector(".exp-odometer");
  if (ExpOdometer) {
    createOdometer(ExpOdometer, 12); // Change '12' to your desired number
  }
});

$(document).ready(function () {
  $(".testimonialSlider").slick({
    dots: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
    slidesToScroll: 1,
    slidesToShow: 1,
    vertical: true, // Enable vertical sliding
    verticalSwiping: true, // Allow swiping vertically
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
    ],
  });
});
