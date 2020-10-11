<?php
/*
    Plugin Name: Gym Fitness - Location with Leaflet
    Plugin URI: 
    Description: Create a Shortcode to display the location
    Version: 1.0.0
    Author: Nguyen Huu Thanh
    Author URI: fb.com/nguyenhuuthanh11
    Text Domain: gymfitness
*/

if (!defined('ABSPATH')) die();

// Shortcode API
function gymfitness_location_shortcode() {
        $location = get_field('location');
    ?>

    <div class="localtion">
        <input type="hidden" id="lat" value="<?php echo  $location['ladt'] ?: '16.079062'; ?>">
        <input type="hidden" id="lng" value="<?php echo $location['lndg'] ?: '108.152155'; ?>">
        <input type="hidden" id="address" value="<?php echo  $location['address'] ?: 'Gymfitnes, K82/54 Nguyen Luong Bang, Da Nang'; ?>">
        <input type="hidden" id="zoom" value="<?php echo $location['zoom'] ?: '14'; ?>">

        <div id="map"></div>
    </div>

    <?php
}
add_shortcode( 'gymfitness_location', 'gymfitness_location_shortcode' ); // tag shortcode [gymfitness_location]

// Enqueues the css  and js files
function gymfitness_location_scripts() {
    if (is_page('contact-us')):
        // leaflet css
        wp_enqueue_style('leafletcss', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.7.1');

        // leaflet js
        wp_enqueue_script('leafletjs', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.7.1', true);

        // Gymfitness Leaflet js
        wp_enqueue_script('gymfitness-leaflet', plugins_url('/js/gymfitness-leaflet.js', __FILE__), array('leafletjs'), '1.0.0', true);
    endif;   

}
add_action('wp_enqueue_scripts', 'gymfitness_location_scripts');