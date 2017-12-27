<?php
show_admin_bar( false );

function your_namespace() {
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/style.css');
}

add_action( 'init','your_namespace');
