<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu();
		$menu->menu = 'Documentation';
		$menu->link = 'https://laravel.com/docs';
		$menu->save();  

		$menu = new Menu();
		$menu->menu = 'Laracasts';
		$menu->link = 'https://laracasts.com';
		$menu->save(); 		

		$menu = new Menu();
		$menu->menu = 'News';
		$menu->link = 'https://laravel-news.com';
		$menu->save();        
    	
    	$menu = new Menu();
		$menu->menu = 'Forge';
		$menu->link = 'https://forge.laravel.com';
		$menu->save();  
	
		$menu = new Menu();
		$menu->menu = 'GitHub';
		$menu->link = 'https://github.com/laravel/laravel';
		$menu->save();  
    }
}
