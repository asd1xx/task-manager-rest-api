<?php

namespace App\Services;

use App\Interfaces\TaskStatusServiceInterface;
use App\Models\TaskStatus;

class TaskStatusService implements TaskStatusServiceInterface
{
    public function index()
    {
        return TaskStatus::all();
    }

    public function store(array $data)
    {
        return TaskStatus::create($data);
    }

    public function show(TaskStatus $taskStatus)
    {
        return $taskStatus;
    }

    public function update(TaskStatus $taskStatus, array $data)
    {
        $taskStatus->update($data);
        return $taskStatus;
    }

    public function destroy(TaskStatus $taskStatus)
    {
        $taskStatus->delete();
        return response()->json(['message' => 'deleted']);
    }
}
