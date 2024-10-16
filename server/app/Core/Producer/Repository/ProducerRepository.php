<?php

namespace App\Core\Producer\Repository;

use Illuminate\Support\Collection;
use App\Core\Producer\Producer;

class ProducerRepository implements ProducerRepositoryInterface
{
    public function getAll(): Collection
    {
        return Producer::all();
    }

    public function getById($id): Collection
    {
        return Producer::findOrFail($id);
    }

    public function getByName(string $name): Collection
    {
        return Producer::where('name', $name)
            ->get();
    }

    public function create(array $data)
    {
        return Producer::create($data);
    }

    public function update($id, array $data): Collection
    {
        Producer::where('id', $id)
            ->update($data);

        return Producer::findOrFail($id);
    }

    public function delete($id): bool|null
    {
        return Producer::where('id', $id)
            ->delete();
    }
}
