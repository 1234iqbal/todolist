<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{

    public function index()
    {
        $data = Barang::all();

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $data = new Barang;
        $data->name = $request->name;
        $data->kategories = $request->kategories;
        $data->jumlah = $request->jumlah;
        $data->save();

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->name = $request->name;
        $data->kategories = $request->kategories;
        $data->jumlah = $request->jumlah;
        $data->save();

        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Barang::find($id);
        $data->delete();

        return response()->json($data);
    }

}
