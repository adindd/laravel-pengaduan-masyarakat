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
body
{
    background-color: !important;

}


</style>

<body>





@section('content')
<div class="table table-primary">
    <a class="buat" href="{{ ('registrasi ') }} ">Buat</a>
  <div class="container">
  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">nik</th>
      <th scope="col">nama</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">telp</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($masyarakat as $masyarakat)
    <tr>

      <td>{{$masyarakat->nik}}</td>
      <td>{{$masyarakat->nama}}</td>
      <td>{{$masyarakat->username}}</td>
      <td>{{$masyarakat->password}}</td>
      <td>{{$masyarakat->telp}}</td>
      
   
    </tr> @endforeach
  </tbody>
</table>
  </div>




  </div>

    
    
</nav>
</body>
</html>
@endsection('content')