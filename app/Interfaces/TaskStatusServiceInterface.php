<?php

namespace App\Interfaces;

use App\Models\TaskStatus;

interface TaskStatusServiceInterface
{
    public function index();
    public function store(array $data);
    public function show(TaskStatus $taskStatus);
    public function update(TaskStatus $taskStatus, array $data);
    public function destroy(TaskStatus $taskStatus);
}
