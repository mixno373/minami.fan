<?php 

function make_text_clickable_links($text_) {
	//Regular Expression to filter urls
        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

        // Checking if any url is present in the text
        if(preg_match($reg_exUrl, $text_, $url)) {
               // Wrap urls by <a>
               $text_ = preg_replace($reg_exUrl, '<a href="'.$url[0].'">'.$url[0].'</a> ', $text_);
        } 

        return $text_;
}

?>