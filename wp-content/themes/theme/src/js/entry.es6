require("../sass/style.scss");
require("../fonts/fontello/css/fontello.css");
require("./vendor/bootstrap-transition");
require("./vendor/bootstrap-collapse");
  
(function ($) {
  $(".clients__slider").length > 0 && require("./template_parts/section_clients.es6");

})(jQuery); 
