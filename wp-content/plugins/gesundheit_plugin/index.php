<?php
/*
* Plugin Name: Gesundheit Plugin 
* Plugin URI: http://http://localhost/git/portfolio/
* Description: This is a contact form for Gesundheit based on HTML5, CSS, JS and PHP
* Version: 2.1.5
* Author: Sofus Lambach
* Author URI: http://http://localhost/git/portfolio/
* License: GPL2
*/

function contact_form()
{
    $content = '';
    $content .= '<div class="kontakt-form">';
  
    
     $content .= '<h5 class="overtekst">Navn</h5>';
    $content .= '<input type="text" id="navn" name="navn" placeholder="Navn...">';
     	 $content .= '<h5 class="overtekst">Email</h5>';
    $content .= '<input type="email" id="email" name="email" placeholder="Email...">';
     $content .= '<h5 class="overtekst">Emne</h5>';
   $content .= '<textarea id="emne" name="Emne" rows="1" cols="1" placeholder="Emne..."></textarea>';
    $content .= '<h5 class="overtekst">Besked</h5>';
   $content .= '<textarea id="besked" name="besked" rows="1" cols="1" placeholder="Besked..."></textarea>';

    $content .= '<section class="form">';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="Send besked >" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';

    $content .= '</form>';
    
    $content .= '</section>';
    
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the supervision form
 add_shortcode('show_contactform','contact_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_contact_form');



    function register_styles_and_scripts_for_contact_form() 
    {
        
        wp_enqueue_style('CustomFontAdobe','https://use.typekit.net/mab2mni.css');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('gesundheit_plugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('gesundheit_plugin/js/script.js'), array('jquery'), null, true);
    }
