<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey ='id';
    protected $fillable = ['name'];
    public $timestamps = false;


    public function fetch_category()
    {

		$Category = Category::all();
		return $Category;
    }

    public static function getMenu()
    {
      return Category::select('categories.name','menu_item.priority','menu_item.categories_id','menus.title')
     ->join('menu_item','menu_item.categories_id','categories.id')
      ->join('menus','menus.id','menu_item.menus_id')
      ->where('menus.id',1)
      ->orderBy('menu_item.priority','ASC')
      ->get();
    }
}
