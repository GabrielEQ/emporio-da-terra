<?php
class d_cdn {
	private $cdn;
			
	public function __construct($cdn) {
		$class = 'd_cdn\\' . $cdn;

		if (class_exists($class)) {
			$this->cdn = new $class();
		} else {
			throw new \Exception('Error: Could not load CDN ' . $this->cdn . '!');
		}
	}
}
?>