<?php
function load_css(){

    wp_register_style("stylesheet", get_template_directory_uri()."/style.css", "array()", false,"all");
    wp_enqueue_style("stylesheet");
}
   add_action("wp_enqueue_scripts", "load_css");



function load_bootstrap(){

    wp_register_style("bootstrap", get_template_directory_uri()."/css/bootstrap.css", "array()", false,"all");
    wp_enqueue_style("bootstrap");

}

add_action("wp_enqueue_scripts", "load_bootstrap");

?>

