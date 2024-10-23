<?php

namespace App\Repositories;

use App\Interfaces\FileInterfaces;
use App\Models\AppFiles;

class FileRepository implements FileInterfaces
{
    public function index($usage) {
        return AppFiles::where('file_usage', $usage)->get();
    }
    public function store(array $data)
    {
        return AppFiles::create($data);
    }
    public function update(array $data, string $id)
    {
        return AppFiles::findOrFail($id)->update($data);
    }
    public function show(string $id)
    {
        return AppFiles::findOrFail($id);
    }
    public function destroy(string $id)
    {
        return AppFiles::destroy($id);
    }
}
