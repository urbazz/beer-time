<?php

namespace App\Core\Category;
use Illuminate\Database\Eloquent\Model;
use App\Core\Product\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    /**
     * Summary of fillable
     * @var array<string|int>
     */
    protected $fillable = [
        'name'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
