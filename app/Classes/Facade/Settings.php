<?php 

namespace App\Classes\Facade;

use Illuminate\Support\Facades\Facade;


/**
* 
*/
class Settings extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		// memanggil class App\Classes\Settings
		return 'settings';
	}
}
 ?>