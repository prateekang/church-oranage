<?php function myshort_code(){
    $message="<button>post comment</button>";
    return $message;
}
add_shortcode('sp-button','myshort_code');
?>