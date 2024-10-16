<?php

namespace App\Api\V1\Producer;

use App\Api\V1\Producer\Resources\ProducerResource;
use App\Aplication\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Services\Producer\ProducerService;
use App\Api\V1\Producer\Requests\CreateProducerRequest;


class ProducerController extends Controller
{
    public function __construct(
        private ProducerService $producerService
    ) {}

    public function getAll(): AnonymousResourceCollection
    {
        return ProducerResource::collection(
            $this->producerService->getAll()
        );
    }

    public function getById(string $id): AnonymousResourceCollection
    {
        return ProducerResource::collection(
            $this->producerService->getById($id)
        );
    }

    public function getByName(string $name): AnonymousResourceCollection
    {
        return ProducerResource::collection(
            $this->producerService->getByName($name)
        );
    }

    public function create(
        CreateProducerRequest $createProducerRequest
        ): AnonymousResourceCollection
    {
        return ProducerResource::collection(
            $this->producerService->create(
                $createProducerRequest->validated()
            )
        );
    }

    public function update(
        string $id,
        CreateProducerRequest $createProducerRequest
    ): AnonymousResourceCollection
    {
        return ProducerResource::collection(
            $this->producerService->update(
            $id,
            $createProducerRequest->validated()
            )
        );
    }

    public function delete(string $id): bool|null
    {
        return $this->producerService->delete($id);
    }
}
