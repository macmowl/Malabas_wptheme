"use strict";

// Select first word
$(".firstWord").html(function () {
  var text = $(this).text().trim().split(" ");
  var first = text.shift();
  return (text.length > 0 ? "<span style='font-weight: 200; text-transform: lowercase;'>" + first + "</span><br /> " : first) + text.join(" ");
});
$(".firstWordTitle").html(function () {
  var text = $(this).text().trim().split(" ");
  var first = text.shift();
  return (text.length > 0 ? first + "<br /> " : first) + text.join(" ");
}); // Slide show for testimonials home page

jQuery(document).ready(function ($) {
  $('.testimonials__slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    focusOnSelect: true,
    fade: true,
    autoplay: false
  });
});