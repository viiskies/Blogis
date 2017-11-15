<?php 
namespace uFrame;
use uFrame\Database;
use uFrame\Log;

class Menu
{
	public static function show() {

		$log = new Log();
		$db = new Database($log);
		$menu = $db->select("SELECT * FROM pages");

		echo "<li class=''><a href='/" . CONFIG['site_path'] . "/blog'>Blog</a></li>";
		foreach ($menu as $item) {
			echo "<li><a class='' href='/" . CONFIG['site_path'] . "/page/show/". $item['title'] . "'>" . $item['title'] . "</a></li>";
		}
	}


}