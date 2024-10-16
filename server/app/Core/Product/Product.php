<?php

namespace App\Core\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Core\Category\Category;
use App\Core\Producer\Producer;

class Product extends Model
{
    /**
     *
     * @var array<int|string>
     */
    protected $fillable = [
        'category_id',
        'producer_id',
        'barecode',
        'name',
        'description',
        'image',
        'qr_code',
        'price'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function producer(): BelongsTo
    {
        return $this->belongsTo(Producer::class);
    }
}
