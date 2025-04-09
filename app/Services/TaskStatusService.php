<?php

namespace App\Services;

use App\Http\Resources\TaskStatusResource;
use App\Interfaces\TaskStatusServiceInterface;
use App\Models\TaskStatus;

class TaskStatusService implements TaskStatusServiceInterface
{
    public function index()
    {
        return TaskStatusResource::collection(TaskStatus::all());
    }

    public function store(array $data)
    {
        return new TaskStatusResource(TaskStatus::create($data));
    }

    public function show(TaskStatus $taskStatus)
    {
        return new TaskStatusResource($taskStatus);
    }

    public function update(TaskStatus $taskStatus, array $data)
    {
        $taskStatus->update($data);
        return new TaskStatusResource($taskStatus);
    }

    public function destroy(TaskStatus $taskStatus)
    {
        $taskStatus->delete();
    }
}
