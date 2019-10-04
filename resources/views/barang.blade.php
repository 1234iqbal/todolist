@extends('layouts')

@section('judul')
    <h2> Membuat Todolist </h2>
    <a href="{{ url('create') }}"><button type="button" class="btn btn-primary">Tambah Barang</button></a>
    <hr />
@endsection

@section('isi')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $datas)
    <tr>
      <th scope="row">1</th>
      <td>{{ $datas->name }}</td>
      <td>{{ $datas->jumlah }}</td>
      <!-- tombol -->
      <td width="20px"> 
        <button type="button" class="btn btn-danger">edit</button>
      </td>
      <td width="20px">  
        <form action="{{ url('/delete', $datas->id) }}" method="post">
          {{ csrf_field() }} 
          <input type="hidden" value="delete" name="_method">
          <button type="submit" class="btn btn-danger">Delete</button> 
        </form>
      </td>
      <!-- tombol -->
    </tr>
  @endforeach
  </tbody>
</table>
@endsection