<?php

namespace App\Http\Controllers\Admins;

use App\Classes\ResponseClass;
use App\Http\Controllers\Controller;
use App\Interfaces\AboutInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    private AboutInterface $aboutInterface;
    public function __construct(AboutInterface $aboutInterface)
    {
        $this->aboutInterface = $aboutInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->aboutInterface->index();

        return view('admins.about.index', [
            'about' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admins.about.create");
    }

    public function store(Request $request)
    {
        $about = $this->aboutInterface->index();

        if ($about) {
            return ResponseClass::rollback('Les informations de la page à propos ont déjà éété remplies');
        }

        $data = [
            'title' => $request->title,
            'story' => $request->story,
        ];

        if ($request->hasFile('file')) {

            $destinationPath = 'db/about/';

            $myFile = $request->file('file');

            $fileName = rand(1111, 9999) . str_replace(' ', '_', $myFile->getClientOriginalName());

            if ($myFile->move($destinationPath, $fileName)) {

                $data['image_path'] = $destinationPath . $fileName;

            } else {

                return back()->with('error', 'Erreur de téléchargement du fichier');
            }
        }

        DB::beginTransaction();

        try {

            $this->aboutInterface->store($data);

            DB::commit();

            return ResponseClass::success();

        } catch (\Throwable $th) {

            return ResponseClass::rollback();
        }
    }


    public function edit()
    {

        $data = $this->aboutInterface->index();

        return view('admins.about.edit', [
            'about' => $data
        ]);
    }


    public function update(Request $request, string $id)
    {
        $about = $this->aboutInterface->index();
        
        $data = [
            'title' => $request->title ? $request->title : $about->title,
            'story' => $request->story ? $request->story : $about->story,
        ];

        // return $data;

        if ($request->hasFile('file')) {

            $destinationPath = 'db/about/';

            $myFile = $request->file('file');

            $fileName = rand(1111, 9999) . str_replace(' ', '_', $myFile->getClientOriginalName());

            if ($myFile->move($destinationPath, $fileName)) {

                $data['image_path'] = $destinationPath . $fileName;

            } else {

                return back()->with('error', 'Erreur de téléchargement du fichier');
            }
        }

        DB::beginTransaction();

        try {

            $this->aboutInterface->update($data, $id);

            DB::commit();

            return ResponseClass::success();

        } catch (\Throwable $th) {

            return ResponseClass::rollback();
        }
    }
}
