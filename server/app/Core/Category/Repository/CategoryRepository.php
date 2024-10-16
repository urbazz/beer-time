<?php

namespace App\Core\Category\Repository;

use Illuminate\Support\Collection;
use App\Core\Category\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll(): Collection
    {
        return Category::with('products')
            ->get();
    }

    public function getById($id): Collection
    {
        return Category::findOrFail($id);
    }

    public function getByName(string $name): Collection
    {
        return Category::where('name', $name)
            ->get();
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update($id, array $data): Collection
    {
        Category::where('id', $id)
            ->update($data);

        return Category::findOrFail($id);
    }

    public function delete($id): bool|null
    {
        return Category::where('id', $id)
            ->delete();
    }
}
