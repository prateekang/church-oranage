<?php function myshort_code(){
    $message="<button>Sputznik</button>";
    return $message;
}
add_shortcode('sp-button','myshort_code');
?>