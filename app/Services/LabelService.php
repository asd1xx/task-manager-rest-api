<?php

namespace App\Services;

use App\Http\Resources\LabelResource;
use App\Interfaces\LabelServiceInterface;
use App\Models\Label;

class LabelService implements LabelServiceInterface
{
    public function index()
    {
        return LabelResource::collection(Label::all());
    }

    public function store(array $data)
    {
        return new LabelResource(Label::create($data));
    }

    public function show(Label $label)
    {
        return new LabelResource($label);
    }

    public function update(Label $label, array $data)
    {
        $label->update($data);
        return new LabelResource($label);
    }

    public function destroy(Label $label)
    {
        $task->delete();
    }
}
