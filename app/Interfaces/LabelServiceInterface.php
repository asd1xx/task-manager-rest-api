<?php

namespace App\Interfaces;

use App\Models\Label;

interface LabelServiceInterface
{
    public function index();
    public function store(array $data);
    public function show(Label $task);
    public function update(Label $task, array $data);
    public function destroy(Label $task);
}
