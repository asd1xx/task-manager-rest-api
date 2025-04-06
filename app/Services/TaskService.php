<?php

namespace App\Services;

use App\Interfaces\TaskServiceInterface;
use App\Models\Task;

class TaskService implements TaskServiceInterface
{
    public function index()
    {
        return Task::all();
    }

    public function store(array $data)
    {
        return Task::create($data);
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Task $task, array $data)
    {
        $task->update($data);
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
    }
}
