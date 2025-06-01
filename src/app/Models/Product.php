<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    /*protected $guarded = array('id');*/
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];

    public function season()
{

    return $this->belongsToMany(Season::class, 'product_season','product_id','season_id');
//return $this->belongsToMany(Season::class, 'product_season', 'product_id', 'season_id');
}
}
