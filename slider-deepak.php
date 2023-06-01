<?php
/**
 * @version 1.0
 * @package slider-deepak
 * Plugin name: Logo Slider by Heigh10
 * Plugin URI: #
 * Author: Deepak kumar
 * Author URI: https://www.linkedin.com/in/deepak01/
 * Version: 1.0
 * Description: Simple plugin for logo showcase. Use shortcode <code>[logo_showcase]</code>
 */

if (!defined('ABSPATH')) {
    exit('Action not Allowed');
}

add_action('wp_footer',function(){
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script>
        $('#slick1').slick({
		rows: 2,
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll:4,
    autoplay:true,
    prevArrow:'<i class="slide-arrow prev-arrow fa fa-chevron-left"></i>',
    nextArrow:"<i class='slide-arrow next-arrow fa fa-chevron-right'></i>",
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
},1);

$('#slick1 a').attr('target','_blank').attr('rel','noopener noreferrer');
    </script>
    <?php
});

add_action('wp_head',function(){
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
    <style>

#slick1 {
  display: flex;
  flex-flow: row wrap;
  justify-content:center;
  align-items: center;
}
#slick1 {
  flex: 1 1 0;
}

#fmla-logo .slide-item {
  padding: 30px;
  display: flex !important;
  justify-content: center;
  align-items: center;
  height: 100px;
  margin: 20px 0;
}

.slick-slide{
  float: none;
  display: inline-block !important;
  vertical-align: middle;
}

#fmla-logo img {
  height: auto;
  width: 100%;
  vertical-align: middle;
}
#fmla-logo img:hover {
  opacity: 0.9;
}

#fmla-logo i.slide-arrow{
  margin: 0;
  padding: 0;
  background: none;
  border: none;
  border-radius: 0;
  outline: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
	position: absolute;
  top: 50%;
  margin-top: -15px;
  font-size: 30px;
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  color: #000;	
  cursor: pointer;
}

#fmla-logo .prev-arrow{
  left: -3vw;
}

#fmla-logo .next-arrow{
  right: -3vw;

} 

@media (max-width:1024px) {
  #fmla-logo .prev-arrow{
  left: 0;
}

#fmla-logo .next-arrow{
  right: 16px;
}
}
		@media (max-width:767px) {
			#fmla-logo .slide-item {
				margin: 60px 0;
			}
		}
    </style>
    <?php
});

add_shortcode('logo_showcase',function(){
    require_once('front-end/index.html');
});