<?php function myshort_code(){
    $message="<h2>Hello world</h2>";
    return $message;
}
add_shortcode('sp-button','myshort_code');
?>