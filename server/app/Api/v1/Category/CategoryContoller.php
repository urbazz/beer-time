<?php

namespace App\Api\V1\Category;

use App\Api\V1\Category\Resources\CategoryResource;
use App\Aplication\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Api\V1\Category\Requests\CreateCategoryRequest;
use App\Services\Category\CategoryService;

class CategoryContoller extends Controller
{
    public function __construct(
        private CategoryService $categoryService
    ) {}

    public function getAll(): AnonymousResourceCollection
    {
        return CategoryResource::collection(
            $this->categoryService->getAll()
        );
    }

    public function getById(string $id): AnonymousResourceCollection
    {
        return CategoryResource::collection(
            $this->categoryService->getById($id)
        );
    }

    public function create(CreateCategoryRequest $request): AnonymousResourceCollection
    {
        return CategoryResource::collection(
            $this->categoryService
            ->create($request->validated())
        );
    }

    public function update(
        string $id,
        CreateCategoryRequest $request
    ): AnonymousResourceCollection
    {
        return CategoryResource::collection(
            $this->categoryService->update(
                $id,
                $request->validated()
            )
        );
    }

    public function deleteCategory(string $id): bool|null
    {
        return $this->categoryService->delete($id);
    }
}
