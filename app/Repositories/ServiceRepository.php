<?php

namespace App\Repositories;

use App\Interfaces\ServiceInterface;
use App\Models\Service;

class ServiceRepository implements ServiceInterface
{
    public function index()
    {
        return Service::all();
    }
    public function store(array $data)
    {
        return Service::create($data);
    }
    public function update(array $data, string $id)
    {
        return Service::findOrFail($id)->update($data);
    }
    public function show(string $id)
    {
        return Service::findOrFail($id);
    }
    public function destroy(string $id)
    {
        return Service::destroy($id);
    }
}
