<?php

namespace App\Repositories\Eloquent;

use App\Models\Module as Model;
use App\Repositories\ModuleRepositoryInterface;

class ModuleRepository implements ModuleRepositoryInterface
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAllByCourseId(string $courseId, string $filter = null)
    {
        $modules = $this->model
                        ->where(function ($query) use ($filter) {
                            if ($filter) {
                                $query->orWhere('name', 'LIKE', "%{$filter}%");
                            }
                        })
                        ->where('course_id', $courseId)
                        ->get();

        return $modules->toArray();
    }

    public function findById(string $id): ?object
    {
        return $this->model->find($id);
    }

    public function createByCourseId(string $courseId, array $data): object
    {
        $data['course_id'] = $courseId;
        return $this->model->create($data);
    }

    public function update(string $id, array $data): ?object
    {
        if (!$module = $this->findById($id)) {
            return null;
        }

        $module->update($data);

        return $module;
    }

    public function delete(string $id): bool
    {
        if (!$module = $this->findById($id))
            return false;

        return $module->delete();
    }
}