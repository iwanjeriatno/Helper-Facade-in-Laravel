<?php  

namespace App\Classes;

use App\Models\Menu;

/**
* 
*/
class Settings
{
	
	public function menu()
	{
		$menu = Menu::all();

		return $menu;
	}
}

?>