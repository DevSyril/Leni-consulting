<?php

namespace App\Http\Controllers\Admins;

use App\Classes\ResponseClass;
use App\Http\Controllers\Controller;
use App\Interfaces\FileInterfaces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    private FileInterfaces $fileInterfaces;

    public function __construct(FileInterfaces $fileInterfaces)
    {
        $this->fileInterfaces = $fileInterfaces;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->fileInterfaces->index('banner');

        return view('admins.banners.index', [
            'banners' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admins.banners.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = [
            'file_name' => rand(1111, 9999) . str_replace(' ', '_', $request->file->getClientOriginalName()),
            'file_usage' => $request->usage,
        ];

        $destinationPath = 'db/' . $request->destination .'/';


        $myFile = $request->file('file');

        if ($myFile->move($destinationPath, $file['file_name'])) {
            $file['file_path'] = $destinationPath . $file['file_name'];
        } else {
            return back()->with('error', 'Erreur de téléchargement du fichier');
        }

        DB::beginTransaction();

        try {

            $this->fileInterfaces->store($file);
            DB::commit();

            return ResponseClass::success();

        } catch (\Throwable $th) {

            return ResponseClass::rollback();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->fileInterfaces->destroy($id);
        return ResponseClass::success();
    }
}
