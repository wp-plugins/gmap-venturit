<?php 
/**
 * 
 * @package GMap - Ventruit
 * @author Venturit Inc,
 * @version 1.0
 */
/*
Plugin Name: GMap - Venturit
Plugin URI: http://www.venturit.org
Description: GMaps with short code example: Place in a post or a page: [gmap a="505 East Michigan Avenue,Lansing, MI 48912-1148" w="500" h="400"]. a = the complete address, h = height and w = width.
Author: Venturit
Version: 1.0
Author URI:  http://www.venturit.com
Credits : Inspired by Google Map, Plugin by Shaon at dub3 dot intelisoftbd dot com
*/
//{gmap|address|width|height}
function googleMap($atts,$content = null){
extract(shortcode_atts(array(
   "a" => '',
   "w" => '',
   "h" => ''), $atts));

return '<iframe width="'.$w.'" height="'.$h.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q='.$a.'&amp;ie=UTF8&amp;hq=&amp;hnear='.$a.'&amp;z=11&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q='.$a.'&amp;ie=UTF8&amp;hq=&amp;hnear='.$a.'&amp;z=11" style="color:#0000FF;text-align:left">Enlarge</a></small>';

}
add_shortcode('gmap', 'googleMap');