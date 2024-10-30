<?php
/*
Plugin Name: Howdy To Welcome 
Plugin URI: http://fingguinfotech.in/sudarshan-plugins
Description: This plugin will help you to change howdy message from top right profile
Author: Sudarshan Jadhav
Version: 2.3
Author URI: hhttp://finggu.com
Tested up to: 6.6
*/

// Welcome
function howdy_message($translated_text, $text, $domain) {
    $message = finggu_howdy_to_welcome();
    $new_message = str_replace('Howdy', $message, $text);
    return $new_message;
}
add_filter('gettext', 'howdy_message', 10, 3);

function finggu_howdy_to_welcome() {
    $date = date('d-m');
    switch($date) {
        case '01-01':
            $message = 'Happy New Years';
        break;
 
        case '25-12':
            $message = 'Merry Christmas';
        break;
		
		 case '05-09':
            $message = 'Happy Teachers Day';
        break;
		
		 case '14-11':
            $message = 'Happy Childrens Day';
        break;
		
		 case '01-12':
            $message = 'World AIDS Day';
        break; 
		
		case '02-12':
            $message = 'National Pollution Control';
        break;
		
		 case '03-12':
            $message = 'World Day of Handicapped';
        break; 
		
		case '10-12':
            $message = 'Human Rights Day';
        break;
		
		 case '11-12':
            $message = 'International Mountain Day';
        break;
		
		case '14-12':
            $message = 'World Energy Conservation Day';
        break;
		
		 case '16-12':
            $message = 'Vijay Diwas';
        break; 		
		
		case '18-12':
            $message = 'International Migrants Day';
        break;
		 case '20-12':
            $message = 'International Human Solidarity Day';
        break; 
		
		case '23-12':
            $message = 'Farmers Day';
        break;
		
 
        default:
            $message = 'Welcome :)';
    }
    return $message;
}

?>