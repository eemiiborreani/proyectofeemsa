<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../User/estiloLoginRegister.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
   <div class="container">
    <div class="navbar">
      <img src="../../img/logo.png" class="logo"><a id="femsa">Feemsa</a>
      <nav>
        <ul>
        <li><a id="home" href="../../index.php" class="fa fa-home"></a></li>
        
        <li><a id="user" href="../../User/usuario.php" class="fa fa-user"></a></li>
        

      </ul>
      </nav>
      
    </div>
    <main>

    <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                <h3>Do you already have an account?</h3>
                    <p>Log in to enter the page</p>
                    <button id="btn__iniciar-sesion">Log in</button>
                </div>
                <div class="caja__trasera-register">
                <h3>Do not you have an account yet?</h3>
                    <p>Register to log in</p>
                    <button id="btn__registrarse">Register</button>
                </div>
            </div>


            <div class="contenedor__login-register">

                <form action="../BackEnd/loginAdmin_be.php" method="POST"  class="formulario__login">
                    <h2>Log in</h2>
                    <input type="text" placeholder="Nombre de Usuario" name="username">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Log in</button>
                </form>

                <form action="../BackEnd/registerAdmin_be.php" method="POST" class="formulario__register">
                    <h2>Register</h2>
                    <input type="text" name="username" placeholder="Nombre de Usuario"  required>
                    <input type="email" name="email"  placeholder="Correo Electronico"  required>
                    <input type="password" id="password1" name="password_1" placeholder="Contraseña"    required>
                    <input type="password" name="password_2" placeholder="Repetir contraseña"   required>
                    <br><br>
                    <button>Register</button>
                </div>
                </form>
            </div>
        </div>

    </main>
    </div>
    <script src="../../apis/scriptLoginRegister.js"></script>
      </div>
    </div>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/logo (2).png" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>ABOUT US</h2>
                <p>We are a company that seeks the best for the client</p>
                <p>PASSION FOR EXCELLENCE IN EVERY DETAIL</p>
            </div>
            <div class="box">
                <h2>FOLLOW US</h2>
                <div class="red-social">                  
                    <a href="https://es-la.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/feemsa.oficial/?hl=es" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/feemsaoficial?lang=es" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Feemsa</b> - All rights reserved.</small>
        </div>
    </footer>
    <a name="ancla-1"></a>
  </body>
</html>