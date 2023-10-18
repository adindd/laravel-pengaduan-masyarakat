@extends('layouts.app')

@section('content')
<style>
.buat
{ 
    font-size: 30px;
    text-decoration: none;
    color: black;
    font-family: ;
    text-align: left;
}
h1{
  font-size: 30px;
    text-decoration: none;
    color: black;
    font-family:;
    text-align: center;

}
body
{
    background-color: ;

}


</style>

<body>




@section('content')
<div class="">
    <a class="buat" href="{{ ('isi_laporan') }} ">+</a>
    <h1>Hasil Laporan</h1>
  <div class="container">
  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td>{{$pengaduan->foto}}</td>
      <td>{{$pengaduan->status}}</td>
      <td>
        
        <a href="hapus_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
        <a href="detail_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-info">Detail</button></a>
        <a href="update_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-success">Update</button></a>
        <a></a>
      </td>
   
    </tr> @endforeach
  </tbody>
</table>
  <div class="container">


  <a href="{{ url ('home') }} " class="btn btn-outline-success">Kembali</a>

  </div>

    
    
</nav>
</body>
</html>
@endsection('content')