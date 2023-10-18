<!DOCTYPE HTML>
<html>
    <head>
        <title>Registrasi Petugas</title>
        <link rel="stylesheet" href="dinda/bs/bs/css/bootstrap.min.css">
    </head>
       <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

body {
    margin: 0;
    padding: 0;
    background: #8CABFF ;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: 'Poppins' sans-serif;
}

.input {
    position: fixed;
    top: 50%;
    left: 610px;
    transform: translate(-30%, -50%);
    background: white;
    padding: 50px;
    width: 270px;
    box-shadow: 0px 0px 25px 10px black;
    border-radius: 15px;
}

.input h1 {
    text-align: center;
    color: black;
    font-size: 30px;
    font-family: sans-serif;
    letter-spacing: 3px;
    padding-top: 0;
    margin-top: -20px;
}

.box-input {
    display: flex;
    justify-content: space-between;
    margin: 10px;
    border-bottom: 2px solid black;
    padding: 8px 0;
}

.box-input i{
    font-size: 23px;
    color: black;
    padding: 5px 0;
}

.box-input input {
    width: 85%;
    padding: 5px 0;
    background: none;
    border: none;
    outline: none;
    color: black;
    font-size: 18px;
}

.box-input input::placeholder {
    color: black;
}

.btn-input .box-input input:hover {
    background: rgba(10, 10, 10, s 0.5);
}

.btn-input {
    margin-left: 10px;
    margin-bottom: 20px;
    background: none;
    border: 1px solid black;
    width: 92.5%;
    padding: 10px;
    color: black;
    font-size: 18px;
    letter-spacing: 3px;
    cursor: pointer;
    transition: all .2s;
    border-radius: 10px;
}

.btn-input:hover {
    background: lightgreen;
}

.bottom {
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: -20px;
}

.bottom p {
    color: black;
    font-size: 15px;
    text-decoration: none;
}

.bottom a {
    color: #4477CE;
    font-size: 15px;
    text-decoration: none;
}

.bottom a:hover {
    text-decoration: und;
}
    </style>
    <body>
    <div class="input">
  
        <h1>REGISTER</h1>
        <form method="POST" action="registrasipetugas">
          @method("POST")
          @csrf
        <div class="box-input">
            <i class="fa fa-solid fa-address-card"></i>
            <input name="id_petugas" type="text" placeholder="Id petugas">
        </div>
        <div class="box-input">
            <i class="fa fa-solid fa-user"></i>
            <input name="nama_petugas" type="text" placeholder="Nama">
        </div>
        <div class="box-input">
            <i class="fa fa-solid fa-at"></i>
            <input name="username" type="text" placeholder="Username">
        </div>
        <div class="box-input">
            <i class="fa fa-solid fa-phone"></i>
            <input name="telp" type="text" placeholder="Telepon">
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password">
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <input name="level" type="text" placeholder="Level">
        </div>
        <button type="submit" name="register" class="btn-input">Register</button>
        <div class="bottom">
            <center>
            <p>Sudah punya akun?
                <a href="login">Login disini</a>
            </p>
            </center>
        </form>
        </div>
    </div>
</body>
</html> 