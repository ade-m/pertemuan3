@extends('template.adminLTE')

@section('title', 'List Profil Mahasiswa')

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
    
