<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="leirasbazis.png" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Bejelentkezés - LeírásBázis</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="auth-content">

    <form action="login.php" method="post">
      <h2 class="form-title">Bejelentkezés</h2>

      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

      <div>
        <label>Felhasználónév</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
      </div>
      <div>
        <label>Jelszó</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn btn-big">Bejelentkezés</button>
      </div>
      <p>Még nem regisztráltál? <a href="<?php echo BASE_URL . '/register.php' ?>">Regisztrálj!</a></p>
    </form>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/scripts.js"></script>

</body>

</html>