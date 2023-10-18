<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="maul/css/bootstrap.min.css">
   
</head>
<body>
    
<div>

 
<a href="{{ url('registrasi') }}">Registrasi</a> |
<a href="{{ url('login') }}">Login</a> |
<a href="{{ url('table') }}">Table</a> |
<a href="{{ url('logout') }}">Logout</a> |


</div>

    <h1>{{$TextJudul}} </h1>
    
</body>
</html>