<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategories;
class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        
        return view('barang',[ 'data' => $data ]);
    }

    public function add()
    {
        return view('create_barang');
    }

    public function create(Request $request) 
    {
        $data = new Barang; 
        $data->name = $request->name;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect("/"); 
    }

    public function edit()
    {
        return ;
    }

    public function update()
    {
        return ;
    }

    public function delete($id)
    {
        $data = Barang::find($id);
        $data->delete();

        return redirect()->back();
    }
}
