<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSeason extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product_season'; // テーブル名がデフォルトと異なる場合に指定
    /*protected $guarded = array('id');*/

    protected $fillable = [
        'product_id',
        'season_id',
    ];

    /*public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function scopeProductSearch($query, $product_id)
    {
        if (!empty($product_id)) {
            $query->where('product_id', $product_id);
        }
    }
    public function scopeSeasonSearch($query, $product_id)
    {
        if (!empty($season_id)) {
            $query->where('season_id', $season_id);
        }
    }
    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('content', 'like', '%' . $keyword . '%');
        }
    }*/
}
