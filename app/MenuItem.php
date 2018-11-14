<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_item';
    protected $primaryKey ='id';
    protected $fillable = ['categories_id','menus_id','priority'];
    public $timestamps = false;

    public function fetch_menuitem()
    {
       
       

// SELECT menu_item.id ,categories.id as cat_id,categories.name,menus.id as menus_id,menus.title FROM menu_item INNER JOIN categories ON categories.id = menu_item.categories_id INNER JOIN menus ON menus.id = menus_id


    $menuitem =MenuItem::select(DB::raw('menu_item.id, menu_item.priority, categories.id as cat_id,categories.name,menus.id as menus_id,menus.title'))
       ->join('categories','categories.id' ,'=',  'menu_item.categories_id')
        ->join('menus','menus.id' ,'=',  'menu_item.menus_id')
         ->orderBy('priority')
        ->get();

       return $menuitem;


       // 
		

		// $menuitem = MenuItem::all();
    }
}
