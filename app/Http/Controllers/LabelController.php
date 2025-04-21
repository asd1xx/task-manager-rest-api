<?php

namespace App\Http\Controllers;

use App\Http\Requests\LabelRequest;
use App\Http\Responses\ApiResponse;
use App\Interfaces\LabelServiceInterface;
use App\Models\Label;

class LabelController extends Controller
{
    protected LabelServiceInterface $service;

    public function __construct(LabelServiceInterface $service)
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
    public function store(LabelRequest $request)
    {
        $data = $request->all();
        return $this->service->store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Label $label)
    {
        return $this->service->show($label);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabelRequest $request, Label $label)
    {
        $data = $request->all();
        return $this->service->update($label, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Label $label)
    {
        $this->service->destroy($label);
        return ApiResponse::sendResponse('deleted');
    }
}
