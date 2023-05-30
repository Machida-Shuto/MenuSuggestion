<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Review $review)
    {
        $input = $request['review'];
        $review->user_id = Auth::id();
        $review->menu_id = 
        $review->fill($input)->save();
        return redirect('/menus/{menu}/review' . $review->id);
    }
    
    public function create()
{
    return view('/menus/{menu}/review');
}
}
?>