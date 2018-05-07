<?php


      function myWpWebsite(){

 wp_enqueue_style("mmainStyle",get_template_directory_uri() . "/css/style.css");



      }





add_action("wp_enqueue_scripts","myWpWebsite");

?>