<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Menu $menu, Request $request){
        if(Auth::user()->isLike($menu->id)){
            $user=Auth::user()->id;
            $like = Like::where("menu_id",$menu->id)->where("user_id",$user)->first();
            $like->delete();
        }
        else{
            $like = new Like();
            $like->menu_id = $menu->id;
            $like->user_id=Auth::user()->id;
            $like->save();
        }
        return redirect("menus/" .$request->menu_id);
        
        
        
        
    }
    
    public function destroy(Menu $menu, Request $request){
        $user=Auth::user()->id;
        $like = Like::where("menu_id",$menu->id)->where("user_id",$user)->first();
        $like->delete();
      return redirect("/menus/" . $menu->id);
    }
    
    
    
    
}