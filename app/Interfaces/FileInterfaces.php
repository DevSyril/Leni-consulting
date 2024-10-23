<?php

namespace App\Interfaces;

interface FileInterfaces
{
    public function index(string $usage);
    public function store(array $data);
    public function update(array $data, string $id);
    public function show(string $id);
    public function destroy(string $id);
}
