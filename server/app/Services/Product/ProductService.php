<?php

namespace App\Services\Product;

use Illuminate\Support\Collection;
use App\Core\Product\Repository\ProductRepository;

class ProductService
{
    public function __construct(
        private ProductRepository $productRepository
    ) {}

    public function getAll(): Collection
    {
        return $this->productRepository->getAll();
    }

    public function getById(string $id): Collection
    {
        return $this->productRepository->getById($id);
    }

    public function getByName(string $name): Collection
    {
        return $this->productRepository->getByName($name);
    }

    public function getByBareCode(string $barecode): Collection
    {
        return $this->productRepository
            ->getByBareCode($barecode);
    }

    public function create(array $data)
    {
        return $this->productRepository->create($data);
    }

    public function update(
        string $id,
        array $data
    ): Collection
    {
        return $this->productRepository->update(
            $id,
            $data
        );
    }

    public function delete(string $id): bool|null
    {
        return $this->productRepository->delete($id);
    }

}
