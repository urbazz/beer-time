<?php

namespace App\Services\Producer;

use Illuminate\Support\Collection;
use App\Core\Producer\Repository\ProducerRepository;

class ProducerService
{
    public function __construct(
        private ProducerRepository $producerRepository
    ) {}
    public function getAll(): Collection
    {
        return $this->producerRepository->getAll();
    }

    public function getById(string $id): Collection
    {
        return $this->producerRepository->getById($id);
    }

    public function getByName(string $name): Collection
    {
        return $this->producerRepository->getByName($name);
    }

    public function create(array $data)
    {
        return $this->producerRepository->create($data);
    }

    public function update(
        string $id,
        array $data
        ): Collection
    {
        return $this->producerRepository->update(
            $id,
            $data
        );
    }

    public function delete(string $id)
    {
        return $this->producerRepository->delete($id);
    }
}
