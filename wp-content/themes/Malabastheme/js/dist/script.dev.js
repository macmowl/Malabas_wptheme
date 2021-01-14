"use strict";

// Select first word
$(".firstWord").html(function () {
  var text = $(this).text().trim().split(" ");
  var first = text.shift();
  return (text.length > 0 ? "<span style='font-weight: 100; text-transform: lowercase;'>" + first + "</span><br /> " : first) + text.join(" ");
});