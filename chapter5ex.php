<?php
	function html_img($url,$alt=null,$width=null,$height = null)
	{

		#<img src= '',alt='',width='',height=''/>'
		$html = '<img src ="' . $url . '"';
		if (isset($alt)){
			$html .= 'alt="' . $alt . '"';
		}
		if (isset($width)) {
			$html .= '$width="' . $width . '"';
		}
		if (isset($height)) {
			$html .= '$height="' . $height . '"';
		}
		$html .= '/>';
		return $html
	}
?>