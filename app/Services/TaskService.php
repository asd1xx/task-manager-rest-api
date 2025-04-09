<?php

namespace App\Services;

use App\Http\Resources\TaskResource;
use App\Interfaces\TaskServiceInterface;
use App\Models\Task;

class TaskService implements TaskServiceInterface
{
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    public function store(array $data)
    {
        return new TaskResource(Task::create($data));
    }

    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    public function update(Task $task, array $data)
    {
        $task->update($data);
        return new TaskResource($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
    }
}
