<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print | SPP</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
    <h3 class="text-center" style="color: #353935; margin-top:50px;">Table SPP</h3>

    <!-- Table SPP -->
    <div class="card col-md-12 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">ID SPP</th>
                        <th scope="col" class="text-white">Tahun</th>
                        <th scope="col" class="text-white">Nominal</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from spp");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['id_spp']?></td>
                            <td><?php echo $d['tahun']; ?></td>
                            <td><?php echo $d['nominal']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table -->

<script>
    window.print();
</script>
</body>

</html>