<?php

namespace App\Repositories;

use App\Interfaces\AboutInterface;
use App\Models\About;

class AboutRepository implements AboutInterface
{
    public function index()
    {
        return About::first();
    }
    public function store(array $data)
    {
        return About::create($data);
    }
    public function update(array $data, string $id)
    {
        return About::findOrFail($id)->update($data);
    }
    public function show(string $id)
    {
        return About::findOrFail($id);
    }
    public function destroy(string $id)
    {
        return About::destroy($id);
    }
}
