<?php
	 class Content
	 {
	 	static $pages=['assets/start.html','assets/about.html','assets/list.html'];
	 	static function getPages($page)
	 	{
	 		return file_get_contents(self::$pages[$page]);
	 	}
	 }
?>