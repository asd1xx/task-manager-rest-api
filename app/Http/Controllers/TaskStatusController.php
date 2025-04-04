<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStatusRequest;
use App\Interfaces\TaskStatusServiceInterface;
use App\Models\TaskStatus;

class TaskStatusController extends Controller
{
    protected TaskStatusServiceInterface $service;

    public function __construct(TaskStatusServiceInterface $service)
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
    public function store(TaskStatusRequest $request)
    {
        $data = $request->all();
        return $this->service->store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskStatus $taskStatus)
    {
        return $this->service->show($taskStatus);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskStatusRequest $request, TaskStatus $taskStatus)
    {
        $data = $request->all();
        return $this->service->update($taskStatus, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskStatus)
    {
        $this->service->destroy($taskStatus);
        return response()->json(['message' => 'deleted']);
    }
}
