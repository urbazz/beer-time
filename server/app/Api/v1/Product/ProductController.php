<?php

namespace App\Api\V1\Product;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Aplication\Controller;
use App\Api\V1\Product\Resources\ProductResource;
use App\Services\Product\ProductService;
use App\Api\V1\Product\Requests\CreateProductRequest;

class ProductController extends Controller
{
    public function __construct(
        private ProductService $productService
    ) {}

    public function getAll(): AnonymousResourceCollection {
        return ProductResource::collection(
            $this->productService->getAll()
        );
    }

    public function getById(string $id): AnonymousResourceCollection
    {
        return ProductResource::collection(
            $this->productService->getById($id)
        );
    }

    public function getByName(string $name): AnonymousResourceCollection
    {
        return ProductResource::collection(
            $this->productService->getByName($name)
        );
    }

    public function getByBareCode(
        string $barecode
    ): AnonymousResourceCollection
    {
        return ProductResource::collection(
            $this->productService
                ->getByBareCode($barecode)
        );
    }

    public function createProduct(
        CreateProductRequest $request
    ): AnonymousResourceCollection
    {
        return ProductResource::collection(
            $this->productService
                ->create($request->validated())
        );
    }

    public function updateProduct(
        string $id,
        CreateProductRequest $request
    ): AnonymousResourceCollection
    {
        return ProductResource::collection(
            $this->productService->update(
                $id,
                $request->validated()
            )
        );
    }

    public function deleteProduct(string $id): bool|null
    {
        return $this->productService->delete($id);
    }
}
