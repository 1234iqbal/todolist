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
        $kategories = Kategories::all();

        return view('create_barang',['kategories' => $kategories]);
    }

    public function create(Request $request) 
    {
        $data = new Barang; 
        $data->name = $request->name;
        $data->kategories = $request->kategories;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect("/"); 
    }

    public function edit($id)
    {
        $data = Barang::find($id);
        $kategories = Kategories::all();

        return view('edit',['data'=>$data , 'kategories'=>$kategories ]);
    }

    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->name = $request->name;
        $data->kategories = $request->kategories;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $data = Barang::find($id);
        $data->delete();

        return redirect()->back();
    }
}
