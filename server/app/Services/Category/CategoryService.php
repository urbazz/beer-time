<?php

namespace App\Services\Category;

use App\Core\Category\Repository\CategoryRepository;
use Illuminate\Support\Collection;

class CategoryService
{
    public function __construct(
      private CategoryRepository $categoryRepository
    ) {}

    public function getAll(): Collection
    {
        return $this->categoryRepository->getAll();
    }

    public function getById(string $id): Collection
    {
        return $this->categoryRepository->getById($id);
    }

    public function getByName(string $name): Collection
    {
        return $this->categoryRepository->getByName($name);
    }

    public function create($data)
    {
        return $this->categoryRepository->create($data);
    }

    public function update($id, $data): Collection
    {
        return $this->categoryRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->categoryRepository->delete($id);
    }
}
