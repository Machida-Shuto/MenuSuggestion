<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    public function ingredients()   
{
    return $this->hasMany(Review::class);  
}

protected $fillable = [
        'name',
        'amount',
        'menu_id',
    ];
    
public function getByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}    

public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at','DESC')->paginate($limit_count);
}
}