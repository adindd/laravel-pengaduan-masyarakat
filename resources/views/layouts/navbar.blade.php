<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset("dinda/bs/bs/css/bootstrap.min.css")}}>
  <title>Document</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg" style="background-color:#8CABFF;">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
      <script>
        function confirmLogout() {
          var confirmLogout -= confirm("anda yakin ingin logout?");
          if (confirmLogout) {
            window.location.href = "/logout";
          }
        }
        </script>
        <a class = "nav-link" href ={{url("/logout")}}><button class= "btn btn-outline-success" onclick="confirmLogout()">Logout</button></a>

  </div>
    </div>
  </div>
</nav>
</body>
</html>