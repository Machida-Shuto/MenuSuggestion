<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    public function category()
{
    return $this->belongsTo(Menu::class);
}

protected $fillable = [
        'menu_id',
        'body',
        'review',
    ];


}
