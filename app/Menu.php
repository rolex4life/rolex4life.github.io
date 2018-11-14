<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey ='id';
    protected $fillable = ['title'];
    public $timestamps = false;


    public function fetch_menu()
    {

		$menu = Menu::all();
		return $menu;
    }
}