<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Interfaces\FileInterfaces;
use Illuminate\Http\Request;

class PartnersController extends Controller
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
        $data = $this->fileInterfaces->index('partner');

        return view('admins.partners.index', [
            'partners' => $data
        ]);

    }

    public function create()
    {
        return view("admins.partners.create");
    }

}
