<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu=Menu::inRandomOrder()->first();
        return view('menus/index')->with(['menu' => $menu]);  
    }
    
    public function show(Menu $menu)
    {
        return view('menus/show')->with(['menu' => $menu]);
    }
    
     public function store(Request $request, Review $review)
    {
        $input = $request['review'];
        $review->user_id = Auth::id();
        $review->fill($input)->save();
        return redirect('/menus/' . $review->id);
    }
    
    public function create(Menu $menu)
    {
        return view('reviews/create')->with(['menu' => $menu]);
    }
    
}
?>