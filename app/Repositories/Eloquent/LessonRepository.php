<?php

namespace App\Repositories\Eloquent;

use App\Models\Lesson as Model;
use App\Repositories\LessonRepositoryInterface;

class LessonRepository implements LessonRepositoryInterface
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAllByModuleId(string $moduleId, string $filter = null)
    {
        $lessons = $this->model
                        ->where(function ($query) use ($filter) {
                            if ($filter) {
                                $query->orWhere('name', 'LIKE', "%{$filter}%");
                            }
                        })
                        ->where('module_id', $moduleId)
                        ->get();

        return $lessons->toArray();
    }

    public function findById(string $id): ?object
    {
        return $this->model->find($id);
    }

    public function createByModuleId(string $moduleId, array $data): object
    {
        $data['module_id'] = $moduleId;
        return $this->model->create($data);
    }

    public function update(string $id, array $data): ?object
    {
        if (!$lesson = $this->findById($id)) {
            return null;
        }

        $lesson->update($data);

        return $lesson;
    }

    public function delete(string $id): bool
    {
        if (!$lesson = $this->findById($id))
            return false;

        return $lesson->delete();
    }
}