<?php

namespace App\Core\Product\Repository;

interface ProductRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function getByName(string $name);
    public function getByBareCode(string $name);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
