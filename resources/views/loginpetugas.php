<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
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
          <h1>Login Petugas</h1>
            <form action="login" method="POST">
            @method("POST")
            @csrf
            
            <div class="box-input">
             <i class="fa fa-solid fa-envelope"></i>
             <input name="username" type="username" placeholder="Username">
         </div>
         <div class="box-input">
             <i class="fas fa-lock"></i>
             <input name="password" type="password" placeholder="Password">
         </div>
         <a link href = "{{('table_masyarakat')}}"><button type="submit" name="login" class="btn-input">Login</button>
         <div class="bottom p">
             <center>
             <p>Belum punya akun?</p> <a link href="{{('registrasi')}}">Register disini</a>
             </center>
         </form>

         </div>
     </div>
 </body>
 </html>