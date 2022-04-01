@extends('template.adminLTE')

@section('title', 'List Profil Mahasiswa')

@section('title-body','List Profil Mahasiswa')

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">List Profil Mahasiswa</li>
  </ol>
@endsection

@section('content')
  <table  class="table table-bordered">
    <tr >
        <th>Nama</th>
        <th>Jurusan</th>
    </tr>
  
    @foreach ($mhs as $detailMhs)
    <tr> <td>{{ $detailMhs['nama'] }} </td><td>  {{ $detailMhs['jurusan'] }}</td></tr>  
    @endforeach
  
  </table>
@endsection
    
