<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Petugas</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="col-md-6 mx-auto" style="margin-top:10%; position:relative;">
    <div class="card text-white bg-dark mb-3">
      <h3 class="text-center" style="margin-top: 18px;">- L O G I N -</h3>

      <hr style="background-color: white;">
      <div class="col-md-8 mx-auto">
        <form action="loginpetugascontroller.php" method="POST">
          <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input name="username" type="text" id="username" class="form-control form-control" placeholder="Masukkan username" />
          </div>

          <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input name="password" type="password" id="password" class="form-control form-control" placeholder="Masukkan password" />
          </div>

          <center>
            <button class="btn btn-light" type="submit" style="margin-top: 13px; margin-bottom:30px;"><b><i class="fa fa-sign-in"></i> Masuk</b></button>
          </center>
        </form>
      </div>
    </div>
  </div>
</body>

</html>