<?php

namespace App\Core\Product\Repository;

use Illuminate\Support\Collection;
use App\Core\Product\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAll(): Collection
    {
        return Product::all();
    }

    public function getById($id): Collection
    {
        return Product::findOrFail($id);
    }

    public function getByName(string $name): Collection
    {
        return Product::where('name', $name)
            ->get();
    }

    public function getByBareCode(string $barecode): Collection
    {
        return Product::where('barecode', $barecode)
            ->get();
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function update($id, array $data): Collection
    {
        Product::where('id', $id)
            ->update($data);

        return Product::findOrFail($id);
    }

    public function delete($id): bool|null
    {
        return Product::where('id', $id)
            ->delete();
    }
}
