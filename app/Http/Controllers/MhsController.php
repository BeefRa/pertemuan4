<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index()
    {
        $data['mhs'] = mhs::all();
        return view('mhs.index', $data);
    }

    public function create()
    {
        // Method to show create form
    }

    public function store(Request $request)
    {
        // Method to store new data
    }

    public function show($id)
    {
        // Method to show single record
    }

    public function edit($id)
    {
        // Method to show edit form
    }

    public function update(Request $request, $id)
    {
        // Method to update data
    }

    public function destroy($nrp)
    {
        $mhs = mhs::where('nrp', $nrp)->first();

        if ($mhs) {
            $mhs->delete();
            return redirect()->route('mhs.index');
        }
    }
}