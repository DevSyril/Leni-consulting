<?php

namespace App\Http\Controllers\Admins;

use App\Classes\ResponseClass;
use App\Http\Controllers\Controller;
use App\Interfaces\ServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    private ServiceInterface $serviceInterface;

    public function __construct(ServiceInterface $serviceInterface)
    {
        $this->serviceInterface = $serviceInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->serviceInterface->index();

        return view('admins.services.index', [
            'services' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admins.services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        $destinationPath = 'db/services/';

        $myFile = $request->file('file');
            
        $fileName = rand(1111, 9999) . str_replace(' ', '_', $myFile->getClientOriginalName());

        if ($myFile->move($destinationPath, $fileName)) {

            $data['image_path'] = $destinationPath . $fileName;

        } else {

            return back()->with('error', 'Erreur de téléchargement du fichier');
        }

        DB::beginTransaction();

        try {

            $this->serviceInterface->store($data);

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
        $this->serviceInterface->destroy($id);
        return ResponseClass::success();
    }
}
