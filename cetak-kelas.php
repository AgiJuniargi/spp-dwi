<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print | Kelas</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
    <h3 class="text-center" style="color: #353935; margin-top:50px;">Table Kelas</h3>
    <!-- Table Kelas -->
    <div class="card col-md-12 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">Nama Kelas</th>
                        <th scope="col" class="text-white">Kompetensi Keahlian</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from kelas");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_kelas']; ?></td>
                            <td><?php echo $d['kompetensi_keahlian']; ?></td>
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