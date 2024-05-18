<div id="formContent">

  <picture>
    <img src="src/user-login-button.svg" id="icon" alt="Login Icon" />
  </picture>

  <?php if ($_GET['error'] ?? 0 == 1) echo "Error"; ?>
  <form action="/login/login" method="post">
    <input type="text" name="username" placeholder="user">
    <input type="text" name="password" placeholder="password">
    <input type="submit" value="Log In">
  </form>

</div>


<style>
  html {
    background-color: #56baed;
  }

  body {
    font-family: "Poppins", sans-serif;
    display: flex;
    flex-direction: column;
    margin: 0px;
    align-items: center;
    margin-top: 20vh;
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
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 1em;
    box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    border-radius: 5px 5px 5px 5px;
    margin-top: 1em;
    margin-bottom: 2em;
  }

  input[type=submit]:hover {
    background-color: #39ace7;
  }

  input[type=submit]:active {
    transform: scale(0.95);
  }

  input[type=text] {
    background-color: #f3f3f3;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 1em;
    margin-top: 1em;
    width: 85%;
    border-radius: 5px 5px 5px 5px;
  }

  input[type=text]:focus {
    background-color: #fff;
    padding: 14px 32px;
    border-bottom: 2px solid #5fbae9;
  }

  input[type=text]:placeholder {
    color: #cccccc;
  }

  *:focus {
    outline: none;
  }

  #icon {
    max-width: 40%;
    margin-top: 2em;
  }
</style>