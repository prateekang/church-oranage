<?php
function styled_link_shortcode($atts) {
    $atts = shortcode_atts(array(
    'style' => '',
    'text' => 'Click me',
    ),$atts);
    return 'The link is:' . esc_attr($atts['style']) . "and" .esc_attr($atts['text']);
  }
add_shortcode('custom_function', 'styled_link_shortcode');

