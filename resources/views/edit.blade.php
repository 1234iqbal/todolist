@extends('layouts')

@section('judul')
<h2>Edit Barang</h2>
<a href="{{ url('/') }}"><button type="button" class="btn btn-primary">Kembali</button></a>
<hr />
@endsection

@section('isi')
  <form action="{{ url('/edit', $data->id) }}" method="post">
    {{ csrf_field() }} 
    <input type="hidden" value="put" name="_method">

    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Barang</label>
    <input type="text" name="name" value="{{ $data->name }}" class="form-control"  placeholder="Masukan Nama Barang">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Kategori Barang</label>
      <select class="form-control" name="kategories" id="exampleFormControlSelect1">
        @foreach($kategories as $kategori)
            <option>{{ $kategori->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Jumlah Barang</label>
      <input type="number" name="jumlah" value="{{ $data->jumlah }}" class="form-control" placeholder="Masukan Jumlah Barang">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection