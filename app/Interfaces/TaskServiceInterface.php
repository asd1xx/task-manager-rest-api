<?php

namespace App\Interfaces;

use App\Models\Task;

interface TaskServiceInterface
{
    public function index();
    public function store(array $data);
    public function show(Task $task);
    public function update(Task $task, array $data);
    public function destroy(Task $task);
}
