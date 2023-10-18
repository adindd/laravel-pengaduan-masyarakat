@extends('layouts.app')

@section('content')
<style>
.buat
{ 
    font-size: 30px;
    text-decoration: none;
    color: #8CABFF;
    font-family: ;
    text-align: left;
}
body
{
    background-color:;

}


</style>

<body>




@section('content')
<div class="">
    
  <div class="container">
  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">id_petugas</th>
      <th scope="col">nama_petugas</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">telp</th>
      <th scope="col">level</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($petugas as $petugas)
    <tr>

      <td>{{$petugas->id_petugas}}</td>
      <td>{{$petugas->nama_petugas}}</td>
      <td>{{$petugas->username}}</td>
      <td>{{$petugas->password}}</td>
      <td>{{$petugas->telp}}</td>
      <td>{{$petugas->level}}</td>
      
   
    </tr> @endforeach
  </tbody>
</table>
  </div>




  </div>

    
    
</nav>
</body>
</html>
@endsection('content')  