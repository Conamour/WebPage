<?php
	 class Menu
	 {
	 	static $items = ['<li class="active"><a>Start</a></li>',
							'<li class="active"><a>About</a></li>',
							'<li class="active"><a>Top List</a></li>'];
		static $reference_items = ['<li><a href="index.php?page=1">Start</a></li>',
									'<li><a href="index.php?page=2">About</a></li>',
									'<li><a href="index.php?page=3">Top List</a></li>'];
		static $begin = '<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-head">
			<a class="navbar-brand" href="index.html">Cup Souls</a>
				<ul  class="nav navbar-nav">
		</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav">';
		static $end = '		</ul>
						</div>
	</div>';
								
	 	static public function renderMenu($num)
	 	{
	 		switch($num)
	 		{
	 			case 1:
	 				return self::$begin.self::$items[0].self::$reference_items[1].self::$reference_items[2].self::$end;
	 				break;
	 			case 2:
	 				return self::$begin.self::$reference_items[0].self::$items[1].self::$reference_items[2].self::$end;
	 				break;
	 			case 3:
	 				return self::$begin.self::$reference_items[0].self::$reference_items[1].self::$items[2].self::$end;
	 				break;
	 		}
	 	}
	 }
?>