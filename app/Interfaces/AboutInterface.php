<?php

namespace App\Interfaces;

interface AboutInterface
{
    public function index();
    public function store(array $data);
    public function update(array $data, string $id);
    public function show(string $id);
    public function destroy(string $id);
}
