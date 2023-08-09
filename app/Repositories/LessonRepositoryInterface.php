<?php 

namespace App\Repositories;

interface LessonRepositoryInterface
{
    public function getAllByModuleId(string $moduleId, string $filter = null);
    public function findById(string $id): ?object;
    public function createByModuleId(string $moduleId, array $data): object;
    public function update(string $id, array $data): ?object;
    public function delete(string $id): bool;
}