<?php

namespace App\Core\Producer;

use Illuminate\Database\Eloquent\Model;
use App\Core\Product\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producer extends Model
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
