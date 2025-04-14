<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Responses\ApiResponse;
use App\Interfaces\TaskServiceInterface;
use App\Models\Task;

class TaskController extends Controller
{
    protected TaskServiceInterface $service;

    public function __construct(TaskServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->service->index();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $data = $request->all();
        return $this->service->store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return $this->service->show($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $data = $request->all();
        return $this->service->update($task, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $this->service->destroy($task);
        return ApiResponse::sendResponse('deleted');
    }
}
