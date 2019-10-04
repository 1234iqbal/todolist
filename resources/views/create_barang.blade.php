@extends('layouts')

@section('judul')
<h2>Tambah Barang</h2>
<a href="{{ url('/') }}"><button type="button" class="btn btn-primary">Kembali</button></a>
<hr />
@endsection

@section('isi')
<form action="{{ url('/create') }}" method="post">
  {{ csrf_field() }} 
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Barang</label>
    <input type="text" name="name" class="form-control"  placeholder="Masukan Nama Barang">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori Barang</label>
    <select class="form-control" name="kategories" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah Barang</label>
    <input type="number" name="jumlah" class="form-control" placeholder="Masukan Jumlah Barang">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
