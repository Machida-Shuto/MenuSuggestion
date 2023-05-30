<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    public function reviews()   
{
    return $this->hasMany(Review::class);  
}

protected $fillable = [
        'name',
        'orverview',
        'vote_average',
    ];
    
public function getByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}    

public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at','DESC')->paginate($limit_count);
}

 public function likes()
    {
        return $this->belongsToMany(User::class,'likes','menu_id','user_id')->withTimestamps();
    }
}
