<!DOCTYPE html>
<html lang="es">
<?php include 'views/includes/config_head.layout.php'; ?>

<body>
  <div id="formContent">
    <?php
    if ($error ?? false == true) {
      echo "<div class=\"alert alert-danger\" role=\"alert\">
      Usuario o contraseña incorrectos.
      </div>";
    }
    ?>
    <picture>
      <img src="/src/login.svg" id="icon" alt="Login Icon" />
    </picture>

    <form action="/login/login" method="post">
      <input type="text" name="username" placeholder="user">
      <input type="password" name="password" placeholder="password">
      <input type="submit" value="Log In">
    </form>

  </div>
</body>

</html>


<style>
  body {
    display: flex;
    flex-direction: column;
    margin: 0px;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: floralwhite;
  }

  #formContent {
    border-radius: 15px;
    background: #fff;
    padding: 0px;
    width: 100%;
    max-width: 450px;
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    text-align: center;
  }

  input[type=submit] {
    background-color: teal;
    border: none;
    color: white;
    padding: 10px 60px;
    text-align: center;
    text-decoration: none;
    font-weight: bolder;
    text-transform: uppercase;
    font-size: 1em;
    box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    border-radius: 5px;
    margin-top: 1em;
    margin-bottom: 2em;
  }

  input[type=submit]:hover {
    background-color: #39ace7;
  }

  input[type=submit]:active {
    transform: scale(0.95);
  }

  input[type=text],
  input[type=password] {
    background-color: #f3f3f3;
    border: 1px solid #ced4da;
    color: #0d0d0d;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    font-size: 1em;
    margin-top: 0.5em;
    width: 85%;
    border-radius: 5px 5px 5px 5px;
  }

  input[type=text]:focus {
    border: none;
    border-bottom: 2px solid #5fbae9;
  }

  input[type=text]:placeholder {
    color: #cccccc;
  }

  *:focus {
    outline: none;
  }

  #icon {
    width: 80px;
    margin-top: 2em;
  }

  @media (max-width: 768px) {
    body {
      background: floralwhite;
    }

    #formContent {
      width: 100%;
      box-shadow: none;
      background-color: floralwhite;
    }
  }
</style>