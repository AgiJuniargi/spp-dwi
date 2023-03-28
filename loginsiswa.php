<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Siswa</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="col-md-6 mx-auto" style="margin-top:10%; position:relative;">
    <div class="card text-white mb-3 rounded-3" style="background-color: #0096FF;">
      <h3 class="text-center" style="margin-top: 18px;">- L O G I N -</h3>

      <hr style="background-color: white;">
      <div class="col-md-8 mx-auto">
        <form action="loginsiswacontroller.php" method="POST">
          <div class="mb-3">
            <label class="form-label" for="nisn">Username</label>
            <input name="nisn" type="text" id="nisn" class="form-control form-control" placeholder="Masukkan username" />
          </div>

          <div class="mb-3">
            <label class="form-label" for="nis">Password</label>
            <input name="nis" type="password" id="nis" class="form-control form-control" placeholder="Masukkan password" />
          </div>

          <center>
            <button class="btn btn-light" type="submit" style="margin-top: 13px; margin-bottom:30px; color: #0096FF;"><b><i class="fa fa-sign-in"></i> Masuk</b></button>
          </center>
        </form>
      </div>
    </div>
  </div>
</body>

</html>