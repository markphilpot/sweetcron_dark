<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Friendfeed_com {
	
	//sample class for friendfeed

	function pre_db($item, $original)
	{
		return $item;
	}
	
	function pre_display($item)
	{
	    $big_pic = $item->item_data['enclosures'][0]->link;
	    //check if is image
	    $format = substr($big_pic, -4);
	    if ($format == '.jpg' || $format == '.gif' || $format == '.png') {
	    	$item->item_data['image'] = $big_pic;
	    }
	    
	    //remove small icons as image
	    if (substr($item->item_data['image'], 0, 42) == 'http://friendfeed.com/static/images/icons/') {
	    	$item->item_data['image'] = '';	
	    }
	    
	    //Modify extraneous content
	    $title_via = "(via FriendFeed)";
	    if(strpos($item->item_title, $title_via) !== false)
	    	$item->item_title = substr($item->item_title, 0, strlen($item->item_title) - strlen($title_via));

	    $content_middle = "Comment -\nLike";
	    $pos = strpos($item->item_content, $content_middle);
	    if($pos !== false)
	    	$item->item_content = substr($item->item_content, $pos+strlen($content_middle));
	    
		return $item;
	}


}
?>