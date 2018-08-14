<?php
use d_minification\MinifyCSS;
use d_minification\MinifyJS;
use d_minification\MinifyHTML;

class d_minification {
	private $type;
			
	public function __construct($type) {
		$this->type = strtolower($type);
	}

	public function minify($content, $options = array()) {
		if ($this->type == 'css') {	
			return MinifyCSS::minify($content, $options);
		}
		
		if ($this->type == 'js') {
			return MinifyJS::minify($content, $options);
		}
		
		if ($this->type == 'html') {
			return MinifyHTML::minify($content, $options);
		}
		
		return $content;
	}
}
?>