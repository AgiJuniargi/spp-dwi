<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print | Pembayaran</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
    <h3 class="text-center" style="color: #353935; margin-top:50px;">Table Pembayaran</h3>
    <!-- Table -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">ID Pembayaran</th>
                        <th scope="col" class="text-white">Nama Petugas</th>
                        <th scope="col" class="text-white">NISN</th>
                        <th scope="col" class="text-white">Tanggal Bayar</th>
                        <th scope="col" class="text-white">Bulan Dibayar</th>
                        <th scope="col" class="text-white">Tahun Dibayar</th>
                        <th scope="col" class="text-white">Nominal SPP</th>
                        <th scope="col" class="text-white">Jumlah Bayar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from pembayaran as a LEFT JOIN petugas as b ON a.id_petugas = b.id LEFT JOIN spp as c ON a.id_spp = c.id_spp;");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['id_pembayaran']; ?></td>
                            <td><?php echo $d['nama_petugas']; ?></td>
                            <td><?php echo $d['nisn']; ?></td>
                            <td><?php echo $d['tgl_bayar']; ?></td>
                            <td><?php echo $d['bulan_dibayar']; ?></td>
                            <td><?php echo $d['tahun_dibayar']; ?></td>
                            <td><?php echo $d['nominal']; ?></td>
                            <td><?php echo $d['jumlah_bayar']; ?></td>
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